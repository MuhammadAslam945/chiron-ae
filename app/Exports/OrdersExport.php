<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::all();
    }
    public function headings(): array
    {
        return [
            'Order ID',
            'User ID',
            'SubTotal',
            'Discount',
            'Tax',
            'Total',
            'Buyer FirstName',
            'Buyer LastName',
            'Mobile',
            'Email Addres',
            'Line1 Address',
            'Line2 Address',
            'City',
            'Province / State',
            'Country',
            'ZipCode',
            'Order Current Status',
          
            'Order Shipping Address Different',
            'Delivery Date',
            'Cancel Date',
            'Order Date',
            'Order Update Date',
        ];
       
    }
}
