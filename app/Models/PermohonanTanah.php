<?php

namespace App\Models;

use App\Models\JenisBangunan;
use App\Models\Kelurahan;
use App\Models\PermohonanTanah;
use App\Models\SurveiTanah;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PermohonanTanah extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the jenis_bangunan that owns the PermohonanTanah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenis_bangunan(): BelongsTo
    {
        return $this->belongsTo(JenisBangunan::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function kelurahan(): BelongsTo
    {
        return $this->belongsTo(Kelurahan::class);
    }

    /**
     * Get the survei_tanah associated with the PermohonanTanah
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function survei_tanah(): HasOne
    {
        return $this->hasOne(SurveiTanah::class);
    }
}
