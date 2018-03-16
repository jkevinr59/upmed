@extends('layouts.app-home')
@section('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css"/>
    <link rel="stylesheet" href="public/css/vertical-timeline.css">
@section('sidemenu')
	<li><a href="input">&nbsp;&nbsp;INPUT&nbsp;&nbsp;</a></li>
    <li><a href="track"><&nbsp;TRACK&nbsp;></a></li>
    <li><a href="service">&nbsp;&nbsp;SERVICE&nbsp;&nbsp;</a></li>
    <li><a href="#" class="sf-with-ul">&nbsp;&nbsp;PROFILE&nbsp;&nbsp;</a>
        <ul>
        <a href="profile">View Profile</a>
        <a href="resetpw">Reset Password</a>
        <a href="editprofile">Edit Profile</a>
        <a href="logout">Logout</a>
        </ul>
    </li>
@endsection
@section('content')
 <div class="row">
    <div class="col-md-3 col-md-offset-2 col-xs-4 col-xs-offset-4">
        <p class+"short-description" style="padding-left: 15px;">Proin mattis nisl non est dapibus elementum. or</p>
        <select class="subject-select form-control">
            <optgroup label="KEJADIAN MEDIS">
                <option>Trauma</option>
            </optgroup>
            <optgroup label="PEMERIKSAAN LAB">
                <option>Gula darah</option>
            </optgroup>
            <optgroup label="TRACK HABIT">
                <option>Berat Badan</option>
            </optgroup>
        </select>
    </div>
    <div class="col-md-3 col-md-push-2 col-md-offset-0 col-xs-4 col-xs-offset-4">
        <div class="detail-box" style="margin:0px 0px 15px 0px;">
            <button class="prevnext-btn" id="month-prev"><</button>
            <input type="text" name="month" id="month" value="January" readonly="true">
            <button class="prevnext-btn" id="month-next">></button>
            <br>
            <button class="prevnext-btn" id="year-prev"><</button>
            <input type="text" name="year" id="year" value="2017" readonly="true">
            <button class="prevnext-btn" id="year-next">></button>
        </div>
    </div>
 </div>
  <div class="row">
    <div class="col-lg-8 col-lg-offset-2" style="margin-top: 20px;">
        <canvas id="line-chart" width="85%" height="50"></canvas>
    </div>
  </div>
<script src="public/js/jquery.min.js"></script>
<script src="public/js/chart.min.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById("line-chart").getContext('2d');
    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            borderColor: 'rgba(50,50,50,1)',
            borderWidth: 2,
            fill:false,
        }]
    },
    options: {
        legend: {
            display:false
        },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
    });
</script>
@endsection