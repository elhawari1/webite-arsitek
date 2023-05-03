<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\ProjectModel;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'project' => ProjectModel::all()
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
            $title = $request->title;
            $type = $request->type;
            $area_size = $request->area_size;
            $design_style = $request->design_style;
            $address = $request->address;
            $status = $request->status;
            $date = $request->date;
            $description = $request->description;
            $image = $request->image;

            try {
                $pjt = new ProjectModel;
                $pjt->title = $title;
                $pjt->type =$type;
                $pjt->area_size = $area_size;
                $pjt->design_style = $design_style;
                $pjt->address = $address;
                $pjt->status = $status;
                $pjt->date = $date;
                $pjt->description = $description;
                $pjt->image = $image;
                $pjt->save();
                echo 'Data Berhasil Disimpan';
            } catch (Throwable $th) {
                echo $th;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
