<?php

/*//آخرین بازدید فایل
//$time=fileatime('D:/Developer');
//آخرین ویرایش
//$time=filectime('D:/Developer');
//آخرین ویرایش محتوا
$time=filemtime('D:/Developer');
echo date('F d Y H:i:s',$time);*/

//-------------------------------------------

/*$text="محمد";
echo $fileName=fopen("D:\Text.txt","w");
fwrite($fileName,$text);
fclose($fileName);*/

//-------------------------------------------


/*$fileName=fopen('D:\Text.txt','r');
while(!feof($fileName)){
    //echo fgetc($fileName);
    echo fgets($fileName);
}*/

//-------------------------------------------

//ایجاد یک فایل
//touch('D:\Test.txt');

//حذف یک فایل
//unlink('D:\Test.txt');

//تغییر نام فایل
//rename('D:\Test.txt','D:\Test2.txt');

//انتقال فایل
//rename('D:\Test.txt','E:\Test.txt');

//کپی کردن فایل
//copy('D:\Test.txt','E:\Test.txt');

//-------------------------------------------

?>

<form enctype="multipart/form-data" method="POST">
    <input type="file" name="file">
    <br>
    <input type="submit" name="submit" value="upload">
</form>

<?php
    if(isset($_POST['submit'])){
        $allowExtension=array("gif","jpeg","jpg","png");
        $fileExtension=explode(".",$_FILES['file']['name']);
        $extension=end($fileExtension);
        if(in_array($extension,$allowExtension) && $_FILES['file']['size'] <= 21234567){
            move_uploaded_file($_FILES['file']['tmp_name'],'D:\uploads/'.$_FILES['file']['name']);
            if($_FILES['file']['error'] == 0){
                echo "successfuly";
            }
            else{
                echo "error";
            }
        }
        else{
            echo "invalid";
        }
    }
?>