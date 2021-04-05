<style>
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.tabcontent {
  animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

/* Go from zero to full opacity */
@keyframes fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>
<?php
include 'header.php';
include 'functions.php';
//echo $_SESSION['id'];
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'info')" id="defaultOpen">Info</button>
  <button class="tablinks" onclick="openCity(event, 'status')">Status</button>
  <button class="tablinks" onclick="openCity(event, 'treatment')">Treatement</button>
  <button class="tablinks" onclick="openCity(event, 'payement')">Payment</button>
  <button class="tablinks" onclick="openCity(event, 'calendar')">Calendar</button>
  <button class="tablinks" onclick="openCity(event, 'documents')">Documents</button>
  <button class="tablinks" onclick="openCity(event, 'gallery')">Gallery</button>
  <button class="tablinks" onclick="openCity(event, 'videos')">Videos</button>

</div>


<div id="info" class="tabcontent">
 <?php
 $id=$_GET['q'];
$arr=json_decode(user_info($id),true);
//print_r($arr);
?>
<table class="table table-bordered" style="margin-top:10px;">
  <thead>
    <tr>
      <th>
      Name
      </th>
      <td>
        <?php echo $arr[0]['name']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Id
      </th>
      <td>
        <?php echo $arr[0]['id']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Name
      </th>
      <td>
        <?php echo $arr[0]['name']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Address
      </th>
      <td>
        <?php echo $arr[0]['city']; ?>
      </td>
    </tr>
    <tr>
      <th>
      City
      </th>
      <td>
        <?php echo $arr[0]['address']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Gender
      </th>
      <td>
        <?php echo $arr[0]['gender']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Mobile
      </th>
      <td>
        <?php echo $arr[0]['code'].$arr[0]['mobile']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Age
      </th>
      <td>
        <?php echo $arr[0]['age']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Email
      </th>
      <td>
        <?php echo $arr[0]['email']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Doctor
      </th>
      <td>
        <?php echo $arr[0]['doctor']; ?>
      </td>
    </tr>
    <tr>
      <th>
      Select
      </th>
      <td>
        <?php
        echo '<select id="doctor" class="form-control">'; // Open your drop down box
        echo '<option value="smart_smile">smart_smile</option>';

    $sql="Select * from users where by_doc='other' and role='doctor'";
        $query = mysqli_query($conn, $sql);

    if($query){
        while ($row = mysqli_fetch_assoc($query)){
         echo '     <option value="'.$row['name'].'">'.$row['name'].'</option>';
    }}

    echo '</select>';// Close your drop down box

         ?>
             </td>
           </tr>
  </thead>
</table>
<?php
    echo '<input class="btn btn-primary" name="submit" value="Update" type="submit" onclick="update(event);">';
    echo '<input type="hidden" id="id" value="'.$id.'">';
 ?>
</div>

<div id="status" class="tabcontent">

                <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="form-group">
            <input class="form-control" name="date" id="date" type="text" placeholder="Date"  min='<?php echo date("yyyy/mm/dd") ?>' onfocus="this.type='date'  "required>
          </div>
          <div class="form-group">
			    <input class="form-control" name="text" id="id" type="hidden" value="<?php echo $_GET['q']; ?>">
          </div>
          <div class="form-group">
			    <input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $_SESSION['id']; ?>">
          </div>
          <div class="form-group">
              <select class="form-control" name="status" id="status_menu"  >
                <option selected disabled>Status</option>
                <option value="Scan">Scan</option>
                <option value="Sent for Design">Sent for design</option>
                <option value="Design in process">Design in process</option>
                <option value="Redesign">Redesign</option>
                <option value="On Hold">On Hold</option>
                <option value="Needs Aprroval">Needs Aprroval</option>
                <option value="at Manufacture">at Manufacture</option>
                <option value="Shipped">Shipped</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Completed">Completed</option>
              </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="Scan_type" id="Scan_type"  >
                  <option selected disabled>Scan Type</option>
                  <option value="Digital">Digital</option>
                  <option value="Smart">Smart</option>
                  <option value="Impression">Impression</option>
                  <option value="Cast">Cast</option>
                </select>
              </div>
              <div class="form-group">
                  <select class="form-control" name="approval" id="approval"  >
                    <option selected disabled>Approval</option>
                    <option value="Needs Approval">Needs Approval</option>
                    <option value="Sent for Approval">Sent for Approval</option>
                    <option value="Approved">Approved</option>
                  </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="package2" id="package2"  >
                      <option selected disabled>Package Type</option>
                      <option value="Lite">Lite</option>
                      <option value="Smart">Smart</option>
                      <option value="Full">Full</option>
                    </select>
