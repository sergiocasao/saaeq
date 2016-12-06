<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearnType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'learn_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','slug','description'
    ];

    protected $casts = [
        'name'          => 'string',
        'slug'          => 'string',
        'description'   => 'string',
    ];

    public function answers()
    {
        return $this->hasMany(Models\Test\Answer::class);
    }

}
