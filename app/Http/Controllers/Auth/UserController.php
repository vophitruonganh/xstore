<?php

namespace Xstore\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Xstore\Http\Controllers\Controller;
class UserController extends Controller
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
        return view('layouts.dashboard.content.user.index')
                ->with('users',app('user')->paginate(7));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.content.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requestuser $request)
    {
        if (app('user')->create($request->all())) {
            return redirect('dashboard');
        }else{
            return redirect('dashboard/user/create');
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
            return view('layouts.dashboard.content.user.index');
        }else{
            return view('layouts.dashboard.content.user.index')
                    ->with('user',app('user')->where('id','=',$id)->first());
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
        return view('layouts.dashboard.user.edit')->with('trademark',app('user')->where('id','=',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requestuser $request, $id)
    {
        $user = app('user')->where('id','=','id')->first();
        if ($user->update($request->all())) {
            return redirect('dashboard');
        }else{
            return redirect('dashboard/user/update');
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
        $user = app('user')->where('id','=','id')->first();
        if ($user->delete()) {
            return redirect('dashboard');
        }else{
            return redirect('dashboard/user');
        }
    }
}
