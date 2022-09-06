<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Faculties
 * @package App\Models
 * @version October 11, 2021, 12:32 pm UTC
 *
 * @property string $faculty_name
 * @property string $faculty_code
 * @property string $faculty_description
 * @property boolean $faculty_status
 */
class Faculties extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'faculties';

    protected $primaryKey = 'faculty_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'faculty_name',
        'faculty_code',
        'faculty_description',
        'faculty_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'faculty_id' => 'integer',
        'faculty_name' => 'string',
        'faculty_code' => 'string',
        'faculty_description' => 'string',
        'faculty_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'faculty_name' => 'required|string|max:255',
        'faculty_code' => 'required|string|max:255',
        'faculty_description' => 'required|string',
        'faculty_status' => 'required|boolean',
        'deleted_at' => 'nullable'
    ];
}
