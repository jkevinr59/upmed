<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MasterController extends Controller
{
    public function insert()
    {
    	if(Request::isMethod('post'))
        {
            $data = Input::all();
            $rules = array(
            /*'nama_promo'=>'required|max:200',
            'promo_banner'=>'required|max:200',
            'promo_created_by'=>'required|integer',
            'promo_changed_by'=>'required|integer',
            'promo_added_at'=>'required',
            'promo_changed_at'=>'required',
            'promo_start'=>'required',
            'promo_end'=>'required',
            'desc_promo'=>'required',*/
            );
            $validation = Validator::make(Input::all(), $rules);
            if ($validation->fails())
            {
            	//alert()->error('Semua data harap diisi, password dan ketik ulang password juga harus sama isinya');
             	return Redirect::to('')->withErrors($validation)->withInput();
            }
            
            else
            {	
            	$data = Input::all();
		    	/*$nama_promo=$data['nama_promo'];
		    	$promo_banner=$data['promo_banner'];
		    	$promo_created_by=$data['promo_created_by'];
		    	$promo_changed_by=$data['promo_changed_by'];
		    	$promo_added_at=$data['promo_added_at'];
		    	$promo_changed_at=$data['promo_changed_at'];
		    	$promo_start=$data['promo_start'];
		    	$promo_end=$data['promo_end'];
		    	$desc_promo=$data['desc_promo'];
		    	DB::table('tb_promo')->insert(array('nama_promo' => $nama_promo, 'promo_banner' => $promo_banner, 'promo_created_by' =>$promo_created_by, 'promo_changed_by' => $promo_changed_by, 'promo_added_at' => $promo_added_at, 'promo_changed_at' =>$promo_changed_at, 'promo_start' => $promo_start, 'promo_end' => $promo_end, 'desc_promo' => $desc_promo));*/
		    	DB::commit();
				return Redirect::to('');
			}
		}
		else
		{	
			return view('');
		}
    }
    public function update($id)
    {	
    	if(Request::isMethod('post'))
        {

    	    $data = Input::all();
            $rules = array(
            /*'nama_promo'=>'required|max:200',
            'promo_banner'=>'required|max:200',
            'promo_changed_by'=>'required|integer',
            'promo_changed_at'=>'required',
            'promo_start'=>'required',
            'promo_end'=>'required',
            'desc_promo'=>'required',*/
            );
            $validation = Validator::make(Input::all(), $rules);
    		if ($validation->fails())
            {
            	//alert()->error('Semua data harap diisi, password dan ketik ulang password juga harus sama isinya');
             	return Redirect::to('')->withErrors($validation)->withInput();
            }
    		else
    		{
    			$data = Input::all();
		    	/*$id=$data['id_promo'];
		    	$nama_promo=$data['nama_promo'];
		    	$promo_banner=$data['promo_banner'];
		    	$promo_changed_by=$data['promo_changed_by'];
		    	$promo_changed_at=$data['promo_changed_at'];
		    	$promo_start=$data['promo_start'];
		    	$promo_end=$data['promo_end'];
		    	$desc_promo=$data['desc_promo'];
		    	DB::table('tb_promo')->where('id_promo', '=', $id)-> update(array('nama_promo' => $nama_promo, 'promo_banner' => $promo_banner,  'promo_changed_by' => $promo_changed_by,  'promo_changed_at' =>$promo_changed_at, 'promo_start' => $promo_start, 'promo_end' => $promo_end, 'desc_promo' => $desc_promo));*/
		    	DB::commit();
				return Redirect::to('');
			}
		}
		else
		{
			$query=//DB::table('tb_promo')->where('id_promo', '=', $id)->get();
			return view('',$query);
		}

    }
    public function delete($id)
    {
    	DB:://table('tb_promo')->where('id_promo', '=', $id)->delete();
    	DB::commit();
		return Redirect::to('');
    }
    //Manage Barang
    public function show_all()
    {
    	$query=//DB::table('tb_product')->get();
    	return view('', $query);
    }
    public function detail($id)
    {
    	$query=//DB::table('tb_product')->where('id_product', '=', $id)->get();
    	return view('', $query);
    }
}
