@extends('layouts.layout2')
@section('css')
<link href="public/css/home2.css" rel="stylesheet">
@endsection
@section('content')
<div class="row" style="margin-top: 100px;">
	<div class="col-xs-8 col-xs-offset-1">
		<form role="form">
			<div class="form-group">
				<label class="control-label">Nama Lengkap</label>			
					<input class="form-control" type="text" name="namalengkap" value="Joshua Kevin Rachmadi">		
			</div>
			<div class="form-group">
				<label class="control-label">Pekerjaan</label>			
					<input class="form-control" type="text" name="namalengkap" value="Wiraswasta">		
			</div>
			<div class="form-group">
				<label class="control-label">Umur</label>			
					<input class="form-control" type="text" name="namalengkap" value="Joshua Kevin Rachmadi">		
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>			
					<input class="form-control" type="text" name="namalengkap" value="Joshua Kevin Rachmadi">		
			</div>
			<div class="form-group">
				<label class="control-label">Golongan Darah</label>
				<select class="form-control">
					<option>A</option>
					<option>B</option>
					<option>AB</option>
					<option>O</option>
				</select>	
			</div>
		</form>
	</div>
</div>
@endsection