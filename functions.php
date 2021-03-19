	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php



function user_info($id){
	include "api/config.php";

$sql="Select * from users where id='$id'";
		  $query = mysqli_query($conn, $sql);

if($query){
	  while ($row = mysqli_fetch_assoc($query)){

	  $temp=[];
				$temp['id'] = $row['id'];
				$temp['name'] = $row['name'];
                $temp['city'] = $row['city'];
                $temp['address'] = $row['address'];
                $temp['age'] = $row['age'];
                $temp['password'] = $row['password'];
                $temp['email'] = $row['email'];
				                $temp['mobile'] = $row['mobile'];
				                $temp['gender'] = $row['gender'];
				                $temp['code'] = $row['code'];
				                $temp['doctor'] = $row['by_doc'];


				$data[]=$temp;

		}
//echo json_encode($data);
				            $data2= json_encode($data);
							return $data2;

	  }

}

function get_msg($id){
	include "api/config.php";

	$sql="Select * from chat where sender='$id' or receiver='$id' order by timestamp DESC LIMIT 1";
		  $query = mysqli_query($conn, $sql);

if($query){
	  while ($row = mysqli_fetch_assoc($query)){

	  $temp=[];
				$temp['sender'] = $row['sender'];
				$temp['receiver'] = $row['receiver'];
                $temp['msg'] = $row['msg'];
                $temp['timestamp'] = $row['timestamp'];


				$data[]=$temp;

		}
//echo json_encode($data);
				            $data2= json_encode($data);
							return $data2;

	  }

}
function get_image($id){
	include "api/config.php";
	$role=$_SESSION['role'];

$sql="Select * from book_scan where user_id='$id'";
		  $query = mysqli_query($conn, $sql);

if($query){
	if (mysqli_num_rows($query)>0)
	{

	  while ($row = mysqli_fetch_assoc($query)){

	  $temp=[];
				$temp['id'] = $row['id'];
				$temp['path'] = $row['path'];
                $temp['time'] = $row['timestamp'];

				$data[]=$temp;

		}
//echo json_encode($data);
				            $data2= json_encode($data);
							return $data2;

	  }else{
			echo "no data";
		}}

}
function get_task($id){
	include "api/config.php";
	$role=$_SESSION['role'];

$sql="Select * from tasks where user_id='$id'";
		  $query = mysqli_query($conn, $sql);

if($query){

	  while ($row = mysqli_fetch_assoc($query)){

$r= '<tr><td>'.$row['task'].'</td><td>'.$row['type'].'</td><td>'.$row['date'].'</td><td>'.$row['done'].'</td>';
if ($role=="admin" ) {

$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete</button></td>';
$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Edit</button></td>';
}

$r.=' </tr>';
echo $r;
	  }

}
}

function get_status($id){
	$role=$_SESSION['role'];

		include "api/config.php";
$sql="SELECT * FROM status where patient_id='$id'  ";

$query = mysqli_query($conn, $sql);

 while ($row = mysqli_fetch_assoc($query)) {

$r= '<tr><td>'.$row['est_date'].'</td><td>'.$row['status'];
if ($role=="admin" ) {

$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete</button></td>';
$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Edit</button></td>';


 $r.='</tr>';
echo $r;
 }
}
}
function get_treatment($id){
	$role=$_SESSION['role'];

		include "api/config.php";
$sql="SELECT * FROM treatment where patient_id='$id'  ";

$query = mysqli_query($conn, $sql);

 while ($row = mysqli_fetch_assoc($query)) {

$r= '<tr><td>'.$row['plan_menu'].'</td><td>'.$row['steps'];
if ($role=="admin" ) {

$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete</button></td>';
$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Edit</button></td>';


 $r.='</tr>';
echo $r;
 }
}
}

 function get_doc($id){
	 $role=$_SESSION['role'];

 		include "api/config.php";

 $sql="SELECT * FROM pdftable where receiver='$id'  ";

 $query = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($query)) {

		if ($role=="admin" ) {

		$r= '<tr><td>'.$row['name'].'</td><td><a href="'.$row['pdffile'].'"> View </a></td><td> <button type="button" onclick="del_doc.call(this);;" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete</button>
</td>';


$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Edit</button></td>';
}


$r.='</tr>';
echo $r;
  }
}


