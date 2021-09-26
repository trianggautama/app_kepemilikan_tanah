<?php

namespace App\Models;

use App\Models\PermohonanTanah;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SurveiTanah extends Model
{
    protected $guarded = ['id'];
    /**
     * Get the permohonan_tanah that owns the SurveiTanah
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permohonan_tanah(): BelongsTo
    {
        return $this->belongsTo(PermohonanTanah::class);
    }
}
