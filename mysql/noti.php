<?php
include "config.php";
include "../header.php";
error_reporting(0);
?>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">


    <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker.min.css">



    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>



    <script src="datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" class="init">


        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#search thead th').each( function () {
                var title = $(this).text();
                $(this).html( ''+title+' <br><input type="text" class="filter" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#search').DataTable({
                responsive: true,


                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;

                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });
   //table.columns( [0,1,2,3,4,5,6,7] ).visible( true );
   //table.columns( [8,9,10,11,12] ).visible( false );

            $('.filter').on('click', function(e){
                e.stopPropagation();
            });

            new $.fn.dataTable.FixedHeader( table );
            $("#search th.datepicker input").datepicker({
                format: "yyyy-mm-dd",

            });
        } );


    </script>
</head>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             All
         </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <form class="form" action="index.html" method="post">
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="" placeholder="text here">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="" placeholder="text here">
          </div>
          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="name" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Sections
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <form class="form" action="index.html" method="post">
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="" placeholder="text here">
          </div>
          <div class="form-group">
            <input class="form-control" type="text" name="name" value="" placeholder="text here">
          </div>
          <div class="form-group">
            <label>Select</label>
            <select class="form-control" name="">
              <option>
                1
              </option>
              <option>
                2
              </option>
            </select>
          </div>
          <div class="form-group">
            <label>Select</label>
            <select class="form-control" name="">
              <option>
                1
              </option>
              <option>
                2
              </option>
            </select>
          </div>

          <div class="form-group">
            <input class="btn btn-primary" type="submit" name="name" value="Submit">
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Users Data
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      <div class="table-responsive">
        <table id="search" class="table table-striped table-bordered display  responsive nowrap" style="width: 100%">
            <thead>
            <tr>
              <th><strong>Name</strong></td>
              <th><strong>City</strong></td>
              <th><strong>Status</strong></td>
              <th><strong>Package</strong></td>
              <th><strong>by_doc</strong></td>
              <th><strong>View</strong></td>
    <th><strong>age</strong></td>
    <th><strong>Email</strong></td>
    <th><strong>address</strong></td>
        <th><strong>id</strong></td>
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

                        <td><a class="btn btn-success" href="../send_not.php?q=<?php echo $row['id']; ?>" >Send</a></td>
                        <td><?php echo $row["age"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["id"]; ?></td>
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
                <th><strong>Name</strong></td>
                <th><strong>City</strong></td>
                <th><strong>Status</strong></td>
                <th><strong>Package</strong></td>
                <th><strong>by_doc</strong></td>
                <th><strong>View</strong></td>
      <th><strong>age</strong></td>
      <th><strong>Email</strong></td>
      <th><strong>address</strong></td>
          <th><strong>id</strong></td>
                <th><strong>time</strong></td>
            </tr>
            </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
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
 <script type="text/javascript" language="javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 <script>
 bars.onclick = function(){
   // console.log(menu.offsetWidth/screen.width+"%");
   if(menu.classList.contains("menu_icons")){
     menu.classList.remove("menu_icons");
     main_content.style.width=85+"%";

   }else{
     menu.classList.add("menu_icons");
     main_content.style.width=95+"%";
     // main_content.style.width=100+"%"-(menu.offsetWidth/screen.width+"%");

   }
 }

 </script>
