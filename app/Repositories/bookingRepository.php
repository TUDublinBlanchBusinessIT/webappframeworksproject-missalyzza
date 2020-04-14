<?php

namespace App\Repositories;

use App\Models\booking;
use App\Repositories\BaseRepository;

/**
 * Class bookingRepository
 * @package App\Repositories
 * @version April 14, 2020, 7:54 pm UTC
*/

class bookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'bookingdate',
        'bookingtime',
        'productid',
        'fee'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return booking::class;
    }
}
