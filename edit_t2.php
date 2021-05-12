
<?php
include("dbconnect.php");
?>
<?php
include ("header.php");
?>

<?php
$getid = $_GET['edit'];
$seledittwo = "SELECT * FROM `articles2` WHERE `id`= '$getid'";
$qry = mysqli_query($mysqli, $seledittwo);
$selassoc = mysqli_fetch_assoc($qry);
$id = $selassoc['id'];
$title = $selassoc['title'];
$content = $selassoc['content'];

if(isset($_POST['updateedit'])) {
 $upid =  $_POST['upid'];
 $uptitle =  $_POST['uptitle'];
 $upcontent =  $_POST['upcontent'];

 $seleditt = "UPDATE `articles2` SET `title`='$uptitle',`content`='$upcontent' WHERE `id` = '$upid'";
 $qry = mysqli_query($mysqli,$seleditt);
 if($qry) {
  header("location: ".getenv("SITE_ADRESS")."/t2.php");
 }
}

?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
 <title></title>
</head>
<body>
<form method="POST" action="">
<link rel="stylesheet"type="text/css"href="styles.css">
	<div  style="position: relative;left: 4%;width: 94%">
  <input readonly type="text" name="upid" value="<?php echo $id; ?>"><br>
 <p>Название статьи:
 <input type="text"  name="uptitle" value="<?php echo $title ; ?>"></p>
 <textarea name="upcontent"  id="editor1" cols=120 rows=30 > <?php echo $content ?>
        </textarea>
        <script type="text/javascript">
            CKEDITOR.replace( 'editor1' );
        </script>
        <input type="submit" class="buttons" name="updateedit" value="Обновить">
                <br>
        <br>
    </div>
</form>
</body>
</html>