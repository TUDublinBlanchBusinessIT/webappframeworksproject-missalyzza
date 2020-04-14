<?php

namespace App\Repositories;

use App\Models\orderdetails;
use App\Repositories\BaseRepository;

/**
 * Class orderdetailsRepository
 * @package App\Repositories
 * @version April 14, 2020, 7:54 pm UTC
*/

class orderdetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'productid',
        'bookingid',
        'total'
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
        return orderdetails::class;
    }
}
