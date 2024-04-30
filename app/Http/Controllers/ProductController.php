<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',['products'=> $products]);
       
    }
    public function create()
    {
        $category=Category::all();
        return view('admin.product.create',['category'=>$category]);
    }
    public function store(Request $request)
    {
        //dd($request);
          // Validate the request data
    $request->validate([
        'name' => 'required',
    
     
       
    ]);
// Handle image upload
$imagePath = null;

if ($request->hasFile('image')) {
   
    $image = $request->file('image');

    $imageName = $image->getClientOriginalName();
    $image->move(public_path('products'), $imageName);
    $imagePath = 'products/' . $imageName;
}
    // Create a new product instance
    $product = new Product();
    $product->name = $request->input('name');
    $product->pcode = $request->input('pcode');
    $product->catid = $request->input('catid');
    $product->description = $request->input('description');
    $product->madeby = $request->input('madeby');
    $product->price = $request->input('price');
    $product->stock = $request->input('stock');
    $product->image = $imagePath;

    // Save the product
    $product->save();

    return redirect()->route('admin.product.index')->with('success', 'Product created successfully');
}
public function userproduct($catid)
{
    $products = Product::where('catid', $catid)->get();
    return view('user.products',['products'=> $products]);
}
}