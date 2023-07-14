<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('t_pesanan')->get();
        return view('order', ['data' => $data]);
    }

    public function create_data(Request $request)
    {
        DB::table('t_pesanan')->insert([
            'no_pesanan'    => $request->no_pesanan,
            'tanggal'       => $request->tanggal,
            'nm_supplier'    => $request->nama_supplier,
            'nm_produk'     => $request->nama_produk,
            'total'         => $request->harga
        ]);

        return redirect()->route('order')->with('success','Data pesanan berhasil ditambkan');
    }

    public function detail_data(Request $request)
    {
        $data = DB::table('t_pesanan')->where('id', $request->id)->select('id', 'no_pesanan', DB::raw('date_format(tanggal, "%Y-%m-%d") as tanggal'), 'nm_supplier', 'nm_produk', 'total')->first();

        return response()->json($data);
    }

    public function update_data(Request $request)
    {
        $id = $request->id;

        DB::table('t_pesanan')->where('id', $id)->update([
            'no_pesanan'    => $request->update_no_pesanan,
            'tanggal'       => $request->update_tanggal,
            'nm_supplier'    => $request->update_nama_supplier,
            'nm_produk'     => $request->update_nama_produk,
            'total'         => $request->update_harga
        ]);

        return redirect()->route('order')->with('success','Data pesanan berhasil diubah');
    }

    public function delete_data(Request $request)
    {
        $id = $request->id;
        
        DB::table('t_pesanan')->where('id', $id)->delete();

        return redirect()->route('order')->with('success','Data pesanan berhasil dihapus');
    }
}
