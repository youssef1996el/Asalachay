<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marques;
class MarqueController extends Controller
{
    public function FetchMarque()
    {
        $Marques = Marques::all();
        return response()->json([
            'status'   => 200,
            'data'     => $Marques
        ]);
    }

    public function Store(Request $request)
    {
        try
        {
            $checkMarqueExiste = Marques::where('name',trim($request->name))->count();
            if($checkMarqueExiste > 0)
            {
                return response()->json([
                    'status'   => 400,
                ]);
            }
            else
            {
                $Marque = Marques::create([
                    'name'      => trim($request->name),
                    'iduser'    => 1
                ]);
                return response()->json([
                    'status'   => 200,
                ]);
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
