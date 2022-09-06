<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class FeesStructures
 * @package App\Models
 * @version October 22, 2021, 10:53 am UTC
 *
 * @property integer $course_id
 * @property integer $level_id
 * @property integer $admission_fees
 * @property integer $semester_fees
 */
class FeesStructures extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'fees_structures';

    protected $primaryKey = 'fees_structures_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'course_id',
        'level_id',
        'admission_fees',
        'semester_fees'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fees_structure_id' => 'integer',
        'course_id' => 'integer',
        'level_id' => 'integer',
        'admission_fees' => 'integer',
        'semester_fees' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'course_id' => 'required|integer',
        'level_id' => 'required|integer',
        'admission_fees' => 'required|integer',
        'semester_fees' => 'required|integer',
        'deleted_at' => 'nullable'
    ];
}
