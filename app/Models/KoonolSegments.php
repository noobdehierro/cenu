<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoonolSegments extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'segments';

    public function offerings()
    {
        return $this->hasMany(KoonolOfferings::class, 'segment_id');
    }
}
