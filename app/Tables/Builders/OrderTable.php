<?php

namespace App\Tables\Builders;

use App\Models\Order;
use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;

class OrderTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/order.json';

    public function query(): Builder
    {
	    return Order::selectRaw('
            orders.id, orders.customer_id, orders.order_date, orders.total_amount,
	    orders.payment_status')
	    ->join('customers', 'customers.id', '=', 'orders.customer_id');
    }
    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
