// document.getElementById('register').style.display ='none';
// function showAndHide(hideit,showit){
// 	document.getElementById(showit).style.display= 'block';
// 	document.getElementById(hideit).style.display= 'none';
// }
$(document).ready(function () {
	$("#register").hide();
	$("#ancor1").click(function(){
		$("#register").show(700),
		$("#login").hide(700);
	});
	$("#ancor2").click(function(){
		$("#login").show(700);
		$("#register").hide(700);
	});
});

function upperletter(givenId){
	myString = document.getElementById(givenId).value;
	firstChar = myString.substring(0,1);
	firstChar = firstChar.toUpperCase();
	tail = myString.substring(1);
	myString = firstChar + tail;
	document.getElementById(givenId).value = myString;
	//$("#givenId").val(myString);
	// console.log(myString);
}
	var patt2 = /[a-zA-Z]/g;
function checkpass(givenId) {
	var givenPass = document.getElementById(givenId).value;
	var patt1 = /[0-9]/g;
	
	if (givenPass.length < 8 || givenPass.length > 15) {
		$("#loginPass").html("<b style='color:red;'> Password must be between 8 and 15 character</b>");
		return false;
	}
	else if(!givenPass.match(patt1)){
		$("#loginPass").html("<b style='color:orange;'> Password must contain at least 1 digit</b>");
		return false;
	}
	else if (!givenPass.match(patt2)) {
		$("#loginPass").html("<b style='color:#8e8e48;'> Password must contain at least 1 letter</b>");
		return false;
	}
	else{
		$("#loginPass").html("<b style='color:green;'> Good All Set To Go</b>");
		return true;
	}
	// console.log(givenPass);
}
function checkRegpass(givenId) {
	var givenPass = document.getElementById(givenId).value;
	var patt1 = /[0-9]/g;
	
	if (givenPass.length < 8 || givenPass.length > 15) {
		$("#RegPassAlert").html("<b style='color:red;'> Password must be between 8 and 15 character</b>");
		return false;
	}
	else if(!givenPass.match(patt1)){
		$("#RegPassAlert").html("<b style='color:orange;'> Password must contain at least 1 digit</b>");
		return false;
	}
	else if (!givenPass.match(patt2)) {
		$("#RegPassAlert").html("<b style='color:#8e8e48;'> Password must contain at least 1 letter</b>");
		return false;
	}
	else{
		$("#RegPassAlert").html("<b></b>");
		return true;
	}
	// console.log(givenPass);
}
function matchPass(givenId) {
	if (document.getElementById(givenId).value != document.getElementById('regPass').value) {
		$("#repeatPassCheck").html("<b style='color:red;'> Password does not match </b>");
		return false;
	}
	else{
		$("#repeatPassCheck").html(" ");
		return true;
	}
}
function checkFirstName(givenId) {
	var givenName = document.getElementById(givenId).value;
	if (givenName.length <3) {
		$("#regFirstName").html("<b> First Name is too short </b>");
		return false;
	}
	else{
		$("#regFirstName").html("<b></b>");
		return true;
	}
}
function checkLastName(givenId) {
	var givenName = document.getElementById(givenId).value;
	if (givenName.length < 3) {
		$("#regLastName").html("<b> Your Last Name is too short");
		return false;
	}
	else{
		$("#regLastName").html(" ");
		return true;
	}
}

function finalLoginCheck() {
	return checkpass('password');
}
function finalRegCheck() {
	return checkLastName('lastname')&&checkFirstName('myname')&&matchPass('repeatPass')&&checkRegpass('regPass');
}