<?php
include 'api/config.php';
include 'api/session.php';

?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<table >
<thead>
  <tr>
    <th scope="col">name</th>
    <th scope="col">city</th>
    <th scope="col">address</th>
    <th scope="col">mobile</th>
    <th scope="col">email</th>
    <th scope="col">role</th>
    <th scope="col">Active</th>
  </tr>
</thead>
<tbody id="tb">
<?php
$sql="select * from users where role='user'";
$query = mysqli_query($conn, $sql);

if($query){

while ($row = mysqli_fetch_assoc($query)){
  $r= '<tr><td>'.$row['name'].'</td><td>'.$row['city'].'</td><td>'.$row['address'].'</td><td>'.$row['mobile'].'</td><td>'.$row['email'].'</td><td>'.$row['role'].'</td><td>'.$row['active'].'</td>';
  $r.= '<td> <button type="button" onclick="activate.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Activate</button></td>';
  $r.= '<td> <button type="button" onclick="del_user.call(this);" id="del_btn_doc" data-id="'. $row['id'] . '" >Delete	</button></td>';
   $r.='</tr>';
  echo $r;
}
}
?>
</tbody>
</table>
<script>
function activate() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "update_activate.php", // Name of the php files

        data: {
            "id" : id

        },
        dataType: "html",
        success: function(data) {
alert(data);

}
    });
}
function del_user() { // Call to ajax function

var id = $(this).data('id');
$clicked_btn = $(this);
alert(id);
$.ajax({
        type: "POST",
        url: "delete_user.php", // Name of the php files

        data: {
            "id" : id

        },
        dataType: "html",
        success: function(data) {
alert(data);

}
    });
}


</script>
