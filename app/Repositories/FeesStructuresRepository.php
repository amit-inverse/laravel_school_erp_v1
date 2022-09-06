<?php

namespace App\Repositories;

use App\Models\FeesStructures;
use App\Repositories\BaseRepository;

/**
 * Class FeesStructuresRepository
 * @package App\Repositories
 * @version October 22, 2021, 10:53 am UTC
 */

class FeesStructuresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'admission_fees',
        'semester_fees'
    ];

    protected $primaryKey = 'fees_structures_id';

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
        return FeesStructures::class;
    }
}
