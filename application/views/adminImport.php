<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include 'inc/adminheader.php'; ?>


<div class="col-md-12 col-xs-12">
    <div style="height:auto;overflow-y: auto" class="formContainer2">
        <h2>Service List</h2>
        <table id="busTable" class="tableSimple">

            <tr class="rowSimple">
              <th class="cellSimple" >ID</th>
              <th class="cellSimple" >Ship/Truck Name</th>
              <th class="cellSimple">Import/Export/Transshipment Date & Time</th>
              <th class="cellSimple">Expected Receive Date & Time</th>
              <th class="cellSimple">From</th>
              <th class="cellSimple">Destination</th>
              <th class="cellSimple">Service Type</th>
              <th class="cellSimple">Container Code</th>
              <th class="cellSimple">Container Description</th>
              <th class="cellSimple">Received Date</th>
              <th class="cellSimple">Status</th>
            </tr>
            <?php
            if(isset($services)){
                foreach ($services as $service) {
                echo "<tr id=\"row-data\" class=\"rowSimple\">";
                echo "<td class=\"cellSimple\">" .$service->ID. "</td>";
                echo "<td class=\"cellSimple\">" .$service->ship_name. "</td>";
                echo "<td class=\"cellSimple\">" .$service->date_out. "</td>";
                echo "<td class=\"cellSimple\">" . $service->date_receive . "</td>";
                echo "<td class=\"cellSimple\">" . $service->location_from. "</td>";
                echo "<td class=\"cellSimple\">" . $service->destination. "</td>";
                echo "<td class=\"cellSimple\">" . $service->service_type. "</td>";
                echo "<td class=\"cellSimple\">" . $service->container_number. "</td>";
                echo "<td class=\"cellSimple\">" . $service->container_description. "</td>";
                echo "<td class=\"cellSimple\">" . $service->actual_date. "</td>";
                echo "<td class=\"cellSimple\">" . $service->ship_status. "</td>";
                echo "</tr>";
            }
            }else{
                echo "No record found";
            }


            ?>

        </table>

    </div>



</div>

<?php include 'inc/footer.php'; ?>
