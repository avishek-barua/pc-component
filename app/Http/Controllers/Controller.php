<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index()
    {
        $products = Product::all();
        return view('welcome', compact('products'));
    }

    public function login_store(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::where('email', '=', $email)->first();
        if (Hash::check($password, $user->password)) { // password matched
            Session::put('userid', $user->id);
            Session::put('useremail', $user->email);
            return redirect()->to('/');
        } else {
            return redirect()->to('login');
        }
    }

    public function allProducts()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('all_products', compact('categories', 'products'));
    }

    public function categoryProducts($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->get();
        // dd($products);
        return view('category_product', compact('categories', 'products'));
    }

    public function productDetails($id)
    {
        $product  = Product::where('id', $id)->first();
        $cat = Category::where('id', $product->category_id)->first();
        $cat_prod = Product::where('category_id', $product->category_id)->get();
        return view('product_details', compact('product', 'cat','cat_prod'));
    }
}
