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


<form action="<?php echo base_url(); ?>createSchedule/addSchedule" method="POST" class="bootstrap-frm" >
    <h1>Create Schedule</h1>
    <div class="col-xs-12 col-md-12">

  Ship/Truck Name:<br>
  <input type="text" name="ship_name">
  <br>
  Import/Export/Transshipment Date & Time:<br>
  <input id="txtdate" type="text" name="date_from">
  <br>
  Expected Receive Date & Time:<br>
  <input id="txtdate2" type="text" name="date_receive">
  <br>
  From:<br>
  <input type="text" name="from">
  <br>
  Destination:<br>
  <input type="text" name="destination">
  <br>
  Service Type:<br>
  <select name="service_type">
      <option value="Import">Import</option>
      <option value="Export">Export</option>
      <option value="Transshipment">Transshipment</option>
 </select>
  <br>



    </div>
  <br>
  <br>
  <input type="submit" value="Create">
</form>





<?php include 'inc/footer.php'; ?>
