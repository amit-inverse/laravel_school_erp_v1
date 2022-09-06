<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Departments
 * @package App\Models
 * @version October 19, 2021, 2:09 am UTC
 *
 * @property integer $faculty_id
 * @property string $department_name
 * @property string $department_code
 * @property string $department_description
 * @property boolean $department_status
 */
class Departments extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'departments';

    protected $primaryKey = 'department_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'faculty_id',
        'department_name',
        'department_code',
        'department_description',
        'department_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'department_id' => 'integer',
        'faculty_id' => 'integer',
        'department_name' => 'string',
        'department_code' => 'string',
        'department_description' => 'string',
        'department_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'faculty_id' => 'required|integer',
        'department_name' => 'required|string|max:255',
        'department_code' => 'required|string|max:255',
        'department_description' => 'required|string',
        'department_status' => 'required|boolean',
        'deleted_at' => 'nullable'
    ];
}
