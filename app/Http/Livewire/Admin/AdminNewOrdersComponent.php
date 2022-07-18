<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeliveryMail;
use Carbon\Carbon;
class AdminNewOrdersComponent extends Component
{
    use WithPagination;
    public function updateOrderStatus($order_id, $status)
    {
        $order = Order::find($order_id);
        $order->status = $status;
        if ($status === 'delivered') {
            $order->delivered_date = DB::raw('CURRENT_DATE');
        } else if ($status === 'canceled') {
            $order->canceled_date = DB::raw('CURRENT_DATE');
        }
        else if ($status === 'dispatch') {
            $order->updated_at = Carbon::now();
        }
        else if ($status === 'process') {
            $order->updated_at = Carbon::now();
        }
        else if ($status === 'onway') {
            $order->updated_at = Carbon::now();
        }
        $order->save();
        session()->flash('order_msg', 'Order Status has been Updated');
        $this->orderConfirmationMail($order);
    }
    public function orderConfirmationMail($order)
    {
        Mail::to($order->email)->send(new DeliveryMail($order));
    }
    public function render()
    {
        $orders = Order::where('status','ordered')->orderBy('created_at', 'desc')->paginate(15);
        return view('livewire.admin.admin-new-orders-component', ['orders' => $orders])->layout('layouts.admin.base');
    }
}
