<?php

namespace App\Repositories;

use App\Models\Levels;
use App\Repositories\BaseRepository;

/**
 * Class LevelsRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:28 pm UTC
 */

class LevelsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level',
        'course_id',
        'level_description'
    ];

    protected $primaryKey = 'level_id';

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
        return Levels::class;
    }
}
