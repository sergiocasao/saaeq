<?php

namespace App\Http\Controllers\Admin\Photos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Photos\AssociatePhotoRequest;
use App\Http\Requests\Admin\Photos\DisassociatePhotoRequest;
// use App\Http\Requests\Admin\Photos\SortPhotoRequest;
use App\Http\Requests\Admin\Photos\CreatePhotoRequest;
use App\Http\Requests\Admin\Photos\UpdatePhotoRequest;

use App\Photo;

use Response;

class ManagePhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexView()
    {
        $data = [
            "photos"    => Photo::orderBy("updated_at" ,"DESC")->GetWithTranslations()->get()
        ];
        return view('admin.media_manager.index',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "photos"    => Photo::orderBy("updated_at" ,"DESC")->GetWithTranslations()->get()
        ];

        return Response::json([
            'data' => $data
        ]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePhotoRequest $request)
    {
        $input = $request->all();

        $newImage = Photo::createImageFile($input["file_input"]);

        if (!$newImage) {
            return Response::json([
                'error' => ["La imagen no pudo ser cargada"]
            ], 422);
        }

        if (Photo::existsPhoto($newImage)) {
            return Response::json([
                'error' => ["La imagen fue cargada anteriomente"]
            ], 422);
        }

        $photo = Photo::create([
            "filename"  => $newImage,
            "type"      => $input["file_input"]->getMimeType(),
        ]);

        if (!$photo) {

            Storage::delete($file_path);
            Storage::delete(str_replace(Photo::STORAGE_PATH, Photo::THUMBNAILS_STORAGE_PATH, $file_path)  );
            return Response::json([
                'error' => ["La imagen no pudo ser salvada"]
            ], 422);
        }

        return Response::json([ // todo bien
            'data'=> $photo->load("languages"),
            'message' => ["La imagen fue creado correctamente."],
            'success' => true
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        // dd($photo);
        if (!$photo) {
            return Response::json([
                'error' => ["La imagen que desea modificar no existe"]
            ], 422);
        }

        $photo = $photo;
        $photo->src = $photo->getImageThumbnailUrl();
        return $photo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        $input = $request->all();

        foreach ($this->languages as $language) {
            $photo->updateTranslationByIso($language->iso6391,[
                'title'         =>  $input["title"][$language->iso6391],
                'alt'           =>  $input["alt"][$language->iso6391],
                'description'   =>  $input["description"][$language->iso6391],
            ]);
        }

        return Response::json([ // todo bien
            'message' => ["La imagen exitosamente actualizada."],
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        if (!$photo->isDeletable()) {
            return Response::json([
                'error' => ["La imagen que desea borrar se encuetra en uso"]
            ], 422);
        }

        if (!$photo->languages()->detach()) {
            return Response::json([
                'error' => ["La imagen pudo ser borrada"]
            ], 422);
        }

        $photo->deleteImageFiles();

        if (!$photo->delete()) {
            return Response::json([
                'error' => ["La imagen pudo ser borrada"]
            ], 422);
        }

        return Response::json([ // todo bien
            'message' => ["La imagen se borrado exitosamente."],
            'success' => true
        ]);
    }

    public function associate(AssociatePhotoRequest $request,Photo $photo)
    {
        $input = $request->all();

        $photoable_class = Photo::$associable_models[$input["photoable_type"]];
        $photoable = $photoable_class::find($input["photoable_id"]);

        $use_order_class = [
            "use"   => $input["use"],
            "order" => $input["order"] == "null" ? null : $input["order"],
            "class" => $input["class"],
        ];

        if ($photoable->hasPhotoTo($use_order_class) ) {
            return Response::json([
                'error' => ["Ya cuenta con una imagen asignada previamente"]
            ], 422);
        }

        if ($photoable->cantUsePhotoFor($photo,$use_order_class["use"]) ) {
            return Response::json([
                'error' => ["Ya cuenta con esa imagen asignada previamente"]
            ], 422);
        }

        if (!$photoable->associateImage($photo,$use_order_class)) {
            return Response::json([
                'error' => ["La imagen no pudo ser asignada"]
            ], 422);
        }

        return Response::json([ // todo bien
            'message' => ["La imagen asigno exitosamente."],
            'success' => true
        ]);
    }


    public function disassociate(DisassociatePhotoRequest $request, Photo $photo)
    {

        $input = $request->all();
        $photoable_class = Photo::$associable_models[$input["photoable_type"]];
        $photoable = $photoable_class::find($input["photoable_id"]);
        $use_order_class = [
            "use"   => $input["use"],
            "order" => $input["order"] == "null" ? null : $input["order"],
            "class" => $input["class"],
        ];

        if (!$photoable->hasPhotoTo($use_order_class) ) {
            return Response::json([
                'error' => ["No cuenta con una imagen asignada"]
            ], 422);
        }

        if (!$photoable->disassociateImage($photo,$use_order_class)) {
            return Response::json([
                'error' => ["La imagen no pudo ser desasignada"]
            ], 422);
        }

        return Response::json([ // todo bien
            'message' => ["Imagen desasignada exitosamente."],
            'success' => true
        ]);
    }


    public function sort(SortPhotoRequest $request)
    {

        // $input = $request->all();
        // $photoable_class = Photo::$associable_models[$input["photoable_type"]];
        // $photoable = $photoable_class::find($input["photoable_id"]);
        //
        // $photos =  $photoable->photos()->orderBy("pivot_order","ASC")->wherePivot('use', $input["use"])->get();
        //
        // $max_order = $photos->map(function($photo){
        //                     return $photo->pivot->order;
        //                 })->max();
        //
        // $order_array = $photos->keyBy(function($photo){
        //                     return $photo->pivot->order;
        //                 })->map(function($photo){
        //                     return $photo->id;
        //                 })->toArray();
        //
        // $translados = [true,false];
        // foreach ( $translados as $transladar) {
        //     foreach ($input["photos"] as $photo_new_order => $photo_id) {
        //         if (in_array($photo_id, $order_array)) { // si la foto esta associada
        //             $photo_original_order = array_search($photo_id,$order_array);
        //
        //             if ($transladar ) {
        //                 $new_orders[] = [
        //                     "order"     => $photo_new_order,
        //                     "photo_id"  => $photo_id
        //                 ];
        //             }
        //
        //             $order = $transladar ? $photo_original_order + 1 + 2*$max_order : $photo_new_order;
        //
        //             $photoable->photos()
        //                 ->wherePivot('use', $input["use"])
        //                 ->updateExistingPivot($photo_id, ["order" => $order ]);
        //         }
        //     }
        // }
        //
        // return Response::json([ // todo bien
        //     "data"    => $new_orders ,
        //     'message' => ["Orden correctamente guardado"],
        //     'success' => true
        // ]);
    }

}
