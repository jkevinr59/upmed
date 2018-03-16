<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
//halaman awal, tab 
//melihat product berdasarkan kategori jika $barang null maka lihat semua, jika $barang ada maka query sesuai $barang
  public function home($barang)
  {
  	$promo=DB::table('promo')->get();
  	if($barang==0)
  	{
  	   $query=DB::table('barang')->get();
  	   return view('', $query);
  	}
  	if($barang==1)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'jam tangan murah')->get();
  	   return view('', $query);
  	}
  	if($barang==2)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Atasan Rajut')->get();
  	   return view('', $query);
  	}
  	if($barang==3)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Cardigan, Long Cardy')->get();
  	   return view('', $query);
  	}
  	if($barang==4)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Gamis')->get();
  	   return view('', $query);
  	}
  	if($barang==5)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Dress')->get();
  	   return view('', $query);
  	}
  	if($barang==6)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Atasan Hijaber')->get();
  	   return view('', $query);
  	}
  	if($barang==7)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Tunik')->get();
  	   return view('', $query);
  	}
  	if($barang==8)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Outer')->get();
  	   return view('', $query);
  	}
  	if($barang==9)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Dress Hijaber')->get();
  	   return view('', $query);
  	}
  	if($barang==10)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Setelan Hijaber')->get();
  	   return view('', $query);
  	}
  	if($barang==11)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Baju Couple')->get();
  	   return view('', $query);
  	}
  	if($barang==12)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Baju Atasan')->get();
  	   return view('', $query);
  	}
  	if($barang==13)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Dress, Long Dress')->get();
  	   return view('', $query);
  	}
  	if($barang==14)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Baju Setelan, Jumpsuit')->get();
  	   return view('', $query);
  	}
  	if($barang==15)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Celana, Rok, Overall')->get();
  	   return view('', $query);
  	}
  	if($barang==16)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Mukena')->get();
  	   return view('', $query);
  	}
  	if($barang==17)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Pashmina')->get();
  	   return view('', $query);
  	}
  	if($barang==18)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Blazer')->get();
  	   return view('', $query);
  	}
  	if($barang==19)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Kemeja/Tshirt')->get();
  	   return view('', $query);
  	}
  	if($barang==20)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Sweater')->get();
  	   return view('', $query);
  	}
  	if($barang==21)
  	{
  	   $query=DB::table('barang')->where('category', '=', 'Tas, Dompet, Sling bag')->get();
  	   return view('', $query);
  	}
  	if($barang==22)
  	{
  	   $query=DB::table('barang')->where('category', '=', '')->get();
  	   return view('', $query);
  	}
  }
//register, get jika membuka form, post jika melakukan isian
  public function register()
  {

  }
//melihat detil product
  public function detail_product($id)
  {
  	   $query=DB::table('barang')->where('id', '=', '$id')->get();
  	   return view('', $query);
  }
  //melihat notifikasi
   public function show_notification()
  {
  		$query=DB::table('notifications')->get();
  	    return view('', $query);
  }
  //lihat detai promo
  public function detail_promo($id)
  {
  		 $query=DB::table('promo')->where('id', '=', '$id')->get();
  	   	return view('', $query);
  }
  public function add_to_cart()
  {

  }
  //ganti password
  public function forgot_password()
  {

  }
  public function reset_password()
  {

  }
  public function send_validation()
  {

  }
  public function new_password_validation()
  {

  }
  //order status order
  public function status_order()
  {

  }
  public function detail_status_order($id)
  {

  }
}

