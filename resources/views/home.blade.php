@extends('layouts.dashboard')
@section('content')
    <div class="row">
    	<div class="col-md-9 col-md-offset-2">
    		<form  class="custom-input-form form-horizontal" role="form" action="inputdata" method="POST" onsubmit="return isValid()">
    			{{csrf_field()}}
                <div class="row">
    				<div class="col-md-5 col-md-offset-0 col-xs-10 col-xs-offset-1">
     					<div class="form-group">
    						<label class="sr-only" for="Title">Title</label>
    						<input type="text" class="form-control" name="title" placeholder="Title">
    					</div>
    					<div class="form-group">
    						<label class="sr-only" for="Description">Description</label>
          					<textarea class="form-control" id="txtarea" name="description_input" placeholder="Description"></textarea>
          				</div>
                        <input name="imagepath" id="upload-input" type="file" accept="image/*">
                        <button id="upload-btn" type="button" class="button" style="width: 250px;">Upload an Image</button>
    				</div>
    				<div class="col-md-5 col-md-offset-1 col-xs-10 col-xs-offset-1">
    					<div class="form-group">
     						<select name="Subject" class="form-control" onchange='changetype();' id="subjekmenu" >
    						<option>Select Medical Subject...</option>
                            <?php foreach($query as $row){?>
                                <option value=<?php echo $row['id'] ?>>
                                <?php echo $row['Name']?>
                                </option>
                            <?php } ?>
    						</select>
    					</div>
          				<div class="form-group">
          					<label class="sr-only" for="date">Description</label>
           					<input id="datefield" class="form-control" type="date" name="inputdate">
           					<input type="Submit" class="button pull-right" name="input-submit-btn" value="Save" style="margin-top: 40px;">
          				</div>
    				</div>
    			</div>
    		</form>
        </div>
    </div>
    <div class="quick-bar" style="height: 200px">
    	<div class="row">
    		<div class="col-xs-4 col-xs-offset-5"><h1>Q U I C K</h1></div>
    	</div>
    	<div class="row">
    		<div class="col-lg-10 col-lg-offset-1">
    			<ul>
 				<li><a id="quick-1">DEMAM</a></li>
    			<li><a id="quick-2">KOLESTEROL</a></li>
    			<li><a id="quick-3">JATUH</a></li>
    			<li><a id="quick-4">ROKOK</a></li>
    			<li><a id="quick-5">LUKA</a></li>
    			<li><a id="quick-6">HIPERTENSI</a></li>
    			<li><a id="quick-7">DIABETES</a></li>
    			<li><a id="quick-8">RUAM KULIT</a></li>
    			</ul>
    		</div>
    	</div>
    </div>
<script type="text/javascript" src="public/js/autosize.min.js"></script>
<script type="text/javascript">
    var subjekType=[0];
    $(document).ready(function(){
        $('#nav-input').addClass('selected');
        <?php foreach($query as $row){ 
            echo "subjekType.push('".$row['Type']."');";
        }?>
        
    });
    $('#upload-btn').click(function(){
        $('#upload-input').click();
    });
    function changetype()
    {
        $('#txtarea').val("");
        var selectedId = $('#subjekmenu').prop('selectedIndex');
        if(subjekType[selectedId] == 0)
        {
            $('#txtarea').attr("placeholder","Description");
        }
        else if(subjekType[selectedId]==1)
        {
            $('#txtarea').attr("placeholder","Value in Number");
        }
    
    }
        function isValid(){
            var isNumeric=$.isNumeric($('#txtarea').val());
            var selectedId = $('#subjekmenu').prop('selectedIndex');
           if(subjekType[selectedId] == 1 && isNumeric == true && $("#datefield").val()!="")
            {
                return true;
            }
            else if(subjekType[selectedId] == 1 && isNumeric == false)
            {
                alert ("Mohon mengisi nilai angka pada kolom Value");
                return false;
            }
            else if($("#datefield").val()=="")
            {
                alert("Tanggal tidak boleh kosong");
                return false;
            }
        }    
    autosize($('#txtarea'));
</script>
@endsection