</div>
<div class="form-group">
                      <textarea class="form-control" name="instruction" id="instruction"></textarea>
                      </div>
             		  <input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_status(event);">
	  </form>
    <div class="table-responsive">
                <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Status</th>
              <th scope="col">Add By</th>
              <th scope="col">Scan Type</th>
              <th scope="col">Approval</th>
              <th scope="col">Package</th>
              <th scope="col">instruction</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody id="tb">
		  <?php
	$id=$_GET['q'];
get_status($id);
		  ?>
          </tbody>
          </table>
        </div>


</div>

<div id="treatment" class="tabcontent">

        <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="form-group">
            <input class="form-control" name="text" id="id" type="hidden" value="<?php echo $_GET['q']; ?>">
          </div>
          <div class="form-group">
			    <input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $_SESSION['id']; ?>">
          </div>
          <div class="form-group">
          <label>Treatment Plan by:</label>
          <select class="form-control" name="plan" id="plan_menu"  >
            <option disabled selected >Doctor</option>
<?php
          $sql="Select * from users where by_doc='smart_smile' and role='doctor'";
          	  $query = mysqli_query($conn, $sql);

          if($query){
          	  while ($row = mysqli_fetch_assoc($query)){
          	   echo '
               <option value="'.$row['name'].'">'.$row['name'].'</option>';
          }}

          echo '</select>';// Close your drop down box
?>
</div>
<div class="form-group">
		 <label>case type:</label>
        <textarea class="form-control" name="case" id="case"></textarea>
</div>
<div class="form-group">
    <label> no. of steps </label>
    <input class="form-control" type="number" name="text" id="steps">
    </div>
    <div class="form-group">
	 <label>attachement:</label>
              <select class="form-control" name="attachement" id="attachement"  >
                <option disabled selected >attachement</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
            </div>
            <div class="form-group">
			   <label>IPR:</label>
         <select class="form-control" name="ipr" id="ipr"  >
           <option disabled selected >ipr</option>
           <option value="Yes">Yes</option>
           <option value="No">No</option>

              </select>
            </div>
            <div class="form-group">
			   <label>Retainer:</label>
         <select class="form-control" name="Retainer" id="Retainer"  >
           <option disabled selected >Retainer</option>
           <option value="Yes">Yes</option>
           <option value="No">No</option>
         </select>
       </div>
       <div class="form-group">
    	   <label>Refeniment:</label>
              <select class="form-control" name="Refeniment" id="Refeniment"  >
                <option disabled selected >Refeniment</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="form-group">
               <label>Redesign:</label>
              <select class="form-control" name="Redesign" id="Redesign"  >
                <option disabled selected >Redesign</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
             		  <input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_treatment(event);">

	  </form>
    <div class="table-responsive">
                    <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Plane Menu</th>
                  <th scope="col">Steps</th>
                  <th scope="col">Add By</th>
                  <th scope="col">Attachment</th>
                  <th scope="col">Ipr</th>
                  <th scope="col">Retainer</th>
                  <th scope="col">Case 2</th>
                  <th scope="col">Refeniment</th>
                  <th scope="col">Redesign</th>
                  <th scope="col">view</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody id="tb4">
    		  <?php
    $id=$_GET['q'];
    get_treatment($id);
    		  ?>
              </tbody>
              </table>
            </div>




</div>
<div id="payement" class="tabcontent">
       <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="form-group">
  	<label>date</label><input class="form-control" name="date" id="date2" type="text" placeholder="Date"  min='<?php echo date("yyyy/mm/dd") ?>' onfocus="this.type='date'  "required>
  </div>
			    <input class="form-control" name="text" id="id" type="hidden" value="<?php echo $_GET['q']; ?>">
			    <input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $_SESSION['id']; ?>">
          <div class="form-group">
	<label>invoice no</label>		    <input class="form-control" name="text" id="invoice_no" type="number" >
    </div>
    <div class="form-group">
	<label>invoice</label>		    <input class="form-control" name="text" id="file" type="file" >
</div>

  <span id="uploaded_image"></span>
  <div class="form-group">
   <label>payment</label>          			    <input class="form-control" type="number" name="text" id="pay_money"  >
</div>

             		  <input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_pay(event);">



	  </form>


