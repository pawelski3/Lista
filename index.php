<style>
body{
	background-color:black;
	color:white;
	
}

</style>
<?php
class B{
	public $br="</br>";
	
	public static function c(){
		echo "<br>";
	}
	public static function write($x){
		self::c();
		echo "<pre>";
		print_r($x);
		echo "</pre>";
	}
}

class Node {

    public $next;
    public $value;
	public $nr;
}

class Lista {
	private $n;
	private $name;
	private $nr=1;

	
	public function __construct($w){
		$this->n=new Node;
		$this->n->value=$w;
		$this->n->nr=$this->nr;
		
		echo "<br>Konstruktor utworzył obiekt ".__class__;
		B::c();
		var_dump($this);
		
	}
	
	
	public function nowy($w){
		$activ=$this->n;
		$r=new Node($w);
		$r->value=$w;
		$this->nr++;
		$r->nr=$this->nr;
		
		
		while ($activ->next!=null)
		{
		$activ=$activ->next;
		}
		$activ->next=$r;
		
	}

	
	public function pisz(){
		echo "<br><pre>";
		print_r($this->n);
		echo "<br></pre>";
	}
	
	
	
	public function ile(){
		B::c();
		
		echo "Ilość elementów w liście= ".$this->nr;
	}
	
	public function forall(){
		$a=$this->n;
		$tablica=array();
		while ($a->next!=null)
			{
				$tablica[$a->nr]=$a->value;
				$a=$a->next;
			}
		$tablica[$a->nr]=$a->value;	
			
		return $tablica;
	}
	
	
	
	
}

$e="Y";
$$e="ok";

$nowy=new Lista(3<<1);
$nowy->nowy($Y);
$nowy->nowy("we"-1?"1.3ff"+5:false);
$nowy->nowy("0g" or 0?"1.3ff"+5:false);
$nowy->nowy("-0"?"Reluktancja":"");
$nowy->nowy("0g" && "-0"?"1.3ff"+1:false);
$nowy->nowy("Kapacytancja - opór bierny pojemnościowy");
$nowy->pisz();

$nowy->ile();
B::c();
B::write($nowy->forall());


?>
