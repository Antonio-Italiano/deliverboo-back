<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'address', 'phone_number', 'description', 'min_order', 'shipment_price', 'logo', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function typologies()
    {
        return $this->belongsToMany(Typology::class);
    }
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
