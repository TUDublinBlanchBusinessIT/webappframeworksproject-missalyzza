<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class orderdetails
 * @package App\Models
 * @version April 14, 2020, 7:54 pm UTC
 *
 * @property \App\Models\Product productid
 * @property \App\Models\Booking bookingid
 * @property integer productid
 * @property integer bookingid
 * @property number total
 */
class orderdetails extends Model
{

    public $table = 'orderdetails';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'productid',
        'bookingid',
        'total'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'productid' => 'integer',
        'bookingid' => 'integer',
        'total' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function productid()
    {
        return $this->belongsTo(\App\Models\Product::class, 'productid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bookingid()
    {
        return $this->belongsTo(\App\Models\Booking::class, 'bookingid');
    }
}
