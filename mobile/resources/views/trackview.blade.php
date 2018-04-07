@extends('layouts.layout3')
@section('css')
<link href= <?php echo "'".url('public/css/home3.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/home2.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/tline.css')."'"?> rel="stylesheet">
@endsection
@section('content')

<div class="row" style="margin-top: 40px;">
	<div class="well custom-track-filter">
		<form id='filterform' action=<?php echo "'".url('track/filter')."'"?> role='form' method='get'>
		<div class="col-xs-5">
					<div class="form-group">
						<label class="sr-only">Keluhan</label>
						<select name="keluhan" class="form-control">
							<option value="0" <?php if($selectedSubjectID == 0) echo 'selected'?>>Keluhan/Momen</option>
							<?php foreach($subject as $row){?>
                                <option value=<?php echo $row['id']; ?> <?php if($row['id'] == $selectedSubjectID) echo 'selected';?>>
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
				<p>Kunjungan ke Dokter</p>
				<b>Berkunjung ke Dokter Bambang</b>
			</div>
			<div class="col-xs-4 col-xs-offset-1">
				<div class="custom-desc-date">
				<h4 class="text-center txt-white">01<br>FEB</h4>
				</div>			
			</div>
		</div>
		<hr style="margin-top: 10px; margin-bottom:5px;">
		<div class="row">
			<div class="col-xs-12">
				<ul class="slash-list txt-white">
  						<li class="txt-white"><a class="txt-white" href="#">Detail</a></li> /
  						<li class="txt-white"><a class="txt-white" href="#">Recommend</a></li> /
  						<li class="txt-white"><a class="txt-white" href="#">Share</a></li>
				</ul>
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
					<div class="tline-content">
						<div class="tline-date">15 Januari</div>
						<button class="tline-head">Demam</button>
					</div>
					<div class="tline-content">
						<div class="tline-date">18 Januari</div>
						<button class="tline-head">Periksa Gula Darah</button>
					</div>	
					<div class="tline-content">
						<div class="tline-date">20 Januari</div>
						<button class="tline-head">Kunjungan Ke Dokter</button>
					</div>
					<div class="row tline-badge">
						<b class="tline-badge-text"><?php echo intval($currentMonth)?></b>
					</div>
					<?php
					foreach($record as $row){
						?>
					<div class="tline-content">
						<div class="tline-date"><?php echo date('d F',strtotime($row['Datetime']));?></div>
						<button class="tline-head"><?php echo $row['Title'];?></button>
					</div>
					<?php }?>
					<div class="row tline-badge">
						<b class="tline-badge-text"><?php echo intval($nextMonth)?></b>
					</div>				
				</div>
			</div>
		</div>
	</div>
	<button class="btn-add2 btn btn-lg">
		<center><i class="fa fa-fw fa-plus"></i></center>
	</button>
				
@endsection
@section('js')
	<script src= <?php echo "'".url('public/js/chart.min.js')."'" ?>></script>
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
	</script>
@endsection