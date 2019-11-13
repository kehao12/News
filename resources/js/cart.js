$(document).ready(function(){
	$(".sl").change(function() {
		slm=$(this).val();
		masp=$(this).attr("data-msp");
		$.ajax({
			url: "Controllers/xulycart.php",
			type: "POST",
			data: "slm="+slm+"&masp="+masp,
			async: true, 
			success:function(kq){
				location.reload();
			}
		});
		
		
	});
})