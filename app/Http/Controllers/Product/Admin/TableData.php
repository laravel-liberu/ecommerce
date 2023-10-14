<?php

namespace App\Http\Controllers\Product\Admin;

use App\Tables\Builders\ProductTable;
use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = ProductTable::class;
}
