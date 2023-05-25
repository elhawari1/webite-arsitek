<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.v_dashboard');
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
            'image' => 'required|mimes:jpg,jpeg,bmp,png',
        ]);

        //Retrieve uploaded image files
         $image_file = $request->file('image');
        //Retrieves uploaded image file extension
         $image_extension = $image_file->extension();
         //Form the name of the image file to be saved
         $image_name = $request->title . "." . $image_extension;
         //Saves the image file to the specified storage directory
         $path = $request->file('image')->storeAs('image_admin/banner', $image_name);
        
         $data = [
            'title' => Request()->title,
            'image' => $image_name,
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
    public function show($id)
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
