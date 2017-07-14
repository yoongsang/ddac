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
         document.getElementById("id").value=id;


    });
});
  </script>

<div class="col-md-12 col-xs-12">
    <div style="height:200px;overflow-y: auto" class="formContainer2">
        <h2>Manage Service</h2>
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
                echo '<td><button type="button" class="edit"/>Select</button></td>';
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
        <form action="<?php echo base_url(); ?>adminEditImport/confirm" method="POST" >

          <div class="col-xs-12 col-md-12">
              <div class="col-xs-6 col-md-6">
                ID:<br>
                <input id="id" type="text" name="ship_name" readonly="">
                <br>
        <br>
      </div>


          </div>
            <br>
  <input type="submit" value="Received" class="update" >

 </div>

</form>
    </div>
  </div>



</div>

<?php include 'inc/footer.php'; ?>
