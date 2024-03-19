<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street', 'city', 'province', 'country', 'postal_code'];

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
