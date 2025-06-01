<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'item_id' => 'required|exists:menus,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Create a new cart item
        $cart = Cart::create([
            'user_id' => Auth::id(),    // Changed from cart_id to user_id and using Auth::id()
            'item_id' => $request->item_id,
            'quantity' => $request->quantity,
        ]);

        return response()->json(['message' => 'Item added to cart successfully', 'cart' => $cart], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
