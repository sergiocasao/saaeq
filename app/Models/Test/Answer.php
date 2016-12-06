<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answers','learn_type_id', 'question_id'
    ];

    protected $casts = [
        'answers'       => 'string',
        'learn_type_id' => 'integer',
    ];

    public function learnType()
    {
        return $this->belongsTo(App\LearnType::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
