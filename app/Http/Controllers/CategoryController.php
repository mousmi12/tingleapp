<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',['categories'=> $categories]);
    }
    public function create()
    {

        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
     
        $category = Category::create([
            'name' => $data['name'],
            'description' => $data['description']          
        ]);
       // dd($category);
        // Check if an image file is uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Generate a unique file name
            $imageName = $image->getClientOriginalName();

            // Move the uploaded file to the public directory
            $image->move(public_path('categories'), $imageName);

            // Set the image path for the category
            $category->image = 'categories/' . $imageName;

            // Save the category with the image path
            $category->save();
        } else {
            // Save the category without an image path
            $category->save();
        }

        return redirect()->route('admin.category.store')->with('success', 'Categories are created successfully!');
    }
    public function dashboard()
    {
        $categories = Category::all();
        return view('user.dashboard',['categories'=> $categories]);
    }
}
