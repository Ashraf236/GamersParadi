
function validate(){

	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	if(username == "" && password == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		document.getElementById('passMsg').innerHTML = "password can't left empty";
		return false;
	}
	else if(username == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		return false;

	}
	else if(password == ""){
		document.getElementById('passMsg').innerHTML = "password can't left empty";
		return false;
	}
	else if(username != "" && password != ""){
		return true;
	}

}

function nameRemover(){
	  document.getElementById('userMsg').innerHTML = "";
}
function passRemover(){
	  document.getElementById('passMsg').innerHTML = "";
}

function blr(){

	if(document.getElementById('username').value == ""){
		document.getElementById('userMsg').innerHTML = "this field is required!";
	}
}
function goBack() {
  window.history.back();
}
/*function checkDB(){
     
	//let s = "";
	var formdata = {
		'unme' :document.getElementById('username').value,
		'pass' : document.getElementById('password').value
	};
	var data = JSON.stringify(formdata);
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/logchk.php', true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('userCheck='+data);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			
			var obj = JSON.parse(this.responseText);

			//document.getElementById('errorMsg').innerHTML = obj.msg;
			 //s =  obj.stat;
			 //document.getElementById('errorMsg').innerHTML = this.responseText;
			
             }
		}
	}
*/	

function checkUser(){
     
	//let s = "";
	var formdata = {
		'uname' :document.getElementById('username').value
	};
	var data = JSON.stringify(formdata);
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/logchk.php', true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('userSearch='+data);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			
			//var obj = JSON.parse(this.responseText);

			//document.getElementById('errorMsg').innerHTML = obj.msg;
			 //s =  obj.stat;
			 document.getElementById('errorMsg').innerHTML = this.responseText;

		}
	}
	
}
function checkEmail(){
     
	//let s = "";
	var formdata = {
		'emil' :document.getElementById('email').value
	};
	var data = JSON.stringify(formdata);
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../php/logchk.php', true);

	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('emailSearch='+data);
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			
			//var obj = JSON.parse(this.responseText);

			//document.getElementById('errorMsg').innerHTML = obj.msg;
			 //s =  obj.stat;
			 document.getElementById('availabiltyMsg').innerHTML = this.responseText;

		}
	}
	
}
function regValidation(){

    let nm = regNameCheck();
    let em =regEmailCheck();
    let um =regUnameCheck();
    let ad =regAddrsCheck();
    let cp =regConPassCheck();
    let db =regDobCheck();
    let cnt =regContCheck();
    
    if(nm==true&&em==true&&um==true&&ad==true&&cp==true&&db==true&&cnt==true)
    {
    	return true;
    }
    else{
    	 return false;
    }
}

function regNameCheck(){
	var name = document.getElementById('name').value;
	if(name == ""){
		document.getElementById('nameMsg').innerHTML = "*name require";
		return false;
	}
	else{
		return true;
	}

}

function regEmailCheck(){

    let eml = document.getElementById("email").value;

    if (eml == "")
    {
        document.getElementById("emailMsg").innerHTML = "*required";
        document.getElementById('availabiltyMsg').innerHTML ="";
        return false;
    }

    var at = eml.indexOf("@");
    var dot = eml.lastIndexOf("\.");
    if (!(eml.length > 0 && at > 0 && eml[at + 1] !== "." && dot > at + 1 && dot < eml.length && eml.indexOf(" ") === -1 && eml.indexOf("..") === -1))
    {
        document.getElementById("emailMsg").innerHTML = "*invalid";
        document.getElementById('availabiltyMsg').innerHTML ="";
        return false;
    }
    else
    {
        document.getElementById("emailMsg").innerHTML = "*Valid input; ";
        checkEmail();
        return true; 
    }
    
    
}




function regUnameCheck(){
    var uname = document.getElementById('username').value;
	if(uname == ""){
		document.getElementById('unameMsg').innerHTML = "*require username";
		document.getElementById('errorMsg').innerHTML ="";
		return false;
	}
	else if(uname!="" && uname.length<4){
		
		document.getElementById('unameMsg').innerHTML = "*too short. use atleast 5 digit";
		document.getElementById('errorMsg').innerHTML ="";
		return false;
	}
	else{
		document.getElementById("unameMsg").innerHTML = "*Valid input; ";
		//ajax
		checkUser();
		return true;
	}
	
}
function regAddrsCheck(){
	var addrs = document.getElementById('address').value;
	if(addrs == ""){
		document.getElementById('addMsg').innerHTML = "*require address";
		return false;
	}
	else{
		document.getElementById('addMsg').innerHTML = "*valid input";
		return true;
	}
}
function regContCheck(){
	var cntct = document.getElementById('contact').value;
	if(cntct == ""){
		document.getElementById('contactMsg').innerHTML = "*require contact";
		return false;
	}
	else if(cntct.length!=11){
		document.getElementById('contactMsg').innerHTML = "*contact no must contain 11 digit";
		return false;
	}
	else{
		document.getElementById('contactMsg').innerHTML = "*valid";
		return true;
	}
}
function regDobCheck(){
	var date = document.getElementById('dob').value;
	if(date == ""){
		document.getElementById('dobMsg').innerHTML = "*require Birthdate";
		return false;
	}
	else{
	document.getElementById('dobMsg').innerHTML = date;
     return true;
     }
}

function regPassCheck(){
	var pass = document.getElementById('password').value;
	if(pass == ""){
		document.getElementById('passMsg').innerHTML = "*require password";
		return false;
	}
	else if(pass.length<8){
		document.getElementById('passMsg').innerHTML = "*password must contain atleast 9 digit";
		return false;
	}
	else{
		document.getElementById('passMsg').innerHTML = "*valid";
		return true;
	}
}
function regConPassCheck(){
    var pass = document.getElementById('password').value;
    var conPass = document.getElementById('con_pass').value;
	if(conPass == ""){
		document.getElementById('con_passMsg').innerHTML = "*require password";
		return false;
	}
	else if(conPass.length<8){
		document.getElementById('con_passMsg').innerHTML = "*password must contain atleast 9 digit";
		return false;
	}
	else if(conPass == pass){
		document.getElementById('con_passMsg').innerHTML = "*password matched";
		return true;
	}
	else{
		document.getElementById('con_passMsg').innerHTML = "*passwords didnt matched";
		return false;
	}	
}
function nmRemover(){
	  document.getElementById('nameMsg').innerHTML = "";
}

