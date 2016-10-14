jQuery(function($) {
	var submit = $("input[name=formSubmit]");
	var form = $("form.modal-submit-form");
	submit.prop('disabled',true).addClass('disabled');
	var passwordsIndex = [];
	var password = $("input[name='password']");
	if(password.length){
		passwordsIndex.push(2);
	}
	var newPassword = $("input[name='newPassword']");
	if(newPassword.length){
		passwordsIndex.push(3);
	}
	var confirmPassword = $("input[name='confirmPassword']");
	if(confirmPassword.length){
		passwordsIndex.push(7);
	}
	var loginUsernameInput = $(".login-username-input");
	var loginPasswordInput = $(".login-password-input");
	var inputs = [
		{
			field:$("input[name='firstName']"),
			error_field:$("#firstName-error"),
			type:null,
			validated:true
		},
		{
			field:$("input[name='username']"),
			error_field:$("#username-error"),
			type:null,
			validated:true
		},
		{
			field:password,
			error_field:$("#password-error"),
			type:"checkPassword",
			validated:true
		},
		{
			field:newPassword,
			error_field:$("#newPassword-error"),
			type:"checkPassword",
			validated:true
		},
		{
			field:$("input[name='lastName']"),
			error_field:$("#lastName-error"),
			type:null,
			validated:true
		},
		{
			field:$("input[name='company']"),
			error_field:$("#company-error"),
			type:null,
			validated:true
		},
		{
			field:$("input[name='email']"),
			error_field:$("#email-error"),
			type:"email",
			validated:true
		},
		{
			field:confirmPassword,
			error_field:$("#confirmPassword-error"),
			type:"checkPassword",
			validated:true
		}
	];

	function checkEnable(){
		for(var i=0;i<inputs.length;i++){
			if(inputs[i].field.length && !inputs[i].validated){
				submit.prop('disabled',true).addClass('disabled');
				return false;
			}
		}
		submit.prop('disabled',false).removeClass('disabled');
		return true;
	}
	function disableSubmit(){
		submit.prop('disabled',true).addClass('disabled');
	}

	function isPasswordValid(){
		if(password.length){
			if(!password[0].value) {
				return {
					flag:false,
					message:"Password can not be empty",
					index:2
				};
			}
			if(newPassword.length && newPassword[0].value == password[0].value) {
				return {
					flag:false,
					message:"Your new password and password can not be the same",
					index:3
				};
			}
		}
		if(newPassword.length && confirmPassword.length){
			if(!newPassword[0].value || !confirmPassword[0].value){
				return {
					flag:false,
					message:"Confirm password and password can not be empty",
					index:7
				};
			}
			if(newPassword[0].value != confirmPassword[0].value){
				return {
					flag:false,
					message:"Confirm password and password are not the same",
					index:7
				};
			}
		}
		return {
			flag:true
		}
	}

	function testEmail(value){
		var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return reg.test(value);
	}
	function showError(elem_field,error_field,message){
		error_field.find("p")[0].innerHTML = message;
		error_field.show();
		elem_field.addClass("error_field");
	}

	function validate(show_error,elem_field,error_field,additionalCase,index){
		var field = elem_field[0];
		if(!field || !field.value){
			inputs[index].validated = false;
			if(show_error){
				showError(elem_field,error_field,"Please fill out the field");
			}
			disableSubmit();
			return;
		}
		if(field.value.length > 100) {
			inputs[index].validated = false;
			if(show_error){
				showError(elem_field,error_field,"100 Symbols max");
			}
			disableSubmit();
			return;
		}
		if(additionalCase) {
			if(additionalCase == "email"){
				if(!testEmail(field.value)) {
					inputs[index].validated = false;
					if(show_error){
						showError(elem_field,error_field,"Invalid e-mail");
					}
					disableSubmit();
					return;
   				}
			} else if(additionalCase == "checkPassword"){
				for (var i = 0; i < passwordsIndex.length;i++) {
					if(!inputs[passwordsIndex[i]].field[0].value){
						return;
					}
				}
				var validPasswords = isPasswordValid();
				if(validPasswords.flag) {
					passwordsIndex.forEach(function(i){
						inputs[i].validated = true;
						inputs[i].field.removeClass("error_field");
						inputs[i].error_field.hide();
					});
					checkEnable();
					return;
				} else {
					for (var i = 0; i < passwordsIndex.length;i++) {
						inputs[passwordsIndex[i]].error_field.hide();
					}
					inputs[index].validated = false;
					if(show_error){
						showError(inputs[validPasswords.index].field,inputs[validPasswords.index].error_field,validPasswords.message);
					}
					disableSubmit();
					return;
				}
			} 
		}
		error_field.hide();
		inputs[index].validated = true;
		elem_field.removeClass("error_field");
		checkEnable();
	}
	function init(){
		var firstValidField = true;
		for(var i=0;i<inputs.length;i++){
			if(inputs[i].field.length){

				inputs[i].error_field.find("img").on("click",(function(i){
					return function(){
						inputs[i].error_field.hide();
					}
				})(i));
				if(!inputs[i].type){
					inputs[i].validated = false;
					inputs[i].field.bind("input",(function(i){
						return function(){
							inputs[i].validated = false;
							validate(true,inputs[i].field,inputs[i].error_field,inputs[i].type,i);
						}
					})(i));
					inputs[i].error_field.find("img").on("click",(function(i){
						return function(){
							inputs[i].error_field.hide();
						}
					})(i));
				} else if(inputs[i].type === "email"){
					inputs[i].validated = false;
					inputs[i].field.bind("input",(function(i){
						return function(){
							// if(0 < inputs[i].field[0].value.length < 100 && testEmail(inputs[i].field[0].value)) {
							// 	inputs[i].validated = true;
							// 	inputs[i].error_field.hide();
							// 	checkEnable();
							// }
							validate(false,inputs[i].field,inputs[i].error_field,inputs[i].type,i);
						}
					})(i));
					inputs[i].field.on("blur",(function(i){
						return function(){
							validate(true,inputs[i].field,inputs[i].error_field,inputs[i].type,i);
						}
					})(i));
				} else if(inputs[i].type === "checkPassword") {
					inputs[i].validated = false;
					inputs[i].field.bind("input",(function(i){
						return function(){
							// var validity = isPasswordValid();
							// if((0 < inputs[i].field[0].value.length < 100) && validity.flag) {
							// 	passwordsIndex.forEach(function(i){
							// 		inputs[i].validated = true;
							// 		inputs[i].field.removeClass("error_field");
							// 		inputs[i].error_field.hide();
							// 	});
							// 	checkEnable();
							// }
							validate(false,inputs[i].field,inputs[i].error_field,inputs[i].type,i);
						}
					})(i));
					inputs[i].field.on("blur",(function(i){
						return function(){
							validate(true,inputs[i].field,inputs[i].error_field,inputs[i].type,i);
						}
					})(i));
				}
				inputs[i].field.on("focus",(function(i){
					return function(){
						inputs[i].error_field.hide();
					}
				})(i));
				if(inputs[i].field[0].value){
					validate(false,inputs[i].field,inputs[i].error_field,inputs[i].type,i);
				}
				if(firstValidField) {
					firstValidField = false;
					inputs[i].field.focus();
				}
			}
		}
		if(form.length){
			form.on("submit",function(ev){
				submit.focus();
				return checkEnable();
			});
		}
		if(loginUsernameInput.length) {
			loginUsernameInput.focus(function(){
				loginUsernameInput.removeClass("invalid");
			});
			loginUsernameInput.blur(function(){
				if(!loginUsernameInput[0].value) {
					loginUsernameInput.addClass("invalid");
				}
			});
			loginPasswordInput.focus(function(){
				loginPasswordInput.removeClass("invalid");
			});
			loginPasswordInput.blur(function(){
				if(!loginPasswordInput[0].value) {
					loginPasswordInput.addClass("invalid");
				}
			});
			//initial check for login
			if(loginUsernameInput[0].value) {
				loginUsernameInput.removeClass("invalid");
			}
			if(loginPasswordInput[0].value) {
				loginPasswordInput.removeClass("invalid");
			}
		}
	}
	init();
});
