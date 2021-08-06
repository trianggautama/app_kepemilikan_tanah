<?php

namespace App\Models;

use App\Models\Permohonan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PeminjamanBerkas extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the permohonan that owns the PeminjamanBerkas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permohonan(): BelongsTo
    {
        return $this->belongsTo(Permohonan::class);
    }
}
