<?php

namespace App\Http\Controllers;

class CurrencyController extends Controller
{
    public function index()
    {
        $amount = currency(1, 'USD', 'HKD', false);
        echo __('Convert US dollars to Hong Kong dollars:') . $amount . PHP_EOL;
        $amount = currency(1, 'USD', 'SGD', false);
        echo __('Convert US dollars to Singapore dollars:') . $amount . PHP_EOL;
        $amount = currency(1, 'USD', 'AUD', false);
        echo __('Convert US dollars to Australian dollars:') . $amount . PHP_EOL;
    }
}
