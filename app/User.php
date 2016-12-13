<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Traits\User\PermissionRoleTrait;

class User extends Authenticatable
{
    use SoftDeletes;
    use PermissionRoleTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'active',
        'token',
        'email',
        'password',
        'slug',
        'processing_learn_type_id',
        'perception_learn_type_id',
        'representation_learn_type_id',
        'comprenhention_learn_type_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','token'
    ];

    public static function create(array $attributes = [])
    {
        $attributes['slug'] = str_slug($attributes['name']);
        $attributes['token'] = str_random(30);

        return parent::create($attributes);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * Route notifications for the mail channel.
     *
     * @return string
     */
    public function routeNotificationForMail()
    {
        return $this->email;
    }

    public function getMailActivationAcountUrl()
    {
        return route('client::register.activateAccount', [ 'user_mail' => cltvoMailEncode($this->email), 'token' => $this->token ] );
    }

    public function answers()
    {
        return $this->belongsToMany(Models\Test\Answer::class);
    }

    public function exams()
    {
        return $this->belongsToMany(Exam::class)->withPivot('qualification')->withTimestamps();
    }

    public function processing_learn_type()
    {
        return $this->belongsTo(LearnType::class, 'processing_learn_type_id');
    }

    public function perception_learn_type()
    {
        return $this->belongsTo(LearnType::class, 'perception_learn_type_id');
    }

    public function representation_learn_type()
    {
        return $this->belongsTo(LearnType::class, 'representation_learn_type_id');
    }

    public function comprenhention_learn_type()
    {
        return $this->belongsTo(LearnType::class, 'comprenhention_learn_type_id');
    }

}
