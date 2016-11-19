$(document).ready(function(){
	$('#taginput').keyup(function(){
		var query = $(this).val();
		if(query != ''){
			//fetch the predicted tag
			$.ajax({
				url:"inc/data.php",
				method:"POST",
				data:{query:query},
				success:function(data){
					$("#taginput").keypress(function(event) {
						if (event.which == 13) {
							$('#list').fadeOut();
						}else{
							$('#list').fadeIn();
							$('#list').html(data);
						}
					});
				}
			}) 
		}else{
			$('#list').fadeOut();
		}
	})
	$(document).on('click', 'li', function(){  
        $('#taginput').val($(this).text());  
        $('#list').fadeOut();
        $('#loading').show();
        $('#ajax-id').hide();

        //set the value when  select a  predicted word
        var input = $("#taginput").val();
        	if(input != ''){
        		$.ajax({
					type:"POST",
					url:"inc/api.php",
					data:{taginput:input},
					success:function(data){
						$('#ajax-id').show();
						$('#ajax-id').html(data);
						$('#loading').hide();
					}
				})
			}  
    });

	//submit data when enter key is press
	$("#taginput").keypress(function(event) {
		var inn = $(this).val();
    	if (event.which == 13) {
    		$('#list').fadeOut();
        	event.preventDefault();
        	$(this).submit();
        	$('#loading').show();
        	$('#ajax-id').hide();
        	$.ajax({
        		type:"POST",
				url:"inc/api.php",
				data:{taginput:inn},
				success:function(data){
					$('#ajax-id').show();
					$('#ajax-id').html(data);
					$('#loading').hide();
				}
        	})
        	//insert data in database;
        	var que = $(this).val();
			if(que != ''){
				$.ajax({
					url:"inc/insert.php",
					method:"POST",
					data:{que:que}
				}) 
			}
    	}
	});
	//animate div return to top
	$("#to-top").click(function(){
		$("html, body").animate({
			scrollTop: $("#top").offset().top
		},2000);
	});
	$(window).scroll(function(){
		$("#to-top").show();
		clearTimeout($.data(this, 'scrollTimer'));
    	$.data(this, 'scrollTimer', setTimeout(function() {
        	$("#to-top").hide();
    	}, 2000));
	})
});