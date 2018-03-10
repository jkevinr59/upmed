$("#next-btn").click(function(){
	$("#next-btn,#uname-login").hide();
	$(".warning1").hide()	
	var $username = $("#uname-login").val();
	validatingUser($username);	
});

$("#submit-btn").click(function(){
	$('#pw-login,#submit-btn,.warning2,.back-link').hide();
	var $username = $("#uname-login").val();
	var $password = $("#pw-login").val();
	var $csrf = $('input[name=_token]').val();
	loginUser($username,$password,$csrf);	
});
$(".back-link").click(function(e){
	e.preventDefault();
	$("#pw-login,#submit-btn,.back-link").hide();
	$("#next-btn,#uname-login").fadeIn(200);
});
$("#about-goto").click(function(e){
	e.preventDefault();
	$("html , body").animate({scrollTop: 801},500);
})
function validatingUser($name){
	var inputData = {
			name: $name
		}
	$.ajax({
			url:'validateuser',
			data:inputData,
			dataType:'json',
			timeout:2000,
			success: function(data){
				var $json = data;
				if($json.success =="0")
				{
					$("#pw-login,#submit-btn,.back-link").fadeIn(200);
				}
				else if($json.success=="1")
				{
					$("#uname-login").val('');
					$(".warning1").fadeIn(200);
					$("#next-btn,#uname-login").fadeIn(200);
				}
			},
			error:function(jqXHR,exception)
			{
				alert("error");
			}
		});
}
function loginUser($name,$password,$token){
	var inputData = {user: $name,password: $password,_token :$token}
	$.ajax({
			type:'POST',
			url:'input',
			data:inputData,
			dataType:'json',
			success: function(data){
				var $json = data;
				if($json.success =="0")
				{
					window.location.replace("input");
				}
				else if($json.success=="1")
				{
					$('#pw-login').val('');
					$(".warning2").fadeIn(200)
					$("#pw-login,#submit-btn,.back-link").fadeIn(200);
				}
			}
		});
}
$(document).ready(function(){
	var pagePosition=0;
	$(".mid-page p").animate({bottom:'-=50px',opacity:'1'},800);
	$(".mid-page h1").animate({bottom:'-=80px',opacity:'1'},800);
	$(".logo-main").fadeIn(800);
	$("#next-btn,#uname-login").delay(1000).fadeIn(500);
	$(window).scroll(function(){
		var scrTop = $(window).scrollTop();
		if(scrTop > 600 && pagePosition!=1){
		load_aboutus();
		pagePosition=1;
		}
	});
});
function load_aboutus(){
	$(".about-us").fadeIn(800);
	$(".footbar").animate({opacity:'0.75'},800);
}
