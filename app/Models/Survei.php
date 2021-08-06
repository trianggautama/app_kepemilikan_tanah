<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survei extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

     /**
     * Get the jenis_bangunan that owns the Permohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class);
    }

}
