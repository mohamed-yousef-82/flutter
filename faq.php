<?php
include 'api/config.php';
include 'api/session.php';

?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<input class="form-control" name="text" id="add_by" type="hidden" value="<?php echo $user_id; ?>">
<label>Question</label>		    <input class="form-control" name="ques" id="ques" type="text" >
<label>answer</label>		 <input class="form-control" name="ans" id="ans" type="text" >

<input class="btn btn-primary" name="submit" value="Add" type="submit" onclick="add_faq(event);">

<table >
<thead>
  <tr>
    <th scope="col">ques</th>
    <th scope="col">ans</th>

  </tr>
</thead>
<tbody id="tb">
<?php
$sql="select * from faq ";
$query = mysqli_query($conn, $sql);

if($query){

while ($row = mysqli_fetch_assoc($query)){
  $r= '<tr><td>'.$row['ques'].'</td><td>'.$row['ans'].'</td>';
  $r.= '<td> <button type="button" onclick="del_faq.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete</button></td>';
$r.=' <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal"'. $user_id .'"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>';
   $r.='</tr>';
  echo $r;
}
}
?>
</tbody>
</table>
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
