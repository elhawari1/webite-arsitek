<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Admin\ProductModel;
use App\Models\Admin\ProjectModel;
use App\Http\Controllers\Controller;
use App\Models\Admin\DetailProjectModel;

class UserProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProject()
    {
        $project = ProjectModel::all();
        $detail_project = DetailProjectModel::all();
        return view('user.project.v_project', compact('project', 'detail_project'));
    }

    public function indexproduct()
    {
        $product = ProductModel::all();
        return view('user.product.v_product', ['product' => $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProject($id_project)
    {
        $project = ProjectModel::findOrFail($id_project);
        $detail_project = DetailProjectModel::where('id_project', $id_project)->get();
        return view('user.project.v_detailproject', compact('project', 'detail_project'));
    }

}
