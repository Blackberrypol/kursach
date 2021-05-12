
<!DOCTYPE html>
<?php
include ("dbconnect.php");
include ("header.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
</head>
<body>
    <form method="POST">
    <div  style="position: relative;left: 4%;width: 94%">
     <link rel="stylesheet"type="text/css"href="styles.css">
        <p>Введите название статьи:<input type="text"  autocomplete="off" name="title"></p>
        <textarea name="content"  id="editor1" cols=120 rows=30 >
        </textarea>
        <script type="text/javascript">
            CKEDITOR.replace( 'editor1' );
        </script>
        <input type="submit" class="buttons" name="add" value="Добавить">
                <br>
        <br>
    </div>
</form>
</body>
</html>
</body>
</html>
<?php
if ( isset( $_POST['id'] ) )
    $cur_id = $_POST['id'];
else
    $cur_id = -1;
if ( isset( $_POST['title'] ) )
    $cur_1 = $_POST['title'];
if ( isset( $_POST['content'] ) )
    $cur_2 = $_POST['content'];


//добавить
if (isset( $_POST['add'] ) )
{$s1="INSERT INTO articles3 (title,content) VALUES ('" ;
$s1.=$cur_1."',"."'". $cur_2."')";
$query=mysqli_query($mysqli, $s1);
 if($query) {
  header("location: ".getenv("SITE_ADRESS")."/t3.php");
  }
  }
?>