<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Cart;
use App\Review;
use Validator;
use App\Http\Requests\ProductsRequest;
use Session;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

	
	
    public function index(Request $req){
		$stdList = Products::where('brand', 'Dell')->get();

        //return json($stdlist);
    	return view('products.index', ['std'=> $stdList]);
	}
	
	 public function laptop(Request $req){
		$stdList = Products::where('catagories', 'laptop')->get();

    	return view('products.laptop', ['std'=> $stdList]);
	}
	
	public function ram(Request $req){
		$stdList = Products::where('catagories', 'ram')->get();

    	return view('products.ram', ['std'=> $stdList]);
	}
	
	
	public function casing(Request $req){
		$stdList = Products::where('catagories', 'casing')->get();

    	return view('products.casing', ['std'=> $stdList]);
	}
	public function monitor(Request $req){
		$stdList = Products::where('catagories', 'monitor')->get();

    	return view('products.monitor', ['std'=> $stdList]);
	}
	public function storage(Request $req){
		$stdList = Products::where('catagories', 'storage')->get();

    	return view('products.storage', ['std'=> $stdList]);
	}
	public function cartadd(Request $req, $id){

 
         $std = Products::find($id);  

    	$products = new Cart();
    	$products->p_name = $std->p_name;
    	$products->p_quantity = $std->p_quantity;
    	$products->p_price = $std->p_price;
    	$products->brand = $std->brand;
    	$products->catagories = $std->catagories;
		$products->customer = Session::get('user');
    	$products->save();

		$stdList = Cart::all();
        return view('products.cart', ['std'=> $stdList]);

    }
	
	public function cart(Request $req){


		$stdList =Cart::where('customer', Session::get('user'))->get();
        return view('products.cart', ['std'=> $stdList]);

    }
	
	public function cartdelete($id){

		$std = Cart::find($id);
		return view('cart.delete', ['std'=>$std]);
    }
	
	public function cartdestroy($id){

		Cart::destroy($id);
		return redirect()->route('products.cart');
	}
	
	
	
	
	public function searchprd(Request $req){
		return view('products.search');
	}
	
	
	public function search(Request $request)
	{
	if($request->ajax())
	{
	$output="";
	$products=DB::table('products')->where('p_name','LIKE','%'.$request->search."%")->get();
	if($products)
	{
	foreach ($products as $key => $product) {
	$output.='<tr>'.
	'<td>'.$product->products_id.'</td>'.
	'<td>'.$product->p_name.'</td>'.
	'<td>'.$product->brand.'</td>'.
	'<td>'.$product->p_price.'</td>'.
	'<td>'.$product->catagories.'</td>'.
	'</tr>';
	}
	return Response($output);
	   }
	   }
	}

    public function add(){
    	return view('products.add');
    }

    public function create(ProductsRequest $req){

 
           

    	$products = new Products();
    	$products->p_name = $req->pname;
    	$products->p_quantity = $req->pquantity;
    	$products->p_price = $req->pprice;
    	$products->brand = $req->pbrand;
    	$products->catagories = $req->catagory;
    	$products->menufac = $req->menufac;
    	$products->save();

        $data = Products::where('p_name', $req->pname)->get();
        return redirect()->route('products.details', $data[0]->products_id);

    }

	public function details($id){

		$std = Products::find($id);
		
		$review =Review::where('product_id', $id)->get();
		
		return view('products.details', ['std'=>$std], ['review'=>$review]);
    }

    public function show(){

    	$stdList = Products::all();

        //return json($stdlist);
    	return view('products.stdlist', ['std'=> $stdList]);
    }
	
	public function showfilter(Request $req){

    	$stdList =Products::where('brand',$req->brand)->get();

        //return json($stdlist);
    	return view('products.stdlist', ['std'=> $stdList]);
    }
	
	public function edit($id){

		$std = Products::find($id);
		return view('products.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

    	$products = Products::find($id);

    	$products->p_name = $req->pname;
        $products->p_quantity = $req->pquantity;
        $products->p_price = $req->pprice;
    	$products->save();

		return redirect()->route('products.stdlist');
    }
	public function delete($id){

		$std = Products::find($id);
		return view('products.delete', ['std'=>$std]);
    }

    public function destroy($id){

		Products::destroy($id);
		return redirect()->route('products.stdlist');
	}
	
	
	
	public function reviewadd(Request $req, $id){
           

    	$review = new Review();
    	$review->reviewstar = $req->reviewstar;
    	$review->review = $req->review;
    	$review->product_id = $req->productid;
    	$review->customer = Session::get('user');
    	$review->save();

       
        return redirect()->route('products.details', $id);

    }

}




