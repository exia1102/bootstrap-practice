<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<?php 

$a=["code"=>200,"message"=>"code 200 is success"];
$b=["code"=>400,"message"=>"code 400 is warning"];
$c=["code"=>500,"message"=>"code 500 is danger"];

$list=[$a,$b,$c]

 ?>

 <form method="get"action="">
 	<input type="text" name="code">
 	<input type="submit" name="submit">
 </form>


 <?php 

if($_GET["code"]=="200"){

  ?><div class="alert alert-success" role="alert"><?php echo $list[0]['message'] ?>
</div>

<?php  
}
?>

<?php 

if($_GET["code"]=="400"){

  ?><div class="alert alert-waring" role="alert"><?php echo $list[1]['message'] ?>
</div>

<?php  
}
?>
<?php 

if($_GET["code"]=="500"){

  ?><div class="alert alert-danger" role="alert"><?php echo $list[2]['message'] ?>
</div>

<?php  
}
?>
  </body>
</html>




 