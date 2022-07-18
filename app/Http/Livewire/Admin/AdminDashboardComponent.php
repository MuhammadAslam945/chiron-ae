<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPaginate;
use Carbon\Carbon;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class AdminDashboardComponent extends Component
{
    public function render()
    {
    
        $orders = Order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalOrders = Order::count();
        $activeOrders = Order::where('status','!=','canceled')->where('status','!=','delivered')->count();
        $process = Order::where('status', 'process')->count();
        $dispatch = Order::where('status', 'dispatch')->count();
        $onaway = Order::where('status', 'onaway')->count();
        $totalSale = Order::select('*')->where('status', '!=','canceled')->sum('total');
        $cancelorders = Order::where('status', 'delivered')->count();
        $pendingorders = Transaction::where('status', 'pending')->count();
        $tpendingorders = Order::where('status', 'ordered')->count();
        $totalorders = Order::count();
        $todayOrder = Order::where('status','!=','canceled')->whereDate('created_at', Carbon::today())->count();
        $weeklyOrder = Order::where('status','!=','canceled')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        $todaySale = Order::where('status', '!=','canceled')->whereDate('created_at', Carbon::today())->sum('total');
        $activeSale = Order::where('status', '!=','canceled')->where('status','!=','delivered')->sum('total');
        $weeklySale = Order::where('status', '!=','canceled')->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('total');
        // $ptotalTransaction=Transaction::where('mode', 'card')->sum('total');
        // $ptotalCashondelivery=Transaction::where('mode', 'cod')->sum('total');
        $products=Product::all();
        return view('livewire.admin.admin-dashboard-component', ['todayOrder'=>$todayOrder,'weeklyOrder'=>$weeklyOrder,'todaySale' => $todaySale,
        'activeOrders'=>$activeOrders, 'weeklySale' => $weeklySale,'totalOrders'=>$totalOrders,
        'activeSale'=>$activeSale,'totalSale'=>$totalSale,'orders'=>$orders,'products'=>$products])->layout('layouts.admin.base');
    }
}
