


$('#bookingtype').on('change', function(){
	let btype = $(this).val();
	if(btype == 'E'){

		$('.event').removeClass('hide');
		$('.movie').addClass('hide');

	}else{
		$('.movie').removeClass('hide');
		$('.event').addClass('hide');
	}
	console.log(btype);
});



$('#regbtn').on('click',function(){
	$('.errormsg').html('');


	var data= $("#registerfrm").serialize();

	// console.log(data); return false;
	$.ajax({
		url:"insert.php",
		method:"POST",
		data:data,
		datatype:'json',
		async:false,

		success: function(response){

			if(response=='1'){
					$('.succmsg').append(' Record Updated Successfully');
					alert(" Record Updated Successfully");
				
			}
		}

	});


	

});







