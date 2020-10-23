<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /* get relation */
    public $with = ['getServices'];
    /* propety masive */

    public $fillable = [
        'name', 'image', 'identification_number', 'email', 'phone', 'observations'
    ];

    /* get services owner cliente */
    public function getServices()
    {
        return $this->hasMany(Service::class,'client');
    }
}
