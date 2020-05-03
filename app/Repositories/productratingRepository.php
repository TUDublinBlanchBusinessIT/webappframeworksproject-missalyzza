<?php

namespace App\Repositories;

use App\Models\productrating;
use App\Repositories\BaseRepository;

/**
 * Class productratingRepository
 * @package App\Repositories
 * @version May 2, 2020, 12:37 pm UTC
*/

class productratingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rating',
        'comment',
        'courtid'
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
        return productrating::class;
    }
}
