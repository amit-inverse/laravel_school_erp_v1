<?php

namespace App\Repositories;

use App\Models\Academics;
use App\Repositories\BaseRepository;

/**
 * Class AcademicsRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:36 pm UTC
 */

class AcademicsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_year'
    ];

    protected $primaryKey = 'academic_id';

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
        return Academics::class;
    }
}
