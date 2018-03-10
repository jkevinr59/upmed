@extends('layouts.layout3')
@section('css')
<link href="public/css/home3.css" rel="stylesheet">
@endsection
@section('content')
<div class="row" style="padding-top: 30px;">
		<div class="col-xs-3">
			<div class="row">
				<div class="panel panel-success">
    				<div class="panel-heading">
        				<div class="row">
            				<div class="col-xs-3">
                				<i class="fa fa-medkit fa-4x"></i>
                			</div>
                			<div class="col-xs-9 text-right">
                     				<b style="font-size: 18px;">Merasakan Sakit?</b>
                     				<div>Kami Bantu Anda mencari penyebabnya</div>
                 			</div>
        	 			</div>
    				</div>
    				<a href="#">
    					<div class="panel-footer">	
        					<span class="pull-right">Mulai Diagnosa <i class="fa fa-arrow-circle-right"></i></span>
        					<div class="clearfix"></div>
    					</div>
    				</a>
				</div>
			</div>
		</div>
        <div class="col-xs-3 col-xs-offset-1">
            <div class="row">
                <div class="panel panel-primary">
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
        </div>
        <div class="col-xs-3 col-xs-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user-md fa-4x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                                <b style="font-size: 16px;">Habis Berkunjung ke Dokter?</b>
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