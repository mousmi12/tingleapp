<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 'Active')->get();
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
public function viewproduct($id)
{
    $product = Product::with('category')->find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    return view('admin.product.views', compact('product'));
}
public function edit($id)
{
    //dd("pp");
    $product = Product::with('category')->find($id);
    $categories=Category::all();
    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    return view('admin.product.edit', compact('product','categories'));
}
public function update(Request $request,$id)
{
 
    $product = Product::find($id);

    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $product->name = $request->input('name');
    $product->pcode = $request->input('pcode');
    $product->description = $request->input('description');
    $product->catid = $request->input('catid');
    $product->madeby = $request->input('madeby');
    $product->price = $request->input('price');
    $product->stock = $request->input('stock');

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
        $product->image = $imagePath;
    }

    $product->save();

    return redirect()->route('admin.product.edit', $id)->with('message', 'Product updated successfully.');
}
public function delete($id)
{
    $product = Product::find($id);
    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $product->status ="Inactive";
    $product->save();
    $products = Product::where('status', 'Active')->get();
    return view('admin.product.index',['products'=> $products]);
}
}

