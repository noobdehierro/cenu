<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KoonolPayments extends Model
{
    use HasFactory;
    protected $connection = 'pgsql';

    protected $table = 'payments';

    public function user()
    {
        return $this->belongsTo(KoonolUsers::class, 'user_id');
    }

    public function segment()
    {
        return $this->belongsTo(KoonolSegments::class, 'segment_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
