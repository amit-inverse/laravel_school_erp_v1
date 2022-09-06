<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Courses
 * @package App\Models
 * @version October 11, 2021, 12:31 pm UTC
 *
 * @property string $course_name
 * @property string $course_code
 * @property string $course_description
 * @property boolean $status
 */
class Courses extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'courses';

    protected $primaryKey = 'course_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_name',
        'course_code',
        'course_description',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'course_name' => 'string',
        'course_code' => 'string',
        'course_description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'course_name' => 'required|string|max:255',
        'course_code' => 'required|string|max:255',
        'course_description' => 'required|string',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable'
    ];
}
