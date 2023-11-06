<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
use App\Models\Admin\ProjectModel;
use App\Http\Controllers\Controller;
use App\Models\Admin\DashboardModel;
use App\Models\Admin\DetailProjectModel;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = DashboardModel::all();
        $project = ProjectModel::all();
        $product = ProductModel::all();
        $detail_project = DetailProjectModel::all();
        return view('user.v_home', compact('banner', 'project', 'product' , 'detail_project'));
    }

    public function contact()
    {
        return view('user.v_contanct');
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
