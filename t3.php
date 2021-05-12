<?php
include("dbconnect.php");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS: каскадирование,спцифичность,наследование</title>
    <link rel="stylesheet"type="text/css"href="styles.css">

</head>
<body>
<?php
    require_once("header.php");
?>
<div class="t1_c">
<div class="art">
<h3 style="position: relative;text-align: center;">Статьи по теме:</h3>
</div>
<div>

<?php
if(isset($_COOKIE["jwt"]) and $_COOKIE["jwt"]){
?>
<form action="add_t3.php" method=POST>
<input type=button class="forbutton"  name=go value="Добавить статью " onclick="additing()">
</form>
<script type="text/javascript">
    function additing() {
    open_page = open("add_t3.php");
}
<?php
}
else{
echo'
<div class="art">
<h5>Авторизируйтесь для добавления статей</h5>
</div>';
}
?>
</script>
</div>
<br>
<body>

<?php
$sel = "SELECT * FROM `articles3` ORDER BY id DESC ";
$qrydisplay = mysqli_query($mysqli, $sel);
while($row = mysqli_fetch_array($qrydisplay)){
 $id  =  $row['id'];
 $title  =  $row['title'];
 $content  =  $row['content'];
 echo '<div  class="art" style="position: relative;left: 4%;width: 91%"><b>'.$id.".".$title."<br></b>".
 "<a style='background-color:##e0c1f3'href='page_t3.php?open=$id'>Открыть</a><br><br>
 </div>";
}
?>
</div>
<?php
    require_once("footer.php");
?>
</body>
</html>


