		$("#win").click(function(e){
		console.log('asdada');
			e.preventDefault();
			var email = $('#email').val();
			
			if(email =="") {
				alert('Email address is required');
				$("#email").focus();
			}
			else if (email != "") {
				var email = $('#email').val();
				var testEmail =  /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
				if (testEmail.test(email)){
					if (email.indexOf('.co', email.length - '.co'.length) != -1){
						alert('We are not accepting subscriptions from Colombia');
					}
					else if ($('#checkterms').is(':checked') == false) {
						alert('You must accept the terms and conditions');
					}
					else{
						$("#my_form").submit();
					}
				}
				else{
					console.log('win');
					alert('Please provide a valid e-mail address');

				}
			}
		 });

	$("#mob").click(function(e){
		e.preventDefault();
		var email = $('.mob_email').val();
		console.log(email);
		
		if(email =="") {
			alert('Email address is required');
			$(".mob_email").focus();
		}
		else if (email != "") {
			var email = $('.mob_email').val();
			var testEmail =  /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
			if (testEmail.test(email)){
				if (email.indexOf('.co', email.length - '.co'.length) != -1){
					alert('We are not accepting subscriptions from Colombia');
				}
				else if ($('#mobile_check').is(':checked') == false) {
					alert('You must accept the terms and conditions');
				}
				else{
					$("#my_form1").submit();
				}
			}
			else{
				console.log('mobile');
				alert('Please provide a valid e-mail address');

			}
		}
		});

