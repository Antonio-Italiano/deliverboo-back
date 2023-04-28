<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';

    protected $fillable = ['name', 'price', 'image', 'description', 'is_public'];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_id', 'id');
    }

    public function getDate($date_column, $format = 'd-m-Y')
    {
        $date = $this->$date_column;
        return Carbon::create($date)->format($format);
    }

    public function getDateDiff($date_column)
    {
        $date = $this->$date_column;
        return Carbon::parse($date)->diffForHumans();
    }

}