function get_video($id){
	$role=$_SESSION['role'];

	 include "api/config.php";

$sql="SELECT * FROM videotable where receiver='$id'  ";

$query = mysqli_query($conn, $sql);

 while ($row = mysqli_fetch_assoc($query)) {
	 if ($role=="admin" ) {

	 $r= '<tr><td>'.$row['name'].'</td><td><a href="'.$row['pdffile'].'"> View </a></td><td> <button type="button" onclick="del_video.call(this);;" id="del_btn_vid" data-id="'. $row['id'] . '" >Delete</button>
</td>';

$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Edit</button></td>';
}

$r.='</tr>';
echo $r;

 }



}
function get_pay($id){
	$role=$_SESSION['role'];

		include "api/config.php";
$sql="SELECT * FROM payement where patient_id='$id'  ";

$query = mysqli_query($conn, $sql);

 while ($row = mysqli_fetch_assoc($query)) {
	 if ($role=="admin" ) {

$r= '<tr><td>'.$row['est_date'].'</td><td>'.$row['pay'].'</td><td><a href="'.$row['invoice_path'].'"> View </a></td>';
$r.='<td> <button type="button" onclick="del_pay.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete</button></td>';

$r.= '<td> <button type="button" onclick="del_status.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Edit</button></td>';
}

$r.='</tr>';
echo $r;

 }





}

?>


<script>

function del_doc() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "delete_doc.php", // Name of the php files

        data: {
            "id" : id

        },
        dataType: "html",
        success: function(data) {
alert(data);
$clicked_btn.parents("tr").remove();

}
    });
}
function del_video() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "delete_video.php", // Name of the php files

        data: {
            "id" : id

        },
        dataType: "html",
        success: function(data) {
alert(data);
$clicked_btn.parents("tr").remove();

}
    });
}

function del_status() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "delete_status.php", // Name of the php files

        data: {
            "id" : id

        },
        dataType: "html",
        success: function(data) {
alert(data);
$clicked_btn.parents("tr").remove();

}
    });
}

function del_pay() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "delete_pay.php", // Name of the php files

        data: {
            "id" : id

        },
        dataType: "html",
        success: function(data) {
alert(data);
$clicked_btn.parents("tr").remove();

}
    });
}

function update(e) { // Call to ajax function
  e.preventDefault();
    var id = $('#id').val();
    var by_doc = $('#doctor').val();


$.ajax({
        type: "POST",
        url: "update_info.php", // Name of the php files
        data: {
            "id" : id,
           "by_doc":by_doc

        },
        dataType: "html",
        success: function(data) {
alert("updated");

}
    });
}

function add_status(e) { // Call to ajax function
  e.preventDefault();
    var id = $('#id').val();
    var status = $('#status_menu').val();
    var date = $('#date').val();
    var add_by = $('#add_by').val();
    var Scan_type = $('#Scan_type').val();
    var approval = $('#approval').val();
    var package2 = $('#package2').val();
    var instruction = $('#instruction').val();


$.ajax({
        type: "POST",
        url: "insert_status.php", // Name of the php files
        data: {
            "id" : id,
           "status":status,
           "add_by":add_by,
           "date":date,
           "Scan_type":Scan_type,
           "approval":approval,
           "package2":package2,
           "instruction":instruction

        },
        dataType: "html",
        success: function(data) {
$('#tb').html(data);


}
    });
}

function add_treatment(e) { // Call to ajax function
  e.preventDefault();

    var plan_menu = $('#plan_menu').val();
    var case2 = $('#case').val();
    var steps = $('#steps').val();
    var add_by = $('#add_by').val();
    var attachement = $('#attachement').val();
    var id = $('#id').val();
    var ipr = $('#ipr').val();
    var Retainer = $('#Retainer').val();
    var Refeniment = $('#Refeniment').val();
    var Redesign = $('#Redesign').val();

$.ajax({
        type: "POST",
        url: "insert_treatment.php", // Name of the php files
        data: {
            "id" : id,
           "plan_menu":plan_menu,
           "add_by":add_by,
           "case":case2,
           "steps":steps,
           "attachement":attachement,
           "ipr":ipr,
           "Retainer":Retainer,
           "Refeniment":Refeniment,
           "Redesign":Redesign

        },
        dataType: "html",
        success: function(data) {
$('#tb4').html(data);


}
    });
}

