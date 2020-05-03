<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class product
 * @package App\Models
 * @version May 2, 2020, 12:38 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection bookings
 * @property \Illuminate\Database\Eloquent\Collection orderdetails
 * @property \App\Models\Productrating productrating
 * @property string name
 * @property number price
 * @property string image
 */
class product extends Model
{

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'price',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price' => 'float',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'productid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderdetails()
    {
        return $this->hasMany(\App\Models\Orderdetail::class, 'productid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function productrating()
    {
        return $this->hasOne(\App\Models\Productrating::class);
    }
}
