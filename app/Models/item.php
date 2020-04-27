<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class item
 * @package App\Models
 * @version April 4, 2020, 6:46 pm UTC
 *
 * @property integer user_id
 * @property integer course_id
 * @property integer view_count
 * @property string url
 * @property string description
 */
class item extends Model
{
    use SoftDeletes;

    public $table = 'items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'course_id',
        'view_count',
        'url',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'course_id' => 'integer',
        'view_count' => 'integer',
        'url' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'view_count' => 'required'
    ];

    
}
