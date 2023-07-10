<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\DashboardModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = DashboardModel::all();
        return view('admin.dashboard.v_dashboard', ['banner' => $banner]);
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
 
         $this->DashboardModel->insertData($data);
         return redirect()->route('admin')->with('toast_success', 'Data added successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_banner)
    {
        $validated = $request->validate([
            'title' => 'required',
            'image' => 'mimes:jpg,jpeg,bmp,png',
        ]);

        if ($request->image != "") {
            $image_file = $request->file('image');
            $image_extension = $image_file->extension();
            $image_name = $request->title . "." . $image_extension;
            $path = $request->file('image')->storeAs('image_admin/banner', $image_name);

            // For Delete Image
            $banner = $this->DashboardModel->detailData($id_banner);
            if ($banner->image != '' || $banner->image == null) {
                    unlink(public_path('storage/image_admin/banner') . '/' . $banner->image);
                }

            $data = [
                'title' => Request()->title,
                'image' => $image_name,
            ];
            $this->DashboardModel->updateData($id_banner, $data);
        } else {
            //if you don't want to change the photo
            $data = [
                'title' => Request()->title,
            ];
            $this->DashboardModel->updateData($id_banner, $data);
        }
        return redirect()->route('admin')->with('toast_success', 'Data Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_banner)
    {
        // To delete an image
        $banner = $this->DashboardModel->detailData($id_banner);
        if ($banner->image != '') {
                    unlink(public_path('storage/image_admin/banner') . '/' . $banner->image);
                }
        $this->DashboardModel->deleteData($id_banner);
        return redirect()->route('admin');
    }
}
