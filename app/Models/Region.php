<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PlanePrice;
use App\Models\TrainPrice;
use App\Models\BusPrice;

class Region extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'center'];
    /**
     * Get all of the districts for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function districts()
    {
        return $this->hasMany(District::class);
    }
    /**
     * Get all of the planePrice for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function planePrice()
    {
        return $this->hasMany(PlanePrice::class, 'regionFrom');
    }

    /**
     * Get all of the planePrice for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trainPrice()
    {
        return $this->hasMany(TrainPrice::class, 'regionFrom');
    }

    /**
     * Get all of the planePrice for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function busPrice()
    {
        return $this->hasMany(BusPrice::class, 'regionFrom');
    }
}
