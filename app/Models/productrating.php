<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class productrating
 * @package App\Models
 * @version May 2, 2020, 12:37 pm UTC
 *
 * @property \App\Models\Product id
 * @property integer rating
 * @property string comment
 * @property integer courtid
 */
class productrating extends Model
{

    public $table = 'productrating';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'rating',
        'comment',
        'courtid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rating' => 'integer',
        'comment' => 'string',
        'courtid' => 'integer'
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
    public function id()
    {
        return $this->belongsTo(\App\Models\Product::class, 'id');
    }
}
