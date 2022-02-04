<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
   <style>
       #reg
{
   background: rgb(63,94,251);
   background: linear-gradient(90deg, rgb(255, 238, 6) 0%, rgb(252, 226, 125) 100%);
   
   height: 400px;
   text-align: center; 
   color: rgb(0, 0, 0);
   }
#form
{
   margin:4px;
}

.input-borders{
   border-radius:25px;
}
    
 
   </style>
</head>

<body>

<!-- row -->
    <div class="margin" id="reg">
    <div class="regdiv">
		<h2 style="background-color:yellow">Create account</h2>
    </div>
  
<form action="newreg.php" method="post">
        <div class="form-group" id="form">
        <label for="f_name">First name</label>
        <input class="input form-control input-borders" type="text" name="f_name" id="f_name" placeholder="First Name">
        </div>
 
        <div class="form-group" id="form"> 
        <LAbel for="l_name">Last name</LAbel>
        <input class="input form-control input-borders" type="text" name="l_name" id="l_name" placeholder="Last Name">
        </div>

        <div class="form-group" id="form">
        <LAbel for="email">Email</LAbel>
         <input class="input form-control input-borders" type="email" name="email"  placeholder="Email">
         </div>
    
        <div class="form-group" id="form">
        <LAbel for="password">Password</LAbel>
        <input class="input form-control input-borders" type="password" name="password" id="password" placeholder="password">
         </div>
                               
        <div class="form-group" id="form"> 
        <LAbel for="repassword">Confirm password</LAbel>
        <input class="input form-control input-borders" type="password" name="repassword" id="repassword" placeholder="confirm password">
        </div>
        
         <div class="form-group" id="form">
        <label for="Mobile number">Mobile number</label>
        <input class="input form-control input-borders" type="text" name="mobile" id="mobile" placeholder="mobile">
        </div>
    
        <div class="form-group" id="form">
        <LAbel for="address1">Address</LAbel>
        <input class="input form-control input-borders" type="textarea" name="address1" id="address1" placeholder="Address">
        </div><br>
    
        <div class="form-group" id="form">
        <label for="City">City</label>
        <select name="mycity">
        <option value="Ahemdabad">Ahemdabad</option>
        <option value="Gandhinagar">Gandhinagar</option>
         <option value="Surat">Surat</option>
        <option value="baroda">baroda</option>
        <option value="Bhavnagar">Bhavnagar</option>
        <option value="Jamnagar">Jamnagar</option>
        <option value="Jamnagar">Jamnagar</option>
        <option value="Anand">Anand</option>
        <option value="Morbi">Morbi</option>
        </select>
        </div><br>
                         
        <div class="form-group" id="form">
         <label for="State">State</label>
        <select name="mystate">
        <option value="gujrat">gujrat</option>
        </select>
        </div><br>
        <div>
        <label for="">I accept the terms and conditions</label>
        <input type="checkbox" name="checkbox" >
        </div>
                            

        <div style="form-group" >
        <input class="-btn btn-block"  value="Sign Up" type="submit" name="signup_button" style="background-color:rgb(63,94,251)" >
        </div>
    
        <div class="text-pad">
        <a href="/WD/ecomm/login/login.php">Already have an Account ? then login</a>
        </div>
</div>                                  
</form>                            
           
</body>
</html>