@extends('layouts.layout3')
@section('css')
<link href= <?php echo "'".url('public/css/home3.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/home2.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/tline.css')."'"?> rel="stylesheet">
@endsection
@section('content')

<div class="row" style="margin-top: 40px;" >
	<div class="well custom-track-filter">
		<form id='filterform' action=<?php echo "'".url('track/filter')."'"?> role='form' method='get'>
		<div class="col-xs-5">
					<div class="form-group">
						<label class="sr-only">Keluhan</label>
						<select name="keluhan" class="form-control">
							<option value="0" <?php if($selectedSubjectID == 0) echo 'selected'?>>Keluhan/Momen</option>
							<?php foreach($subject as $row){?>
                                <option value = <?php echo '"'.$row['id'].'"'; ?> <?php if($row['id'] == $selectedSubjectID) echo 'selected';?>>
                                <?php echo $row['Name']?>
                                </option>
                            <?php } ?>
						</select>
					</div>
		</div>
		<div class="col-xs-5">
			<div class="form-group">
				<label class="sr-only" for="Tanggal">Tanggal</label>
				<input class="form-control" type="date" name="tanggal" value=<?php echo $date?>>
			</div>
		</div>
		<div class="col-xs-2">
			<button id="go-btn" class="round-button" onclick="$('#filterform').submit()">
					<i class="fa fa-paper-plane fa-fw" style="color: #FFFFFF;"></i>
			</button>
		</div>	
		</form>
	</div>
	<div class="well custom-description">
			<div class="row">
				<div class="col-xs-7 txt-white">
					<p id="title">Title</p>
					<b id="subject">Subject</b>
				</div>
				<div class="col-xs-4 col-xs-offset-1">
					<div class="custom-desc-date">
					<h4 id="date-day" class="text-center txt-white" style="margin-bottom: 2px;">01</h4>
					<h4 id="date-month" class="text-center txt-white" style="margin-top: 2px;">JAN</h4>
					</div>			
				</div>
			</div>
			<hr style="margin-top: 10px; margin-bottom:5px;">
			<div class="row">
				<div class="col-xs-12">
					<center><ul class="slash-list txt-white">
  							<li class="txt-white"><a class="txt-white" href="#" onclick="descriptionShow(0);">Detail</a></li> /
  							<li class="txt-white"><a class="txt-white" href="#" onclick="descriptionShow(1);">Recommend</a></li> /
  							<li class="txt-white"><a class="txt-white" href="#" onclick="descriptionShow(2);">Share</a></li>
					</ul></center>
				</div>	
			</div>
			<div class="row" style="margin-top: 5px;">
				<div class="col-xs-10 col-xs-offset-1" id="detail-page">
					<p id="description" class="txt-white">No Description</p>
				</div>
				<div class="col-xs-10 col-xs-offset-1" id="recommendation-page" style="display: none;">
					<p id="rec1" class="txt-white">General Recomendation</p>
				</div>
				<div class="col-xs-10 col-xs-offset-1" id="share-page" style="display: none;">
					<p class="txt-white">Share Here</p>
				</div>
			</div>
			<button class="desc-edit-button">E D I T</button>	
	</div> 
    <div class="col-xs-4 col-xs-offset-1">
        <h4 class="calibri">T R A C K</h4>
        <p class="txt-gray2 calibri">Analisa rekam kesehatan Anda</p>
    </div>
</div>
<div class="row" style="margin-top: 20px;">
	<div class="col-xs-4" style="margin-left:15px; width: 35%;">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b> Berat Badan/January - February</b>
			</div>
			<div class="panel-body">
				<div class="chart-container" style="height: 300px;width: 100%;">
					<canvas id="trackGraphic"></canvas>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<center><b><?php echo $timelineTitle;?></b></center>
			</div>
			<div class="panel-body" style="overflow-y: scroll; max-height: 52%;">
				<div class="col-xs-12 tline" style="padding-bottom: 30px;">
					<div class="row tline-badge">
						<b class="tline-badge-text"><?php echo intval($lastMonth)?></b>
					</div>
					<?php
					foreach($recordPrev as $row){
						?>
					<div class="tline-content">
						<div class="tline-date"><?php echo date('d F',strtotime($row['Datetime']));?></div>
						<button class="tline-head" onclick=<?php echo '"detail('.$row["record_id"].')"'?>><?php echo $row['Title'];?></button>
					</div>
					<?php }?>
					<div class="row tline-badge">
						<b class="tline-badge-text"><?php echo intval($currentMonth)?></b>
					</div>
					<?php
					foreach($recordCurrent as $row){
						?>
					<div class="tline-content">
						<div class="tline-date"><?php echo date('d F',strtotime($row['Datetime']));?></div>
						<button class="tline-head" onclick=<?php echo '"detail('.$row["record_id"].')"'?>><?php echo $row['Title'];?></button>
					</div>
					<?php }?>
					<div class="row tline-badge">
						<b class="tline-badge-text"><?php echo intval($nextMonth)?></b>
					</div>
					<?php
					foreach($recordNext as $row){
						?>
					<div class="tline-content">
						<div class="tline-date"><?php echo date('d F',strtotime($row['Datetime']));?></div>
						<button class="tline-head" onclick=<?php echo '"detail('.$row["record_id"].')"'?>><?php echo $row['Title'];?></button>
					</div>
					<?php }?>				
				</div>
			</div>
		</div>
	</div>
	<button class="btn-add2 btn btn-lg">
		<center><i class="fa fa-fw fa-plus"></i></center>
	</button>
				
@endsection
@section('js')
	<script src= <?php echo "'".url('public/js/detailAjax.js')."'" ?>></script>
	<script src= <?php echo "'".url('public/js/Chart.min.js')."'" ?>></script>
	<script type="text/javascript">
		var lineChart = document.getElementById("trackGraphic").getContext('2d');
		var data = {
			labels: [' ',' ',' ',' ',' ',],
			datasets:[{
				label: 'Berat Badan',
				backgroundColor: '#dddddd',
				borderColor: '#cccccc',
				data:[12, 19, 3, 5, 2, 3],
				fill:false,
			}]
		}
		var options = {
			responsive:true,
		}
		var trackChart = new Chart(lineChart, {
    	type: 'line',
    	data: data,
    	options: options
		});

		function descriptionShow(state)
		{
			switch(state){
				case 0:
					$('#recommendation-page').hide();
					$('#share-page').hide();
					$('#detail-page').show();
					break;
				case 1:
					showRecommendation();
					$('#share-page').hide();
					$('#detail-page').hide();
					$('#recommendation-page').show();
					break;
				case 2:
					$('#recommendation-page').hide();
					$('#detail-page').hide();
					$('#share-page').show();
					break;
			}
		}
	</script>
@endsection