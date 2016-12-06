<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
    ];

    protected $casts = [
        'question'  => 'string',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

}
