<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Shifts
 * @package App\Models
 * @version October 11, 2021, 12:30 pm UTC
 *
 * @property string $shift
 */
class Shifts extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'shifts';

    protected $primaryKey = 'shift_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'shift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'shift_id' => 'integer',
        'shift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'shift' => 'required|string|max:255',
        'deleted_at' => 'nullable'
    ];
}
