<?php

namespace Xstore\Http\Controllers\Product;

use Illuminate\Http\Request;
use Xstore\Http\Controllers\Controller;
use Xstore\Http\Requests\RequestUploadFile;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Xstore\Http\Requests\RequestProduct;
use Auth;
use Storage;
use Session;
class ProductController extends Controller
{

	/**
	 * Class Constructor
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.content.product.index')
                ->with('products',app('product')->where('active','=',true)->paginate(16));
    }

    public function showLock()
    {
        return view('layouts.dashboard.content.product.lock')
                ->with('products',app('product')->where('active','=',false)->paginate(16));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.content.product.create')
                ->with('trademarks',app('trademark')->where('active','=',true)->orderBy('name')->get())
                ->with('categories',app('category')->where('active','=',true)->orderBy('name')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            // create array infomation product
            $product = [
                'name' => $request->name,
                'url' => $request->url,
                'price' => $request->price,
                'sale' => $request->sale,
                'status' => $request->status,
                'active' => $request->active,
            ];


            //create product
            $product = app('product')->create($product);

            //create relation trademark
            $product_trademark = app('product_trademark')->create([
                'product_id' => $product->id,
                'trademark_id' => $request->trademark,
            ]);
            //create relation category
            $product_trademark = app('product_category')->create([
                'product_id' => $product->id,
                'category_id' => $request->category,
            ]);

            // upload file
            $image = $this->fileUpload($request);

            // insert infomation product_attachment table
            app('product_attachment')->create(['product_id' => $product->id, 'attachment_id' => $image->id? $image->id:null]);

            Session::flash('success', 'Create Product Success !!!'); // send messages success
            return redirect('dashboard/product');

        } catch (Exception $e) {
            Session::flash('error', 'Update Infomation Product Field !!!'); // send messages error
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Request::url() == 'dashboard'){
            return view('dashboard/product/edit')->with(app('product')->where('id','=',$id)->firstorFail());
        }else{
            return view('collection/detail')
                ->with(app('product')
                ->where('id','=',$id)
                // ->where('active','=',true)
                ->firstorFail());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('layouts.dashboard.content.product.edit')
            ->with('product',app('product')->where('id','=',$id)->firstorFail()) // send list product to view
            ->with('trademarks',app('trademark')->all()); // send list trademark to view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestProduct $request, $id)
    {
        try {
            // get product
            $product = app('product')->where('id','=',$id)->firstorFail();

            // update product
            $product->update($request->all());

            // upload images
            $this->fileUpload($request);

            // send messages success
            Session::flash('success', 'Update Infomation Product Success !!!');

            return redirect('dashboard/product'); // redirect page show list product
        } catch (Exception $e) {
            // send messages error
            Session::flash('error', 'Update Infomation Product Field !!!');

            // redirect page edit
            return redirect()->back();
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = app('product')->where('id','=',$id)->firstorFail(); // get product
            $product->delete(); // delete product
            Session::flash('success', 'Create Product Success !!!'); // send messages success
            return redirect('dashboard/product'); // redirect page show list product
        } catch (Exception $e) {
            Session::flash('error', 'Create Product Field !!!'); // send messages error
            return redirect()->back(); // redirect page previoust
        }
    }


    private function fileUpload(Request $request)
    {
        try {
            if ($request->file('image')) {
                $path = Storage::putFile('public/products/', $request->file('image'));
                $image = app('attachment')->create([
                    'user_id' => Auth::user()->id,
                    'mime_type' => Storage::mimeType($path),
                    'url' => explode('/',$path)[sizeof(explode('/', $path))-1],
                ]);
                return $image;
            }else{
               return redirect()->back();
            }
        } catch (Exception $e) {
            return redirect()->back();
        }
    }

}
