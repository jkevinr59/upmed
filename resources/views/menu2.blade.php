@extends('layouts.layout3')
@section('css')
<link href="public/css/home3.css" rel="stylesheet">
<link href="public/css/home2.css" rel="stylesheet">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-4 col-xs-offset-2">
        <h4 class="calibri">U P L O A D</h4>
        <p class="txt-gray2 calibri">Upload histori medismu di sini</p>
    </div>
</div>
<div class="row" style="padding-top: 30px;height: 85%;">
		<div class="col-xs-2 col-xs-offset-2" style="width:200px;">
			<div class="row">
				<div class="panel panel-success custom-panel-1 custom-panel-portrait">
    				<div class="panel-heading">
        				<div class="row">
            				<div class="col-xs-12">
                				<center><i class="fa fa-medkit fa-6x"></i></center>
                			</div>
                			<div class="col-xs-12">
                     				<center>
                                       <b style="font-size: 18px;">Merasakan Sakit?</b>
                                        <div>Kami Bantu Anda mencari penyebabnya</div> 
                                    </center>
                 			</div>
        	 			</div>
    				</div>
    				<a href="sakitapa">
    					<div class="panel-footer">	
        					<span class="pull-right">Mulai Diagnosa <i class="fa fa-arrow-circle-right"></i></span>
        					<div class="clearfix"></div>
    					</div>
    				</a>
				</div>
			</div>
		</div>
        <div class="col-xs-3" style="margin: 0px 40px;">
            <div class="row">
                <div class="panel panel-default custom-panel-2 custom-panel-landscape">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                    <b style="font-size: 18px;">Mengalami Sesuatu Hari Ini?</b>
                                    <div>Catat Kejadianmu bersama Kami</div>
                            </div>
                        </div>
                    </div>
                    <a href="trauma">
                        <div class="panel-footer">  
                            <span class="pull-right">Mulai Catat <i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>    
            </div>
            <div class="row">
                <div class="panel panel-default custom-panel-3 custom-panel-landscape">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-clipboard fa-4x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                    <b style="font-size: 18px;">Habis dari Lab?</b>
                                    <div>Catat Hasil Labmu disini</div>
                            </div>
                        </div>
                    </div>
                    <a href="lab">
                        <div class="panel-footer">  
                            <span class="pull-right">Mulai Catat <i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-2" style="width:200px;">
            <div class="row">
                <div class="panel panel-default custom-panel-4 custom-panel-portrait">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <center><i class="fa fa-user-md fa-6x"></i></center>
                            </div>
                            <div class="col-xs-12 text-right">
                                <center>
                                    <b style="font-size: 16px;">Habis Berkunjung ke Dokter?</b>
                                    <div>Catat Hasil Diagnosa Dokter Anda disini</div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <a href="dokter">
                        <div class="panel-footer">  
                            <span class="pull-right">Mulai Catat <i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>     
        </div>
</div>
<!--
<div class="row">
<div class="col-md-8 col-md-offset-2">
	<div class="row">
			<div class="panel panel-primary">
    			<div class="panel-heading">
        			<div class="row">
            			<div class="col-xs-3">
                			<i class="fa fa-comments fa-5x"></i>
                		</div>
                		<div class="col-xs-9 text-right">
                     			<b style="font-size: 18px;">Mengalami Sesuatu Hari Ini?</b>
                     			<div>Catat Kejadianmu bersama Kami</div>
                 		</div>
        	 		</div>
    			</div>
    			<a href="#">
    				<div class="panel-footer">	
        				<span class="pull-right">Mulai Catat <i class="fa fa-arrow-circle-right"></i></span>
        				<div class="clearfix"></div>
    				</div>
    			</a>
			</div>
	</div>
	<div class="row">
			<div class="panel panel-info">
    			<div class="panel-heading">
        			<div class="row">
            			<div class="col-xs-3">
                			<i class="fa fa-clipboard fa-5x"></i>
                		</div>
                		<div class="col-xs-9 text-right">
                     			<b style="font-size: 18px;">Habis dari Lab?</b>
                     			<div>Catat Hasil Labmu disini</div>
                 		</div>
        	 		</div>
    			</div>
    			<a href="input">
    				<div class="panel-footer">	
        				<span class="pull-right">Mulai Catat <i class="fa fa-arrow-circle-right"></i></span>
        				<div class="clearfix"></div>
    				</div>
    			</a>
			</div>
	</div>
	<div class="row">
			<div class="panel panel-primary">
    			<div class="panel-heading">
        			<div class="row">
            			<div class="col-xs-3">
                			<i class="fa fa-user-md fa-5x"></i>
                		</div>
                		<div class="col-xs-9 text-right">
                     			<b style="font-size: 18px;">Habis Berkunjung ke Dokter?</b>
                     			<div>Catat Hasil Diagnosa Dokter Anda disini</div>
                 		</div>
        	 		</div>
    			</div>
    			<a href="#">
    				<div class="panel-footer">	
        				<span class="pull-right">Mulai Catat <i class="fa fa-arrow-circle-right"></i></span>
        				<div class="clearfix"></div>
    				</div>
    			</a>
			</div>
	</div>
</div>
</div>
-->
@endsection