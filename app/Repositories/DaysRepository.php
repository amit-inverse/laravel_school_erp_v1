<?php

namespace App\Repositories;

use App\Models\Days;
use App\Repositories\BaseRepository;

/**
 * Class DaysRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:37 pm UTC
 */

class DaysRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    protected $primaryKey = 'day_id';

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
        return Days::class;
    }
}
