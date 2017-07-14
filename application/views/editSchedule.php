<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include 'inc/adminheader.php'; ?>
<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
       type="text/css" />
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

  <script language="javascript">
  $(document).ready(function () {

$("#txtdate").datepicker({
    dateFormat: "dd-M-yy",
    minDate: 0,
    onSelect: function (date) {
        var date2 = $('#txtdate').datepicker('getDate');
        date2.setDate(date2.getDate() + 7);
        $('#txtdate2').datepicker('setDate', date2);
        //sets minDate to dt1 date + 1
        $('#txtdate2').datepicker('option', 'minDate', date2);
    }
});
$('#txtdate2').datepicker({
    dateFormat: "dd-M-yy",
    onClose: function () {
        var dt1 = $('#txtdate').datepicker('getDate');
        var dt2 = $('#txtdate2').datepicker('getDate');
        //check to prevent a user from entering a date below date of dt1
        if (dt2 <= dt1) {
            var minDate = $('#txtdate2').datepicker('option', 'minDate');
            $('#txtdate2').datepicker('setDate', minDate);
        }
    }
});
});
    </script>
<script>

    $(document).ready(function(){

    // code to read selected table row cell data (values).
    $("#scheduleTable").on('click','.edit',function(){
         // get the current row
         var currentRow=$(this).closest("tr");
         var id=currentRow.find("td:eq(0)").text();
         var ship_name=currentRow.find("td:eq(1)").text(); // get current row 1st TD value
         var txtdate=currentRow.find("td:eq(2)").text(); // get current row 2nd TD value
         var txtdate2=currentRow.find("td:eq(3)").text(); // get current row 3rd TD value
         var from=currentRow.find("td:eq(4)").text(); // get current row 4th TD value
         var destination=currentRow.find("td:eq(5)").text();
         var service_type=currentRow.find("td:eq(6)").text();
         document.getElementById("id").value=id;
         document.getElementById("ship_name").value=ship_name;
         document.getElementById("txtdate").value=txtdate;
         document.getElementById("txtdate2").value=txtdate2;
         document.getElementById("from").value=from;
         document.getElementById("destination").value=destination;
         document.getElementById("service_type").value=service_type;

    });
});
  </script>

<div class="col-md-12 col-xs-12">
    <div style="height:200px;overflow-y: auto" class="formContainer2">
        <h2>Manage Schedule List</h2>
        <table id="scheduleTable" class="tableSimple">

            <tr class="rowSimple">
              <th class="cellSimple" >ID</th>
              <th class="cellSimple" >Ship/Truck Name</th>
              <th class="cellSimple">Import/Export/Transshipment Date & Time</th>
              <th class="cellSimple">Expected Receive Date & Time</th>
              <th class="cellSimple">From</th>
              <th class="cellSimple">Destination</th>
              <th class="cellSimple">Service Type</th>
              <th class="cellSimple">Action</th>
            </tr>
            <?php
            if(isset($schedules)){
                foreach ($schedules as $schedule) {
                echo "<tr id=\"row-data\" class=\"rowSimple\">";
                echo "<td class=\"cellSimple\">" .$schedule->ID. "</td>";
                echo "<td class=\"cellSimple\">" .$schedule->ship_name. "</td>";
                echo "<td class=\"cellSimple\">" .$schedule->date_out. "</td>";
                echo "<td class=\"cellSimple\">" . $schedule->date_receive . "</td>";
                echo "<td class=\"cellSimple\">" . $schedule->location_from. "</td>";
                echo "<td class=\"cellSimple\">" . $schedule->destination. "</td>";
                echo "<td class=\"cellSimple\">" . $schedule->service_type. "</td>";
                echo '<td><button type="button" class="edit"/>Edit</button></td>';
                echo "</tr>";
            }
            }else{
                echo "No record found";
            }


            ?>

        </table>

    </div >
    <div id="updateSchedule" class="col-md-12 col-xs-12" >
        <div  class="formContainer2 bootstrap-frm">
        <form action="<?php echo base_url(); ?>editSchedule/updateSchedule" method="POST" >

          <div class="col-xs-12 col-md-12">
              <div class="col-xs-6 col-md-6">
                ID:<br>
                <input id="id" type="text" name="ship_name" readonly="">
                <br>
        Ship/Truck Name:<br>
        <input id="ship_name" type="text" name="ship_name" >
        <br>
        Import/Export/Transshipment Date & Time:<br>
        <input id="txtdate" type="text" name="date_from" >
        <br>
        Expected Receive Date & Time:<br>
        <input id="txtdate2" type="text" name="date_receive">
        <br>
      </div>
      <div class="col-xs-6 col-md-6">
        From:<br>
        <input type="text" name="from" id="from">
        <br>
        Destination:<br>
        <input type="text" name="destination" id="destination">
        <br>
        Service Type:<br>
        <select name="service_type" id="service_type">
            <option value="Import">Import</option>
            <option value="Export">Export</option>
            <option value="Transshipment">Transshipment</option>
       </select>
        <br>
      </div>


          </div>
            <br>
  <input type="submit" value="Update" class="update" name="update">
  <input type="submit" value="Delete" class="delete" name="delete">

 </div>

</form>
    </div>
  </div>



</div>

<?php include 'inc/footer.php'; ?>
