<?php

namespace App\Models;

use App\Models\Rak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArsipSertifikat extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the rak that owns the ArsipBerkas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rak(): BelongsTo
    {
        return $this->belongsTo(Rak::class);
    }
}
