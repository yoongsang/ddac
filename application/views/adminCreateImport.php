<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet"
       type="text/css" />
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
   <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


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
        <h2>Create Service</h2>
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
        <form action="<?php echo base_url(); ?>adminCreateImport/addImport" method="POST" >

          <div class="col-xs-12 col-md-12">

                ID:<br>
                <input id="id" type="text" name="id" readonly="">
                <br>
        Container Code:<br>
        <input  type="text" name="container_code" >
        <br>
        Container Description:<br>
        <textarea type="text" name="container_description" ></textarea>
        <br>
      </div>
            <br>
  <input type="submit" value="Create" class="update" name="Create">

 </div>

</form>
    </div>
  </div>



</div>

<?php include 'inc/footer.php'; ?>
