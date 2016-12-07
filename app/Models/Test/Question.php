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

    public function getNextOrPrevious($order = 'asc')
    {
        $previous = null;
        foreach ( static::orderBy('id', $order)->get() as $question)
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

}
