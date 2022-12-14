<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Times
 * @package App\Models
 * @version October 11, 2021, 12:34 pm UTC
 *
 * @property string $time
 */
class Times extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'times';

    protected $primaryKey = 'time_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'time_id' => 'integer',
        'time' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'time' => 'required|string|max:255',
        'deleted_at' => 'nullable'
    ];
}
