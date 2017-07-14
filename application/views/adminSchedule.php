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
        <h2>Schedule List</h2>
        <table id="routeTable" class="tableSimple">

            <tr class="rowSimple">
                <th class="cellSimple" >ID</th>
                <th class="cellSimple" >Ship/Truck Name</th>
                <th class="cellSimple">Import/Export/Transshipment Date & Time</th>
                <th class="cellSimple">Expected Receive Date & Time</th>
                <th class="cellSimple">From</th>
                <th class="cellSimple">Destination</th>
                <th class="cellSimple">Service Type</th>
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
