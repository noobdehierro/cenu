<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPromotion extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'name', 'id_promotion'];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'id_promotion');
    }
}
