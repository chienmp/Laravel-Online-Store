<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    //
    public function getAddCart($id)
    {
        $product = Product::find($id);
        Cart::add(['id' => $id, 'name' => $product->prod_name, 'qty' => 1, 'price' => $product->prod_price, 'weight' => 550, 'options' => ['img' => $product->prod_img]]);
        return redirect('cart/show');
    }

    public function getShowCart()
    {
        $data['items'] = Cart::content();
        $data['total'] = Cart::total();
        return view('frontend.cart', $data);
    }

    public function getDeleteCart($id)
    {
        if ($id == 'all') {
            Cart::destroy();
        } else {
            Cart::remove($id);
        }
        return back();
    }

    public function getUpdateCart(Request $request)
    {
        Cart::update($request->rowId, $request->qty);
    }

    public function postCustomer(Request $request)
    {
        $data['info'] = $request->all();
        $email = $request->email;
        $name = $request->name;
        $data['cart'] = Cart::content();
        $data['total'] = Cart::total();
        Mail::send('frontend.email', $data, function ($message) use($email,$name) {
            $message->from('chienmp.cn@gmail.com', 'Laravel Chiến');

            $message->to($email, $name);

            $message->cc('phamminhchien21@gmail.com', 'test');

            $message->subject('Xác nhận mua hàng từ shop');

            
        });
        Cart::destroy();
        return redirect('complete');
    }
    public function getComplete(){
        return view('frontend.complete');
    }
}
