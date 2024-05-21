<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infos;
use App\Models\Carte;
use App\Models\Clients;
use App\Models\Orders;
use App\Models\Factures;
use App\Models\User;
use App\Models\LigneOrders;
use App\Models\Category;
use DB;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;
class OrderController extends Controller
{
    public function index()
    {
        $recentOrders = DB::table('orders')
        ->join('clients', 'orders.idclient', '=', 'clients.id')
        ->select('orders.*', 'clients.name as client_name', 'clients.phone as client_phone')
        ->latest()
        ->get();

        foreach ($recentOrders as $order) {
            $order->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->translatedFormat('d F, Y');
        }

        return view('Orders.index')

        ->with('recentOrders',$recentOrders);
    }

    public function checkout()
    {
        $Infos = Infos::first();
        $shellexec = exec('getmac');
        // Remove spaces
        $shellexec = str_replace(' ', '', $shellexec);

        // Remove 'N/A' string
        $shellexec = str_replace('N/A', '', $shellexec);
        $count   = DB::table('products as p')
        ->join('carte as c','c.idproduct','=','p.id')
        ->select('c.qte','c.price','c.total','p.name','p.image','p.id')
        ->where('c.macaddress',$shellexec)
        ->count();


        $Total = Carte::where('macaddress',$shellexec)->sum('total');

        $categories = Category::select('category.name as category_name')
        ->leftJoin('products', 'category.id', '=', 'products.idcategory')
        ->selectRaw('count(products.id) as product_count')
        ->groupBy('category.id')
        ->get();

        return view('Checkout.index')
        ->with('Infos',$Infos)
        ->with('count',$count)
        ->with('Total',$Total)
        ->with('categories', $categories)

        ;
    }

    public function PostCheckout(Request $request)
    {
        try
        {

            $shellexec = exec('getmac');
            // Remove spaces
            $shellexec = str_replace(' ', '', $shellexec);

            // Remove 'N/A' string
            $shellexec = str_replace('N/A', '', $shellexec);
            $count   = DB::table('products as p')
            ->join('carte as c','c.idproduct','=','p.id')
            ->select('c.qte','c.price','c.total','p.name','p.image','p.id')
            ->where('c.macaddress',$shellexec)
            ->count();
            if($count == 0)
            {
                return redirect()->back()->with('error','Votre panier est vide');
            }

            //create client
            $checkClient = Clients::where('name',trim($request->Name))
                                    ->where('phone',trim($request->phone))
                                    ->count();
            $Clients = "";
            if($checkClient == 0)
            {
                $Clients = Clients::create([
                    'name'       => trim($request->Name),
                    'email'      => trim($request->email),
                    'phone'      => trim($request->phone),
                    'address'    => trim($request->address),
                    'city'       => trim($request->city),
                ]);
            }
            else
            {
                $Clients  = Clients::where('name',trim($request->Name))
                                    ->where('phone',trim($request->phone))->first();
            }


            if($Clients)
            {
                $shellexec = exec('getmac');
                // Remove spaces
                $shellexec = str_replace(' ', '', $shellexec);

                // Remove 'N/A' string
                $shellexec = str_replace('N/A', '', $shellexec);
                $count   = DB::table('products as p')
                ->join('carte as c','c.idproduct','=','p.id')
                ->select('c.qte','c.price','c.total','p.name','p.image','p.id')
                ->where('c.macaddress',$shellexec)
                ->count();

                $Total = Carte::where('macaddress',$shellexec)->sum('total');
                $code = time() . '-' . substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5);
                $Orders = Orders::create([
                    "code"          =>$code,
                    "countarticle"  =>$count,
                    "status"        =>"Traitement",
                    "total"         =>$Total,
                    "idclient"      =>$Clients->id,
                ]);
                $listCart   = DB::table('products as p')
                ->join('carte as c','c.idproduct','=','p.id')
                ->select('c.qte','c.price','c.total','p.name','p.image','p.id')
                ->where('c.macaddress',$shellexec)
                ->get();
                foreach($listCart as $item)
                {
                    $Factures = Factures::create([
                        'idproduct' =>$item->id,
                        'idorders'  =>$Orders->id,
                    ]);

                    $LigneOrders = LigneOrders::create([
                        'qte'       => $item->qte,
                        'price'     => $item->price,
                        'total'     => $item->total,
                        'idproduct' =>$item->id,
                        'idorders'  =>$Orders->id,
                    ]);
                }
                $user = User::find(1);
                Notification::send($user,new OrderNotification($Clients->name, $Total));
                $Carte = Carte::where('macaddress',$shellexec)->delete();
                return redirect()->back()->with("success","votre paiement est réussi");


            }

        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }


    public function Livre($id)
    {
        $Order= Orders::where('id',$id)->update([
            'status'   => "livré",
        ]);
        return redirect()->back();
    }
    public function Traitement($id)
    {
        $Order= Orders::where('id',$id)->update([
            'status'   => "Traitement",
        ]);
        return redirect()->back();
    }
}
