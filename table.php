<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type='text/javascript'>
    $(document).ready(function () {
        $('#POITable').on('change', 'select.search_type', function (e) {
            var selectedval = $(this).val();
            $(this).closest('td').next().html(selectedval);
        });
    });
</script>
<table id="POITable" border="1">
    <tr>
        <th>Sl No</th>
        <th>Name</th>
        <th>Your Name</th>
        <th>Number</th>
        <th>Input</th>
        <th>Chars</th>
        <th>Action</th>
    </tr>
    <tr>
        <td><i class="srno"></i></td>
        <td>
            <select class="search_type" name="select_one">
                <option value="">Select</option>
                <option value="abc">abc</option>
                <option value="def">def</option>
                <option value="xyz">xyz</option>
            </select>
        </td>
        <td></td>
        <td>
            <select name="select_two" >
                <option value="">Select</option>
                <option value="123">123</option>
                <option value="456">456</option>
                <option value="789">789</option>
            </select>
        </td>

        <td><input type="text" size="8"/></td>
        <td>
            <select name="search_three[]" >
                <option value="">Select</option>
                <option value="one">1</option>
                <option value="two">2</option>
                <option value="three">3</option>
            </select>
        </td>
        <td><button type="button" onclick="deleteRow(this)">-</button><button type="button" onclick="insRow()">+</button></td>
    </tr>
</table>

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