<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\User;
use App\Review;
use App\Employee;
use Validator;
use App\Http\Requests\StudentRequest;
use Session;

class HomeController extends Controller
{


    public function index(Request $req){
		return view('home.index');
	}

    public function add(){
    	return view('login.registration');
    }
	
	 public function addc(){
    	return view('home.addc');
    }

    public function createc(Request $req){

 
           

    	$products = new Products();
    	$products->p_name = $req->pname;
    	$products->p_quantity = $req->pquantity;
    	$products->p_price = $req->pprice;
    	$products->brand = $req->pbrand;
    	$products->catagories = $req->catagory;
    	$products->menufac = $req->menufac;
    	$products->save();

        $data = Products::where('p_name', $req->pname)->get();
        return redirect()->route('home.detailsc', $data[0]->products_id);

    }
	
	public function detailsc($id){

		$std = Products::find($id);
		
		$review =Review::where('product_id', $id)->get();
		
		return view('home.detailsc', ['std'=>$std], ['review'=>$review]);
    }
		
		public function reviewadd(Request $req, $id){
           

    	$review = new Review();
    	$review->reviewstar = $req->reviewstar;
    	$review->review = $req->review;
    	$review->product_id = $req->productid;
    	$review->customer = Session::get('user');
    	$review->save();

       
        return redirect()->route('home.detailsc', $id);

    }
	
    public function create(Request $req){

 
           

    	$employee = new Employee();
    	$employee->username = $req->uname;
    	$employee->password = $req->password;
    	$employee->emp_name = $req->ename;
    	$employee->contact_no = $req->contact;
    	$employee->role = $req->type;
    	$employee->save();

        //$data = Employee::where('username', $req->uname)->where('password', $req->password)->get();
        return redirect()->route('login.index');

    }

	public function details($id){

		$std = Employee::find($id);
		
		return view('home.details', ['std'=>$std]);
    }

    public function show(){

    	$stdList = Employee::where('role','customer')->get();

        //return json($stdlist);
    	return view('home.stdlist', ['std'=> $stdList]);
    }
	
	public function showc(){

    	$stdList = Products::all();

        //return json($stdlist);
    	return view('home.stdlistc', ['std'=> $stdList]);
    }
	
	public function showfilter(Request $req){

    	$stdList =Products::where('brand',$req->brand)->get();

        //return json($stdlist);
    	return view('home.stdlistc', ['std'=> $stdList]);
    }
	
	public function edit($id){

		$std = Employee::find($id);
		return view('home.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

    	$employee = Employee::find($id);

    	$employee->username = $req->uname;
        $employee->emp_name = $req->name;
        $employee->contact_no = $req->contact;
    	$employee->save();

		return redirect()->route('home.stdlist');
    }
	public function delete($id){

		$std = Employee::find($id);
		return view('home.delete', ['std'=>$std]);
    }

    public function destroy($id){

		Employee::destroy($id);
		return redirect()->route('home.stdlist');
	}

    public function profile(){

        return view('home.profile');
    }

	public function editc($id){

		$std = Products::find($id);
		return view('home.editc', ['std'=>$std]);
    }

    public function updatec(Request $req, $id){

    	$products = Products::find($id);

    	$products->p_name = $req->pname;
        $products->p_quantity = $req->pquantity;
        $products->p_price = $req->pprice;
    	$products->save();

		return redirect()->route('home.stdlistc');
    }
	public function deletec($id){

		$std = Products::find($id);
		return view('home.deletec', ['std'=>$std]);
    }

    public function destroyc($id){

		Products::destroy($id);
		return redirect()->route('home.stdlistc');
	}
	
	
	 public function destroyreview($id){

		Review::destroy($id);
		return redirect()->route('home.stdlistc');
	}
	
	public function searchprd(Request $req){
		return view('home.searchc');
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

	
    public function upload(Request $req){


        if($req->hasFile('pic')){

            $file = $req->file('pic');

/*          echo "Name: ".$file->getClientOriginalName();
            echo "<br>Extension: ".$file->getClientOriginalExtension();
            echo "<br>Size: ".$file->getSize();
            echo "<br>Mime Type: ".$file->getMimeType();
*/
            if($file->move('upload', $file->getClientOriginalName())){
                echo "success";
            }else{
                echo "error";
            }

        }else{
            echo "File upload error!";
        }

    }
}




