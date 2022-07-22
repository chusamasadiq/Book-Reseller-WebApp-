<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
Use App\Models\Product;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Vendor;
use DB;


class ProductController extends Controller
{
    //
    function user_login(Request $request)
    {
        $user= admin::where(['email'=>$request->email])->first();
        $password=admin::where(['password'=>$request->password])->first();
        if($user && $password)
        {
        $request->Session()->put('user',$user);
        return redirect('/Home');
        }
        else {
            return redirect('/')->with('message', 'Invalid Username or Password');
            
        }
        

    }
    function Home(Request $request)
    {
        if($request->session()->has('user'))
        {
           $data= product::all();
           $vendor=vendor::all();
           $customer=customer::all();
            return view('Home',['product'=>$data,'vendor'=>$vendor,'customer'=>$customer]);
           

        }
        else
        {
            return redirect('/');
        }

    }
    
    
    public function updateProduct($id){
        $product = product::find($id);
        return view('UpdateProduct',['product'=>$product]);
    }
    public function update(Request $request){
        $product = product::find($request->id);
        $product->Book_Name=$request->bookname;
        $product->Author_Name=$request->authorname;
        $product->Book_Price=$request->bookprice;
        $product->Book_Quantity=$request->bookquantity;
        $product->Book_Category=$request->bookcategory;
        $product->Seller_Location=$request->sellerlocation;
        $product->Seller_ContactNumber=$request->sellercontactnumber;
        
        if($request->hasfile('bookimg')){
            $file=$request->file('bookimg');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('C:/xampp/htdocs/BookReseller/BookReseller/images',$filename);
            $product->Book_Img=$filename;
        }
        $product->save();
        return redirect('Home');
        
    }
    public function delete($id){
        $product =product::find($id);
        $product->delete();
        return redirect('Home');
    }

    public function blockvendor($id){
        $vendor =vendor::find($id);
        $vendorname=$vendor['name'];
        $products= product::where(['Vendor'=>$vendorname]);
        $vendor->delete();
        $products->delete();
        return redirect('Home');
    }

    public function blockuser($id){
        $customer =customer::find($id);
        $customer->delete();
        return redirect('Home');
    }
    
   
}
