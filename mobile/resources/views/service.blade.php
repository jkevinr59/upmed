@extends('layouts.dashboard')
@section('content')
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-primary custom-panel">
						<div class="panel-heading">
							<p>Connect With Doctor</p>
						</div>
						<div class="panel-body">
							<p>Stay connected to your doctor, Everywhere, Everytime</p>
						</div>
						<div class="panel-footer">
							<p>IDR 25000</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('#nav-service').addClass('selected');
	});		
	</script>	
@endsection