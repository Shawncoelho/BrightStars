
<!DOCTYPE html>
<link rel="stylesheet" href="member.css">
<main class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-12">
            <h1 class="display-4">Members List</h1>
            <hr>

<body onload="load()">

<div id="mydata">
   <div>
<button class ="add"><a href="addmember.php">Add a Member</a></button>
</div>
<br>
<table id="myTableData"  border="1" cellpadding="12">
    <tr>
      
        <td><b>First Name</b></td>
        <td><b>Last Name</b></td>
        <td><b>Email</b></td>
        <td><b>User Type</b></td>
      
        <td></td>
        <td></td>    
    </tr>
    <tr>
        <td></td>
        <td></td> 
        <td></td>
        <td></td> 
        
        <td><button class="edit" ><a href="editmember.php"><i class="fas fa-pencil-alt">Edit</a></i></button></td>
        <td><button class="delete"><a href="listmember.php"> <i class="fas fa-trash-alt">Delete</a></i></button></td>
    </tr>
</table>
</div>
</div>
</div>
</main>