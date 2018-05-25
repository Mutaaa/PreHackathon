function checklogin() {
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      //document.getElementById("txtHint").innerHTML=this.responseText;
      //console.log(this.responseText);
      if( this.responseText == "pass" ) {
        window.location='management.html';
      }else{
        alert(this.responseText);
      }
    }
  }
  xhttp.open("POST", "function/login.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("username="+username+"&password="+password);
}
