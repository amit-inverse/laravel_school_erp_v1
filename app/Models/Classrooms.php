<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Classrooms
 * @package App\Models
 * @version October 11, 2021, 12:22 pm UTC
 *
 * @property string $classroom_name
 * @property string $classroom_code
 * @property string $classroom_description
 * @property boolean $classroom_status
 */
class Classrooms extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'classrooms';

    protected $primaryKey = 'classroom_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'classroom_name',
        'classroom_code',
        'classroom_description',
        'classroom_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classroom_id' => 'integer',
        'classroom_name' => 'string',
        'classroom_code' => 'string',
        'classroom_description' => 'string',
        'classroom_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'classroom_name' => 'required|string|max:255',
        'classroom_code' => 'required|string|max:255',
        'classroom_description' => 'required|string',
        'classroom_status' => 'required|boolean',
        'deleted_at' => 'nullable'
    ];
}
