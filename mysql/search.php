<?php
include "config.php";
include "../header.php";http://localhost/flutter/api/config.php
error_reporting(0);
?>

<div class="table-responsive">
            <table id="search" class="table table-striped table-bordered display  responsive nowrap" style="width: 100%">
                <thead>
                <tr>
                  <th class="all"><strong>ID</strong></td>
                  <th class="all"><strong>Name</strong></td>
                  <th class="all"><strong>City</strong></td>
                  <th class="all"><strong>Status</strong></td>
                  <th class="all"><strong>Package</strong></td>
                  <th class="all"><strong>by_doc</strong></td>
                  <th class="all"><strong>View</strong></td>
        <th><strong>age</strong></td>
        <th><strong>Email</strong></td>
        <th><strong>address</strong></td>
                  <th><strong>time</strong></td>
                </tr>
                </thead>
                <tbody>
                <?php

                $sql = "SELECT * FROM ".$SETTINGS["data_table"]." where role='user'";
                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["city"]; ?></td>
                      <!--      <td><?php echo $row["gender"]; ?></td>-->
                            <td><?php

$data=json_decode(get_status($row["id"]),true);

echo $data[0]["status"];

                             ?></td>

                             <td><?php

                             $data=json_decode(get_status($row["id"]),true);
 echo $data[0]["package"];

                              ?></td>


                              <td><?php

                              $data=json_decode(get_treatment($row["id"]),true);
  echo $data[0]["plan_menu"];

                               ?></td>

                            <td><a class="btn btn-success" href="../info.php?q=<?php echo $row['id']; ?>" ><i class="fa fa-eye btn-icon"></i>View</a></td>
                            <td><?php echo $row["age"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["address"]; ?></td>
                            <td><?php echo $row["timestamp"]; ?></td>

                        </tr>
                    <?php }
                } else {
                ?>
                <tr><td colspan="5">No results found.</td>
                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                    <th><strong>ID</strong></td>
                    <th><strong>Name</strong></td>
                    <th><strong>City</strong></td>
                    <th><strong>Status</strong></td>
                    <th><strong>Package</strong></td>
                    <th><strong>by_doc</strong></td>
                    <th><strong>View</strong></td>
					<th><strong>age</strong></td>
					<th><strong>Email</strong></td>
					<th><strong>address</strong></td>
                    <th><strong>time</strong></td>
                </tr>
                </tfoot>
            </table>
            </div>

<?php
function get_status($id){
		include "../api/config.php";
$sql="SELECT * FROM status where patient_id='$id' order by id DESC ";

$query = mysqli_query($conn, $sql);

 while ($row = mysqli_fetch_assoc($query)) {
   $temp=[];
       $temp['status'] = $row['status'];
       $temp['package'] = $row['package'];

       $data[]=$temp;

   }
  //echo json_encode($data);
                   $data2= json_encode($data);
             return $data2;

   }

   function get_treatment($id){
   		include "../api/config.php";
   $sql="SELECT * FROM treatment where patient_id='$id'  order by id DESC";

   $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
      $temp=[];
          $temp['plan_menu'] = $row['plan_menu'];

          $data[]=$temp;

      }
     //echo json_encode($data);
                      $data2= json_encode($data);
                return $data2;

      }

 ?>
<?php
include "../footer.php";
 ?>
