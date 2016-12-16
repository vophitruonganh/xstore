<?php

namespace Xstore\Http\Controllers\Product;

use Illuminate\Http\Request;
use Xstore\Http\Requests\RequestCategory;
use Xstore\Http\Controllers\Controller;
class CategoryController extends Controller
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
        return view('layouts.dashboard.content.category.index')
                ->with('categories',app('category')->paginate(16));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.content.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestCategory $request)
    {
        if (app('category')->create($request->all())) {
            return redirect('dashboard');
        }else{
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
        if(is_null($id)){
            return view('layouts.dashboard.content.category.index');
        }else{
            return view('layouts.dashboard.content.category.index')
                    ->with('category',app('category')->where('id','=',$id)->firstorFail());
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
        return view('layouts.dashboard.category.edit')->with('trademark',app('category')->where('id','=',$id)->firstorFail());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestCategory $request, $id)
    {
        $category = app('category')->where('id','=','id')->firstorFail();
        if ($category->update($request->all())) {
            return redirect('dashboard');
        }else{
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
        $category = app('category')->where('id','=','id')->firstorFail();
        if ($category->delete()) {
            return redirect('dashboard');
        }else{
            return redirect()->back();
        }
    }
}
