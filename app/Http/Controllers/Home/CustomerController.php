<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $request['domain'] = $request->getHost();
        $request['theme'] = session('theme');
        $request['language'] = session('locale');
        Customer::create($request->all());
    }
}
