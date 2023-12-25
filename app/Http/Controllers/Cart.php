<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) {
        $user = User::find($id);
        $totalPrice = 0;
        foreach ($user->products as $product) {
            $totalPrice += $product->price;
        }
        return view('cart.index', ['id' => $id, 'user' => $user, 'totalPrice' => $totalPrice, 'count' => count($user->products)]);
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $product = Products::find($productId);

        if ($product) {
            // Get the authenticated user
            $user = auth()->user();
            
            // Attach the product to the user's products
            $user->products()->attach($productId);

            // Here, we're just storing the product ID in the session as an example
            $cart = $request->session()->get('cart', []);
            $cart[] = $productId;
            $request->session()->put('cart', $cart);

            return response()->json(['success' => true, 'message' => 'Product added to cart']);
        } else {
            return response()->json(['success' => false, 'message' => 'Product not found']);
        }
    }
}