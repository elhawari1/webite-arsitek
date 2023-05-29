<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\ProjectModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


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
            'image_thumbnail' => 'required|mimes:jpg,jpeg,bmp,png',
            'image_detail' => 'required|mimes:jpg,jpeg,bmp,png',
        ]);

        // For Image Thumbnail
        //Retrieve uploaded image files
         $image_file = $request->file('image_thumbnail');
        //Retrieves uploaded image file extension
         $image_extension = $image_file->extension();
         //Form the name of the image file to be saved
         $image_name = $request->title . "." . $image_extension;
         //Saves the image file to the specified storage directory
         $path = $request->file('image_thumbnail')->storeAs('image_admin/project', $image_name);
        
        // For Image Detail
        $image_detail = array();
        if ($files_detail = $request->file('image_detail')) {
            foreach ($request->file('image_detail') as $images_detail) {
                $extension = $images_detail->getClientOriginalExtension();
                $imageName = $request->title . '_' . $request->id_project . '.' . $extension;
                $images_detail->storeAs('image_admin/project_detail', $imageName);
            }
            // foreach ($files_detail as $file_detail) {
            //     $extension_image = $file_detail->getClientOriginalExtension();
            //     $name_image = $request->title . "." . $image_extension;
                
            // }
        }



         $data = [
            'title' => Request()->title,
            'type' => Request()->type,
            'area_size' => Request()->area_size,
            'design_style' => Request()->design_style,
            'address' => Request()->address,
            'status' => Request()->status,
            'date' => Request()->date,
            'description' => Request()->description,
            'image_thumbnail' => $image_name,
            'image_detail' => $imageName,
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

        $validated = $request->validate([
            'title' => 'required',
            'type' => 'required',
            'area_size' => 'required',
            'design_style' => 'required',
            'address' => 'required',
            'status' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image_thumbnail' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($request->image_thumbnail != "") {
            //if you want to change the photo
            //upload image
            $image_file = $request->file('image_thumbnail');
            $image_extension = $image_file->extension();
            $image_name = $request->title . "." . $image_extension;
            $path = $request->file('image_thumbnail')->storeAs('image_admin/project', $image_name);

            $project = $this->ProjectModel->detailData($id_project);
            if ($project->image_thumbnail <> "") {
                        unlink(public_path('storage/image_admin/project') . '/' . $project->image_thumbnail);
                    }
                    
            $data = [
                'title' => Request()->title,
                'type' => Request()->type,
                'area_size' => Request()->area_size,
                'design_style' => Request()->design_style,
                'address' => Request()->address,
                'status' => Request()->status,
                'date' => Request()->date,
                'description' => Request()->description,
                'image_thumbnail' => $image_name,
            ];
            $this->ProjectModel->updateData($id_project, $data);
        } else {
            //if you don't want to change the photo
            $data = [
                'title' => Request()->title,
                'type' => Request()->type,
                'area_size' => Request()->area_size,
                'design_style' => Request()->design_style,
                'address' => Request()->address,
                'status' => Request()->status,
                'date' => Request()->date,
                'description' => Request()->description,
            ];
            $this->ProjectModel->updateData($id_project, $data);
        }
         return redirect()->route('project')->with('pesan', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_project)
    {
        // To delete an image
        $project = $this->ProjectModel->detailData($id_project);
        if ($project->image <> "") {
                    unlink(public_path('storage/image_admin/project') . '/' . $project->image);
                }
        // if ($project->image != '') {
        //             // Storage::delete($project->image);
        //             Storage::disk('public')->delete('storage/image_admin/project' . '/' . $project->image);
        //         }
        $this->ProjectModel->deleteData($id_project);
        return redirect()->route('project')->with('pesan', 'Data Deleted Successfully');
    }
}
