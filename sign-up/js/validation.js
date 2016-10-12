jQuery(function($) {
	// var errorElement = $('footer div.footer-subscribe-error');
	// var errorArrow = $('footer div.footer-subscribe-arrow');
	// var timerId = null;
	// $('footer input.footer-subscription-email').keypress(function (e) {
	// 	if(!timerId){
	// 		timerId = setInterval(watchSubscription, 400);
	// 	}
	// });
	// $('footer input.footer-subscription-button').click(function() {
	// 	if(!timerId){
	// 		timerId = setInterval(watchSubscription, 400);
	// 	}
	// });
	// $('footer img.footer-subscribe-error-close').click(function(argument) {
	// 	clearInterval(timerId);
	// 	timerId = null;
	// 	errorElement.hide();
	// 	errorArrow.hide();
	// });

	// function watchSubscription() {
	// 	var errorMessageContainer = $('footer div.mc4wp-error p');
	// 	var successMessageContainer = $('footer div.mc4wp-success');
	// 	if(errorMessageContainer.length){
	// 		$("footer p.footer-subscribe-error-text")[0].innerHTML = errorMessageContainer[0].innerHTML;
	// 		errorElement.show();
	// 		errorArrow.show();
	// 	}
	// 	if(successMessageContainer.length){
	// 		errorElement.hide();
	// 		errorArrow.hide();
	// 		clearInterval(timerId);
	// 		timerId = null;
	// 	}
	// }

	// $('footer form.mc4wp-form').on('submit', function() {
	// 	errorElement.hide();
	// 	errorArrow.hide();
	// });
	////////////////////////////////////////////////////////
	var inputs = [
		{
			field:$("input[name='firstName']"),
			error_field:$("#firstName-error"),
			type:null
		},
		{
			field:$("input[name='lastName']"),
			error_field:$("#lastName-error"),
			type:null
		},
		{
			field:$("input[name='company']"),
			error_field:$("#company-error"),
			type:null
		},
		{
			field:$("input[name='email']"),
			error_field:$("#email-error"),
			type:"email"
		},
		{
			field:$("input[name='createUsername']"),
			error_field:$("#createUsername-error"),
			type:null
		},
		{
			field:$("input[name='password']"),
			error_field:$("#password-error"),
			type:"email"
		},
		{
			field:$("input[name='confirmPassword']"),
			error_field:$("#confirmPassword-error"),
			type:"confirm"
		}
	];
	function validate(field,error_field,additionalCase){
		console.log("field.value");
		console.log(field.value);
		if(!field || !field.value){
			error_field.find("p")[0].innerHTML = "Required field";
			error_field.show();
			return;
		}
		console.log("field.value.length");
		console.log(field.value.length);
		if(field.value.length > 100) {
			error_field.find("p")[0].innerHTML = "100 Symbols max";
			error_field.show();
			return;
		}
		if(additionalCase) {
			if(additionalCase == "email"){
				var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   				if(!reg.test(email)) {
					error_field.find("p")[0].innerHTML = "Invalid e-mail";
					error_field.show();
					return;
   				}
			} else if(additionalCase == "confirm"){
				if(field.value != $("input[name='password']")[0].value) {
					error_field.find("p")[0].innerHTML = "Confirm password and password are not the same";
					error_field.show();
					return;
				}
			}
		}
		error_field.hide();
	}
	// console.log("well it's working");
	// var firstName = $('input[name="firstName"]');
	// firstName.on("blur",function(){
	// 	console.log("eventlistener works!");
	// 	var errorcontainer = $('#firstName-error');
	// 	validate(firstName[0],errorcontainer);
	// })
	function init(){
		for(var i=0;i<inputs.length;i++){
			console.log(inputs[i].field);
			console.log(inputs[i].field.length);
			if(inputs[i].field.length){
				console.log(inputs[i].field[0]);
				inputs[i].field.on("blur",function(ev){
					return function(){
						console.log("eventlistener works!");
						console.log(ev);
						validate(inputs[i].field[0],inputs[i].error_field,inputs[i].type);
					}
				});
			}
		}
	}
	init();
});
