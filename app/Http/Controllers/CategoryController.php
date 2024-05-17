<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $Category = Category::all();
        return view('Category.index')
        ->with("Category",$Category);
    }

    public function Store(Request $request)
    {
        try
        {
            $checkIfCategory = Category::where('name',trim($request->name))->count();
            if($checkIfCategory > 0)
            {
                return response()->json([
                    'status'   => 400,
                ]);
            }
            else
            {
                $Category = Category::create([
                    'name'   => trim($request->name),
                ]);
                return response()->json([
                    'status' => 200,
                ]);
            }
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }


    public function Update(Request $request)
    {
        try
        {
            $checkIfCategory = Category::where('name',trim($request->name))->count();
            if($checkIfCategory > 0)
            {
                return response()->json([
                    'status'   => 400,
                ]);
            }
            else
            {
                $Category = Category::where('id',$request->id)->update([
                    'name'    => trim($request->name),
                ]);
                return response()->json([
                    'status' => 200,
                ]);
            }
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }


    public function Delete(Request $request)
    {
        try
        {
        /*     $checkIfCategory = Category::where('name',trim($request->name))->count();
            if($checkIfCategory > 0)
            {
                return response()->json([
                    'status'   => 400,
                ]);
            }
            else
            { */

                $Category = Category::where('id',$request->id)->delete();
                return response()->json([
                    'status' => 200,
                ]);
            /* } */
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }


    public function FetchCategory()
    {
        try
        {
            $Category = Category::all();
            return response()->json([
                'status' => 200,
                'data'   => $Category
            ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }

    }
}
