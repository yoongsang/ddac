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
        <h2>Admin List</h2>
        <table id="busTable" class="tableSimple">

            <tr class="rowSimple">
                <th class="cellSimple">ID</th>
                <th class="cellSimple">Name</th>
            </tr>
            <?php
            if(isset($admins)){
                foreach ($admins as $admin) {
                echo "<tr id=\"row-data\" class=\"rowSimple\">";
                echo "<td class=\"cellSimple\">" .$admin->ID. "</td>";
                echo "<td class=\"cellSimple\">" . $admin->admin_name . "</td>";
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
