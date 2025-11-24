<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price'];

    // Relación con Reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id'); // columna foránea en reviews
    }
}
