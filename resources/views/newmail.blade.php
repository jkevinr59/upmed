@extends('layouts.layout3')
@section('css')
<link href= <?php echo "'".url('public/css/home3.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/home2.css')."'"?> rel="stylesheet">
@endsection
@section('content')
	<div class="row" style="padding-top: 80px;">
        <div class="col-md-9 col-md-offset-1">
            <form  class="custom-input-form form-horizontal" role="form" action="mail" method="POST">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="form-group">
                        	<div class="col-xs-2" style="padding-left: 0px;">
                        		<label class="control-label" for="recipient" style="text-align: left;">Kepada:</label>
                        	</div>
                            <div class="col-xs-5">
                            	<input type="text" class="form-control" name="recipient">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="message-title">Judul:</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="txtarea-label" for="Content">Pesan:</label>
                            <textarea class="form-control" id="txtarea" name="Content" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                        	<input type="Submit" class="button pull-right" name="input-submit-btn" value="Send" style="margin-top: 40px;">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection