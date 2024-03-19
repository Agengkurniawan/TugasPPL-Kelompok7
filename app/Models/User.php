<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['username', 'password', 'name'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
