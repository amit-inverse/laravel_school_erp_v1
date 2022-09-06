<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Roles
 * @package App\Models
 * @version October 11, 2021, 12:42 pm UTC
 *
 * @property string $name
 */
class Roles extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'roles';

    protected $primaryKey = 'role_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'role_id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'name' => 'required|string|max:255',
        'deleted_at' => 'nullable'
    ];

    public function user()
    {
        return $this->hasMany('App\Models\Users');
    }
}
