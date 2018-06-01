@extends('layouts.layout3')
@section('css')
<link href= <?php echo "'".url('public/css/home3.css')."'"?> rel="stylesheet">
<link href= <?php echo "'".url('public/css/home2.css')."'"?> rel="stylesheet">

@endsection
@section('content')
	<div class="row" style="padding-top: 80px;">
        <div class="col-md-10 col-md-offset-1">
            <h4><a href="mail">+ New Mail</a></h4>
        </div>
    </div>
	<div class="row" style="padding-top: 80px;">
        <div class="col-md-10 col-md-offset-1">
        	<table class="table">
        		<tr>
        			<th>#</th>
	        		<th>Dari</th>
	        		<th>Pesan</th>
	        		<th>Tanggal Diterima</th>
        		</tr>
        		<tbody>
					<!--
        			<tr class="unread-row clickable-row" data-href="#">
        				<td>1</td>
        				<td>Admin</td>
        				<td>Selamat Datang di Upmed</td>
        				<td>26 Mei 2018</td>
					</tr>-->
					<?php 
					foreach($mail as $row){
						$mailClass = "clickable-row";
						$href = "mail/".$row->id;
						if($row['status']=="0"){
							$mailClass ="unread-row ".$mailClass;
						}	
					?>
					<tr data-href=<?php echo $href;?> class=<?php echo "'".$mailClass."'";?>>
						<td><?php echo $row['#']?></td>
						<td><?php echo $row['recipient_name']?></td>
						<td><?php echo $row['message']?></td>
						<td><?php echo date('d F Y',strtotime($row['datetime']))?></td>
					</tr>
					<?php } ?>
        			<tr></tr>
        			<tr></tr>
        		</tbody>	
        	</table>
		</div>
    </div>
	
@endsection
@section('js')
	<script type="text/javascript">
		jQuery().ready(function(){

		});
		jQuery('.clickable-row').click(function(){
			window.location.assign(jQuery(this).data("href"));
		});
	</script>
@endsection