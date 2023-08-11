<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoonolAltanServices extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'altan_services';

    public function user()
    {
        return $this->belongsTo(KoonolUsers::class, 'user_id');
    }
}
