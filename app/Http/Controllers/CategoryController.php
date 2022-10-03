<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('categories', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'user_id' => 1
        ]);

        return redirect()->back();
    }
}
