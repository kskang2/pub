<?php    

		// Read linkattach.txt
		$filename = "linksave.txt";
		$file = file($filename);
		//put content in array
		$linkarray = explode("|||", $file[0]);
		// global $link0,$link1,$link2,$link3,$link4,$link5,$link6;
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
    $link14= $linkarray[14];
    $link15= $linkarray[15];
       if($link9==''){$link9_col=12;}else{$link9_col=8;}
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
    $optiontotal = $option0 + $option1 + $option2 +  $option3; 
                                    $total=$option0+$option1+$option2+$option3;
    $optiontotal_print=$optiontotal;
    if($optiontotal==0){$optiontotal=0.1; $optiontotal_print=0;}

    if($link11 !=1){$link11x=0;}else{$link11x=1;}//By link_attach.php mode "1"


copy("poll_result.txt","poll_result2.txt");
    

    if(!isset($_COOKIE["user4"])) {
      global $X; 

      $x=0; $displaySubmit='';
      } else {
      $x= $link11x;   //For Cookie set 1!
      // $x=1;   //For Cookie set 1!
      if ($x==1){$displaySubmit='hidden';}
    
      }
    
      global $option0 ,$option1 ,$option2 , $option3, $link15, $displaySubmit; 

	?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <meta name="description" content="<?php echo $family,'2';?>">
    <meta name="keywords" content="선택">
	        	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css">	
    <meta name="description" content="선택">
    <meta property="og:image" content="http://iconcert.kr/vote_txt/open/meeting_test/image/thanksgiving.jpg"/>
    <meta property="og:url" content="http://iconcert.kr/vote_txt/open/meeting_test"/>
    <meta property="og:description" content="<?php echo $family;?>"/>
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
    input:focus{
      border:solid 2px #0080ff;
      outline:none;
      border-radius:5px;
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



<body style="margin:10px 10px 0px 20px;">

<div id="start">
<strong style="margin:10px 0px 0px 0px;letter-spacing:0px;line-height:150%;font-size:130%;">
<?php echo $link8; ?></strong>  <span id="total" style="float:right; margin:10px 20px 0px 0px;"><?php echo $optiontotal_print;?></span></div><!--제목--->		
</div>  
<!-- <div id="after2" style="margin:0px 0px 0px 0px;"></div>
<div id="status"></div>  -->

<?php if($optiontotal_print!=0){$displaybar='hidden';}?>

<style>
label:hover {
  /* background-color: #ffffb3; */
  /* transition: background-color 0.5s; */
  background-color:#0080ff;
  color:white;
  /* transition: 0.9s; */
}

/* Radio Button 
label {
  font-size: 18px;
  line-height: 2rem;
  padding: 0.2em 0.4em;
}

[type="radio"], span {
  vertical-align: middle;
}

[type="radio"] {
  appearance: none;
  border: max(2px, 0.1em) solid gray;
  border-radius: 50%;
  width: 1.25em;
  height: 1.25em;
  transition: border 0.5s ease-in-out;
}

[type="radio"]:checked {
  border: 0.4em solid tomato;
}

[type="radio"]:focus-visible {
  outline-offset: max(2px, 0.1em);
  outline: max(2px, 0.1em) dotted tomato;
}

[type="radio"]:hover {
  box-shadow: 0 0 0 max(4px, 0.2em) lightgray;
  cursor: pointer;
}

[type="radio"]:hover + span {
  cursor: pointer;
}

[type="radio"]:disabled {
  background-color: lightgray;
  box-shadow: none;
  opacity: 0.7;
  cursor: not-allowed;
}

[type="radio"]:disabled + span {
  opacity: 0.7;
  cursor: not-allowed;
}
*/
/* Global CSS 
fieldset {
  display: flex;
  justify-content: center;
  border: none;
  margin: 0;
  padding: 40px 20px;
}

*,
*::before,
*::after {
  box-sizing: border-box;
} */
/*  */

</style>
<div class="gutter-2 row " >
<div id="poll" class="col-xs-<?php echo $link9_col;?>">

<p style="line-height:50%;"><br></p>


<form method="POST" action="poll_vote.php">
<!-- <input type="text" name="family" placeholder="가족이름, 인원수  예: 강경석2인" style="width:90%"  required><br><br> -->
<input type="text" name="family" placeholder=<?php echo "'".$link14."'";?> style="width:90%; height:32px; font-size:16px;"  required <?php if($link14==''){echo 'hidden';}?>><br><br>

<label><input type="radio" name="vote" value="0" class="poll_option" reqired>
<strong style="letter-spacing:3px;line-height:100%;font-size:150%;"><?php echo $link0; ?></strong></label><small ><span style='margin:0px 0px 0px 25px;font-weight:normal;'><?php echo $link1; ?></span></small>
<span style="float:right; margin:7px 10px 0px 0px;"><?php //echo $option0." "; ?> </span><br>
<!-- <span style="float:right; margin:7px 10px 0px 0px;"><?php echo $option0." "; echo(round(($option0*100)/$optiontotal,0)).'%'; ?> </span><br> -->

<label><input type="radio" name="vote" value="1" class="poll_option" required> 
<strong style="letter-spacing:3px;line-height:100%;font-size:150%;"><?php echo $link2; ?></strong></label><small><span style='margin:0px 0px 0px 25px;font-weight:normal;'><?php echo $link3; ?></span></small>
<span style="float:right; margin:7px 10px 0px 0px;"><?php //echo $option1." ";  ?></span><br>
<!-- <span style="float:right; margin:7px 10px 0px 0px;"><?php echo $option1." "; echo(round(($option1*100)/$optiontotal,0)).'%'; ?></span><br> -->

<label> <input type="radio" name="vote" value="2" class="poll_option" required <?php if($link4==''){echo 'hidden';} ?>>
<strong style="letter-spacing:3px;line-height:100%;font-size:150%;" <?php if($link4==''){echo 'hidden';} ?> ><?php echo $link4; ?></strong></label><small><span style='margin:0px 0px 0px 25px;font-weight:normal;'><?php echo $link5; ?></span></small>
<span style="float:right; margin:7px 10px 0px 0px; "  <?php if($link4==''){echo 'hidden';} ?>><?php //echo $option2." ";  ?></span><br>

<!-- <span style="float:right; margin:7px 10px 0px 0px; "><?php echo $option2." "; echo(round(($option2*100)/$optiontotal,0)).'%'; ?></span><br> -->
<label><input type="radio" name="vote" value="3" class="poll_option" required  <?php if($link6==''){echo 'hidden';} ?> >
<strong style="letter-spacing:3px;line-height:100%;font-size:150%;" <?php if($link6==''){echo 'hidden';} ?>><?php echo $link6; ?></strong></label><small><span style='margin:0px 0px 0px 25px;font-weight:normal;'><?php echo $link7; ?></span></small>
<span style="float:right; margin:7px 10px 0px 0px;" <?php if($link6==''){echo 'hidden';} ?>><?php //echo $option3." "; ?></span><br>
<!-- <span style="float:right; margin:7px 10px 0px 0px;"><?php echo $option3." "; echo(round(($option3*100)/$optiontotal,0)).'%'; ?></span><br><br>  -->


<div>
<?php echo $link15; ?>
<!-- <br>2時부터 모은祖母宅에서 茶,과일 한 後<br><b style="color:blue;">4時30分에 식당</b>으로 出發 -->
</div>
<br>

<button type="submit" name="submit" value="submit" style=" background-color:#0080ff; color:white; border-radius:5px; border-color:#0080ff; font-size:20px;" <?php echo $displaySubmit;?>>&nbsp전 &nbsp송&nbsp</button>
</form>
</div>

<div class="col-xs-<?php echo 12-$link9_col;?>"  <?php if($link9_col==12){echo 'hidden';}?>>
					<a href= "<?php echo $link9;?>"><!--오른쪽 사진URL--->
            		<img style="float:right;margin:20px 10px 0px 0px; width:98%; max-height:200px;"
					 src="image/<?php echo $link12 ?>" alt="사진이 없음,,," ></a><!--오른쪽 사진--->
					<!-- <div sytle="float:left; nargin:left:0px;"><br><br>성남시 분당구 산운로 135번길 714동201호</div> -->
					 <!-- URL로 img 불러오기 https://i.postimg.cc/5yQ4GxTz/samsunga12.jpg>   width:110px; height:130px;  -->	
           <br>&nbsp<br>
          <!-- <a href=" https://naver.me/xevjf9ow"><span style="background:yellow;">식당 서현궁 약도</span> </a> -->
          <span style="background:yellow;" <?php if($link10==''){echo 'hidden';}?>   ><?php echo $link10; ?></span> 
</div>

</div>
<a href="./admin"><small><span id="total" style="float:right; margin:20px 10px 0px 0px; font-size:12px;"   <?php echo $displaybar;?> >setting</span></small></a><br><br>
<div style="float:right; font-size:10px; margin-right:10px;"  <?php echo $displaybar;?>  ><?php echo "last input ".$option4; ?></div>
<!-- <div style="float:right; font-size:10px; margin-right:10px;"><?php //echo " copyright ".$link13; ?></div> -->
<div id="status"></div> 
<div id="after2" style="margin:0px 0px 0px 0px;"></div>

<h6 id="after" style="color:Grey;"></h6>
<!-- <div style="float:right; font-size:10px; margin-right:10px;"  <?php //echo $displaybar;?>  ><?php //echo "last input ".$option4; ?></div><br> -->


<div class="gutter-2 row " style="margin-top:0px;">
<div class="col-xs-12" >
<div style="float:left; font-size:14px; margin-left:3px; font-weight:normal;"   ><?php echo $family; ?></div><br>
<div style="float:left; font-size:14px; margin-left:3px; font-weight:normal;"   ><i><?php echo $nexttime; ?></i></div><br>
</div>
</div>

  <script>
      var x = <?php echo $x ?>;
   if(x==1){
      document.getElementById("status").innerHTML = "투표하셨습니다";
      // var d = new Date();
      // document.getElementById("after2").innerHTML = d.toLocaleTimeString() + "&nbsp현황";
   }
  </script>
  <script>
    function rtn(int){
      if(confirm("선택을 확인")){
        getVote(int);
      } else {window.location = "./index.php";}
    }
  </script>

  <script type="text/javascript" >
  var x = <?php echo $x ?>;

  function getVote(int) { 
    
      if(x==0){var xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("poll").innerHTML=this.responseText;

        
      var d = new Date();
      document.getElementById("after2").innerHTML = "<br>"+d.toLocaleTimeString() + "&nbsp 현황";
      document.getElementById("status").innerHTML = "";

        }
      }
    xmlhttp.open("GET","poll_vote.php?vote="+int,true);
    xmlhttp.send();
    // document.cookie = "user4=kang4; expires=Sat, 10 May 2022 12:00:00 UTC; path=/";//expire day
    document.cookie = "user4=kang4; expires=Fri, 13 Sep 2024 12:00:00 UTC; path=/";//expire day
//*		fetch_poll_data();   */
       
      ////////f1과 fetch_poll_data의 반복 /////////


    }   
    else { 
      
      var xmlhttp=new XMLHttpRequest();
      xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        
        document.getElementById("poll").innerHTML=this.responseText;
        var d = new Date();
        // document.getElementById("start").innerHTML = "";
        document.getElementById("status").innerHTML = "前에 투표하셨습니다";
	      document.getElementById("after2").innerHTML = d.toLocaleTimeString() + "&nbsp현황";
       
        }
      }
      xmlhttp.open("GET","poll_vote2.php?vote="+int,true);
      xmlhttp.send();

