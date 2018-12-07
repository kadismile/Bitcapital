<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Sentinel;


class User extends \Cartalyst\Sentinel\Users\EloquentUser
{
    use Notifiable;
    protected $fillable = [
        'avatar', 'email', 'first_name','last_name', 'phone', 'username', 'sex',
        'country','password','usercategory_id', 'ref_id', 'referer_id', 'commission_balance',
        'total_balance', 'profit_balance', 'deposit_balance', 'raw_password'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];



    public function usercategories(){
        return $this->hasOne('App\Usercategory');
    }

    public function wallets(){
        return $this->hasMany('App\Wallet');
    }

    public static function ByEmail($email){
        return static::whereEmail($email)->first();
    }
}