<?php

/*function modifyNumberVal($number){
    $number +=10;
    echo $number;
}

function modifyNumberref(&$number){
    $number +=10;
    echo $number;
}

$num=5;
echo $num;
echo "<br>";
modifyNumberVal($num);
echo "<br>";
echo $num;
echo "<br>";
modifyNumberref($num);
echo "<br>";
echo $num;*/

//-------------------------------------------

/*function staticVariable(){
    static $firstNumber=10;
    echo $firstNumber;
    $firstNumber ++;
}

staticVariable();
echo "<br>";
staticVariable();*/

//-------------------------------------------

/*function factorials($number){
    if($number==1){
        return 1;
    }

    return $number*factorials($number-1);
}

echo factorials(5);*/

/*$factorial=1;
for($counter=5;$counter>=1;$counter--){
    $factorial*=$counter;
}
echo $factorial;*/

//-------------------------------------------

/*function showMessage(){
    $string=func_get_args();
    foreach ($string as $str){
        echo "Hello ".$str."<br>";
    }
}

showMessage("World");
showMessage("Mohammad","Reza");*/ 

//-------------------------------------------

/*class Test
{
    public $age;

    function information(){
        echo $this->age."<br>";
    }
}

$obj=new Test(31);
$obj->age=31;
$obj->information();
$obj->age=32;
$obj->information();*/

//-------------------------------------------

/*class Animal
{
    public function eat(){
        echo "animal eat"."<br>";
    }
}

class Dog extends Animal
{
    function eat(){
        echo "dog eat"."<br>";
    }
}

$myAnimal=new Animal();
$myDog=new Dog();
$myAnimal->eat();
$myAnimal=$myDog;
$myAnimal->eat();
$myDog->eat();*/

//-------------------------------------------

/*class Person
{
    private $info=array();

    function __set($name, $value)
    {
        $this->info['name']=$value;
    }

    function __get($name)
    {
        return $this->info['name'];
    }
}

$person=new Person();
$person->name="Mohammad";
echo $person->name;*/

//-------------------------------------------

/*class Person
{
    function __invoke($param,$param2)
    {
        echo "Hello ".$param." ".$param2;
    }
}

$person=new Person();
$person("World","Beautiful");*/

//-------------------------------------------

/*function __autoload($className){
    require_once 'Classes/'.$className.'.php';
}

$firstClass=new FirstClass();
$firstClass->showMessage();*/

//-------------------------------------------

/*$firstNumber=10;
$secondNumber=5;
$sum;

function globlaVariable(){
    $GLOBALS['sum']=$GLOBALS['firstNumber'] + $GLOBALS['secondNumber'];
}

globlaVariable();
echo $sum;*/

//-------------------------------------------

//نام فایل در حال اجرا نسبت به ریشه سایت
/*echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
//آی پی سرور
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
//آی پی کاربر
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
//آدرس صفحه درخواستی
echo $_SERVER['REQUEST_URI'];
echo "<br>";
//کاربر از چه سایتی اومده
echo $_SERVER['HTTP_REFERRER'];
echo "<br>";
//ریشه اصلی سایت
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
//مسیر مطلق فایل در حال اجرا
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br>";*/

//-------------------------------------------

/*$five=5;
$zero=0;

try{
    if($zero > 0 || $zero < 0){
        $result=$zero / $five;
        echo $result;
    }
    else{
        throw new Exception('error');
    }
}
catch(Exception $e){
    echo 'error name : '.$e->getMessage();
}*/

//-------------------------------------------



//-------------------------------------------

//-------------------------------------------

//-------------------------------------------

//-------------------------------------------

//-------------------------------------------

//-------------------------------------------

?>

<?php 
    /*$username=$_POST['username'];
    print($username);*/
    $male_status="";
    $female_status="";
    if(isset($_POST['submit'])){
        $selected_radio=$_POST['gender'];
        if($selected_radio == "male"){
            $male_status="checked";
        }
        else if($selected_radio == "female"){
            $female_status="checked";
        }
    }

    if(isset($_POST['submit'])){
        if(isset($_POST['programs'])){
            echo 'you selected: <br>';
            foreach($_POST['programs'] as $p){
                echo "<i>$p</i><br>";
            }
        }
        else{
            echo "nothing";
        }
    }

    if(isset($_POST['submit'])){
        foreach($_POST['person'] as $value){
            echo $value."<br>";
        }
    }
?>

<!--<form name="form1" method="post" action="index.php">
    <input type="text" name="username">
    <input type="submit">
    <input type="radio" name="gender" value="male" checked <?php print $male_status; ?>>Male <br>
    <input type="radio" name="gender" value="female" <?php print $female_status; ?>>Female <br>
    <input type="checkbox" name="programs[]" value="php">php <br>
    <input type="checkbox" name="programs[]" value="html">html <br>
    <input type="checkbox" name="programs[]" value="css">css <br>
    <select name="person[]" multiple="multiple">
        <option value="Mohammad">Mohammad</option>
        <option value="Khodaei">Khodaei</option>
    </select>
    <input type="submit" name="submit">
</form>-->

<?php
    echo "signup main part";
    echo "<hr>";
?>