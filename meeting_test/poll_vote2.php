<?php
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

// if ($vote == 0) {
//   $option0 = $array[0] + 1;
// }
// if ($vote == 1) {
//   $option1 = $array[1] + 1;
// }
// if ($vote == 2) {
//   $option2 = $array[2] + 1;
//   }
// if ($vote == 3) {
//   $option3 = $array[3] + 1;
//   }
$total=$option0+$option1+$option2+$option3;
if($total==0){$total=1;}
//insert votes to txt file
// $insertvote = $option0."||".$option1 ."||".$option2."||".$option3;
// $fp = fopen($filename,"w");
// fputs($fp,$insertvote);
// fclose($fp);
?>
<br>
  <div class="progress" style="height:22px; background:white;margin:0px 5px 0px 0px;">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php $option00=round(($option0*100)/$total,0); echo $option00; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option00; ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link0; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option00;?>% <?php //echo($option0); ?><!--표--></h5>
  </div>
  <div class="progress" style="height:22px; background:white;margin:15px 5px 0px 0px;">
    <div class="progress-bar progress-bar-important" role="progressbar" aria-valuenow="<?php $option11=round(($option1*100)/$total,0); echo $option11; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option11;?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link2; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option11;  ?>% <?php //echo($option1); ?><!--표--></h5>
  </div>
  <div class="progress" style="height:22px; background:white;margin:15px 5px 0px 0px;">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php $option22=round(($option2*100)/$total,0); echo $option22; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option22;  ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link4; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option22;  ?>% <?php //echo($option2); ?><!--표--></h5>
  </div>
  <div class="progress" style=" height:22px;background:white;margin:15px 5px 0px 0px;">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php $option33=round(($option3*100)/$total,0); echo $option33; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option33;  ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link6; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 1px;color:grey;float:right;">&nbsp<?php echo $option33; ?>% <?php //echo($option3); ?><!--표--></h5>
  </div>
  <!--danger   important      success  warning -->
  <br><br>
  <a  href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
<script type="text/javascript">	
	var d = new Date();
	document.getElementById("after2").innerHTML = "&nbsp" + d.toLocaleTimeString() + "&nbsp득표 현황";
  document.getElementById("total").innerHTML = "";
</script>

<script src="./jquery-3.6.0.js"></script>
<script src="js/bootstrap.js"></script>
<script src="css/w3.css"></script>
<script type="text/javascript" ></script>