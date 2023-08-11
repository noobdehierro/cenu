<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoonolAddresses extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'addresses';

    public function user()
    {
        return $this->belongsTo(KoonolUsers::class, 'user_id');
    }

    public function altanService()
    {
        return $this->belongsTo(KoonolAltanServices::class, 'altan_service_id');
    }
}
