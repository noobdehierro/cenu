<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoonolAltanServiceSupplementaryOfferings extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'altan_service_supplementary_offerings';

    public function offering()
    {
        return $this->belongsTo(KoonolOfferings::class, 'offering_id');
    }
}
