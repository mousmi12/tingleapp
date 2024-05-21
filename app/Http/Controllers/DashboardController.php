<?php

namespace App\Http\Controllers;

use App\Models\OrderHistory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $id = 0;
    $pendingOrders = OrderHistory::select('orderhistory.*', 'product.name as pname', 'product.pcode as pcode')
    ->join('product', 'orderhistory.pid', '=', 'product.id')
    ->where('orderhistory.status', '=', 'Pending')->get();
    // Retrieve orders with status in progress
    $progressOrders = OrderHistory::select('orderhistory.*', 'product.name as pname', 'product.pcode as pcode')
    ->join('product', 'orderhistory.pid', '=', 'product.id')
    ->where('orderhistory.status', '=', 'Progress')->get();

    // Retrieve orders with status completed
    $completedOrders = OrderHistory::select('orderhistory.*', 'product.name as pname', 'product.pcode as pcode')
    ->join('product', 'orderhistory.pid', '=', 'product.id')
    ->where('orderhistory.status', '=', 'Completed')->get();
//dd($pendingOrders,$progressOrders,$completedOrders);
    return view('admin.dashboard', compact('id','pendingOrders', 'progressOrders', 'completedOrders'));
       
    }
}
