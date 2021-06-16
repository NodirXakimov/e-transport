<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'region_id', 'center'];

    /**
     * The region that belong to the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function region()
    {
        return $this->belongsToMany(Region::class);
    }
}
