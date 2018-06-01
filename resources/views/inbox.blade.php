@extends('layouts.layout3')
@section('css')
<link href= <?php echo "'".url('public/css/home3.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/home2.css')."'"?> rel="stylesheet">

@endsection
@section('content')
	<div class="row" style="padding-top: 80px;">
        <div class="col-md-10 col-md-offset-1">
            <h4><a href="mail">+ New Mail</a></h4>
        </div>
    </div>
	<div class="row" style="padding-top: 80px;">
        <div class="col-md-10 col-md-offset-1">
        	<table class="table">
        		<tr>
        			<th>#</th>
	        		<th>Dari</th>
	        		<th>Pesan</th>
	        		<th>Tanggal Diterima</th>
        		</tr>
        		<tbody>
        			<tr>
        				<td>1</td>
        				<td>Admin</td>
        				<td>Selamat Datang di Upmed</td>
        				<td>26 Mei 2018</td>
        				<td><a href="#">Lihat</a></td>
        			</tr>
        			<tr></tr>
        			<tr></tr>
        			<tr></tr>
        		</tbody>	
        	</table>
		</div>
    </div>
@endsection