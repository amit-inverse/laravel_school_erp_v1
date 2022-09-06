<?php

namespace App\Repositories;

use App\Models\Times;
use App\Repositories\BaseRepository;

/**
 * Class TimesRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:34 pm UTC
 */

class TimesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time'
    ];

    protected $primaryKey = 'time_id';

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
        return Times::class;
    }
}
