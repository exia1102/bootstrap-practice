<?php

// $a=3;
// $b=$a;
// $b=5;


// class test{
// 	public $a;

// }
// $c= new test;
// $c->a=5;
// $d=$c;
// echo $d->a;
// $d->a=10;
// echo $c->a;

// class father{
// 	public $name;
// 	private $age;
// 	protected $wealth;

// 	public function test(){
// 		echo 'father';
// 	}
// 	function __construct($name,$age,$wealth){
// 		$this->name =$name;
// 		$this->age=$age;
// 		$this->wealth=$wealth;
// 		echo'123';
// 		echo'<br>';
// 	}

// }

// class child extends father{
// 	public $interest;

// 	function __construct($name,$age,$wealth,$interests){
// 		parent::__construct($name,$age,$wealth);
// 		$this->interests = $interests;
// 		echo"child";
// 	}
// }


// $zhangsan = new child("zhangsan",20,500,'study');

// // $zhangsan->name="zhangsan";
// $zhangsan->age=123;
// echo $zhangsan->name;
// echo $zhangsan->test();
// class test{
// 	const PI=3.1415926;
// 	public $height;

// 	public function space($r){
// 		return $this->height*self::calc($r);
// 	}
// 	public function space2($r){
// 		return $this->height*$this->height*$r*$r*3.14;
// 	}
// 	public static function calc($r){
// 		return $r*$r*self::PI;
// 	}
// }

// $abj =new test();
// $abj->height=3;

// echo $abj->space(4);
// echo'<br>';
// echo$abj->calc(4);
// echo '<br>';
// echo test::calc(4);
// echo Test::PI;


class cat{
	public function sound(){
		echo "miao";
	}

}

class dog{
	public function sound(){
		echo"wang";
	}
}

function soundTwice($a){
	$a->sound();
	$a->sound();
}

soundTwice(new cat());