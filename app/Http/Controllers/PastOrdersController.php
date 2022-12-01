<?php

namespace App\Http\Controllers;

use App\Models\PastOrders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PastOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pastOrders()
    {
        $pastOrders = DB::table("orders")->select ("id","users_id","items_id","Name","ProductType","Size","Price","Description","Image")->where("users_id", "=", Auth::user()->id)->get();
        return view("pages.pastOrders")->with("orders",$pastOrders);
    }

    public function addToPastOrders(Request $request)
    {
        $User = $request -> users_id;
//        $item = $request -> id;
//        $name = $request -> Name;
//        $productType = $request -> ProductType;
//        $Size = $request -> Size;
//        $Price = $request -> Price;
//        $Description = $request -> Description;
//        $Image = $request -> Image;
//        DB::insert("insert into orders(users_id, items_id, Name, ProductType, Size, Price, Description, Image)value(?,?,?,?,?,?,?,?)",[$user,$item,$name,$productType,$Size,$Price,$Description,$Image]);

        DB::insert('insert into orders (users_id, items_id, Name, ProductType, Size, Price, Description, Image) select users_id, items_id, Name, ProductType, Size, Price, Description, Image from baskets  where users_id = ?', [$User]);

        DB::delete('delete from baskets where users_id = ?', [$User]);

        return redirect()->route("basket");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PastOrders  $pastOrders
     * @return \Illuminate\Http\Response
     */
    public function show(PastOrders $pastOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PastOrders  $pastOrders
     * @return \Illuminate\Http\Response
     */
    public function edit(PastOrders $pastOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PastOrders  $pastOrders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PastOrders $pastOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PastOrders  $pastOrders
     * @return \Illuminate\Http\Response
     */
    public function destroy(PastOrders $pastOrders)
    {
        //
    }
}
