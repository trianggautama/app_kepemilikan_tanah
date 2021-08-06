<?php

namespace App\Models;

use App\Models\ArsipBerkas;
use App\Models\JenisBangunan;
use App\Models\Kelurahan;
use App\Models\Survei;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Permohonan extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the jenis_bangunan that owns the Permohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jenis_bangunan(): BelongsTo
    {
        return $this->belongsTo(JenisBangunan::class);
    }

    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    /**
     * Get all of the survei for the Permohonan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function survei(): HasOne
    {
        return $this->hasOne(Survei::class);
    }

    public function arsip_berkas(): HasOne
    {
        return $this->hasOne(ArsipBerkas::class);
    }
}
