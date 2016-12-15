<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\UniqueSlugTrait;
use App\Models\Traits\PhotoableTrait;
use App\Models\Traits\PublishableTrait;
use App\Signature;

class Theme extends Model
{
    use UniqueSlugTrait;
    use PhotoableTrait;
    use PublishableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'themes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label','slug','description','signature_id','photo'
    ];

    protected $casts = [
        'label'         => 'string',
        'slug'          => 'string',
        'description'   => 'string',
        'photo'         => 'string',
        'signature_id'  => 'integer',
    ];

    public function signature()
    {
        return $this->belongsTo(Signature::class);
    }

    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function exam()
    {
        return $this->hasOne(Exam::class);
    }

    public function hasDefaultContent()
    {
        return $this->contents()->default()->get()->first() ? true : false;
    }

    public static function getQuestion($slug, $order)
    {
        return static::getObjectBySlug($slug)->exam->questions()->orderQuestion($order)->get()->first();
    }

}
