<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php include 'inc/adminheader.php'; ?>
<script>

    $(document).ready(function(){

    // code to read selected table row cell data (values).
    $("#adminTable").on('click','.edit',function(){
         // get the current row
         var currentRow=$(this).closest("tr");
         var id=currentRow.find("td:eq(0)").text(); // get current row 1st TD value
         var name=currentRow.find("td:eq(1)").text(); // get current row 2nd TD value
         document.getElementById("id").value=id;
         document.getElementById("admin_name").value=name;

    });
});



        </script>

<div class="col-md-12 col-xs-12">
    <div style="height:200px;overflow-y: auto" class="formContainer2">
        <h2>Manage Admin List</h2>
        <table id="adminTable" class="tableSimple">

            <tr class="rowSimple">
                <th class="cellSimple">ID</th>
                <th class="cellSimple">Name</th>
                  <th class="cellSimple">Action</th>
            </tr>
            <?php
            if(isset($admins)){
                foreach ($admins as $admin) {
                echo "<tr id=\"row-data\" class=\"rowSimple\">";
                echo "<td class=\"cellSimple\">" .$admin->ID. "</td>";
                echo "<td class=\"cellSimple\">" . $admin->admin_name . "</td>";
                echo '<td><button type="button" class="edit"/>Edit</button></td>';
                echo "</tr>";
            }
            }else{
                echo "No record found";
            }


            ?>

        </table>

    </div >
    <div id="updateBusDriver" class="col-md-12 col-xs-12" >
        <div  class="formContainer2 bootstrap-frm">
        <form action="<?php echo base_url(); ?>adminEditAdmin/updateAdmin" method="POST" >
            <div class="col-md-12 col-xs-12">
            ID:<br>
            <input type="text" id="id" name="id" readonly="true">
  <br>
            Name:<br>
            <input type="text" id="admin_name" name="admin_name" readonly="true">
  <br>
  </div>
  <input type="submit" value="Delete" class="delete" name="delete">
</form>
    </div>
  </div>



</div>

<?php include 'inc/footer.php'; ?>
