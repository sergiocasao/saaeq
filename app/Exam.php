<?php

namespace App;

use App\LearnType;

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
        'slug',
        'theme_id',
    ];

    protected $casts = [
        'label'         => 'string',
        'slug'          => 'string',
        'theme_id'      => 'integer',
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
