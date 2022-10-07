<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    //

    function GetAllOrders(Request $request){
        $orders = Pesanan::all();

        return $orders;
    }

    function GetAllOrdersbyUserID(Request $request, $idUser){
        $orders = Pesanan::all()->where('idUser', $idUser);

        return $orders;
    }

    function create(Request $request){
        //ada userID dan totalPrice, buat 1 data baru
        $newOrder = new Pesanan();
        $newOrder->idUser = $request->idUser;
        $newOrder->totalHarga = $request->totalHarga;

        $newOrder->save();

        return "success";
    }

    function remove(Request $request, $idPesanan){
        $order = Pesanan::all()->where('idPesanan', $idPesanan)->first();
        $order->delete();
        return \redirect("./");
    }

    function update(Request $request, $idPesanan){
        $order = Pesanan::all()->where('idPesanan', $idPesanan)->first();
        // dd($request->totalHarga);
        if($request->totalHarga != NULL){
            $order->totalHarga = $request->totalHarga;
        }
        $order->save();

        return "success update";
    }
}
