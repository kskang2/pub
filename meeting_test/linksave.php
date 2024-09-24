
<?php
// Read linkattach.txt
$filename = "linksave.txt";
$file = file($filename);

//put content in array
$linkarray = explode("|||", $file[0]);
// global $link0,$link1,$link2,$link3,$link4,$link5,$link6;
// $link0 = $linkarray[0];
// $link1 = $linkarray[1];
// $link2 = $linkarray[2];
// $link3 = $linkarray[3];
// $link4 = $linkarray[4];
// $link5 = $linkarray[5];
// $link6 = $linkarray[6];
// $link7 = $linkarray[7];
// $link8 = $linkarray[8];
// $link9 = $linkarray[9];
// $link10 = $linkarray[10];
// $link11= $linkarray[11];
$link12= $linkarray[12];

$link0 = $_POST['link0'];
$link1 = $_POST['link1'];
$link2 = $_POST['link2'];
$link3 = $_POST['link3'];
$link4 = $_POST['link4'];
$link5 = $_POST['link5'];
$link6 = $_POST['link6'];
$link7 = $_POST['link7'];
$link8 = $_POST['link8'];
$link9 = $_POST['link9'];
$link10 = $_POST['link10'];
$link11 = $_POST['link11'];
$link12 = $_POST['link12'];
$link14 = $_POST['link14'];
$link15 = $_POST['link15'];

$placeholder=$link14;
if ($_FILES["file_name"]["name"] !=""){
  $link12 = $_FILES["file_name"]["name"] ;
}else{$link12=$linkarray[12];}
date_default_timezone_set("Asia/tokyo");
$date=date("Ymd",time());
//get content of textfile
$linkattach = $link0."|||".$link1 ."|||".$link2 ."|||".$link3."|||".$link4 ."|||".$link5 ."|||".$link6."|||".$link7 ."|||".$link8 ."|||".$link9."|||".$link10 ."|||".$link11."|||".$link12."|||".$date."|||".$link14."|||".$link15;
$fp = fopen($filename,"w");
fputs($fp,$linkattach);
fclose($fp);



$file_name =$link12 ;
$file_name = preg_replace("/[^\a-zA-Z0-9\_\-\. ]/u", '', $file_name);///추가 sanitize filename
$statusMsg = '';// File upload directory
$targetDir = "image/";

if(!empty($_FILES["file_name"]["name"])){


  $targetFilePath = $targetDir . $file_name;
  $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
  // Allow certain file formats
  $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF','pdf',"PDF");

  if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["file_name"]["tmp_name"], $targetFilePath)){
      // Insert image file name into database     VALUES ('".$fileName."')
                      echo 'file moved';
    }else{
      $statusMsg = "Sorry, there was an error uploading your file.";
    } } else {$statusMsg = 'Sorry';} }

////이상 원문/////////


header('Location: index.php');
?>


