<?php
include ("header.php");
?>
<body>
<link rel="stylesheet"type="text/css"href="styles.css">
</body>
<br>
<?php
include("dbconnect.php");
$getid = $_GET['open'];
$selopentwo = "SELECT * FROM `articles3` WHERE `id`= '$getid'";
$qry = mysqli_query($mysqli, $selopentwo);
while($selassoc = mysqli_fetch_array($qry)){
$id = $selassoc['id'];;
$title = $selassoc['title'];
$content = $selassoc['content'];

if(isset($_COOKIE["jwt"]) and $_COOKIE["jwt"]){
 echo '<div  class="art" style="position: relative;left: 4%;width: 91%"><b>'
     .$id.".".$title."<br></b>".$content."<a style='background-color:##e0c1f3' 
href='edit_t3.php?edit=$id'>Редактировать</a><br><br> <a style='background-color:##e0c1f3'
href='delete_t3.php?deleteid=$id' >Удалить</a><br><br></div>";}

else{
echo '<div  class="art" style="position: relative;left: 4%;width: 91%"><b>'
    .$id.".".$title."<br></b>".$content."<br><br>
<h5>Авторизируйтесь для редактирования/удаления статей</h5></div>";
}
}
?>