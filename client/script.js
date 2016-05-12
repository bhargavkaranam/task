$(document).ready(function() {
	var count = 0;
	$('select').material_select();
	$(document).on("click",".submit",function(){
		var type = $("#type").val();
		var val = $("#val").val();
		count++;
		$.ajax({
			url : 'server/' + type + '.php',
			type : 'post',
			data : 'val=' + val + '&type=' + type,
			dataType : 'json',
			success : function(data)
			{
				if(data.type === "hash")
				{
				$(".response").append("Hash(#" + count + ")<table><thead><tr><th>Input</th><th>Output</th></tr></thead><tbody><tr><td>" + data.input + "</td><td>" + data.hash + "</td></tr></tbody></table>");
				}
				else if(data.type == "counter")
				{
					$(".response").append("Counter(#" + count + ")<table><thead><tr><th>Input</th><th>Output</th></tr></thead><tbody><tr><td>" + data.input + "</td><td>" + data.count + "</td></tr></tbody></table>");
				}
				else if(data.type == "global")
				{
					$(".response").append("GlobalCounter(#" + count + ")<table><thead><tr><th>Input</th><th>Old Counter</th><th>Output</th></tr></thead><tbody><tr><td>" + data.input + "</td><td>" + data.old + "</td><td>" + data.new + "</td></tr></tbody></table>");
				}
				},
			});
		});
	});