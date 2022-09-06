<?php

namespace App\Repositories;

use App\Models\Departments;
use App\Repositories\BaseRepository;

/**
 * Class DepartmentsRepository
 * @package App\Repositories
 * @version October 19, 2021, 2:09 am UTC
 */

class DepartmentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_id',
        'department_name',
        'department_code',
        'department_description',
        'department_status'
    ];

    protected $primaryKey = 'department_id';

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
        return Departments::class;
    }
}