function add_task(e) { // Call to ajax function
  e.preventDefault();

    var submit_date = $('#submit_date').val();
    var delivery_date = $('#delivery_date').val();
    var aligner1_date = $('#aligner1_date').val();
    var add_by = $('#add_by').val();
    var id = $('#id').val();

$.ajax({
        type: "POST",
        url: "insert_calendar.php", // Name of the php files
        data: {
            "id" : id,
           "submit_date":submit_date,
           "add_by":add_by,
           "delivery_date":delivery_date,
           "aligner1_date":aligner1_date,

        },
        dataType: "html",
        success: function(data) {
$('#tb7').html(data);


}
    });
}


function add_pay(e){
  e.preventDefault();
    var id = $('#id').val();
    var pay = $('#pay_money').val().toString();
    var date = $('#date2').val().toString();
    var add_by = $('#add_by').val();
    var invoice_no = $('#invoice_no').val();
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  form_data.append("id", id);
  form_data.append("pay", pay);
  form_data.append("date", date);
  form_data.append("add_by", add_by);
  form_data.append("invoice_no", invoice_no);
  alert("name"+date+pay+name);

  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['pdf']) == -1)
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Document File Size is very big");
  }
  else
  {

   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"insert_pay.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Document Uploading...</label>");
    },
    success:function(data)
    {
			$('#uploaded_image').html("");

			  $('#tb2').html(data);


}
});
   }
 }

 function add_doc(e){
   e.preventDefault();
     var id = $('#id').val();
     var doc_name = $('#doc_name').val().toString();
     var add_by = $('#add_by').val();
  var name = document.getElementById("file_doc").files[0].name;
   var form_data = new FormData();
   form_data.append("id", id);
   form_data.append("doc_name", doc_name);
   form_data.append("add_by", add_by);

   var ext = name.split('.').pop().toLowerCase();
   if(jQuery.inArray(ext, ['pdf']) == -1)
   {
    alert("Invalid PDF File");
   }
   var oFReader = new FileReader();
   oFReader.readAsDataURL(document.getElementById("file_doc").files[0]);
   var f = document.getElementById("file_doc").files[0];
   var fsize = f.size||f.fileSize;
   if(fsize > 2000000)
   {
    alert("Document Size is very big");
   }
   else
   {

    form_data.append("file", document.getElementById('file_doc').files[0]);
    $.ajax({
     url:"insert_doc.php",
     method:"POST",
     data: form_data,
     contentType: false,
     cache: false,
     processData: false,
     beforeSend:function(){
      $('#uploaded_doc').html("<label class='text-success'>Document Uploading...</label>");
     },
     success:function(data)
     {
			   $('#uploaded_doc').html("");
 			  $('#tb3').html(data);


 }
 });
    }
  }
	function add_video(e){
    e.preventDefault();
      var id = $('#id').val();
      var video_name = $('#video_name').val().toString();
      var add_by = $('#add_by').val();
   var name = document.getElementById("file_video").files[0].name;
    var form_data = new FormData();
    form_data.append("id", id);
    form_data.append("video_name", video_name);
    form_data.append("add_by", add_by);

    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['mp4','wmv','mpeg']) == -1)
    {
     alert("Invalid Video File");
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("file_video").files[0]);
    var f = document.getElementById("file_video").files[0];
    var fsize = f.size||f.fileSize;
    if(fsize > 200000000)
    {
     alert("Image File Size is very big");
    }
    else
    {

     form_data.append("file", document.getElementById('file_video').files[0]);
     $.ajax({
      url:"insert_video.php",
      method:"POST",
      data: form_data,
      contentType: false,
      cache: false,
      processData: false,
      beforeSend:function(){
       $('#uploaded_video').html("<label class='text-success'>Video Uploading...</label>");
      },
      success:function(data)
      {
				$('#uploaded_video').html(data);

  			  $('#tb6').html(data);


  }
  });
     }
   }

</script>