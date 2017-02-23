<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Agency",
 *      required={"provinsi", "kota", "pic", "nomor_telepon"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="provinsi",
 *          description="provinsi",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="kota",
 *          description="kota",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="pic",
 *          description="pic",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="nomor_telepon",
 *          description="nomor_telepon",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Agency extends Model
{
    use SoftDeletes;

    public $table = 'agencies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'provinsi',
        'kota',
        'pic',
        'nomor_telepon'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'provinsi' => 'string',
        'kota' => 'string',
        'pic' => 'string',
        'nomor_telepon' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'provinsi' => 'required',
        'kota' => 'required',
        'pic' => 'required',
        'nomor_telepon' => 'required'
    ];

    
}
