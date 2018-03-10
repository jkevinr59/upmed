@extends('layouts.dashboard2')
@section('css')
    <link rel="stylesheet" href="../../../public/css/vertical-timeline.css">
@endsection
@section('content')
<?php 
 $rawDate = $record[0]->Datetime;
 $rawDate2 = new Datetime($rawDate);
 $month = "'".$rawDate2->format("F")."'"
?>
<div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <h2 class="track-header"><?php echo $name?></h2>
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
 		                    <?php foreach($subjek as $row){?>
                                <option value=<?php echo $row['id'] ?>>
                                <?php echo $row['Name']?>
                                </option>
                            <?php } ?>
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
  <div class="row">
        <div class="col-lg-8 col-lg-offset-3" style="margin-top: 20px; height: 500px;">
            <canvas id="line-chart" width="500px" height="400px"></canvas>
        </div>
  </div>
<script src="../../../public/js/vertical-timeline.js"></script>
<script src="../../../public/js/Chart.min.js"></script>
<script type="text/javascript">
    var track= [];
    <?php foreach($record as $row){
        $date = new Datetime($row->Datetime);?>
            track.push({
                x:<?php echo "'".$date->format("d")."'"?>,
                y:<?php echo $row->Description_value?>
            });
        <?php }?>
    var ctx = document.getElementById("line-chart").getContext('2d');
    var chart_data={datasets:[{
        label: <?php echo '"'.$name.'"'?>,
        borderColor: 'rgba(50,50,50,1)',
        borderWidth: 2,
        backgroundColor: '#555555',
        fill:"false",
        data: track,
    }]};
    var chart_options={
        responsive:true,
        legend: {
            display:false,
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true,
                }
            }],
            xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: <?php echo $month?>
                        }
                    }],
        },
        tooltips: {
                    mode: 'point',
                    intersect: false,
                },
        };
    var mychart = new Chart(ctx,{
        type:'scatter',data:chart_data,options:chart_options});
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
        path = "../../../"+ path +"/"+ subjectSelected +"/"+ datemonth +"/"+ year;
        window.location=path;
        
    }
    $('#line-chart').click(function(evt){
        var activeElem=mychart.getElementsAtEvent(evt);
        var array = $.map(activeElem[0], function(value, index) {
        return [value];
        });
        console.log(array);
        console.log(activeElem[0]._index);
    });
</script>

@endsection