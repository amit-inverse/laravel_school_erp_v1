<?php

namespace App\Repositories;

use App\Models\Rolls;
use App\Repositories\BaseRepository;

/**
 * Class RollsRepository
 * @package App\Repositories
 * @version October 19, 2021, 9:30 am UTC
*/

class RollsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'username',
        'password',
        'login_time',
        'logout_time'
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
        return Rolls::class;
    }
}
