@extends('layouts.layout3')
@section('css')
<link href= <?php echo "'".url('public/css/home3.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/home2.css')."'"?> rel="stylesheet">

@endsection
@section('content')
	<div class="row" style="padding-top: 80px;">
        <div class="col-md-10 col-md-offset-1">
            <a style="font-size: 15px;" href="mail">+ New Mail</a>
        </div>
    </div>

@endsection