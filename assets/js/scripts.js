$(document).ready(function(){
	var i=1;
	$('#add-proponents-input').click(function(){
		i++;
		$('#proponent-inputs').append('<div class="input-group mt-2" id="row'+i+'"><input type="text" class="form-control" id="proponent'+i+'" placeholder="Enter Name of Proponent" name="proponent[]"><span class="input-group-append"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">Del</button></span></div>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});