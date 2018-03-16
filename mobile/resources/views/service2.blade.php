@extends('layouts.layout3')
@section('css')
<link href="public/css/home3.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
	<div class="well custom-search-bar">
		<div class="col-xs-12 nav navbar-top-links">
            <ul>
            	<li><a href="#">Know</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Find</a></li>
                <li><a href="#">Shop</a></li>
            </ul> 
        </div>			
	</div> 
</div>
<div class="row title">
		<div class="col-xs-8">
			<h3 id="title">WEBINAR</h3>
			<h4 id="sub-title">Makin Tahu,Makin Sehat</h4>
		</div>
</div>
<div class="row" style="height: 250px;background-color: #44AA44">
		<div class="col-xs-2" style="background-color: #ffffff; margin:15px;height: 220px;">
				<button class="service-panel" style="background-image: url('public/images/wordpress.png');" ></button>
				<p style="margin-top:10px;">Upmed Now!!</p>
				<button class="pull-right btn btn-primary" style="font-size: 12px;"> Selengkapnya</button>
		</div>
		<div class="col-xs-2" style="background-color: #ffffff; margin:15px;height: 220px;">

		</div>
</div>
@endsection
@section('js')
@endsection