<link rel="stylesheet" href="reg.css">
<form>
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="First Name"><b>First Name</b></label>
      <input type="FirstName" placeholder="Enter First Name" name="FirstName" required>
      <br>
      <label for="Last Name"><b>Last Name</b></label>
      <input type="LastName" placeholder="Enter Last Name" name="LastName" required>
      <br>
      <label for="email"><b>Email</b></label>
      <input type="Email" placeholder="Enter Email" name="email" required>
      <br>
      <label for="usertype"><b>Select a User Type:<b></label>

<select name="user" id="user">
<option>-- Select User Type --</option>
  <option value="student">Student</option>
  <option value="parent">Parent</option>
</select>
<br>
<br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  <br>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
  <br>
      <div class="clearfix">
        <button type="button" class="cancelbtn"><a href="home">Cancel</a></button>
        <button type="submit" class="signupbtn">Sign up</button>
      </div>
    </div>
  </form>