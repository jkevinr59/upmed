@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="../../../public/css/vertical-timeline.css">
@endsection
@section('content')
 <div class="row">
 	<div class="col-md-3 col-md-offset-2 col-xs-4 col-xs-offset-4">
 		<p class+"short-description" style="padding-left: 15px;">Proin mattis nisl non est dapibus elementum. or</p>
 		<select class="subject-select form-control">
 			<optgroup label="KEJADIAN MEDIS">
 				<option>Trauma</option>
 			</optgroup>
 			<optgroup label="PEMERIKSAAN LAB">
 				<option>Gula darah</option>
 			</optgroup>
 			<optgroup label="TRACK HABIT">
 				<option>Berat Badan</option>
 			</optgroup>
 		</select>
	</div>
 	<div class="col-md-3 col-md-push-2 col-md-offset-0 col-xs-4 col-xs-offset-4">
 		<div class="detail-box" style="margin:0px 0px 15px 0px;">
 			<button class="prevnext-btn" id="month-prev"><</button>
        	<input type="text" name="month" id="month" value="January" readonly="true">
    		<button class="prevnext-btn" id="month-next">></button>
    		<br>
    		<button class="prevnext-btn" id="year-prev"><</button>
    		<input type="text" name="year" id="year" value="2017" readonly="true">
    		<button class="prevnext-btn" id="year-next">></button>
 		</div>
 	</div>
 </div>
  <div class="row">
    <div class="col-lg-4 col-lg-offset-2 col-xs-4 col-xs-offset-4 detail-box">
        <input type="text" name="subject-detail" id="subject" value="Lorem Ipsum Dolor Sit Amet" readonly="true">
        <br>
        <textarea id="desc" rows="4" readonly="true">
        	Proin mattis nisl non est dapibus elementum. Etiam varius, purus sodales varius tempor
        </textarea>
    </div>
    <div class="col-xs-5 col-xs-offset-4">
    	<div id="vtline">
    		<div data-vtdate="5 January">
        		<button class="link">Jatuh dari Sepeda</button>
    		</div>
    		<div data-vtdate="10 January">
        		<button class="link">Jatuh di Sepeda Motor</button>
    		</div>
    		<div data-vtdate="15 January">
        		<button class="link">Jatuh Duduk</button>
    		</div>
    		<div data-vtdate="28 January">
        		<button class="link">Jatuh di Tangga</button>
    		</div>
    	</div>
    </div><!-- end of timeline -->
  </div>
<script src="public/js/vertical-timeline.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#nav-track').addClass('selected');
    });
	$('#vtline').verticalTimeline({
		startLeft:false,
        arrows: false,
        animate: 'fade'
		});
</script>
@endsection