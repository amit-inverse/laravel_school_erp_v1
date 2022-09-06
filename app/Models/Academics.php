<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Academics
 * @package App\Models
 * @version October 11, 2021, 12:36 pm UTC
 *
 * @property string $academic_year
 */
class Academics extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'academics';

    protected $primaryKey = 'academic_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'academic_year'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'academic_id' => 'integer',
        'academic_year' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'academic_year' => 'required|string|max:255',
        'deleted_at' => 'nullable'
    ];
}
