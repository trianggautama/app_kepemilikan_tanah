<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rak extends Model
{
    protected $guarded = ['id']; 

    public function arsip_berkas(): HasMany
    {
        return $this->hasMany(ArsipBerkas::class);
    }

}
