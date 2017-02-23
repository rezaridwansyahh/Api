<?php

namespace App\Repositories;

use App\Models\Agency;
use InfyOm\Generator\Common\BaseRepository;

class AgencyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'provinsi',
        'kota',
        'pic',
        'nomor_telepon'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Agency::class;
    }
}
