<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['address', 'total_order', 'guest_name', 'phone_number', 'status'];

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_id', 'id');
    }
}