<div class="table-responsive">
            <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Payment</th>
              <th scope="col">Add By</th>
              <th scope="col">Invoice No</th>
              <th scope="col">view</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody id="tb2">
		  <?php
$id=$_GET['q'];
get_pay($id);
		  ?>
          </tbody>
          </table>
        </div>



  </div>
  <div id="documents" class="tabcontent">
    <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

       <input class="form-control" name="text" id="id" type="hidden" value="<?php echo $_GET['q']; ?>">
       <input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $_SESSION['id']; ?>">
       <div class="form-group">
         <label>Name</label>		    <input class="form-control" name="text" id="doc_name" type="text" >
       </div>
       <div class="form-group">
<label>File</label>		    <input class="form-control" name="text" id="file_doc" type="file" >
<span id="uploaded_doc"></span>
</div>





               <input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_doc(event);">



 </form>


<div class="table-responsive">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Document</th>
      <th scope="col">sender</th>
      <th scope="col">receiver</th>
      <th scope="col">view</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody id="tb3">
<?php
$id=$_GET['q'];
get_doc($id);
?>
  </tbody>
  </table>
</div>





</div>
<div id="videos" class="tabcontent">
  <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

     <input class="form-control" name="text" id="id" type="hidden" value="<?php echo $_GET['q']; ?>">
     <input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $_SESSION['id']; ?>">
     <div class="form-group">
       <label>Name</label>		    <input class="form-control" name="text" id="video_name" type="text" >
     </div>
     <div class="form-group">
<label>File</label>		    <input class="form-control" name="text" id="file_video" type="file" >
</div>

<span id="uploaded_video"></span>
<input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_video(event);">
</form>
<div class="row">
<?php
$id=$_GET['q'];
get_video($id);
?>
</div>
</div>

  <div id="gallery" class="tabcontent">
    <div class="row">
    <?php
    $id=$_GET['q'];
    $arr2=json_decode(get_image($id),true);
    //print_r($arr);
for ( $i=0;$i<count($arr2);$i++){
  ?>
  <div class="col-md-3">
    <div class="gallery-container" data-toggle="modal" data-target="#update_<?php echo $arr2[$i]['id'] ?>">
    <img src='uploads/<?php echo $arr2[$i]["path"] ?>' /></div>
  <?php
  echo "<div class='gallery-txt'>";
    echo "<span>" .$arr2[$i]['id']."</span>";
       echo "<p>".$arr2[$i]['time']."</p>";
       echo "<button class='close-btn'><i class='fas fa-times-circle'></i></button>";
       ?>
     </div>
     <!-- view Modal -->
     <div class="modal" id="update_<?php echo $arr2[$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
     	<div class="modal-content">
     		<div class="modal-body">
<img src='uploads/<?php echo $arr2[$i]["path"] ?>' />
     		</div>
     		<div class="modal-footer">
     			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     		</div>
     	</div>
     </div>
     </div>
     </div>
     <!-- End view Modal -->

       <?php
}
    ?>
  </div>
</div>


<div id="calendar" class="tabcontent">
<div class="form-group">
  <label>Submit Date</label>		    <input class="form-control" name="date" id="submit_date" type="text" placeholder="Date"  min='<?php echo date("yyyy/mm/dd") ?>' onfocus="this.type='date'  "required>
</div>
<div class="form-group">
  	<label>Delivery Date</label>		    <input class="form-control" name="date" id="delivery_date" type="text" placeholder="Date"  min='<?php echo date("yyyy/mm/dd") ?>' onfocus="this.type='date'  "required>
  </div>
  <div class="form-group">
    	<label>First Aligner Date</label>		    <input class="form-control" name="date" id="aligner1_date" type="text" placeholder="Date"  min='<?php echo date("yyyy/mm/dd") ?>' onfocus="this.type='date'  "required>
    </div>
      <input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_task(event);">
      <br />
      <br />
         <div class="table-responsive">
         <table class="table table-bordered">
         <thead>
           <tr>
             <th scope="col">task</th>
             <th scope="col">type</th>
             <th scope="col">date</th>
             <th scope="col">done</th>
             <th scope="col">edit</th>
             <th scope="col">delete</th>

           </tr>
         </thead>
         <tbody id="tb7">
     <?php
  $id=$_GET['q'];
  get_task($id);
     ?>
         </tbody>
         </table>
       </div>
  </div>
<?php include "footer.php"; ?>
<script>
document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}





</script>
