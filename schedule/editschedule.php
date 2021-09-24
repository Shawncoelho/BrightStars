<!-- Main Content section -->
<link rel="stylesheet" href="schedule.css">
<main class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-12">
            <h1 class="display-4">Edit Schedule</h1>
            <hr>
            <form action="listschedule.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Class Name</label>
                    <input type= "text" class="form-control" id="class" name="class"
                        aria-describedby="Class" placeholder="Enter Class" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Instructor Name</label>
                    <input type="text" class="form-control" id="instructor" name="instructor"
                        aria-describedby="Instructor" placeholder="Edit Instructor Name" required>
                </div>
                <br>
                <label> Select Class Type</label>
<input type="radio" id="offclass" name="usertype" value="offclass">
<label for="One Off Class">One Off Class</label>
<input type="radio" id="Shortterm" name="usertype" value="Shortterm">
<label for="Shortterm">Short Term</label>
<input type="radio" id="recurringclass" name="usertype" value="recurringclass">
<label for="recurringclass">Recurring Class</label><br>
<br>

                <div class="form-group">
                    <label for="exampleInputEmail1">Start Date</label>
                    <input type="date" class="form-control" id="startdate" name="startdate"
                        aria-describedby="startdate" placeholder="Edit start date" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">End Date</label>
                    <input type="date" class="form-control" id="enddate" name="enddate"
                        aria-describedby="enddate" placeholder="Edit end date" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Start Time</label>
                    <input type="time" class="form-control" id="starttime" name="starttime"
                        aria-describedby="starttime" placeholder="Edit start time" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">End Time</label>
                    <input type="time" class="form-control" id="endtime" name="endtime"
                        aria-describedby="endtime" placeholder="Edit end time" required>
                </div>
                <div class="clearfix">
                    <button type="button" class="cancelbtn"><a href="listschedule.php">Cancel</a></button>
                    <button type="submit" class="addschedule">Add Schedule</button>
                  </div>
            </form>
        </div>
    </div>
</main>