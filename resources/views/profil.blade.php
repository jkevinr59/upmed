@extends('layouts.layout2')
@section('css')
<link href="public/css/home2.css" rel="stylesheet">
@endsection
@section('content')
<div class="row" style="margin-top: 100px;">
	<div class="col-xs-3 col-xs-offset-1">
		<div class="row">
			<div class="col-xs-12">
				<center>
					<img src="https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p66749.png" class="img-responsive" alt="Cinque Terre" width="150" height="150">
				</center>
			</div>	
		</div>
		<div class="row" style="margin-top: 20px;">
			<div class="col-xs-12">
				<center><button class="btn btn-primary">Ganti Avatar</button></center>
			</div>
		</div>		
	</div>
	<div class="col-xs-6 profil-page">
		<div class="row">
			<div class="col-xs-4">
				<b>Nama:</b>
			</div>
			<div class="col-xs-8">
				<p>Joshua Kevin Rachmadi</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<b>Pekerjaan:</b>
			</div>
			<div class="col-xs-8">
				<p>Wiraswasta</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<b>Umur:</b>
			</div>
			<div class="col-xs-8">
				<p>22</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<b>Username:</b>
			</div>
			<div class="col-xs-8">
				<p>User1</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<b>Alamat:</b>
			</div>
			<div class="col-xs-8">
				<p>Keputih Gg Makam No 18</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				<b>Golongan Darah:</b>
			</div>
			<div class="col-xs-8">
				<p>O</p>
			</div>
		</div>
	</div>
	
</div>
<div class="row" style="margin-top: 20px;">
	<div class="col-xs-10 col-xs-offset-1">
		<center><button class="btn btn-primary btn-md" onclick="window.location.replace('edit')">Edit Profil</button>
		<button class="btn btn-danger btn-md" style="margin-left: 15px;" onclick="window.location.replace('resetpassword')">Ganti Password</button></center>
	</div>
</div>
@endsection