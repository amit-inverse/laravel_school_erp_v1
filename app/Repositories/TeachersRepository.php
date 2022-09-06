<?php

namespace App\Repositories;

use App\Models\Teachers;
use App\Repositories\BaseRepository;

/**
 * Class TeachersRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:41 pm UTC
 */

class TeachersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
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
        'image'
    ];

    protected $primaryKey = 'teacher_id';

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
        return Teachers::class;
    }
}
