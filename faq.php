<?php
include "header.php";
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $user_id; ?>">
<div class="form-group">
<label>Question</label>
 <textarea class="form-control" name="ques" id="ques" ></textarea>
</div>
<div class="form-group">
<label>answer</label>
<textarea class="form-control" name="ans" id="ans" ></textarea>
</div>
<input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_faq(event);">
<br />
<br />
<div class="table-responsive">
<table class="table table-bordered">
<thead>
  <tr>
    <th scope="col">ques</th>
    <th scope="col">ans</th>
    <th scope="col">edit</th>
		<th scope="col">delete</th>
  </tr>
</thead>
<tbody id="tb">
<?php
$sql="select * from faq ";
$query = mysqli_query($conn, $sql);

if($query){
$num = 1;
while ($row = mysqli_fetch_assoc($query)){
  $r= '<tr><td>'.$row['ques'].'</td><td>'.$row['ans'].'</td>';
	$r.=' <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal_'.$num.'"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>';
  $r.= '<td> <button class="btn btn-danger" type="button" onclick="del_faq.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" ><i class="fa fa-trash btn-icon"></i>Delete</button></td>';
   $r.='</tr>';
  echo $r;
	?>
	<!-- Update Modal -->
<div class="modal" id="update_modal_<?php echo $num ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>

      </div>
      <div class="modal-body">
			<form>
				<div class="form-group">
				<label>Question</label>
				 <textarea class="form-control" name="ques" id="ques" ></textarea>
				</div>
				<div class="form-group">
				<label>answer</label>
				<textarea class="form-control" name="ans" id="ans" ></textarea>
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

	<?php
	$num++;
}
}
?>
</tbody>
</table>
</div>
<?php
include "footer.php";
 ?>

<script>
function add_faq(e) { // Call to ajax function
  e.preventDefault();
    var ques = $('#ques').val();
    var ans = $('#ans').val();
    var add_by = $('#add_by').val();

alert(add_by);

$.ajax({
        type: "POST",
        url: "insert_faq.php", // Name of the php files
        data: {
            "ques" : ques,
           "ans":ans,
           "add_by":add_by,

        },
        dataType: "html",
        success: function(data) {
$('#tb').append("<tr><td>"+ques+"</td>"+"<td>"+ans+"</td></tr>");


}
    });
}
function del_faq() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "delete_faq.php", // Name of the php files

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
