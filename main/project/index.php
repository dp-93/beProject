

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ===== Iconscout CSS ===== -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />

    <!-- ===== CSS ===== 
    <link rel="stylesheet" href="loginstyle.css" />-->
<style>
/* ===== Google Font Import - Poformsins ===== */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #4070f4;
}

.container {
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  margin: 0 20px;
}

.container .forms {
  display: flex;
  align-items: center;
  height: 440px;
  width: 200%;
  transition: height 0.2s ease;
}

.container .form {
  width: 50%;
  padding: 30px;
  background-color: #fff;
  transition: margin-left 0.18s ease;
}

.container.active .login {
  margin-left: -50%;
  opacity: 0;
  transition: margin-left 0.18s ease, opacity 0.15s ease;
}

.container .signup {
  opacity: 0;
  transition: opacity 0.09s ease;
}
.container.active .signup {
  opacity: 1;
  transition: opacity 0.2s ease;
}

.container.active .forms {
  height: 600px;
}
.container .form .title {
  position: relative;
  font-size: 27px;
  font-weight: 600;
}

.form .title::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  background-color: #4070f4;
  border-radius: 25px;
}

.form .input-field {
  position: relative;
  height: 50px;
  width: 100%;
  margin-top: 30px;
}

.input-field input {
  position: absolute;
  height: 100%;
  width: 100%;
  padding: 0 35px;
  border: none;
  outline: none;
  font-size: 16px;
  border-bottom: 2px solid #ccc;
  border-top: 2px solid transparent;
  transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) {
  border-bottom-color: #4070f4;
}

.input-field i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  color: #999;
  font-size: 23px;
  transition: all 0.2s ease;
}

.input-field input:is(:focus, :valid) ~ i {
  color: #4070f4;
}

.input-field i.icon {
  left: 0;
}
.input-field i.showHidePw {
  right: 0;
  cursor: pointer;
  padding: 10px;
}

.form .checkbox-text {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-top: 20px;
}

.checkbox-text .checkbox-content {
  display: flex;
  align-items: center;
}

.checkbox-content input {
  margin-right: 10px;
  accent-color: #4070f4;
}

.form .text {
  color: #333;
  font-size: 14px;
}

.form a.text {
  color: #4070f4;
  text-decoration: none;
}
.form a:hover {
  text-decoration: underline;
}

.form .button {
  margin-top: 35px;
}

.form .button input {
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  letter-spacing: 1px;
  border-radius: 6px;
  background-color: #4070f4;
  cursor: pointer;
  transition: all 0.3s ease;
}

.button input:hover {
  background-color: #265df2;
}

.form .login-signup {
  margin-top: 30px;
  text-align: center;
}

</style>

    <title>Login & Registration Form</title>
    </head>

<body>
	
  

  <div class="container">
  <div class="forms">
    <div class="form login">
      <a href="index.php"><img src="cross.svg" alt="" style="object-fit:contain;height:30px;float:right"></a>
      <span class="title">Login</span>
      <br><br>
      <div class="row">
      <input  type="radio" name="inlineRadioOptions" id="inlineRadio1" onclick="view1()" value="option1" required checked="checked"><label class="form-check-label" for="inlineRadio1">User</label>
      <input  type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1" onclick="view2()" required><label class="form-check-label" for="inlineRadio2">Doctor</label>
      <input  type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1" onclick="view3()" required><label class="form-check-label" for="inlineRadio3">Admin</label>
      <!-- <input  type="radio" name="inlineRadioOptions" id="inlineRadio4" onclick="view4()" value="option1" required ><label class="form-check-label" for="inlineRadio1">Company Login</label> -->

    </div>

    <div id="userlog">
        <form action="func.php" method="POST">
          <div class="input-field">
            <!-- <label class="form-label">Email address</label> -->
            <input type="text" name="email" class="form-control" placeholder="Email" required/>
            <i class="uil uil-user icon"></i>
          </div>
          <div class="input-field">               
            <!-- <label  class="form-label">Password</label> -->
            <input type="password" class="form-control" name="password2" placeholder="Password" required/>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>
          <button type="submit" id="inputbtn" value="Login" class="input-field button" style="background-color: #4070f4" name="patsub"><b>SUBMIT</b></button>
        </form>

        <div class="login-signup">
            <span class="text"
              >Not a member?
              <a href="index1.php" class="text">Signup Now</a>
             
            </span>
          </div>
