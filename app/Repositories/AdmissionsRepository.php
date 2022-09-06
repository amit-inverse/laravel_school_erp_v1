<?php

namespace App\Repositories;

use App\Models\Admissions;
use App\Repositories\BaseRepository;

/**
 * Class AdmissionsRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:41 pm UTC
 */

class AdmissionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'gender',
        'dob',
        'email',
        'phone',
        'address',
        'current_address',
        'nationality',
        'status',
        'date_registered',
        'user_id',
        'class_id',
        'batch_id',
        'image'
    ];

    protected $primaryKey = 'student_id';

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
        return Admissions::class;
    }
}
