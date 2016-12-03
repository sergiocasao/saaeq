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
        'activation_code',
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
        'password', 'remember_token','activation_code'
    ];

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
        return route("client::showActivateAccountForm", [ 'user_mail' => cltvoMailEncode($this->email), 'ac' => base64_encode($this->activation_code) ] );
    }

    public static function generateActivationCode($digits = 5)
    {
        return str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
    }

}
