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
        $attributes['slug'] = $attributes['name'];
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

}
