<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function basket()
    {
        $basket = DB::table("baskets")->select("id","users_id","items_id","Name","ProductType","Size","Price","Description","Image")->where("users_id", "=", Auth::user()->id)->get();
        return view("pages.basket")->with("baskets",$basket);

    }

    public function addToBasket(Request $request){

        $User = $request -> users_id;
        $Item = $request -> id;
        $Name = $request -> Name;
        $ProductType = $request -> ProductType;
        $Size = $request -> Size;
        $Price = $request -> Price;
        $Description = $request -> Description;
        $Image = $request -> Image;
        DB::insert("insert into baskets(users_id, items_id, Name, ProductType, Size, Price, Description, Image)value(?,?,?,?,?,?,?,?)",[$User,$Item,$Name,$ProductType,$Size,$Price,$Description,$Image]);

        session()->flash("Success", "Item has been added to your basket");

        return redirect()->route("items");

    }

    public function removeFromBasket(Request $request)
    {
        $item_id = $request -> id;
        DB::table("baskets")->where("id", $item_id)->delete();
        return redirect()->route("basket");
    }


    public function updateSizeBasket(Request $request)
    {
        $item_id = $request -> id;
        $Size = $request -> Size;
        DB::table("orders")->where("id",$item_id)->update(["Size" => $Size]);
        return redirect()->route("basket");

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
