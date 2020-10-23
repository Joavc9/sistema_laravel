<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * get relations
     *
     * @var array
     */
    public $with = ['getTypeService'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name', 'image', 'service_type', 'client', 'start_date', 'end_date', 'observations'
    ];

     /**
     * get getTypeService 
     *
     */
    public function getTypeService()
    {
        return $this->belongsTo(TypeService::class, 'service_type');
    }
}
