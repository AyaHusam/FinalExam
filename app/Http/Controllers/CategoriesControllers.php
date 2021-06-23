<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
class ProductControllers extends Controller
{

     public function indexCategory(){
         $category= Categories::all();

         return view('' ,compact('category'));
     }
     public function createCategory(){
         return view('proudect.createproudect');
     }
     public function storeCategory( Request $request){
           $request->validate([
            'product_name'=> 'required',
           ]);
           $category = new Categories();

           $category->save();
           return redirect('');
     }
    public function editCategory($id ){
        $category = Categories::findOrFail($id);
        return view('' , compact('category'));

    }
    public function updateCategory( Request $request , $id){
        $request->validate([
            'product_name'=> 'required',
           ]);
           $category = new Categories();
           $category->name = $request->product_name;
           $category->save();
           return redirect('');

    }
    public function deleteCategory($id){
        $contact = Categories::find($id);
        $contact->delete();
        return redirect('');
    }
     public function myname(){

     }
}
