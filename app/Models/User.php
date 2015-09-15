<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getName()
    {
        if($this->first_name && $this->last_name){
            return "{{ $first_name }} {{ $last_name }}";
        }

        if($this->first_name){
            return "{{ $first_name }}";
        }

        return null;
    }

    public function getNameOrUsername()
    {
        return $this->getName() ?: $this->name;
    }

    public function getFirstNameOrUsername()
    {
        return $this->first_name ?: $this->name;
    }
}