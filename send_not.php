<?php
include 'api/config.php';
include 'api/session.php';


//echo $_SESSION['id'];
?>
<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>" />
<input type="text" name="subject" id="subject" />
<input type="textarea" name="details" id="details" />
<input type="button" name="submit" id="submit" value="send"/>
<?php
$id=$_GET['q'];


 ?>
