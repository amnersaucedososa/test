
		// $(document).on('ready', function(){
		// 	$('#show-pass').on('click', function(e){
		// 		e.preventDefault();
		// 		var current = $(this).attr('action');
		// 		if (current == 'hide') {
		// 			$(this).prev().attr('type', 'text');
		// 			$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action', 'show');
		// 		}
		// 		if (current == 'show') {
		// 			$(this).prev().attr('type', 'password');
		// 			$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action', 'hide');
		// 		}
		// 	})
		// })

		$(document).ready(function(){
			$("#show-pass").click(function(e){
				e.preventDefault();
				var current = $(this).attr('action');
				if (current=='hide') {
					$(this).prev().attr('type', 'text');
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action', 'show');
				}
				if (current=='show') {
					$(this).prev().attr('type', 'password');
					$(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action', 'hide');
				}
			})
		})
