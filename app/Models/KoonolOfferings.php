<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoonolOfferings extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'offerings';

    public function segment()
    {
        return $this->belongsTo(KoonolSegments::class);
    }

    // public function altanServiceSupplementaryOfferings()
    // {
    //     return $this->hasMany(KoonolAltanServiceSupplementaryOfferings::class, 'offering_id');
    // }
}