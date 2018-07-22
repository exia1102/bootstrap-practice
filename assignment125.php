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
date_default_timezone_set('UTC');


$color=["yellow"=>"yellow","green"=>"green","red"=>"red"];


class fruit{
  private $color;
  private $price;
  private $season;
  private $name;
  public $month;

  function __construct($a,$b,$c,$d){
    $this->color=$a;
    $this->price=$b;
    $this->season=$c;
    $this->name=$d;
  // if($c=="spring"){
  //     $this->month=["3","4","5"];
  // }
  // if($c=="summer"){
  //     $this->month=["6","7","8"];
  // }
  // if($c=="autumn"){
  //     $this->month=["9","10","11"];
  // }
  // if($c=="winter"){
  //     $this->month=["12","1","2"];
  // }
}
  public function getname(){
    echo $this->name;
  }
    public function getcolor(){
    echo $this->color;
  }
    public function getseason(){
    echo $this->season;
  }
    public function getprice(){
  if($this->season=="spring"){
      $a=["3","4","5"];
  }
  if($this->season=="summer"){
      $a=["6","7","8"];
  }
  if($this->season=="autumn"){
      $a=["9","10","11"];
  }
  if($this->season=="winter"){
      $a=["12","1","2"];
  }
  if(in_array(date("n"), $a)){
    echo $this->price/2;
  }else{
    echo $this->price;
  }
  }
  // public function getmonth(){
  // if($this->season=="spring"){
  //   $this->month=["3","4","5"];
  //   return $this->month;
  // }
  //   if($this->season=="summer"){
  //     $this->month=["6","7","8"];
  //     return $this->month;
  // }
  //   if($this->season=="autumn"){
  //     $this->month=["9","10","11"];
  //     return $this->month;
  // }
  //   if($this->season=="winter"){
  //     $this->month=["12","1","2"];
  //     return $this->month;
  // }
  // }
}


$apple=new fruit('red','10','autumn','apple');
$pear=new fruit('yellow','9','summer','pear');
$watermelon=new fruit('green','12','summer','watermelon');

$list_fruit=[$apple,$pear,$watermelon];

// foreach($list_fruit as $a=>$b){
//   if(array_search(date("n"),$b->month)){
//     $b->price=$b->price/2;
//   }
// }




?>

<?php 
if($_GET['name']=='watermelon'|$_GET['name']=='apple'|$_GET['name']=='pear'){
  echo "fruit exists";
}else{
  $a=new fruit($_GET['color'],$_GET['price'],$_GET['season'],$_GET['name']);
  $list_fruit[]=$a;
}


 ?>

<?php
foreach($list_fruit as $value){

?>
<style type="text/css">
  .<?php $value->getname()?>{
    color:<?php echo $color[$value->getcolor()]?>;
  }
</style>
<ul class="<?php $value->getname() ?>"><?php $value->getname(); ?>
  <li><?php $value->getcolor(); ?></li>
  <li><?php $value->getprice(); ?></li>
  <li><?php $value->getseason(); ?></li>
</ul>

<?php
}
?>

<form action=""method="get">
  name:<input type="text" name="name"><br>
  color:<input type="text" name="color"><br>
  price:<input type="text" name="price"><br>
  season:<input type="text" name="season"><br>
  <input type="submit" name="submit">

</form>





  </body>
</html>