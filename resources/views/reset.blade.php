@extends('layouts.layout3')
@section('css')
<link href="public/css/home2.css" rel="stylesheet">
<link href="public/css/home3.css" rel="stylesheet">
@endsection
@section('content')
<div class="row" style="margin-top: 100px;">
	<div class="col-xs-8 col-xs-offset-1">
		 

		<form role="form" class="form-horizontal" action="{{url('/resetpassword')}}" method="POST">
			 {{ csrf_field() }}
			<div class="form-group">
				<label class="control-label col-xs-4">Old Password:</label>
				<div class="col-xs-8">
					<input class="form-control" type="password" name="oldpassword">
				</div>			
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">New Password:</label>
				<div class="col-xs-8">
					<input class="form-control" type="password" name="newpassword">
				</div>	
			</div>
			<div class="form-group">
				<label class="control-label col-xs-4">Confirm Password:</label>
				<div class="col-xs-8">
					<input class="form-control" type="password" name="confirmpassword">
				</div>	
			</div>
			<div class="form-group">
				<div class="col-xs-offset-8 col-xs-4">
					<input class="btn btn-primary pull-right" type="submit" name="resetbutton" value="Ubah Password">
				</div>	
			</div>
		</form>
		@if (session('status'))
                            
             <div id="pwd" class="alert alert-success">
               <strong>{{ session('status') }}</strong> 
            </div>
         @endif
         <script type="text/javascript">
            $("#pwd").fadeTo(2000, 500).slideUp(500, function(){
                $(this).alert('close');
            });
        </script>
	</div>
</div>
@endsection