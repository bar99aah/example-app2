<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        // Product::create([
        // 'name'=>'product4',
        // 'price'=>2000,
        // 'description'=>'second pro',
        // 'category_id'=>1,
        // 'serial_number '=>20,
        // ]);
        
        // $product =  new Product();
        // $product->name='pro3';
        // $product->price=30;
        // $product->description='**';
        // $product->category_id=2;
        // $product->serial_number=30;
        // $product->save();

        $products=Product::all();
        
        return view('product.index',compact('products'));
    }

    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete($id);
        return back();
    }

    // public function create(){
    //     return view('product.create');
    // }

    // public function store(Request $request){

    //     //first recive data without request class
    //     // $name=request('name');
    //     // $price=request('price');
    //     // $description=request('description');

    //     // dd($name,$price,$description);

    //     //second recive data
        // $validatedData=$request->validate([
        //     'name'=>['required','max:255','string'],
        //     'price'=>['required','numric'],
        //     'description'=>'max:255|string',
        // ]);
        
        // $validatedData['category_id']=1;
        // //process data
        // Product::create($validatedData);
    //         // ['name'=>$request->name,
    //         // 'price'=>$request->price,
    //         // 'description'=>$request->description,
    //         // 'category_id'=>1,]
    //     return back()->with('success','product added successfuly');
    // }

    // public function edit(){
    //     return view('product.update'); 
    // }

    public function create()
    {
        return view('product.create');
    }

    public function store(StoreProductRequest $request)
    {

        // process data
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => 1,
        ]);

        // return response
        return back()->with('success', 'product added successfully!');
    }

    //my task
    
    public function edit()
    {
        $products=Product::all();
        return view('product.update',compact('products'));
    }

    public function update(StoreProductRequest $request,$id)
    {
        
        $products=Product::where('id',$id);
        $products->update([
        'name' => $request->name,
        'price' => $request->price,
        'description' => $request->description,
        ]);
        
        
        // return response
        return back()->with('updated', 'product updated successfully!');
    }
}
