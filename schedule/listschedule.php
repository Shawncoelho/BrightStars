
</script>
<!DOCTYPE html>
<link rel="stylesheet" href="schedule.css">
<main class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-12">
            <h1 class="display-4">Schedule List</h1>
            <hr>

<body onload="load()">

<div id="mydata">
   <div>
<button class ="add"><a href="addschedule.php">Add a Schedule</a></button>
</div>
<br>
<table id="myTableData"  border="1" cellpadding="12">
    <tr>
      
        <th><b>Class Name</b></th>
        <th><b>Instructor Name</b></th>
        <th><b>Class Type</b></th>
        <th><b>Start Date</b></th>
        <th><b>End Date</b></th>
        <th><b>Start Time</b></th>
        <th><b>End Time</b></th>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td> 
        <td></td>
        <td></td>
        <td></td> 
        <td></td>
        <td></td> 
        
        <td><button  class="edit" ><a href="editschedule.php"><i class="fas fa-pencil-alt">Edit</a></i></button></td>
        <td><button type="button" onclick="deleteRow(this)" class="delete"><a href="listschedule.html"> <i class="fas fa-trash-alt">Delete</a></i></button></td>
    </tr>
</table>
</div>
</div>
</div>
</main>
<script type='text/javascript'>
    function deleteRow(row)
    {
        var i = row.parentNode.parentNode.rowIndex;
        document.getElementById('POITable').deleteRow(i);
    }
    function insRow()
    {
        var x = document.getElementById('POITable');
        var new_row = x.rows[1].cloneNode(true);
        var len = x.rows.length;
        //new_row.cells[0].innerHTML = len; //auto increment the srno
        var inp1 = new_row.cells[1].getElementsByTagName('select')[0];
        inp1.id += len;
        inp1.value = '';
        new_row.cells[2].innerHTML = '';
        new_row.cells[4].getElementsByTagName('input')[0].value = "";
        x.appendChild(new_row);
    }
</script>