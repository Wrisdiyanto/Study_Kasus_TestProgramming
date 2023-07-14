<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\PDF;
use App\Models\pesanan;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProdukController extends Controller
{
    public function index($id)
    {
        $client = new Client();
        $res = $client->request('GET','https://dummyjson.com/products/'. $id); 
        $statusCode = $res->getStatusCode();
        $isi  = $res->getBody()->getContents();
        $data = json_decode($isi, true);   
        $title = "Detail Produk " . $data['title']; 
        return view('detailproduk', compact('data','title'));
    }
    public function belibarang($id)
    {
        $client = new Client();
        $res = $client->request('GET','https://dummyjson.com/products/'. $id); 
        $statusCode = $res->getStatusCode();
        $isi  = $res->getBody()->getContents();
        $data = json_decode($isi, true);   
        $nopesanan = pesanan::kode(); 
        $title = "Form Pembelian Produk " . $data['title']; 
        return view('checkout', compact('data','title','nopesanan'));
    }
    public function checkout(Request $request)
    {
        $pesan = new pesanan(); 
        $pesan->no_pesananan = $request->no_pesananan;
        $pesan->tanggal = $request->tanggal;
        $pesan->nama_suplier = $request->nama_suplier;
        $pesan->nama_produk = $request->nama_produk;
        $pesan->total = $request->total;
        $pesan->save();
        return redirect('/')->with('success', 'Pesanan Berhasil Ditambahkan'); 
    }
    public function cetakbarang()
    {
        $client = new Client();
        $res = $client->request('GET','https://dummyjson.com/products');
        $statusCode = $res->getStatusCode();
        $isi  = $res->getBody()->getContents();
        $data = json_decode($isi, true);  
        $title = "Cetak Produk";  
        $pdf = App::make('dompdf.wrapper');
        $pdf = \PDF::loadview('cetak',['data'=>$data ])->setOptions([
              'defaultFont' => 'sans-serif',    
               'isRemoteEnabled' => true,  
        ]);
        return $pdf->stream('databarang.pdf');   
    }
}
