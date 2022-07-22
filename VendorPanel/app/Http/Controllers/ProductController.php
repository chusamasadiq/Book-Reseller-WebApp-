<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
Use App\Models\Product;
use App\Models\Admin;
use App\Models\Vendor;
use DB;


class ProductController extends Controller
{
    //
    function user_login(Request $request)
    {
        $user= vendor::where(['email'=>$request->email])->first();
        $password=vendor::where(['password'=>$request->password])->first();
        if($user && $password)
        {
        $request->Session()->put('user',$user);
        return redirect('/Home');
        }
        else {
            return redirect('/login')->with('message', 'Invalid Username or Password');
            
        }
        

    }
    function Home(Request $request)
    {
        if($request->session()->has('user'))
        {
           $data= product::all();
           $email=$request->session()->get('user');
            return view('Home',['product'=>$data,'email'=>$email]);
           

        }
        else
        {
            return redirect('/login');
        }

    }
    public function create(){
        return view('AddProduct');
    }

    public function register(){
        return view('Register');
    }
    public function term(){
        return view('Term&Condition');
    }
    public function aboutus(){
        return view('About');
    }
    public function contactus(){
        return view('ContactUs');
    }

    public function login(){
        return view('Login');
    }


    public function insert(Request $request){
        $product= new product;
        $vendor=$request->session()->get('user');
        $product->Book_Name=$request->bookname;
        $product->Author_Name=$request->authorname;
        $product->Book_Price=$request->bookprice;
        $product->Book_Quantity=$request->bookquantity;
        $product->Book_Category=$request->bookcategory;
        $product->Seller_Location=$request->sellerlocation;
        $product->Seller_ContactNumber=$request->sellercontactnumber;
        $product->Vendor=$vendor['name'];

        if($request->hasfile('bookimg')){
            $file=$request->file('bookimg');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('C:/xampp/htdocs/BookReseller/BookReseller/images/',$filename);
            $product->Book_Img=$filename;
        }
        $product->save();
        return redirect('Home');
        

    }

    public function signup(Request $request){
        $newvendor=new vendor;
        $newvendor->name=$request->name;
        $newvendor->email=$request->email;
        $newvendor->password=$request->password;
        if($newvendor->save()){
            return redirect('/login')->with('message', 'Signup Successfully');
        }
        else {
            return redirect('/login')->with('message', 'Invalid Username or Password');
            
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
    
   
}
