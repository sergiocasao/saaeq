<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publish extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'publishes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug','label', 'is_publish'
    ];


    protected $casts = [
        'slug'          => 'string',
        'label'         => 'string',
        'is_publish'    => 'boolean'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "created_at",
        "updated_at",
        "deleted_at"
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        "date"
    ];

    /**
     * Get the administrator flag for the user.
     *
     * @return bool
     */
    public function getDateAttribute()
    {
        if ($this->pivot) {
            return $this->pivot->date;
        }

        return null;

    }


    public function scopeOnlyPublished($query)
    {
        return $query->where(['is_publish' => true ]);
    }

    public static function getPublish()
    {
        return static::onlyPublished()->get()->first();
    }

    public function scopeNotPublished($query)
    {
        return $query->where(['is_publish' => false ]);
    }

    public static function getNotPublish()
    {
        return static::notPublished()->get()->first();
    }
}
