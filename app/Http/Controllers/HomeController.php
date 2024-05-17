<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use App\Models\Carte;
use App\Models\Infos;
use App\Models\Orders;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('Dashboard');
       // return view('home');
    }
    public function SelectedCategory($id)
    {
        $Products = DB::table('products')
            ->join('category', 'products.idcategory', '=', 'category.id')
            ->join('marques', 'products.idmarque', '=', 'marques.id')
            ->join('stocks', 'products.id', '=', 'stocks.idproduct')
            ->select('products.*', 'category.name as category', 'marques.name as marque_name', 'stocks.qte')
            ->where('category.id',$id)
            ->paginate(9);
        $categories = DB::table('category')
            ->select('category.name as category_name', 'category.id', DB::raw('count(products.id) as product_count'), 'products.id as product_id')
            ->leftJoin('products', 'category.id', '=', 'products.idcategory')
            ->groupBy('category.id')
            ->get();

        $checkContentForData = false;
        // Execute the getmac command
        $shellexec = exec('getmac');
        // Remove spaces
        $shellexec = str_replace(' ', '', $shellexec);

        // Remove 'N/A' string
        $shellexec = str_replace('N/A', '', $shellexec);
        $productsCarte   = DB::table('products as p')
        ->join('carte as c','c.idproduct','=','p.id')
        ->select('p.name','c.qte','c.price')
        ->where('c.macaddress','=',$shellexec)
        ->get();

        if($productsCarte->isEmpty())
        {
            $checkContentForData = false;
        }
        else
        {
            $checkContentForData = true;
        }
        $Infos = Infos::first();
        return view('Product.Category.index') ->with('listProduct',$Products)
        ->with('categories',$categories)
        ->with('checkContentForData',$checkContentForData)
        ->with('Infos',$Infos)


        ;
    }

    public function welcome()
    {
        try
        {
            //$categories = Category::take(8)->get();
            $categories = Category::select('category.name as category_name','category.id as id')
            ->leftJoin('products', 'category.id', '=', 'products.idcategory')
            ->selectRaw('count(products.id) as product_count')
            ->groupBy('category.id')
            ->get();


            $Featured_Products = DB::table('products as p')
            ->join('stocks as s','s.idproduct','=','p.id')
            ->join('marques as m','m.id','=','p.idmarque')
            ->select('p.name','p.image','p.price','s.qte','m.name as namemarque')
            ->where('p.featured','=','true')
            ->get();

            $Trending_Products = DB::table('products as p')
            ->join('stocks as s','s.idproduct','=','p.id')
            ->join('marques as m','m.id','=','p.idmarque')
            ->join('category as c','c.id','=','p.idcategory')
            ->select('p.name','p.image','p.price','s.qte','m.name as namemarque','c.name as namecategory','p.id')
            ->where('p.trading','=','true')
            ->get();

            $Best_Deals = DB::table('products as p')
            ->join('stocks as s','s.idproduct','=','p.id')
            ->join('marques as m','m.id','=','p.idmarque')
            ->select('p.name','p.image','p.price','s.qte','m.name as namemarque')
            ->where('p.bestdeals','=','true')
            ->get();

            $New_Products = DB::table('products as p')
            ->join('stocks as s','s.idproduct','=','p.id')
            ->join('marques as m','m.id','=','p.idmarque')
            ->select('p.name','p.image','p.price','s.qte','m.name as namemarque')
            ->where('p.newproduct','=','true')
            ->get();

            $Best_Selling = DB::table('products as p')
            ->join('stocks as s','s.idproduct','=','p.id')
            ->join('marques as m','m.id','=','p.idmarque')
            ->select('p.name','p.image','p.price','s.qte','m.name as namemarque')
            ->where('p.bestselling','=','true')
            ->get();

            $checkContentForData = false;
            // Execute the getmac command
            $shellexec = exec('getmac');
            // Remove spaces
            $shellexec = str_replace(' ', '', $shellexec);

            // Remove 'N/A' string
            $shellexec = str_replace('N/A', '', $shellexec);
            $productsCarte   = DB::table('products as p')
            ->join('carte as c','c.idproduct','=','p.id')
            ->select('p.name','c.qte','c.price')
            ->where('c.macaddress','=',$shellexec)
            ->get();

            if($productsCarte->isEmpty())
            {
                $checkContentForData = false;
            }
            else
            {
                $checkContentForData = true;
            }

            $Infos = Infos::first();
            return view('welcome')
            ->with('categories',$categories)
            ->with('Featured_Products',$Featured_Products)
            ->with('Trending_Products',$Trending_Products)
            ->with('Best_Deals',$Best_Deals)
            ->with('New_Products',$New_Products)
            ->with('Best_Selling',$Best_Selling)
            ->with('checkContentForData',$checkContentForData)
            ->with('Infos',$Infos)

            ;
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function CountCarteByClient()
    {
        try
        {

            // Execute the getmac command
            $shellexec = exec('getmac');
            // Remove spaces
            $shellexec = str_replace(' ', '', $shellexec);

            // Remove 'N/A' string
            $shellexec = str_replace('N/A', '', $shellexec);
            $countCarteByClient = Carte::where('macaddress', '=', $shellexec)->count();

            // return prodcuts by macaddress

            $products   = DB::table('products as p')
            ->join('carte as c','c.idproduct','=','p.id')
            ->select('p.name','c.qte','c.price')
            ->where('c.macaddress','=',$shellexec)
            ->get();

            // return total by mac addrees

            $total    = DB::table('products as p')
            ->join('carte as c', 'c.idproduct', '=', 'p.id')
            ->where('c.macaddress', '=', $shellexec)
            ->sum('c.total');



            return response()->json([
                'status'   => 200,
                'count'    => $countCarteByClient,
            ]);
        } catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function Contact()
    {
        $categories = Category::select('category.name as category_name','category.id as id')
        ->leftJoin('products', 'category.id', '=', 'products.idcategory')
        ->selectRaw('count(products.id) as product_count')
        ->groupBy('category.id')
        ->get();
        $Infos = Infos::first();
        return view('Contact.index')
        ->with('Infos',$Infos)
        ->with('categories',$categories)
        ;
    }

    public function Cart()
    {
        $Infos = Infos::first();
        $shellexec = exec('getmac');
        // Remove spaces
        $shellexec = str_replace(' ', '', $shellexec);

        // Remove 'N/A' string
        $shellexec = str_replace('N/A', '', $shellexec);

        $ListCart   = DB::table('products as p')
            ->join('carte as c','c.idproduct','=','p.id')
            ->select('c.qte','c.price','c.total','p.name','p.image','p.id')
            ->where('c.macaddress',$shellexec)
            ->get();
            $categories = Category::select('category.name as category_name')
            ->leftJoin('products', 'category.id', '=', 'products.idcategory')
            ->selectRaw('count(products.id) as product_count')
            ->groupBy('category.id')
            ->get();
            $Infos = Infos::first();
        return view('Cart.index')

        ->with('Infos',$Infos)
        ->with('categories',$categories)
        ->with('ListCart',$ListCart);
    }

    public function changeCart(Request $request)
    {
        try
        {

            $shellexec = exec('getmac');
            // Remove spaces
            $shellexec = str_replace(' ', '', $shellexec);

            // Remove 'N/A' string
            $shellexec = str_replace('N/A', '', $shellexec);
            $price = Products::where('id',$request->idproduct)->first();
            $Carte = Carte::where('idproduct',$request->idproduct)->where('macaddress',$shellexec)->update([
                'qte'        =>$request->qte,
                'total'      =>$price->price * ($request->qte),
            ]);
            return response()->json([
                'status'    => 200,
            ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function getMyCartePageCarte()
    {
        $shellexec = exec('getmac');
        // Remove spaces
        $shellexec = str_replace(' ', '', $shellexec);

        // Remove 'N/A' string
        $shellexec = str_replace('N/A', '', $shellexec);

        $ListCart   = DB::table('products as p')
            ->join('carte as c','c.idproduct','=','p.id')
            ->select('c.qte','c.price','c.total','p.name','p.image','p.id')
            ->where('c.macaddress',$shellexec)
            ->get();

        $Total = Carte::where('macaddress',$shellexec)->sum('total');

            return response()->json([
                'status'    => 200,
                'data'      => $ListCart,
                'Total'     => $Total
            ]);
    }



    public function Dashboard()
    {

        $TopProductSales = DB::table('products')
            ->join('factures', 'products.id', '=', 'factures.idproduct')
            ->join('marques', 'products.idmarque', '=', 'marques.id')
            ->join('category', 'products.idcategory', '=', 'category.id')
            ->select('products.id', 'products.name', 'products.image', 'marques.name AS marque', 'category.name AS category', DB::raw('COUNT(*) AS numberOfSales'))
            ->groupBy('products.id')
        ->get();



        // Query to count the total number of products
        $totalProducts = DB::table('factures')->distinct()->count('idproduct');


        $sevenDaysAgo = Carbon::now()->subDays(7)->toDateString();

        $totalLast7Days = DB::table('orders')
        ->whereDate('created_at', '>=', $sevenDaysAgo)
        ->sum('total');

        $thirtyDaysAgo = Carbon::now()->subDays(30)->toDateString();
        $totalOrderLast30Days = DB::table('orders')
        ->whereDate('created_at', '>=', $thirtyDaysAgo)
        ->count();

        // Sum Total Order
        $TotalOrder = Db::table('orders')->count();

        // order traitement
        $Ordertraitement = DB::table('orders')->where('status','Traitement')->count();

        // order livré
        $Orderlivre = DB::table('orders')->where('status','livré')->count();

        $recentOrders = DB::table('orders')
        ->join('clients', 'orders.idclient', '=', 'clients.id')
        ->select('orders.*', 'clients.name as client_name', 'clients.phone as client_phone')
        ->latest()

        ->get();


        $currentMonth = now()->startOfMonth();

        // Get the last day of the current month
        $lastDayOfMonth = now()->endOfMonth();

        // Initialize an array to store total order amounts per day
        $totalOrdersAmountPerDay = [];

        // Loop through each day of the current month
        while ($currentMonth <= $lastDayOfMonth) {
            // Get the formatted date (in the format "Y-m-d") for the current day
            $formattedDate = $currentMonth->format('Y-m-d');

            // Get the total order amount for the current day
            $totalAmount = Orders::whereDate('created_at', $formattedDate)->sum('total');

            // Store the total order amount for the current day in the array
            $totalOrdersAmountPerDay[$formattedDate] = $totalAmount;

            // Move to the next day
            $currentMonth->addDay();
        }
         // Get the current month
        $currentMonthStart = now()->startOfMonth();

        // Get the total sum of the "total" column for this month
        $totalAmountThisMonth = Orders::where('created_at', '>=', $currentMonthStart)
        ->sum('total');

        $currentYear = now()->year;

        // Get the total sum of the "total" column for this year
        $totalAmountThisYear = Orders::whereYear('created_at', $currentYear)
                                     ->sum('total');
        return view('Admin.index')
        ->with('TopProductSales',$TopProductSales)
        ->with('totalProducts',$totalProducts)
        ->with('totalLast7Days',$totalLast7Days)
        ->with('totalOrderLast30Days',$totalOrderLast30Days)
        ->with('TotalOrder',$TotalOrder)
        ->with('Ordertraitement',$Ordertraitement)
        ->with('Orderlivre',$Orderlivre)
        ->with('recentOrders',$recentOrders)
        ->with('totalOrdersAmountPerDay',$totalOrdersAmountPerDay)
        ->with('totalAmountThisMonth',$totalAmountThisMonth)
        ->with('totalAmountThisYear',$totalAmountThisYear)

        ;
    }


    public function Detail($id)
    {
        $Detail = DB::table('orders as o')
        ->join('clients as c','c.id','=','o.idclient')
        ->select('o.*','c.name','c.email','c.phone','c.address','c.city')
        ->where('o.id',$id)
        ->first();
        $Detail->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $Detail->created_at)->translatedFormat('d F, Y');

        $products = DB::table('orders as o')
        ->join('ligneorders as l','l.idorders','=','o.id')
        ->join('products as p','p.id','=','l.idproduct')
        ->select('p.name','p.id','p.image','l.qte','l.price','l.total')
        ->where('o.id',$id)

        ->get();



        return view('Orders.Detail')
        ->with('Detail',$Detail)
        ->with('products',$products)

        ;
    }


    public function Account()
    {
        $user = User::first();
        return view('Account.index')
        ->with('user',$user);
    }

    public function UpdateAdmin(Request $request)
    {
        try {
            if ($request->password != $request->password_confirmation) {
                return redirect()->back()->with('error', 'Les mots de passe ne correspondent pas');
            } else {
                $user = User::findOrFail(auth()->id()); // Assuming the user is authenticated
                $user->update([
                    'name'     => $request->name,
                    'email'    => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                return redirect()->back()->with('success', 'Modification réussie');
            }
        } catch (\Throwable $th) {
            // Log the error or handle it appropriately
            return redirect()->back()->with('error', 'Une erreur s\'est produite');
        }
    }

    public function About()
    {
        $Infos = Infos::first();
        $categories = Category::select('category.name as category_name','category.id as id')
        ->leftJoin('products', 'category.id', '=', 'products.idcategory')
        ->selectRaw('count(products.id) as product_count')
        ->groupBy('category.id')
        ->get();
        return view('About.index')

        ->with('Infos', $Infos)
        ->with('categories', $categories)

        ;
    }
}
