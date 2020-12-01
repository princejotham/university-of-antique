$(document).ready(function(){
	var i=1;
	$('#add-proponents-input').click(function(){
		i++;
		$('#proponent-inputs').append('<div class="input-group mt-2" id="rowproponent'+i+'"><input type="text" class="form-control" id="proponent'+i+'" placeholder="Enter Name of Proponent" name="proponent[]"><span class="input-group-append"><button type="button" name="removeproponent" id="'+i+'" class="btn btn-danger btn_remove_proponent">Del</button></span></div>');
	});
	
	$(document).on('click', '.btn_remove_proponent', function(){
		var button_id = $(this).attr("id"); 
		$('#rowproponent'+button_id+'').remove();
	});
	var j=1;
	$('#add-budget-input').click(function(){
		j++;
		$('#item-budget-inputs').append('<div class="input-group mt-2" id="rowbudget'+j+'"><input type="text" class="form-control" id="budget-item'+j+'" placeholder="Enter Budget Item" name="budgetitem[]"><input type="text" class="form-control" id="budget-amount'+j+'" placeholder="Enter Budget Amount" name="budgetamount[]"><span class="input-group-append"><button type="button" name="removebudget" id="'+j+'" class="btn btn-danger btn_remove_budget">Del</button></span></div>');
	});
	
	$(document).on('click', '.btn_remove_budget', function(){
		var button_id = $(this).attr("id"); 
		$('#rowbudget'+button_id+'').remove();
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