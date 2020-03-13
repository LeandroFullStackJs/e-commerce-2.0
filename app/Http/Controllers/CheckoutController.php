<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\Receipt;
use App\ReceiptProduct;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
  public function index(){

    return view('checkout');
  }


     public function show(){
         if(Auth::user() == null){
             return redirect('/login');
         }
         $cart = cart::where('user_id','=', Auth::user()->id)->get();



         $Products = Auth::user()->cart;
         $totalPrice = 0;


         foreach ($Products as $Product) {
             $totalPrice += $Product->price * $Product->pivot->quantity;


         }

        if ($totalPrice != 0){                                           //si no pones nada y sos rata , te devuelvo a la view cart
         return view('/checkout', compact('Products', 'totalPrice'));
         }
         else {
           return view('/cart', compact('Products', 'totalPrice'));
         }
     }

     public function checkout(Request $request){
         $Products = Auth::user()->cart;
         foreach ($Products as $Product) {
                     if($Product->pivot->quantity > $Product->stock){  // Me fijo que todavia haya el stock deseado por el usuario ya que
                         $stockErrors[] = $Product->name;              // puede cambiar mientras tiene el producto en el carrito
                     }
                 }
                 if (isset($stockErrors)){
            return redirect('/cart')->withErrors($stockErrors); //Avisa que ya no hay stock suficiente
        }
         $Receipt = new Receipt;
         date_default_timezone_set("America/Argentina/Buenos_Aires");
         $Receipt->user_id = Auth::user()->id;
         $Receipt->date = date("Y-m-d H:i:s");
         $Receipt->save();  // creo el recibo y lo guardo en la base de datos


         foreach ($Products as $Product) {
             $ReceiptProduct = new ReceiptProduct;
             $ReceiptProduct->receipt_id = $Receipt->id;
             $ReceiptProduct->product_id = $Product->id;
             $ReceiptProduct->quantity = $Product->pivot->quantity;
             $ReceiptProduct->save(); // se registran los productos de la compra
             $Product->stock -= $Product->pivot->quantity; //se actualiza el stock del producto
             $Product->save(); //se actualiza el stock del producto
         }
         $cart = cart::where('user_id','=', Auth::user()->id)->get();
        foreach ($cart as $cartItem) {
            $cartItem->delete(); // Borrar los productos del carrito
        }

         return redirect('/');
     }

  }
