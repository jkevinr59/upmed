/*
note:
sediakan text dengan id
title
description
subject
*/
function detail($id)
{
	console.log('ajax detail ' + $id + ':');
	var select_id = {}
	select_id['id'] = $id
	console.log(select_id);
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
			console.log(data);
			changeDetail(data);
			console.log('ajax success');
		}
	})
}

function changeDetail(data)
{
	$('#title').text(data.title);
	$("#description").text(data.description);
	$('#subject').text(data.subject);
}