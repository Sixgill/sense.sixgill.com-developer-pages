jQuery(function($) {
	var submit = $("input[name=formSubmit]");
	submit.prop('disabled',true).addClass('disabled');
	var password = $("input[name='password']");
	var newPassword = $("input[name='newPassword']");
	var confirmPassword = $("input[name='confirmPassword']");
	var loginUsernameInput = $(".login-username-input");
	var loginPasswordInput = $(".login-password-input");
	var passwordsIndex = [5,6,7];
	var inputs = [
		{
			field:$("input[name='firstName']"),
			error_field:$("#firstName-error"),
			type:null,
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
			field:confirmPassword,
			error_field:$("#confirmPassword-error"),
			type:"checkPassword",
			validated:true
		}
	];

	function checkDisabled(){
		for(var i=0;i<inputs.length;i++){
			if(!inputs[i].validated){
				submit.prop('disabled',true).addClass('disabled');
				return;
			}
		}
		submit.prop('disabled',false).removeClass('disabled');
	}
	function disableSubmit(){
		submit.prop('disabled',true).addClass('disabled');
	}

	function isPasswordValid(){
		if(password.length){
			if(!password[0].value) {
				return {
					flag:false,
					message:"Password can not be empty"
				};
			}
			if(newPassword.length && newPassword[0].value == password[0].value) {
				return {
					flag:false,
					message:"Your new password and password can not be the same"
				};
			}
		}
		if(newPassword.length && confirmPassword.length){
			if(!newPassword[0].value || !confirmPassword[0].value) {
				return {
					flag:false,
					message:"Password and confirm password can not be empty"
				};
			}
			if(newPassword[0].value != confirmPassword[0].value){
				return {
					flag:false,
					message:"Confirm password and password are not the same"
				};
			}
		}
		return {
			flag:true
		}
	}
	function validate(field,error_field,additionalCase,index){
		if(!field || !field.value){
			error_field.find("p")[0].innerHTML = "Required field";
			error_field.show();
			disableSubmit();
			return;
		}
		if(field.value.length > 100) {
			error_field.find("p")[0].innerHTML = "100 Symbols max";
			error_field.show();
			disableSubmit();
			return;
		}
		if(additionalCase) {
			if(additionalCase == "email"){
				var reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   				if(!reg.test(field.value)) {
					error_field.find("p")[0].innerHTML = "Invalid e-mail";
					error_field.show();
					disableSubmit();
					return;
   				}
			} else if(additionalCase == "checkPassword"){
				var validPasswords = isPasswordValid();
				if(validPasswords.flag) {
					passwordsIndex.forEach(function(i){
						inputs[i].validated = true;
						inputs[i].error_field.hide();
					});
					checkDisabled();
					return;
				} else {
					error_field.find("p")[0].innerHTML = validPasswords.message;
					error_field.show();
					disableSubmit();
					return;
				}
			} 
		}
		error_field.hide();
		inputs[index].validated = true;
		checkDisabled();
	}
	function init(){
		for(var i=0;i<inputs.length;i++){
			if(inputs[i].field.length){
				inputs[i].validated = false;
				inputs[i].field.on("blur",(function(i){
					return function(){
						inputs[i].validated = false;
						validate(inputs[i].field[0],inputs[i].error_field,inputs[i].type,i);
					}
				})(i));
				inputs[i].error_field.find("img").on("click",(function(i){
					return function(){
						inputs[i].error_field.hide();
					}
				})(i));
			}
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
		}
	}
	init();
});
