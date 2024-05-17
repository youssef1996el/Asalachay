<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;
class BrandController extends Controller
{
    public function index()
    {
        return view('Admin.Brand');
    }

    public function Store(Request $request)
    {
        try
        {
            Brands::create([
                'name'   => $request->name,
                'image'  => $request->image
            ]);
            return response()->json([
                'status'   => 'success',
            ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }
}
