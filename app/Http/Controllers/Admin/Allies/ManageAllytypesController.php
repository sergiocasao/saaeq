<?php

namespace App\Http\Controllers\Admin\Allies;

use Illuminate\Http\Request;

use App\Http\Requests\Admin\Allies\Allytypes\CreateAllytypeRequest;
use App\Http\Requests\Admin\Allies\Allytypes\UpdateAllytypeRequest;
use App\Http\Requests\Admin\Allies\Allytypes\UpdateAllytypeOrderRequest;

use App\Http\Controllers\Controller;

use App\Models\Allies\Allytype;

use Response;

class ManageAllytypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Allytype::orderBy("order","asc")->with("languages")->GetWithTranslations()->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexView()
    {
        return view('admin.allies.allytypes.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAllytypeRequest $request)
    {
        $input = $request->all();

        $allytype = Allytype::create([
            "order" => null
        ]);

        if (!$allytype) {
            return Response::json([
                'error' => ["El tipo de aliado no pudo ser creado"]
            ], 422);
        }


        foreach ($this->languages as $language) {
            $name = $input["label"][$language->iso6391];
            $allytype->updateTranslationByIso($language->iso6391,[
                'label'=> $name,
                'slug' => Allytype::generateUniqueSlug($name)
            ]);
        }

        return Response::json([ // todo bien
            'data'=> Allytype::GetWithTranslations()->with("languages")->find($allytype->id),
            'message' => ["El tipo de aliado fue creado correctamente"],
            'success' => true
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAllytypeRequest $request,Allytype $allytype)
    {
        $input = $request->all();

        // $allytype->order = $input["order"];

        // if (!$allytype->save()) {
        //     return Response::json([
        //         'error' => ["El tipo de aliado no pudo ser actualizado"]
        //     ], 422);
        // }

        foreach ($this->languages as $language) {
            $name = $input["label"][$language->iso6391];
            $allytype->updateTranslationByIso($language->iso6391,[
                'label' => $name,
                'slug'  => $allytype->updateUniqueSlug($name,$language->iso6391),
            ]);
        }

        return Response::json([ // todo bien
            'data'=> $allytype,
            'message' => ["El tipo de aliado fue correctmente actualizado"],
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allytype $allytype)
    {
        if (!$allytype->isDeletable()) {
            return Response::json([
                'error' => ["El tipo de aliado que desea borrar tiene aliados asociados"]
            ], 422);
        }

        if (!$allytype->languages()->detach()) {
            return Response::json([
                'error' => ["El tipo de aliado no pudo ser borrado"]
            ], 422);
        }

        if (!$allytype->delete()) {
            return Response::json([
                'error' => ["El tipo de aliado no pudo ser borrado"]
            ], 422);
        }

        return Response::json([ // todo bien
            'message' => ["El tipo de aliado fue borrado correctmente"],
            'success' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sort(UpdateAllytypeOrderRequest $request)
    {
        if (!$allytype->isDeletable()) {
            return Response::json([
                'error' => ["El tipo de aliado que desea borrar tiene aliados asociados"]
            ], 422);
        }

        if (!$allytype->languages()->detach()) {
            return Response::json([
                'error' => ["El tipo de aliado no pudo ser borrado"]
            ], 422);
        }

        if (!$allytype->delete()) {
            return Response::json([
                'error' => ["El tipo de aliado no pudo ser borrado"]
            ], 422);
        }

        return Response::json([ // todo bien
            'message' => ["El tipo de aliado fue borrado correctmente"],
            'success' => true
        ]);
    }


}
