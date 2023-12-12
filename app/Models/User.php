<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;


    protected $fillable = [
        'username',
        'full_name',
        'email',
        'name',
        'password',
    ];



    public function trainors() {
        return $this->hasMany(Trainors::class);
    }

    public function trainees() {
        return $this->hasMany(Trainees::class);
    }

    public static function list()
    {
        $users = User::orderByRaw('full_name')->get();
        $list = [];
        foreach ($users as $user) {
            $list[$user->id] = $user->full_name;
        }

        return $list;
    }
}
