<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="description" content="s_0">
    <meta name="keywords" content="선택">

    <meta name="description" content="선택">
    <meta property="og:image" content="http://iconcert.kr/vote/votebytxt/open/servey_240816_0/image/survey1.png"/>
    <meta property="og:url" content="http://iconcert.kr/vote/votebytxt/open/servey_240816_0"/>
    <meta property="og:description" content="s_0"/>
    <meta property="og:title" content="선택"/>
    <meta property="og:image:width" content="1024"/>
		<meta property="og:image:height" content="1024"/>
    <title>선택</title>

    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<style>
    input[type='radio'] { 
        transform: scale(1.1); 
      }

		.poll_option{width:1.3em; height:1.3em;}

    .gutter-2.row {
				margin-right: 0px;
				margin-left: 0px;
			}
      .gutter-2 > [class^="col-"], .gutter-2 > [class^=" col-"] {
				padding-right: 0px;
				padding-left: 0px;
			}	
</style>
</head>
<script>
      // document.cookie = "user4=kang4; expires=Sat, 10 May 2022 12:00:00 UTC; path=/";//expire day
      document.cookie = "user4=kang4; expires=Fri, 13 Sep 2024 12:00:00 UTC; path=/";//expire day
</script>
<body style="margin:10px 10px 0px 20px;">

<?php
$t=time();
$datefile=date("mdH",$t);

$filename = "linksave.txt";
$file = file($filename);
$linkarray = explode("|||", $file[0]);
$link0 = $linkarray[0];
$link1 = $linkarray[1];
$link2 = $linkarray[2];
$link3 = $linkarray[3];
$link4 = $linkarray[4];
$link5 = $linkarray[5];
$link6 = $linkarray[6];
$link7 = $linkarray[7];
$link8 = $linkarray[8];
$link9 = $linkarray[9];
$link10 = $linkarray[10];
$link11= $linkarray[11];
$link12= $linkarray[12];
$link13= $linkarray[13];


$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$array = explode("|||", $content[0]);
$option0 = $array[0];
$option1 = $array[1];
$option2 = $array[2];
$option3 = $array[3];
$option4 = $array[4];
$family = $array[5];
$nexttime = $array[6];
if ($vote == 0) {
  $option0 = $array[0] + 1;
}
if ($vote == 1) {
  $option1 = $array[1] + 1;
}
if ($vote == 2) {
  $option2 = $array[2] + 1;
  }
if ($vote == 3) {
  $option3 = $array[3] + 1;
  }
// else{ header("Location:./index.php"); }  
$total=$option0+$option1+$option2+$option3;
$total_print=$total;
if($total==0){$total=1;  $total_print=0;}
date_default_timezone_set("Asia/tokyo");
$t=time();
$date=date("Ymd",$t);
if ($vote==0){$family=$family." ".$_POST['family']." ";}
else{$nexttime=$nexttime." ".$_POST['family']." ";}
//insert votes to txt file
$insertvote = $option0."|||".$option1 ."|||".$option2."|||".$option3."|||".$date."|||".$family."|||".$nexttime;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);

$subfix= substr(date("mdHi",$t),0,-1);
$destinationfile='poll_result_'.$subfix.'.txt';
copy($filename,$destinationfile);

// $sourcefile='poll_result.txt';
// $destinationfile='poll_result_'.$datefile.'.txt';
// $myfile = fopen($destinationfile, "w");
// copy($sourcefile,$destinationfile);








// header("Location:./index.php");
?>
<br>
<div id="total" style="float:right; margin:10px 20px 0px 0px;"><?php echo $total_print;?></div><br><br><br><!--제목--->	

  <div class="progress" style="height:22px; background:white;margin:0px 5px 0px 0px;">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php $option00=round(($option0*100)/$total,0); echo $option00; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option00; ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link0; echo""; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option0." ".$option00;?>% <?php //echo($option0); ?><!--표--></h5>
  </div>
  <div class="progress" style="height:22px; background:white;margin:15px 5px 0px 0px;">
    <div class="progress-bar progress-bar-important" role="progressbar" aria-valuenow="<?php $option11=round(($option1*100)/$total,0); echo $option11; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option11;?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link2; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option1." ".$option11;  ?>% <?php //echo($option1); ?><!--표--></h5>
  </div>
  <div class="progress" style="height:22px; background:white;margin:15px 5px 0px 0px;">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php $option22=round(($option2*100)/$total,0); echo $option22; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option22;  ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link4; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option2." ".$option22;  ?>% <?php //echo($option2); ?><!--표--></h5>
  </div>
  <div class="progress" style=" height:22px;background:white;margin:15px 5px 0px 0px;">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php $option33=round(($option3*100)/$total,0); echo $option33; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option33;  ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link6; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 1px;color:grey;float:right;">&nbsp<?php echo $option3." ".$option33; ?>% <?php //echo($option3); ?><!--표--></h5>
  </div>


<br><br>
 <a  href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
 <!-- <span id="total" style="float:right; margin:10px 20px 0px 0px;"><?php //echo $total_print;?></span><br> -->
 <div style="float:right; font-size:10px; margin-right:10px;"><?php echo "@".$option4; ?></div><br>
 <!-- <div style="float:right; font-size:10px; margin-right:10px;"><?php //echo " copyright ".$link13; ?></div> -->
<script type="text/javascript">	
	var d = new Date();
	document.getElementById("after2").innerHTML = "&nbsp" + d.toLocaleTimeString() + "&nbsp득표 현황";
  document.getElementById("total").innerHTML = "<?php echo $total;?>";
  // location.href="index.php";
</script>


<script>
    setTimeout(f1, 300);  // Graph나오는 시간 이것으로 시작시간 조정 timeout 9000에서 500으로 함  
      // Fnction to run at irregular intervals
      function f1() {
        location.href="index.php";
      }
</script>







</body>
<script src="./jquery-3.6.0.js"></script>
<script src="js/bootstrap.js"></script>
<script src="css/w3.css"></script>
<script type="text/javascript" ></script>