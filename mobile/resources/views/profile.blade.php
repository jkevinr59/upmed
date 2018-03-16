@extends('layouts.dashboard')
@section('content')

	<div class="row">
      <div class="col-xs-5 col-xs-offset-2">
          	<form class="form-horizontal profile-info" role="form">
          	<div class="form-group">
          		<label for="name">Name</label>
          		<input type="text" name="name" readonly="true" value="Joshua Kevin">
          	</div>
          	<div class="form-group">
          		<label for="name">Username</label>
          		<input type="text" name="user" readonly="true" value="Joke1102">
          	</div>
          	<div class="form-group">
          		<label for="name">Alamat</label>
          		<textarea name="address" readonly="true">Keputih gang makam</textarea>
          	</div>
            </form>
        </div>
        <div class="col-lg-4">
              <img src="public/images/avatar.png" style="width: 180px;height: 180px;">

        </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#nav-profile').addClass('selected');
      });   
    </script>
@endsection