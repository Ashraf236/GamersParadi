function view_myselect(val) {
	 if(val=='product'){
	 	document.getElementById("homeView").innerHTML= "work in progress";
	 }
	 else if (val=='edit') {
	 	document.getElementById("homeView").innerHTML=  '<iframe id="frame" src="../view/userEdit.php" width="100%" height="700px" sandbox></iframe>';
	 }
	 else if (val=='messege') {
	 	document.getElementById("homeView").innerHTML=  '<iframe id="frame" src="../view/messege.php" width="100%" height="700px" sandbox></iframe>';
	 }
	 else{
	 	document.getElementById("homeView").innerHTML = '';
	 }
	 
}