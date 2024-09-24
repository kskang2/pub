
<?php
$filename = "poll_result.txt";
$option0 = 0;
$option1 = 0;
$option2 = 0;
$option3 = 0;


$total=$option0+$option1+$option2+$option3;
// if ($total==0){$total=1;}
//insert votes to txt file
date_default_timezone_set("Asia/tokyo");
$date=date("Ymd",time());
$family=" ";
$nexttime=" ";
$insertvote = $option0."|||".$option1 ."|||".$option2."|||".$option3."|||".$date."|||".$family."|||".$nexttime;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>
<script>
document.cookie = "user4=kang4; expires=Sat, 10 May 2022 12:00:00 UTC; path=/";//expire day
// document.cookie = "user4=kang4; expires=Fri, 13 Sep 2024 12:00:00 UTC; path=/";//expire day
location.href="./index.php";
</script>

