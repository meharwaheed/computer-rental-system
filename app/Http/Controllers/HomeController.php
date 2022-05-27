<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
use App\Complaint;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // dd(database_path('database.sqlite'));
        $data['computers'] = Product::all()->take(6);
        return view('website.index')->with($data);
    }
    public function services()
    {

        if (request()->has('search')) {
            $search = request()->get('search');
            $data['services'] = Product::where('brand', 'LIKE', "%$search%")->
            orWhere('title', 'LIKE', "%$search%")->orWhere('os', 'LIKE', "%$search%")->
            orWhere('per_hour_rate', 'LIKE', "%$search%")->get();
        } else {
            $data['services'] = Product::all();
        }
        return view('website.services')->with($data);
    }

    public function checkout($id)
    {
        $data['service'] = Product::findOrFail($id);
        return view('website.order')->with($data);
    }

    public function service_detail($id)
    {
        $data['service'] = Product::findOrFail($id);
        return view('website.service_detail')->with($data);
    }
}
