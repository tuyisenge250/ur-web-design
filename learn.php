echo"hello world!<br>";
 $sum = "sabbath";
 $fils = "happy dai!!!!";
 echo $sum." <br>".$fils;
$x = "234ben";
var_dump ($x);
echo (int) $x."<br>";
$d = date('D');
$array = ['love', 'time', 'work'];
define('work', 'php');
echo work."<br>";
const run = 'sam';
echo __file__."<br>";
$foo = 'ben';
$$foo = 'isfull';
echo $foo.$ben;
echo run;
print_r($array);
$x = true;
var_dump(is_bool($x));
echo $x;
$a = 0b110;
echo $a;
$firstname = 'emmy';
$lastname = "ambumba";
$lastname[4]= 'b';
echo $lastname. "<br>";
$text = <<<TEXT
LINE 1 $x
LINE 2 $a
LINE 3
TEXT;
echo nl2br($text);
$programing = ['php', 'python', 'java'];
echo $programing[1];
var_dump(isset($programing[0]));
echo '<pre>';
print_r($programing);
echo '<pre>';
array_push($programing, 'c++', 'c', 'c#', 'GO');
echo '<pre>';
print_r($programing);
echo '<pre>';
echo count($programing);
$home = [
    'php' => [
        'creator' => 'arra',
        'correct' => true,
        'extension' => 250,
        'function' =>
        [
            [
            'parameter' => 'insert',
            'argurment' => 'home'
        ],
        [
            'framework' => 'its_time',
            'big_dual' => 'together',
        ],
    ],
    ],
    'python' => '3.8',
    'java' => '4.7'
];
echo '<pre>';
print_r($home);
echo '<pre>';
//var_dump($home);
$cla = ['c',50 => 'd','f','e' ];
print_r($cla);
array_pop($cla);
print_r($cla);
$score = 58;
if ($score >= 90){
    echo '<strong>';
    <?php

}
elseif($score <= 50){
    echo 'fail';
}
elseif($score <= 60){
    echo 'D';
}
else{
    echo 'B';
}
echo '<br>';
/**$i = 0;
while($i < 10)
{
    echo $i;
    $i++;
}*/
//unset($i)
$i = 0;
while($i <= 15){
    if($i % 2 == 0)
    { 
        $i++;  
        continue;
    }
    echo $i++.',';
}
$text = "hello world";
for($i=0; $i <=strlen($text) ; $i++)
{
    echo $text[$i];
}
foreach($programing as $language)
{
    echo $key.':'.$language.'<br />';
}
$code= [
    'name' => 'claver',
    'email' => 'rukara@gmail.com',
    'skills' => ['emmy',  'erica'],
];
foreach($code as $key => $value):
    echo $key.': ';
    if(is_array($value))
    {
        foreach($value as $skill)
        {
            echo $skill.'- ';
        }
    }
    else
    {
        echo $value.'<br>';
    }
endforeach;
$claver = 1;
$claverDisplay = match($claver){
    1 => 'paid',
    2 => 'school',
    3 => 'services',
    default => 'note manupulate',
};
echo $claverDisplay;
function foo()
    {
        function welcome(){
            echo 'talk tommorrow<br>';
        }
        welcome();
        return 'hello world<br>';
    }
    echo foo();
    $sum = function (int|float...$number):int|float {
        return array_sum($number);
    };
    echo $sum(1,2,3,4,5);
    $array = [1,2,3,4];
    $array2 = array_map(function($element){
        return $element *2;
    }, $array);
    echo '<pre>';
    print_r($array);
    print_r($array2);
    echo '<pre>';
    $currentTime = time();
    echo $currentTime;
    echo $currentTime + (5* 24* 60* 60).'<br />';
    echo date_default_timezone_get().'<br>';
   echo date('m/d/y g:ia', $currentTime + (5* 24* 60* 60)).'<br>';
   date_default_timezone_set('UTC');
   echo date('d/m/y g:ia').'<br>';
   echo date_default_timezone_get().'<br>';
   echo date('m/d/y g:ia', strtotime('tommorrow'));
   $petty = ['b' => 1, 'c' => 4, 'd' => 5, 'f' => 20];
   /**prettyprintArray(array_chunk($petty, 2));
   error_reporting(E_ALL & ~E_WARNING);
   mkdir('foo');*/

   ?>
   <form action="available.php" method="post">
   name: <input type="text" name="student"><br>
    <input type="submit">
   </form>
   <?php 
   $geto=["eric" => 200, "rukara" =>150, "fils"=> "ben"];
   echo $geto[$_POST["student"]];
   ?>
   <form action="available.php" method="post">
    
   <input type="number" name="num1"><br>
   <input type="text" name="op"><br>
   <input type="number" name="num2"><br>
   <input type="submit">
   </form>
   <?php
   $num1=$_POST["num1"];
   $num2=$_POST["num2"];
   $op=$_POST["op"];
   if($op == "+")
   {
    echo $num1 + $num2;
   }
   else{
    echo "operator don't";
   }
   class books {
    var $title;
    var $time;
    var $chapter;
    function __construct($name, $date, $unit){
        $this->title = $name;
        $this->time = $date;
      $this->chapter = $unit;
    }
   }
   $book = new books("hello world","date('d/m/y g:ai')",200);
   echo $book ->title;
   ?>  
   <?php
   class bord{
    public $program;
    public $attend;
    public $user;
    public function __construct($way,$rate,$system)
    {
        $this->program = $way;
        $this->attend = $rate;
        $this->user = $system;
    }
   }
   class hello{
    public $lang;
    function __construct($lang)
    {
        $this->lang = $lang;
    }
    function get_hello(){
        if($this->lang == 'fr') return 'bonjour';
        if($this->lang == 'es') return 'hola';
        else return 'helloo';
    }
   }
   $hi = new hello('fr');
   echo $hi->get_hello();
   ?>
 