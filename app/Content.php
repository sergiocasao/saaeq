<?php

namespace App;

use App\LearnType;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contents';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'video',
        'processing_learn_type_id',
        'perception_learn_type_id',
        'representation_learn_type_id',
        'comprenhention_learn_type_id',
        'default',
        'theme_id',
    ];

    protected $casts = [
        'content'                       => 'string',
        'video'                         => 'string',
        'processing_learn_type_id'      => 'integer',
        'perception_learn_type_id'      => 'integer',
        'representation_learn_type_id'  => 'integer',
        'comprenhention_learn_type_id'  => 'integer',
        'default'                       => 'boolean',
        'theme_id'                      => 'integer',
    ];

    protected $attributes = [
        'video' => '',
        'content' => '',
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function scopeDefault($query)
    {
        return $query->where('default', 1);
    }

    public static function getRandomVideo($theme_slug)
    {
        // Get random files and pick one.
        $folder_path = public_path('videos/'.$theme_slug); // in my test case it's under /public folder

        $files = preg_grep('~\.(mp4)$~', scandir($folder_path));

        $randomFile = $files[array_rand($files)]; // if 5 files found, random int between 0 and 4

        // // Display it
        $file = 'http://saaeq.dev/videos/'.$theme_slug.'/'.rawurlencode($randomFile);

        return $file;
    }

    public static function getVideo($theme_slug, $video_slug)
    {
        $file = 'http://'.env('URL_SITE').'/videos/'.$theme_slug.'/'.$video_slug.'.mp4';

        return $file;
    }

    public function scopeLearnTypeId($query, $type, $id)
    {
        return $query->where($type, $id);
    }

    public function scopeContentForUser($query, User $user)
    {
        $res = $query
            ->orderBy('processing_learn_type_id', $user->processing_learn_type_id )
            ->orderBy('perception_learn_type_id', $user->perception_learn_type_id )
            ->orderBy('representation_learn_type_id', $user->representation_learn_type_id )
            ->orderBy('comprenhention_learn_type_id', $user->comprenhention_learn_type_id )
            ;

        return $res;
    }

}
