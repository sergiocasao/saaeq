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
    ];

    protected $casts = [
        'content'                       => 'string',
        'video'                         => 'array',
        'processing_learn_type_id'      => 'integer',
        'perception_learn_type_id'      => 'integer',
        'representation_learn_type_id'  => 'integer',
        'comprenhention_learn_type_id'  => 'integer',
        'default'                       => 'boolean',
    ];

    protected $attributes = [
        'video' => '',
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function scopeDefault($query)
    {
        return $query->where('default', 1);
    }

}
