<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pesanan extends Model
{
    use HasFactory;
   
    protected $guard = [
        'id'
    ];
	protected $fillable = [
        'no_pesananan',
        'tanggal',
        'nama_suplier',
        'nama_produk',
        'total'  
    ];
    public static function kode()
    {
    	$kode = DB::table('pesanans')->max('id');
    	$addNol = '';
    	$kode = str_replace("", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = date('dmy').$kode;
    	} elseif (strlen($kode) > 1) {
    		$addNol = date('dmy').$kode;
    	}  
        
    	$kodeBaru = "".$addNol.$incrementKode;
    	return $kodeBaru;
    }
}
