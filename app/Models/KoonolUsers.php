<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoonolUsers extends Model
{
    use HasFactory;
    protected $connection = 'pgsql';

    protected $table = 'users';

    public function addresses()
    {
        return $this->hasMany(KoonolAddresses::class, 'user_id');
    }

    public function altanServices()
    {
        return $this->hasMany(KoonolAltanServices::class, 'user_id');
    }
}
