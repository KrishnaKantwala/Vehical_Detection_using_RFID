	function load_data(id,index){
		//alert("hello");
		$.ajax({
			url: "ajaxselect.php?index="+index+"&id="+id,
			complete: function(){},
			success: function(data) {
				//alert(data);
				$("#"+index).html(data);
			},
			error:function(){
				//alert("hello error");
			}
		});
	}
	
	function load_seldata(id,index,selid){
		//alert("hello");
		$.ajax({
			url: "ajaxselect.php?index="+index+"&id="+id+"&selid="+selid,
			complete: function(){},
			success: function(data) {
				//alert(data);
				$("#"+index).html(data);
				$("#"+index).select2('val',selid);
			},
			error:function(){
				//alert("hello error");
			}
		});
	}