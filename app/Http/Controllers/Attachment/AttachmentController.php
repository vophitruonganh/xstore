<?php

namespace Xstore\Http\Controllers\Attachment;

use Illuminate\Http\Request;
use Xstore\Http\Requests\RequestAttachment;
use Xstore\Http\Controllers\Controller;
use Xstore\Models\TaAttachment;
class AttachmentController extends Controller
{
    /**
     * Class Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->m_attachment = new TaAttachment;
    }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.dashboard.content.attachment.index')
                ->with('categories',$this->m_attachment->paginate(7));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.dashboard.content.attachment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestAttachment $request)
    {
        if ($this->m_attachment->create($request->all())) {
            return redirect('dashboard');
        }else{
            return redirect('dashboard/attachment/create');
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
            return view('layouts.dashboard.content.attachment.index');
        }else{
            return view('layouts.dashboard.content.attachment.index')
                    ->with('attachment',$this->m_attachment->where('id','=',$id)->first());
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
        return view('layouts.dashboard.attachment.edit')->with('trademark',$this->m_attachment->where('id','=',$id)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requestattachment $request, $id)
    {
        $attachment = $this->m_attachment->where('id','=','id')->first();
        if ($attachment->update($request->all())) {
            return redirect('dashboard');
        }else{
            return redirect('dashboard/attachment/update');
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
        $attachment = $this->m_attachment->where('id','=','id')->first();
        if ($attachment->delete()) {
            return redirect('dashboard');
        }else{
            return redirect('dashboard/attachment');
        }
    }


}
