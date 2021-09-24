<!-- Main Content section -->
<link rel="stylesheet" href="member.css">
<main class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-12">
            <h1 class="display-4">Add Members Details</h1>
            <hr>
            <form action="listschedule.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname"
                        aria-describedby="fname" placeholder="Enter First Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname"
                        aria-describedby="lname" placeholder="Enter Last Name" required>
                </div>
                <br>
         <label>Select User Type</label>
<input type="radio" id="Student" name="usertype" value="Student">
<label for="Student">Student</label>
<input type="radio" id="Parent" name="usertype" value="Parent">
<label for="Parent">Parent</label><br>

<br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                        aria-describedby="email" placeholder="Enter the Email" required>
                </div>
               
               
                <div class="clearfix">
                    <button type="button" class="cancelbtn"><a href="listmember.php">Cancel</a></button>
                    <button type="submit" class="addschedule">Add Member Details</button>
                  </div>
            </form>
        </div>
    </div>
</main>