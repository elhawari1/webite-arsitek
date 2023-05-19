<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\ProjectModel;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->ProjectModel = new ProjectModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'project' => $this->ProjectModel->allData()
        ];
        return view('admin.project.v_project', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.v_createproject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'area_size' => 'required',
            'design_style' => 'required',
            'address' => 'required',
            'status' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,bmp,png',
        ]);

         $image_file = $request->file('image');
         $image_extension = $image_file->extension();
         $image_name = $request->title . "." . $image_extension;
         $path = $request->file('image')->storeAs('image_admin/project', $image_name);
        
         $data = [
            'title' => Request()->title,
            'type' => Request()->type,
            'area_size' => Request()->area_size,
            'design_style' => Request()->design_style,
            'address' => Request()->address,
            'status' => Request()->status,
            'date' => Request()->date,
            'description' => Request()->description,
            'image' => $path,
        ];
 
         $this->ProjectModel->insertData($data);
         return redirect()->route('project')->with('pesan', 'Data Berhasil Di Tambahkan');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_project)
    {
        $data=[
            'project' => $this->ProjectModel->detailData($id_project)
        ];
        return view('admin.project.v_showproject',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_project)
    {
        $data=[
            'project' => $this->ProjectModel->detailData($id_project)
        ];
        return view('admin.project.v_editproject', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_project)
    {
        //
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
