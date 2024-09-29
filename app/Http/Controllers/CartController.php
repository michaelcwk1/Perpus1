<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CartController extends Controller
{
/*-----------------------------------*\
// Tombol pada Nav
\*-----------------------------------*/

    public function item1()
    {
        return view('history.keranjang');
    }

/*-----------------------------------*\
// Post data ke Keranjnag
\*-----------------------------------*/
    public function addToCart(Request $request)
    {
        $cartItem = [
            'book_id' => $request->book_id,
            'book_title' => $request->book_title,
            'book_image' => $request->book_image,
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'borrow_date' => $request->borrow_date,
            'return_date' => $request->return_date,
        ];

        // Simpan item ke dalam session
        $cart = session()->get('cart', []);
        $cart[] = $cartItem;
        session()->put('cart', $cart);

        return redirect()->route('keranjang1')->with('success', 'Buku berhasil ditambahkan ke keranjang.');
    }

/*-----------------------------------*\
Data sudah masuk dan di arahkan ke keranjang
\*-----------------------------------*/
    public function keranjang2()
    {
        // Retrieve cart items from the session
        $cartItems = session()->get('cart', []);

        // Pass the cart items to the view
        return view('history.keranjang', compact('cartItems'));
    }

/*-----------------------------------*\
Update data pada keranjang
\*-----------------------------------*/
    public function updateKeranjang(Request $request, $index)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$index])) {
            $cart[$index] = [
                'book_id' => $request->book_id,
                'book_title' => $request->book_title,
                'book_image' => $request->book_image,
                'user_name' => $request->user_name,
                'user_email' => $request->user_email,
                'borrow_date' => $request->borrow_date,
                'return_date' => $request->return_date,
            ];
            session()->put('cart', $cart);
        }
        return redirect()->route('keranjang1')->with('success', 'Item berhasil diupdate.');
    }

/*-----------------------------------*\
Delete data pada keranjang
\*-----------------------------------*/
    public function deleteKeranjang($index)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$index])) {
            unset($cart[$index]);
            session()->put('cart', array_values($cart));
        }
        return redirect()->route('keranjang1')->with('success', 'Item berhasil dihapus dari keranjang.');
    }
}
