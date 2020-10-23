<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * get relations
     *
     * @var array
     */
    public $with = ['getServices'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name', 'image', 'identification_number', 'email', 'phone', 'observations'
    ];
    
    /**
     * get services
     *
     */
    public function getServices()
    {
        return $this->hasMany(Service::class,'client');
    }
}
