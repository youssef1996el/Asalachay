<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infos;
use Illuminate\Support\Facades\Storage;
class InfoController extends Controller
{
    public function index()
    {
        return view('Infos.index');
    }


    public function UpdateSetting(Request $request)
    {
        try
        {

            $checkInfo = Infos::count();
            if ($checkInfo > 0) {
                $info = Infos::first();
                $oldLogoPath = 'images/' . $info->logo; // Include the folder path
                if (Storage::exists($oldLogoPath)) {
                    // Delete the old logo file
                    if (Storage::delete($oldLogoPath)) {
                        // File deleted successfully
                        $image = $request->file('file');
                        $imagePath = $image->store('images', 'public'); // Store in the images folder

                        $updateInfo = Infos::where('id', 1)->update([
                            'address' => $request->Adresse,
                            'phone' => $request->phone,
                            'email' => $request->email,
                            'logo' => $imagePath,
                        ]);
                        return redirect()->back()->with("success", "Le changement a été effectué avec succès");
                    } else {
                        // Error deleting the file
                        return redirect()->back()->with("error", "Erreur lors de la suppression de l'ancien logo.");
                    }
                } else {
                    // File does not exist, proceed with the update
                    $image = $request->file('file');
                    $imagePath = $image->store('images', 'public'); // Store in the images folder

                    $updateInfo = Infos::where('id', 1)->update([
                        'address' => $request->Adresse,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'logo' => $imagePath,
                    ]);
                    return redirect()->back()->with("success", "Le changement a été effectué avec succès");
                }
            } else {
                // No existing info record, create a new one
                $image = $request->file('file');
                $imagePath = $image->store('images', 'public'); // Store in the images folder

                $updateInfo = Infos::create([
                    'address' => $request->Adresse,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'logo' => $imagePath,
                ]);
                return redirect()->back()->with("success", "Le changement a été effectué avec succès");
            }


        }
        catch (\Throwable $th) {
            throw $th;
        }
    }
}
