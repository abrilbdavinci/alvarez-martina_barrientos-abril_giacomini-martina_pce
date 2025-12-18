<?php
// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Post;
use App\Models\Review;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        // Estadísticas para admin
        $stats = [
            'posts_count' => Post::count(),
            'reviews_count' => Review::count(),
            'users_free' => User::where('role', 'free')->count(),
            'users_premium' => User::where('role', 'premium')->count(),
        ];

        
        $products = Product::withCount('reviews')->get();


        return view('home', compact('stats', 'products'));
    }
}
