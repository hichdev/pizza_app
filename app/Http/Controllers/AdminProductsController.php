<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminProductsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:adminusers');
    }

    public function index(){

        $products = Product::orderBy('name', 'desc')->paginate(5);

        return view('admin.product.index', ['products'=> $products]);



    }


    public function create(){

        return view('admin.product.create')->with('categories', Category::all() );

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){



        $this->validate($request, [

            'name' => 'required',
            'price' => 'required|float',
            'picture' => 'required|image',

        ]);



        $picture = $request->picture;

        $picture_new_name = time().$picture->getClientOriginalName();

        $picture->move('backend/images', $picture_new_name);


       Product::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'price'=> $request->price,
            'picture'=> 'backend/images/' . $picture_new_name,
            'category_id' => $request->category_id
        ]);



       Session::flash('success', 'Product opgeslaan');

       return redirect()->route('admin.products');


    }



    public function edit($id){

        $product = Product::find($id);

        return view('admin.product.edit')->with('product', $product )->with('categories', Category::all());

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id){



        $this->validate($request, [

            'name' => 'required',
            'price' => 'required|integer',

        ]);

        $product = Product::find($id);

        if($request->hasFile('picture')){

            $picture = $request->picture;

            $picture_new_name = time().$picture->getClientOriginalName();

            $picture->move('backend/images', $picture_new_name);

            $product->picture = 'backend/images/' . $picture_new_name;

        }


            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->category_id = $request->category_id;


            $product->save();


        Session::flash('success', 'Product opgeslaan');

        return redirect()->route('admin.products');


    }




    public function delete($id){

        $product = Product::find($id);


        if(file_exists($product->picture)){

            unlink($product->picture);


        }


        $product->delete();

        Session::flash('success', 'Product verwijderd');

        return redirect()->route('admin.products');


    }


}
