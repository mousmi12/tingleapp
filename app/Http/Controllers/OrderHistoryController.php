<?php

namespace App\Http\Controllers;

use App\Models\OrderHistory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderHistoryController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'mobile' => 'required',


        ]);
        // Handle image upload
        $imagePath = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = $image->getClientOriginalName();
            $image->move(public_path('order'), $imageName);
            $imagePath = 'order/' . $imageName;
        }
        $product = Product::find($request->input('pid'));
        $price = $product->price;
        // Create a new product instance
        $order = new OrderHistory();
        $order->customername = $request->input('name');
        $order->pid = $request->input('pid');
        $order->description = $request->input('description');
        $order->mobile = $request->input('mobile');
        $order->price = $price;
        $order->qty = $request->input('qty');
        $order->totalprice = $price * $request->input('qty');
        $order->image = $imagePath;

        // Save the product
        $order->save();

        return redirect()->route('user.dashboard')->with('success', 'Ordered!!');
    }
    public function index(Request $request)
{
    $sort_by = $request->get('sort_by', 'status'); // default sort by status
    $sort_order = $request->get('sort_order', 'asc'); // default sort order
    $search = $request->get('search', ''); // search query

    // Define the order of statuses for custom sorting
    $statusOrder = [
        'Pending',
        'Progress',
        'Shipped',
        'Delivered',
        'Cancelled',
        'Completed'
    ];

    $ordersQuery = OrderHistory::select('orderhistory.*', 'product.name as pname', 'product.pcode as pcode')
        ->join('product', 'orderhistory.pid', '=', 'product.id');

    if ($search) {
        $ordersQuery->where(function($query) use ($search) {
            $query->where('orderhistory.customername', 'like', "%{$search}%")
                  ->orWhere('orderhistory.mobile', 'like', "%{$search}%")
                  ->orWhere('orderhistory.id', 'like', "%{$search}%")
                  ->orWhere('orderhistory.status', 'like', "%{$search}%")
                  ->orWhere('product.name', 'like', "%{$search}%")
                  ->orWhere('product.pcode', 'like', "%{$search}%");
        });
    }

    if ($sort_by == 'status') {
        $statusOrderString = implode("','", $statusOrder);
        $ordersQuery->orderByRaw("FIELD(orderhistory.status, '{$statusOrderString}') {$sort_order}");
    } else {
        $ordersQuery->orderBy($sort_by, $sort_order);
    }

    $orders = $ordersQuery->get();

    return view('admin.order.index', [
        'orders' => $orders,
        'sort_by' => $sort_by,
        'sort_order' => $sort_order,
        'search' => $search
    ]);
}

    
    public function updateStatus(Request $request)
    {
        $order = OrderHistory::find($request->order_id);
        if ($order) {
            $order->status = $request->status;
            $order->save();

            return response()->json(['success' => 'Order status updated successfully']);
        }

        return response()->json(['error' => 'Order not found'], 404);
    }
}
