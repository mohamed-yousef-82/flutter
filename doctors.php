<?php
include "header.php";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $user_id; ?>">
<div class="form-group">
	<label>Name</label>		    <input class="form-control" name="name" id="name" type="text" >
</div>
<div class="form-group">
<label>address</label>		 <input class="form-control" name="address" id="address" type="text" >
</div>
<div class="form-group">
<label>Mobile</label>		 <input class="form-control" name="mobile" id="mobile" type="number" >
</div>
<div class="form-group">
<label>City</label>

          <select class="form-control" name="city" id="city"  >
            <option disabled selected >City</option>
            <option value="Cairo">Cairo</option>
            <option value="Giza">Giza</option>
            <option value="Alexandria">Alexandria</option>
            <option value="Tanta">Tanta</option>
            <option value="Mansoura">Mansoura</option>
            <option value="Red Sea">Red Sea</option>
          </select>
					</div>
					<div class="form-group">
<label>Company</label>
 <select class="form-control" name="company" id="company"  >
    <option disabled selected >Comapny</option>
    <option value="smart_smile">Smart Smile</option>
    <option value="other">Other</option>
  </select>
</div>
<input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_doctor(event);">
<br/><br/>
<table class="table-bordered">
<thead>
  <tr>
    <th scope="col">name</th>
    <th scope="col">address</th>
    <th scope="col">mobile</th>
    <th scope="col">city</th>
    <th scope="col">company</th>
    <th scope="col">edit</th>
    <th scope="col">delete</th>
  </tr>
</thead>
<tbody id="tb">
<?php
$sql="select * from users where role='doctor'";
$query = mysqli_query($conn, $sql);

if($query){

while ($row = mysqli_fetch_assoc($query)){
  $r= '<tr><td>'.$row['name'].'</td><td>'.$row['address'].'</td><td>'.$row['mobile'].'</td><td>'.$row['city'].'</td><td>'.$row['by_doc'].'</td>';
	$r.=' <td><button class="btn btn-warning" data-toggle="modal" data-target="#update_modal_'.$row['id'].'" type="button" data-target="#update_modal"'. $user_id .'"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>';
  $r.= '<td> <button class="btn btn-danger" type="button" onclick="del_doctor.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete</button></td>';
?>
<!-- Update Modal -->
<div class="modal" id="update_modal_<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Edit</h5>

		</div>
		<div class="modal-body">
		<form>
			<div class="form-group">
			<label>name</label>
			 <input type="text" value="<?php echo $row['name'] ?>" class="form-control" name="ques" id="ques" />
			</div>
			<div class="form-group">
			<label>address</label>
			 <input type="text" value="<?php echo $row['address'] ?>" class="form-control" name="ques" id="ques" />
			</div>
			<div class="form-group">
			<label>mobile</label>
			 <input type="text" value="<?php echo $row['mobile'] ?>" class="form-control" name="ques" id="ques" />
			</div>
			<div class="form-group">
			<label>city</label>
			<select class="form-control">
				<option><?php echo $row['city'] ?></option>
			</select>
			</div>

		</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		</div>
	</div>
</div>
</div>
<!-- End Update Modal -->

<?php
   $r.='</tr>';
  echo $r;
}
}
?>
</tbody>
</table>
<?php
include "footer.php";
 ?>
<script>
function add_doctor(e) { // Call to ajax function
  e.preventDefault();
    var name = $('#name').val();
    var address = $('#address').val();
    var add_by = $('#add_by').val();
    var mobile = $('#mobile').val();
    var city = $('#city').val();
    var company = $('#company').val();
alert(add_by);

$.ajax({
        type: "POST",
        url: "insert_doctor.php", // Name of the php files
        data: {
            "name" : name,
           "address":address,
           "add_by":add_by,
           "mobile":mobile,
           "city":city,
           "company":company,

        },
        dataType: "html",
        success: function(data) {
$('#tb').append("<tr><td>"+name+"</td>"+"<td>"+address+"</td>"+"<td>"+mobile+"</td>"+"<td>"+city+"</td><td>"+company+"</td></tr>");


}
    });
}
function del_doctor() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "delete_doctor.php", // Name of the php files

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


</script>
