<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function product_store(Request $request)
    {
        $product = new product();
        $product->product_name=$request->product_name;
        $product->product_code=$request->product_code;
        $product->product_description=$request->product_description;
        $product->product_price=$request->product_price;
        $product->product_img=$request->product_img;
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product_view()
    {
        // dd()
        $products = DB::select('select * from products');
        return view('products.view_product',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function product_edit($id)
    {
        $data = DB::table('select * from products')->where('product_id',$id);
        return view('products.edit_product',['data'=>$data]);
        // return view('products.edit_product',with('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_code' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_img' => 'required',
        ]);
        $products = product::all($id);
        $products->product_name = $request->get('product_name');
        $products->product_code = $request->get('product_code');
        $products->product_description = $request->get('product_description');
        $products->product_price = $request->get('product_price');
        $products->product_img = $request->get('product_img');

        return redirect()->route('products.view_product')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
