<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['admin']);
    }
    public function index(){
        //return view('product.productList');
      $products = product::all();
      return view('product.productList', compact('products'));
    }

    public function cart(){
        return view ('product.cart');
    }

    public function addToCart($id){
        $product=product::findOrFail($id);
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
 
        } else {
 
            $cart[$id] = [
 
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request)
 
    {
 
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
  public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function admin(){
        $view=product::all();
        //return view ('deshboard.adminView');
         return view('deshboard.adminView', compact('view'));
    }
    public function AddProduct(){
        return view('deshboard.createProduct');
    }


    
    public function addItem(Request $request){
    $item=new product;
    $item->name=$request->name;
    $item->description=$request->description;
    $item->price=$request->price;
    $images=array();
        if($files=$request->file('file')){
            $i=0;
            foreach($files as $file){

                $allowedfileExtension=['png','jpg','jpeg','gif','pdf','docx','svg'];
                
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $fileNameExtract = explode('.', $name);
                    $fileName = $fileNameExtract[0];
                    $fileName .= time();
                    $fileName .= $i;
                    $fileName .= '.';
                    $fileName .= $fileNameExtract[1];

                    $file->move('image', $fileName);
                    $images[] = $fileName;
                    $i++;
                }

            }
        }
       
        $item['image'] = implode("|", $images);
       
        
        //dd($images);
        $item->save();
        return redirect()->to('/admin')->with('success', 'successfully posted!');
        //return redirect()->back()->with('success', 'successfully deleded!');
    
}

public function deleteItem($id){
    $delete=product::findOrFail($id);
    $delete=product::where('id',$id)->delete();
    //return view ('deshboard.adminView');
    return redirect()->back()->with('success', 'successfully Deleted!');

}

public function editItem($id){
$editItem=product::findOrFail($id);
return view('deshboard.editProduct',compact('editItem'));
}

public function updateItem(Request $request ,$id){
$updateItem=product::findOrFail($id);
$update=array(
    'name'=>$request->name,
    'description'=>$request->description,
    'price'=>$request->price,

);
$updateItem=product::where('id',$id)->update($update);
return redirect()->to('/admin')->with('success', 'successfully Updated!');

}
  
}
