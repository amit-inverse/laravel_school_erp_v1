<?php

namespace App\Repositories;

use App\Models\Shifts;
use App\Repositories\BaseRepository;

/**
 * Class ShiftsRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:30 pm UTC
 */

class ShiftsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shift'
    ];

    protected $primaryKey = 'shift_id';

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
        return Shifts::class;
    }
}
