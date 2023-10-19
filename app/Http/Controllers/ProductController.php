<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.dashboard-products',[
            'products' => $products
        ]);
    }

   

    public function create()
    {
        $users = User::all();

        return view('pages.dashboard-products-create',[
            'users' => $users,
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $product = Product::create($data);

        return redirect()->route('dashboard-product');
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();

        $item = Product::findOrFail($id);

        $data['slug'] = Str::slug($request->name);

        $item->update($data);

        return redirect()->route('dashboard-product');
    }
}
