<?php

namespace App\Http\Controllers\Order\Admin;

use App\Tables\Builders\OrderTable;
use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = OrderTable::class;
}
