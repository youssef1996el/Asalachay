<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Stocks;
use App\Models\Category;
use App\Models\Marques;
use App\Models\Imageproducts;
use DB;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Models\Carte;
use App\Models\Infos;
class ProductController extends Controller
{
    public function index()
    {
        $Products = DB::select("select p.id,p.name,p.description,p.image,m.name as marque,c.name as category,p.price,s.qte,p.featured,p.trading,p.bestdeals,p.newproduct,p.bestselling from products p , category c, marques m,stocks s where p.idmarque = m.id and p.idcategory = c.id
        and p.id = s.idproduct");
       // dd($Products);
        return view('Products.index')->with('Products', $Products);
    }
    public function AddProduct()
    {

        return view('Products.AddProduct');
    }

    public function Store(Request $request)
    {

        try
        {
            $filePaths = [];
            foreach ($request->file('file') as $image)
            {
                $imagePath = $image->store('images', 'public');
                $fileName = basename($imagePath);
                $filePaths[] = $imagePath;
            }
            $image_product = $filePaths[0];

            $Product = Products::create([
                'name'          => $request->name,
                'description'   => $request->description == null ? null : $request->description,
                'image'         => $image_product,
                'idmarque'      => $request->idmarque,
                'idcategory'    => $request->idcategory,
                'price'         => $request->price,
                'iduser'        => Auth::user()->id,
                'featured'      => null,
                'trading'       => null,
                'bestdeals'     => null,
                'newproduct'    => null,
                'bestselling'   => null,


            ]);
            if($Product)
            {
                $check = Stocks::where('idproduct', $Product->id)->count();
                if($check > 0)
                {
                    $updateQteProduct = DB::select("update stocks set qte = qte + ? where idproduct = ?",[$request->qty,$Product->id]);
                }
                else
                {
                    $Stocks = Stocks::create([
                        'idproduct' => $Product->id,
                        'qte'       => $request->qty,
                    ]);
                }

                // insert image product

                if(count($request->file) > 1)
                {
                    foreach ($request->file('file') as $image)
                    {
                        // Store image in storage
                        $imagePath = $image->store('images', 'public');

                        // Get the file name
                        $fileName = basename($imagePath);

                        // Create ImageProduct entry
                        Imageproducts::create([
                            'idproduct' => $Product->id,
                            'image'    => $fileName
                        ]);
                    }
                }

            }
            return redirect()->back()->with('success', ' ajoutée avec succès.');

        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function Edit($id)
    {

        $Product = DB::table('products')
        ->join('stocks','stocks.idproduct','products.id')
        ->join('category','category.id','products.idcategory')
        ->join('marques','marques.id','products.idmarque')
        ->select("products.*","stocks.qte",
                                            DB::raw('category.id as idcategory'),DB::raw('category.name as namecategory'),
                                            DB::raw('marques.id  as idmarque')  ,DB::raw('marques.name as namemarque'))
                                            ->where('products.id','=',$id)
        ->first();
        $Category =Category::all();
        $Marques = Marques::all();
        $Imageproducts = Imageproducts::where('idproduct',$id)->get();

        return view('Products.Edit')
        ->with('products',$Product)
        ->with('category',$Category)
        ->with('Marques' ,$Marques)
        ->with('Imageproducts',$Imageproducts);

    }

    public function DeleteImages(Request $request)
    {
        try
        {

            $Imageproducts = Imageproducts::where('id',$request->id)->select('image')->get();

            // delete from Storage
            foreach($Imageproducts as $item)
            {

                $imagePath = $item->image;

                Storage::delete('public/images/' . $imagePath);
            }
           $Imageproducts = Imageproducts::where('id',$request->id)->delete();
           return response()->json([
                'status'    => 200,
           ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function DeleteProduct(Request $request)
    {
        try
        {
            // delete stock product
            $StockProduct   = Stocks::where('idproduct',$request->id)->delete();

            // delete images product
            $ImageProduct   = Imageproducts::where('idproduct',$request->id)->delete();

            // delete product
            $product        = Products::where('id',$request->id)->delete();

            return response()->json([
                'status'       => 200,
            ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function ProductDetail($id)
    {
        $product = DB::table('products as p')
            ->select('p.id', 'p.name', 'p.description', 'p.image', 'm.name as marque', 'c.name as category', 'p.price', 's.qte')
            ->join('category as c', 'p.idcategory', '=', 'c.id')
            ->join('marques as m', 'p.idmarque', '=', 'm.id')
            ->join('stocks as s', 'p.id', '=', 's.idproduct')
            ->where('p.id', $id)
            ->first();
        $image_product = Imageproducts::where('idproduct',$id)->get();

       // dd($product);
        return view('Products.Detail')
        ->with('product',$product)
        ->with('image_product',$image_product)

        ;
    }

    public function StatusFeatured(Request $request)
    {
        try {
            // max is 8
            $checkFeatured  = Products::where('featured',"true")->count();
            $max            = 8;
            if($checkFeatured >= 8)
            {
                return response()->json([
                    'status'     => 404,
                    'message'    => "Vous ne pouvez pas changer ce statut car le maximum est de  .$max",
                ]);
            }
            else
            {
                $StatusFeatured = Products::where('id',$request->id)->update([
                    'featured'   => $request->status
                ]);
                return response()->json([
                    'status'    => 200,
                ]);
            }


        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function StatusTrading(Request $request)
    {
        try {
              // max is 9
            $checktrading  = Products::where('trading',"true")->count();
            $max            = 9;
            if($checktrading >= 9)
            {
                return response()->json([
                    'status'     => 404,
                    'message'    => "Vous ne pouvez pas changer ce statut car le maximum est de  .$max",
                ]);
            }
            else
            {
                $StatusTrading = Products::where('id',$request->id)->update([
                    'trading'   => $request->status
                ]);
                return response()->json([
                    'status'    => 200,
                ]);
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function Statusbestdeals(Request $request)
    {
        try {
            // max is 4
            $checkbestdeals  = Products::where('bestdeals',"true")->count();
            $max            = 4;
            if($checkbestdeals >= 4)
            {
                return response()->json([
                    'status'     => 404,
                    'message'    => "Vous ne pouvez pas changer ce statut car le maximum est de  .$max",
                ]);
            }
            else
            {
                $Statusbestdeals = Products::where('id',$request->id)->update([
                    'bestdeals'   => $request->status
                ]);
                return response()->json([
                    'status'    => 200,
                ]);
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function StatusNewProduct(Request $request)
    {
        try {
            // max is 3
            $checknewproduct  = Products::where('newproduct',"true")->count();
            $max            = 3;
            if($checknewproduct >= 3)
            {
                return response()->json([
                    'status'     => 404,
                    'message'    => "Vous ne pouvez pas changer ce statut car le maximum est de  .$max",
                ]);
            }
            else
            {
                $StatusNewProduct = Products::where('id',$request->id)->update([
                    'newproduct'   => $request->status
                ]);
                return response()->json([
                    'status'    => 200,
                ]);
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function StatusBestSelling(Request $request)
    {
        try {
            // max is 3
            $checkbestselling  = Products::where('bestselling',"true")->count();
            $max            = 3;
            if($checkbestselling >= 3)
            {
                return response()->json([
                    'status'     => 404,
                    'message'    => "Vous ne pouvez pas changer ce statut car le maximum est de  .$max",
                ]);
            }
            else
            {
                $StatusBestSelling = Products::where('id',$request->id)->update([
                    'bestselling'   => $request->status
                ]);
                return response()->json([
                    'status'    => 200,
                ]);
            }

        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function List(Request $request)
    {
        $Products = DB::table('products')
            ->join('category', 'products.idcategory', '=', 'category.id')
            ->join('marques', 'products.idmarque', '=', 'marques.id')
            ->join('stocks', 'products.id', '=', 'stocks.idproduct')
            ->select('products.*', 'category.name as category', 'marques.name as marque_name', 'stocks.qte')
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
        return view('Products')

        ->with('listProduct',$Products)
        ->with('categories',$categories)
        ->with('checkContentForData',$checkContentForData)
        ->with('Infos',$Infos)


        ;
    }


    public function AddCart(Request $request)
    {
        try
        {

            $checkProductHasStock = Stocks::where('idproduct',$request->idproduct)->select('qte')->first();
            if($checkProductHasStock->qte <=0)
            {
                return response()->json([
                    'status'      => 400,
                ]);
            }
            else
            {
                $shellexec = exec('getmac');
                // Remove spaces
                $shellexec = str_replace(' ', '', $shellexec);

                // Remove 'N/A' string
                $shellexec = str_replace('N/A', '', $shellexec);
                $checkProductExisteCart = Carte::where('macaddress',$shellexec)->where('idproduct',$request->idproduct)->count();
                $priceProduct = Products::where('id',$request->idproduct)->first();

                if($checkProductExisteCart > 0)
                {
                    $OldInformationProduct = Carte::where('macaddress',$shellexec)->where('idproduct',$request->idproduct)->first();

                    $UpdateCart   = Carte::where('macaddress',$shellexec)->where('idproduct',$request->idproduct)->update([
                        'qte'        => $OldInformationProduct->qte + ($request->qte > 1 ? $request->qte : 1),
                        'price'      => $priceProduct->price,
                        'total'      => $priceProduct->price * ($OldInformationProduct->qte + ($request->qte > 1 ? $request->qte : 1) ),

                    ]);
                    return response()->json([
                        'status'      => 200,
                    ]);
                }
                else
                {
                    $Carte = Carte::create([
                        'qte'              => ($request->qte > 1 ? $request->qte : 1),
                        'price'            => $priceProduct->price,
                        'total'            => ($request->qte > 1 ? $request->qte : 1) * $priceProduct->price,
                        'macaddress'       => $shellexec,
                        'idproduct'        => $request->idproduct,
                    ]);
                    return response()->json([
                        'status'      => 200,
                    ]);
                }


            }
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function ListCart()
    {
        try
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

            $sumCartByMacAddress = Carte::where('macaddress', $shellexec)->sum('total');

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
            $countCarteByClient = Carte::where('macaddress', '=', $shellexec)->count();
            return response()->json([
                'status'     => 200,
                'ListCart'   => $ListCart,
                'checkContentForData'   => $checkContentForData,
                'sumCartByMacAddress'   => $sumCartByMacAddress,
                'countCarteByClient'    => $countCarteByClient
            ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }


    public function DeleteCart(Request $request)
    {
        try
        {
            $shellexec = exec('getmac');
            // Remove spaces
            $shellexec = str_replace(' ', '', $shellexec);

            // Remove 'N/A' string
            $shellexec = str_replace('N/A', '', $shellexec);
            $deleteProductFormCart = Carte::where('idproduct',$request->idproduct)->where('macaddress', '=', $shellexec)->delete();
            return response()->json([
                'status'     => 200,
            ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }

    public function DetailProduct(Request $request)
    {
        try
        {


            $DetailProduct = DB::table('products as p')
            ->select('p.id', 'p.name', 'p.description', 'p.image', 'm.name as marque', 'c.name as category', 'p.price', 's.qte')
            ->join('category as c', 'p.idcategory', '=', 'c.id')
            ->join('marques as m', 'p.idmarque', '=', 'm.id')
            ->join('stocks as s', 'p.id', '=', 's.idproduct')
            ->where('p.id', $request->idproduct)
            ->first();
            $imageProduct  =Imageproducts::where('idproduct',$request->idproduct)->get();
            return response()->json([
                'status' => 200,
                'DetailProduct' =>$DetailProduct,
                'imageProduct'  =>$imageProduct,
            ]);
        }
        catch (\Throwable $th)
        {
            throw $th;
        }
    }


    public function filterByPrice(Request $request)
    {
        try
        {
            $Products = DB::table('products')
            ->join('category', 'products.idcategory', '=', 'category.id')
            ->join('marques', 'products.idmarque', '=', 'marques.id')
            ->join('stocks', 'products.id', '=', 'stocks.idproduct')
            ->select('products.*', 'category.name as category', 'marques.name as marque_name', 'stocks.qte')
            ->whereBetween('products.price',[$request->min_price,$request->max_price])
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

            return view('Products')

            ->with('listProduct',$Products)
            ->with('categories',$categories)
            ->with('checkContentForData',$checkContentForData);
        }
        catch (\Throwable $th) {
            throw $th;
        }
    }

    public function UpdateProduct(Request $request)
    {
        try
        {
            dd($request->all());
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
