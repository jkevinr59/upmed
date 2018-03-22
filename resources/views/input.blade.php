@extends('layouts.layout3')
@section('css')
<link href="public/css/home2.css" rel="stylesheet">
<link href="public/css/home3.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row" style="padding-top: 80px;">
        <div class="col-md-9 col-md-offset-1">
            <form  class="custom-input-form form-horizontal" role="form" action="inputdata" method="POST" onsubmit="return isValid()">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1">
                        <div class="form-group">
                            <label class="control-label col-xs-1" for="date" style="text-align: left;padding-left: 0px;">Tanggal:</label>
                            <div class="col-xs-5">
                                <input id="datefield" class="form-control" type="date" name="inputdate" value=<?php echo date('"Y-m-d"')?>>
                            </div>   
                        </div>
                        <div class="form-group">
                            <label class="control-label">Subjek:</label>
                            <select name="Subject" class="form-control" onchange='changetype();' id="subjekmenu" >
                            <option <?php if($selectedSubjectID == 0) echo "Selected"?>>Select Medical Subject...</option>
                            <?php foreach($query as $row){?>
                                <option value=<?php echo $row['id']; ?> <?php if($row['id'] == $selectedSubjectID) echo 'selected';?>>
                                <?php echo $row['Name']?>
                                </option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="Title">Judul:</label>
                            <input type="text" class="form-control" name="title" placeholder="Title">
                        </div>
                        <div class="form-group">
                            <label class="control-label" id="txtarea-label" for="Description">Description:</label>
                            <textarea class="form-control" id="txtarea" name="description_input" placeholder="Description"></textarea>
                        </div>
                        
                        <div class="form-group">                       
                            <input name="imagepath" id="upload-input" type="file" accept="image/*">
                            <button id="upload-btn" type="button" class="button pull-left" style="width: 150px; margin-top:40px;">Photo/Image</button>
                            <input type="Submit" class="button pull-right" name="input-submit-btn" value="Save" style="margin-top: 40px;">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="quick-bar" style="height: 200px">
        <div class="row">
            <div class="col-xs-12"><h3 style="text-align: center;">Q U I C K</h3></div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <ul>
                <li><a id="quick-1"><span class="pull-left">DEMAM</span></a></li>
                <li><a id="quick-2"><span class="pull-left">KOLESTEROL</span></a></li>
                <li><a id="quick-3"><span class="pull-right">JATUH</span></a></li>
                <li><a id="quick-4"><span class="pull-right">ROKOK</span></a></li>
                <li><a id="quick-5"><span class="pull-left">LUKA</span></a></li>
                <li><a id="quick-6"><span class="pull-left">HIPERTENSI</span></a></li>
                <li><a id="quick-7"><span class="pull-right">DIABETES</span></a></li>
                <li><a id="quick-8"><span class="pull-right">RUAM KULIT</span></a></li>
                </ul>
            </div>
        </div>
    </div>   
@endsection
@section('js')
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
            $('#txtarea-label').text("Amount:");
            $('#txtarea').attr("placeholder","Amount");
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