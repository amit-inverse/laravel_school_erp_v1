<?php

namespace App\Repositories;

use App\Models\Attendances;
use App\Repositories\BaseRepository;

/**
 * Class AttendancesRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:35 pm UTC
*/

class AttendancesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
        'attendance_status'
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
        return Attendances::class;
    }
}
