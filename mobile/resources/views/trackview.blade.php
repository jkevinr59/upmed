@extends('layouts.layout3')
@section('css')
<link href="public/css/home3.css" rel="stylesheet">
<link href="public/css/home2.css" rel="stylesheet">
@endsection
@section('content')

<div class="row" style="margin-top: 80px;">
	<div class="well custom-description">
		<div class="row">
			<div class="col-xs-7">
				<p>Kunjungan ke Dokter</p>
				<b>Berkunjung ke Dokter Bambang</b>
			</div>
			<div class="col-xs-4 col-xs-offset-1">
				<div class="custom-desc-date">
				<h4 class="text-center">01<br>FEB</h4>
				</div>			
			</div>
		</div>
		<div class="row">
			<ul class="nav nav-tabs">
  				<li class="active"><a href="#">Detail</a></li>
  				<li><a href="#">Recommend</a></li>
  				<li><a href="#">Share</a></li>
			</ul>
		</div>
	<!--
		<h4>1 February 2018</h4>
		<b>Title</b>
		<p id="title-detail">Berkunjung ke Dokter Bambang</p>
		<b>Deskripsi</b>
		<p id="description-detail"> Ditemukan alergi makanan yang mengandung susu</p>
		<button type="button" class="btn btn-info btn-sm">Edit</button>-->					
	</div> 
	<div class="well custom-track-filter">
		<div class="col-xs-3 col-xs-offset-1">
			<b class="pull-left">Overview</b>
			<br>
			<span class="pull-left">Analisa track kesehatan Anda</span>
		</div>
		<div class="col-xs-3 col-xs-offset-1">
			<div class="form-group">
				<label class="sr-only">Keluhan</label>
				<select name="keluhan" class="form-control">
					<option>Keluhan/Momen</option>
				</select>
			</div>
		</div>
		<div class="col-xs-3">
			<div class="form-group">
				<label class="sr-only" for="Tanggal">Tanggal</label>
				<input class="form-control" type="date" name="tanggal">
			</div>
		</div>
		<div class="col-xs-1">
			<button id="go-btn" class="round-button">
				<i class="fa fa-paper-plane fa-fw" style="color: #FFFFFF;"></i>
			</button>
		</div>
	</div>
</div>
<div class="row" style="margin-top: 40px;">
	<div class="col-xs-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b> Berat Badan/January - February</b>
			</div>
			<div class="panel-body">
				Grafik Berat Badan
			</div>
		</div>
	</div>
</div>
<div class="row" style="margin-top: 40px;">
	<div class="col-xs-8">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<b><?php echo date('F',strtotime('-1 month')).' - '.date('F Y');?></b>
			</div>
			<div class="panel-body">
				<div class="col-xs-10">
					<ul class="timeline">
                                <li style="height: 60px;">
                                	<div class="timeline-badge primary">
                                   	25
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <b class="timeline-title">Kunjungan ke Dokter</b>
                                        </div>
                                        <div class="timeline-body">
                                        <p>Kontrol ke Dokter Bambang</p>
                                        	<div class="pull-right">
                                        		<button type="button" class="btn btn-primary btn-sm">
                                                    View
                                                </button>
                                        	</div>   
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <b class="timeline-title">Demam</b>
                                        </div>
                                        <div class="timeline-body">
                                        <p>Panas naik turun</p>
                                        	<div class="pull-right">
                                        		<button type="button" class="btn btn-primary btn-sm">
                                                    View
                                                </button>
                                        	</div>   
                                        </div>
                                    </div>
                                </li>
                                <li style="height: 60px;">
                                	<div class="timeline-badge primary">
                                   	2
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <b class="timeline-title">Trauma</b>
                                        </div>
                                        <div class="timeline-body">
                                        <p>Jatuh dari Sepeda</p>
                                        	<div class="pull-right">
                                        		<button type="button" class="btn btn-primary btn-sm">
                                                    View
                                                </button>
                                        	</div>   
                                        </div>
                                    </div>
                                </li>
                    </ul>
				</div>
				<!--			
				<div class="col-xs-5">
					<div class="well">
						<h4>1 February 2018</h4>
						<b>Title</b>
						<p id="title-detail">Berkunjung ke Dokter Bambang</p>
						<b>Deskripsi</b>
						<p id="description-detail"> Ditemukan alergi makanan yang mengandung susu</p>
						<button type="button" class="btn btn-info btn-sm">Edit</button>
						
					</div>
				</div>
				-->
			</div>
			<div class="panel-footer">
				
			</div>
		</div>
	</div>
</div>
@endsection