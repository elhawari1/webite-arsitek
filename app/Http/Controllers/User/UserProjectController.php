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
    public function indexProject(Request $request)
    {
        if ($request->has('search')) {
            $project = ProjectModel::where('title', 'LIKE', '%' .$request->search. '%')
            ->orWhere('type', 'LIKE', '%' .$request->search. '%')
            ->paginate(4);
        } else {
            $project = ProjectModel::paginate(4);
        }
        $detail_project = DetailProjectModel::all();
        return view('user.project.v_project', compact('project', 'detail_project'));
    }

    public function indexproduct(Request $request)
    {
        if ($request->has('search')) {
            $product = ProductModel::where('title', 'LIKE', '%' .$request->search. '%')
            ->orWhere('type', 'LIKE', '%' .$request->search. '%')
            ->paginate(4);
        }else {
            $product = ProductModel::paginate(4);
        }
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

    public function showProduct($id_product)
    {
        $product = ProductModel::findOrFail($id_product);
        // $product = ProjectModel::findOrFail($id_product);
        // $detail_product = DetailProjectModel::where('id_product', $id_product)->get();
        return view('user.product.v_detailproduct', ['product' => $product]);
    }

}
