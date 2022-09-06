<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Batches
 * @package App\Models
 * @version October 11, 2021, 12:29 pm UTC
 *
 * @property string $batch
 */
class Batches extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'batches';

    protected $primaryKey = 'batch_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'batch'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'batch_id' => 'integer',
        'batch' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'batch' => 'required|string|max:255',
        'deleted_at' => 'nullable'
    ];
}
