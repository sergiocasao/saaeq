<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

use App\LearnType;

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
        'answer','learn_type_id', 'question_id', 'correct'
    ];

    protected $casts = [
        'answer'        => 'string',
        'learn_type_id' => 'integer',
        'correct'       => 'boolean',
    ];

    public function learnType()
    {
        return $this->belongsTo(App\LearnType::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function users()
    {
        return $this->belongsToMany(App\User::class);
    }

    public function scopeLearnType($query, $slug)
    {
        $learn_type = LearnType::getModelBySlug($slug)->get()->first();
        return $query->where('learn_type_id', $learn_type->id);
    }

    public function scopeCorrect($query)
    {
        return $query->where('correct', true);
    }

}
