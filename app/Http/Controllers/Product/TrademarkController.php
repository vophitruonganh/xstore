<?php

namespace Xstore\Http\Controllers\Product;

use Illuminate\Http\Request;
use Xstore\Http\Requests\RequestTrademark;
use Xstore\Http\Controllers\Controller;
class TrademarkController extends Controller
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
        return view('layouts.dashboard.content.trademark.index')
                ->with('trademarks',app('trademark')->paginate(16));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.content.trademark.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestTrademark $request)
    {
        if (app('trademark')->create($request)) {
            return redirect('dashboard/trademark');
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
        return view('trademark/detail')->with('trademark',app('trademark')->where('id','=',$id)->firstorFail());

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('layouts.dashboard.content.trademark.edit')
            ->with('trademark',app('trademark')->where('url','=',$id)->firstorFail())
            ->with('categories',app('category')->orderBy('name')->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestTrademark $request, $id)
    {
        try {
            $trademark = app('trademark')->where('id','=',$id)->firstorFail();
            if ($trademark->update($request->all())) {
                return redirect('dashboard/trademark');
            }else{
                return redirect()->back();
            }

        } catch (Exception $e) {
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
        $trademark = app('trademark')->where('id','=',$id)->firstorFail()->delete();
        // show messages implement
        return redirect('dashboard/trademark');
    }
}
