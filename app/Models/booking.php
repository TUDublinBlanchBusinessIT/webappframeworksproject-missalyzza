<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class booking
 * @package App\Models
 * @version April 14, 2020, 7:54 pm UTC
 *
 * @property \App\Models\Product productid
 * @property \Illuminate\Database\Eloquent\Collection orderdetails
 * @property string firstname
 * @property string surname
 * @property string bookingdate
 * @property time bookingtime
 * @property integer productid
 * @property number fee
 */
class booking extends Model
{

    public $table = 'booking';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'bookingdate',
        'bookingtime',
        'productid',
        'fee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'bookingdate' => 'date',
        'productid' => 'integer',
        'fee' => 'float'
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderdetails()
    {
        return $this->hasMany(\App\Models\Orderdetail::class, 'bookingid');
    }
}
