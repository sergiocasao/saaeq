<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

use App\Exam;

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
        'question', 'order', 'exam_id'
    ];

    protected $casts = [
        'question'  => 'string',
        'order'     => 'integer',
        'exam_id'   => 'integer',
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function getNextOrPrevious($order = 'asc')
    {
        $exam = Exam::testExam()->get()->first();
        $previous = null;
        foreach ( $exam->questions()->orderBy('id', $order)->get() as $question)
        {
            if(!empty($previous) && $question->id == $this->id)
            {
                // Yay! Our current record  is the 'next' record.
                return $previous;
            }
            $previous = $question;
        }
        return null;
    }

    public function next()
    {
        return $this->getNextOrPrevious('desc');
    }

    public function previous()
    {
        return $this->getNextOrPrevious('asc');
    }

    public function scopeOrderQuestion($query, $order)
    {
        return $query->where('order', $order);
    }

    public static function getCorrectAnswer($question_id)
    {
        return static::find($question_id)->answers()->correct()->get()->first();
    }

}
