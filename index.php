<!DOCTYPE html>    
<html>
	<head> <title>
    Book Store Inventory
    </title>
		<style>

body{  
    margin: 0;  
    padding: 0;  
    background-image: url(bgmain.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;
    backdrop-filter: blur(6px);
    height: 100vh;				
    font-family: 'Arial';  
}
.login{  
    width: 382px;  
    overflow: hidden;  
    margin: auto;  
    margin: 20 0 0 450px;  
    padding: 30px; 
    background: rgba( 120, 55, 1, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 9px );
-webkit-backdrop-filter: blur( 9px );
border-radius: 10px;
}  
h2{  
    text-align: center;  
    color:white;  
}  
label{  
    color: white;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;		  
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color:#ad6a38; 

}  
#log:hover{
    background:#ad6a38;
    color:white;
}
span{  
    color: white;  
    font-size: 17px;  
}  
a{  
    color:white;
    text-align: right;

}
img.avatar {
  width: 100px;
   display: block;
  margin-left: auto;
  margin-right: auto;
  padding: 20px;
}
			</style>
		<script>
			function myFunction() {
				var x = document.getElementById("pass");
				if (x.type === "pass") {
					x.type = "text";
				} else {
					x.type = "pass";
				}
				}

                
		</script>
		<title>Book Store Inventory</title>       
	</head>    
	<body>
		<br><br><br><br><br><br>
		<div class="login"> 
			<form id="login" method="get" action="login.php" align=center>
				<h2>Admin Log In</h2>
				<label><b>Username  :   
				</b>    
				</label>    
				<input type="text" name="user" class="user" id="user" placeholder="Username">    
				<br><br>    
				<label><b>Password  :    
				</b>    
				</label>    
				<input type="Password" name="pass" class="pass" id="pass" placeholder="Password">    
				<br><br>    
				<input type="Button" onclick="location.href='home.php';" name="btn" id="log" value="Log In">       
				<br><br>
				<input type="checkbox" class="showpass" onclick="myFunction()"><font id ="fon"><span>Show Password</span></font>
				
				<input type="checkbox" id="check">    
				<span>Remember Me</span>    
				<br><br>    
				<a href="#"">Forgot Password</a>  
			</form>     
		</div>    
	</body>    
</html>  