//*		fetch_poll_data();   */
        
        
      ////////f1과 fetch_poll_data의 반복 /////////

          }
  
  
  }
  </script>
   <script>////// auto close confirmed
        document.addEventListener("DOMContentLoaded", function(){
        // Handler when the DOM is fully loaded
        setTimeout(function(){self.close();},3000000);
        //interval self.close();
        });
    </script>
  
  <!--<script type="text/javascript">
      var closeButton = document.getElementById('closeButton');
      closeButton.style.fontSize="10pt";
      closeButton.addEventListener('click',function(){
        self.close();
      })
  </script>
    -->

    <script src="./css/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="css/w3.css"></script>
    <script type="text/javascript" ></script>
</body>
</html>
<!-------------------------------------------------------------------------------->
<br>

<div class="gutter-2 row " style="margin-top:0px;">
<div class="col-xs-12" >
  <div class="progress" style="height:22px; background:white;margin:0px 5px 0px 0px;">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php $option00=round(($option0*100)/$total,0); echo $option00; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option00; ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link0; echo""; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option0." ";?><?php //echo($option0); ?><!--표--></h5>
  </div>
  <div class="progress" style="height:22px; background:white;margin:15px 5px 0px 0px;"  <?php if($option1==0){echo 'hidden';} ?>>
    <div class="progress-bar progress-bar-important" role="progressbar" aria-valuenow="<?php $option11=round(($option1*100)/$total,0); echo $option11; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option11;?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link2; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option1." ";  ?> <?php //echo($option1); ?><!--표--></h5>
  </div>
  <div class="progress" style="height:22px; background:white;margin:15px 5px 0px 0px;"    <?php if($link6==''){echo 'hidden';} ?> >
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php $option22=round(($option2*100)/$total,0); echo $option22; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option22;  ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link4; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 0px;color:grey;float:right;">&nbsp<?php echo $option2." ";  ?> <?php //echo($option2); ?><!--표--></h5>
  </div>
  <div class="progress" style=" height:22px;background:white;margin:15px 5px 0px 0px;"     <?php if($link6==''){echo 'hidden';} ?> >
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php $option33=round(($option3*100)/$total,0); echo $option33; ?>" aria-valuemin="0" 
    aria-valuemax="100" style="width:<?php echo $option33;  ?>%">
    <h5 style="margin:4px 0px 0px 0px;"><b><?php echo $link6; ?></b></h5>
    </div><h5 style="margin:5px 10px 0px 1px;color:grey;float:right;">&nbsp<?php echo $option3." "; ?> <?php //echo($option3); ?><!--표--></h5>
  </div>

      </div>
      </div>

<!-- //poll_vote.php에  full graph -->


  <div id="after3"></div>
  

  <a href="./admin"><small><span id="total" style="float:right; margin:20px 10px 0px 0px; font-size:12px;">settting</span></small></a><br><br>
  <!-- <div style="float:right; font-size:10px; margin-right:10px;"><?php echo "last input ".$option4; ?></div><br>
  <div style="float:right; font-size:10px; margin-right:10px;"><?php echo " copyright ".$link13; ?></div><br> -->
  <div style="float:right; font-size:10px; margin-right:10px;"><?php echo "@".$option4; ?></div><br>


  <script type="text/javascript">	
	var d = new Date();
	document.getElementById("after3").innerHTML = "<br>&nbsp" + d.toLocaleTimeString() + "&nbsp현황";
  // document.getElementById("total").innerHTML = "<?php echo $total;?>";

  // location.href="index.php";
  // window.location = "index.php";
</script>
