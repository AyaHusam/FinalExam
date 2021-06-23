<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
class ProductControllers extends Controller
{

     public function index(){
         $product= products::all();

         return view('proudect.allProduct' ,compact('products'));
     }
     public function create(){
         return view('proudect.createproudect');
     }
     public function store( Request $request){
           $request->validate([
            'product_name'=> 'required',
            'product_price' => 'required',
            'product_qty' => 'required'
           ]);
           $contact = new products();
           $contact->name = $request->product_name;
           $contact->price = $request->product_price;
           $contact->Quantity = $request->product_qty;
           $contact->save();
           return redirect('/product');
     }
    public function edit($id ){
        $product = products::findOrFail($id);
        return view('content.edit' , compact('products'));

    }
    public function update( Request $request , $id){
        $request->validate([
            'product_name'=> 'required',
            'product_price' => 'required',
            'product_qty' => 'required'
           ]);
           $product = new products();
           $product->name = $request->product_name;
           $product->price = $request->product_price;
           $product->Quantity = $request->product_qty;
           $product->save();
           return redirect('/product');

    }
    public function delete($id){
        $product= products::find($id);
        $product->delete();
        return redirect('/product');
    }
     public function myname(){

     }
}
