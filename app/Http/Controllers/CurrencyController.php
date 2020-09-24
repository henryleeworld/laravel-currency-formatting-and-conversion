<?php

namespace App\Http\Controllers;

class CurrencyController extends Controller
{
    public function index()
    {
        $amount = currency(1, 'USD', 'HKD', false);
        echo '美金換算港幣：' . $amount . PHP_EOL;
        $amount = currency(1, 'USD', 'SGD', false);
        echo '美金換算新加坡幣：' . $amount . PHP_EOL;
        $amount = currency(1, 'USD', 'AUD', false);
        echo '美金換算澳元：' . $amount . PHP_EOL;
    }
}
