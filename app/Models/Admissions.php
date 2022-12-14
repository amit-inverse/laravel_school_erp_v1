<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Admissions
 * @package App\Models
 * @version October 11, 2021, 12:41 pm UTC
 *
 * @property string $roll_no
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $father_phone
 * @property string $mother_name
 * @property string $gender
 * @property string $dob
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $current_address
 * @property string $nationality
 * @property boolean $status
 * @property string $date_registered
 * @property integer $user_id
 * @property integer $class_id
 * @property string $image
 */
class Admissions extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'admissions';

    protected $primaryKey = 'student_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'roll_no',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
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
        'class_id',
        'batch_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'roll_no' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'father_phone' => 'string',
        'mother_name' => 'string',
        'gender' => 'string',
        'dob' => 'date',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'batch_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'roll_no' => 'required|string|max:255',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'father_phone' => 'required|string|max:255',
        'mother_name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'dob' => 'required',
        'email' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'address' => 'required|string',
        'current_address' => 'required|string',
        'nationality' => 'required|string|max:255',
        'status' => 'required|boolean',
        'date_registered' => 'required',
        'user_id' => 'required|integer',
        'class_id' => 'required|integer',
        'batch_id' => 'required|integer',
        // 'image' => 'nullable|string|max:255',
        'image' => 'nullable',
        'deleted_at' => 'nullable'
    ];
}