</div>

<div id="doclog" hidden="true">
        <form action="func1.php" method="POST" >
          <div class="input-field">
            <!-- <label class="form-label">Email address</label> -->
            <input type="text" class="form-control" placeholder="User Name Of Doctor *" name="username3" onkeydown="return alphaOnly(event);" required/>
            <i class="uil uil-user icon"></i>
          </div>
          <div class="input-field">               
            <!-- <label  class="form-label">Password</label> -->
            <input type="password" class="form-control" placeholder="Password *" name="password3" required/>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>
          <button type="submit" class="input-field button" style="background-color: #4070f4" name="docsub1" value="Login"><b>SUBMIT</b></button>
        </form>
</div>



<div id="adlog" hidden="true">
        <form action="func3.php" method="POST">
          <div class="input-field">
            <!-- <label class="form-label">Email address</label> -->
            <input type="text" class="form-control" placeholder="User Name of admin *" name="username1" onkeydown="return alphaOnly(event);" required/>
            <i class="uil uil-user icon"></i>
          </div>
          <div class="input-field">               
            <!-- <label  class="form-label">Password</label> -->
            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>
          <button type="submit" name="adsub" class="input-field button" style="background-color: #4070f4" value="Login"><b>SUBMIT</b></button>
        </form>
</div>



<div id="cmplog" hidden="true">
        <form action="func4.php" method="POST">
          <div class="input-field">
            <!-- <label class="form-label">Email address</label> -->
            <input type="text" class="form-control" placeholder="Comp name *" name="username1" onkeydown="return alphaOnly(event);" required/>
            <i class="uil uil-user icon"></i>
          </div>
          <div class="input-field">               
            <!-- <label  class="form-label">Password</label> -->
            <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>
          <button type="submit" name="adsub" class="input-field button" style="background-color: #4070f4" value="Login"><b>SUBMIT</b></button>
        </form>
</div>




          </div>
    </div>
  </div>
</div>
<script >
const container = document.querySelector(".container");
  pwShowHide = document.querySelectorAll(".showHidePw"),
  pwFields = document.querySelectorAll(".password"),
  // signUp = document.querySelector(".signup-link"),
  // login = document.querySelector(".login-link");

//   js code to show/hide password and change icon
pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    pwFields.forEach((pwField) => {
      if (pwField.type === "password") {
        pwField.type = "text";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye-slash", "uil-eye");
        });
      } else {
        pwField.type = "password";

        pwShowHide.forEach((icon) => {
          icon.classList.replace("uil-eye", "uil-eye-slash");
        });
      }
    });
  });
});


function view1() {
        document.getElementById('userlog').style.display = 'block';
	  document.getElementById('doclog').style.display = 'none';
	  document.getElementById('adlog').style.display = 'none';
    document.getElementById('cmplog').style.display = 'none';
    }
    function view2() {
        document.getElementById('doclog').style.display = 'block';
	  document.getElementById('userlog').style.display = 'none';
	  document.getElementById('adlog').style.display = 'none';
    document.getElementById('cmplog').style.display = 'none';
    }

    function view3() {
        document.getElementById('adlog').style.display = 'block';
	  document.getElementById('doclog').style.display = 'none';
	  document.getElementById('userlog').style.display = 'none';
    document.getElementById('cmplog').style.display = 'none';
    }
    function view4() {
        document.getElementById('cmplog').style.display = 'block';
	  document.getElementById('doclog').style.display = 'none';
	  document.getElementById('userlog').style.display = 'none';
    document.getElementById('adlog').style.display = 'none';
    }


    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>
</body>
</html>