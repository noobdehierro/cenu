<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $fillable = ['promotion_name', 'start_date', 'end_date', 'descripcion', 'promotion_cost'];

    public function customerPromotions()
    {
        return $this->hasMany(CustomerPromotion::class, 'id_promotion');
    }
}
