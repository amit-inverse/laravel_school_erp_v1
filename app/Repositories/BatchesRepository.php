<?php

namespace App\Repositories;

use App\Models\Batches;
use App\Repositories\BaseRepository;

/**
 * Class BatchesRepository
 * @package App\Repositories
 * @version October 11, 2021, 12:29 pm UTC
 */

class BatchesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch'
    ];

    protected $primaryKey = 'batch_id';

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
        return Batches::class;
    }
}
