<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pet;
use App\Models\Tag;
use App\Models\Breed;

class HomeController extends Controller 
{
    public function index() 
    {
        $counters = [
            'users' => User::count(),
            'pets' => Pet::count(),
            'tags' => Tag::count(),
            'breeds' => Breed::count(),
        ];
        return view('dashboard', ['counters' => $counters]);
    }
}