/*
note:
sediakan text dengan id
title
description
subject
*/
var recordId=0;
function detail(id)
{
	console.log('ajax detail ' + id + ':');
	recordId = id;
	var select_id = {}
	select_id['id'] = id
	console.log(recordId);
	$.ajax({
		url: 'getdetail',
		data: select_id,
		dataType: 'json',
		timeout: 1500,
		success: function(json){
			var data = {};
			data["title"] = json.title;
			data["description"] = json.description;
			data["subject"] = json.subject;
			data["day"] = json.day;
			data["month"] = json.month;
			console.log(data);
			changeDetail(data);
			console.log('ajax success');
		}
	});
}

function changeDetail(data)
{
	$('#title').text(data.title);
	$("#description").text(data.description);
	$('#subject').text(data.subject);
	$('#date-day').text(data.day);
	$('#date-month').text(data.month);
}
function showRecommendation()
{	
	var select_id = {}
	select_id['id'] = recordId;
	console.log(recordId);
	$.ajax({
		url: 'recom',
		data: select_id,
		dataType: 'json',
		timeout: 1500,
		success: function(json){
			console.log('ajax success');
			console.log(json);
		}
	});
}