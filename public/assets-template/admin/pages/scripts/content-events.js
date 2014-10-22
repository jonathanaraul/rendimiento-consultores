$("#grafico").live("click",function() {
	var my_multi_select1 = $("#my_multi_select1").val();

	$.ajax({
		type: 'POST', url:'graphics',
		data:{
			option:my_multi_select1,
		}, dataType:'json',
		success:function(data){
		console.log(data);
		},
		error:function(){
			alert('error');
		}
	});


});