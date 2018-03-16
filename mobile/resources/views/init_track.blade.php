@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="public/css/vertical-timeline.css">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <h2 class="track-header">Silahkan pilih subjek yang ingin dicari</h2>
    </div>   
</div>
 <div class="row">
    <div class="col-xs-3 col-xs-offset-5">
        <div class="checkbox">
            <label><input id="multi-subject-checkbox" type="checkbox" value=""  checked><span style="font-size:16px;">subjek terkait</span></label>
        </div>     
    </div>
 	<div class="col-xs-4 col-xs-offset-4">
 		<select class="subject-select form-control" onchange="trackRedirect();">
 		                    <option>Select Medical Subject...</option>
                            <?php foreach($query as $row){?>
                                <option value=<?php echo $row['id'] ?>>
                                <?php echo $row['Name']?>
                                </option>
                            <?php } ?>
 		    <!--
 			<optgroup label="KEJADIAN MEDIS">
 				<option>Trauma</option>
 			</optgroup>
 			<optgroup label="PEMERIKSAAN LAB">
 				<option>Gula darah</option>
 			</optgroup>
 			<optgroup label="TRACK HABIT">
 				<option>Berat Badan</option>
 			</optgroup>-->
 		</select>
	</div>
 	<div class="col-xs-2 col-xs-offset-5">
 		<div class="detail-box" style="margin:0px 0px 15px 0px;">
 			<button class="prevnext-btn" id="month-prev" onclick="month=month-1;changeMonth();"><</button>
        	<input type="text" name="month" id="month" value=<?php echo date('F');?> readonly="true">
    		<button class="prevnext-btn" id="month-next" onclick="month=month+1;changeMonth();">></button>
    		<br>
    		<button class="prevnext-btn" id="year-prev" onclick="year=year-1;changeYear();"><</button>
    		<input type="text" name="year" id="year" value=<?php echo date('Y');?> readonly="true">
    		<button class="prevnext-btn" id="year-next" onclick="year=year+1;changeYear();">></button>
 		</div>
 	</div>
 </div>
  <div class="row" style="height:200px;">

  </div>
<script type="text/javascript">
    var month=0;
    var year=0;
    var monthNames = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
    $(document).ready(function(){
        $('#nav-track').addClass('selected');
        var dt = new Date();
        month = dt.getMonth();
        year = dt.getYear()+1900;
        
    });
    function changeMonth(){
        if(month<0){month=11;}
        else if(month>11){month=0;}
        $('#month').val(monthNames[month]);
    }
    function changeYear(){
        $('#year').val(year);
    }
    function trackRedirect(){
        var path="track"
        datemonth=month+1;
        var subjectSelected=$('.subject-select').val();
        path = path +"/"+ subjectSelected +"/"+ datemonth +"/"+ year;
        window.location=path;
        
    }
</script>
@endsection