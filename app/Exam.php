<?php

namespace App;

use App\LearnType;
use App\Models\Test\Question;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'exams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label',
        'theme_id',
    ];

    protected $casts = [
        'label'         => 'string',
        'theme_id'      => 'integer',
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function scopeTestExam($query)
    {
        return $query->where('theme_id', null);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('qualification')->withTimestamps();
    }
}
