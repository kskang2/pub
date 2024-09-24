<!-- <link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
<meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="../statics/css/bootstrap.css">	

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Stylish&display=swap" rel="stylesheet">
    <link rel="icon" href="./favicon.ico" type="image/x-con">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">	
    <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 13px;
  margin:2px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.accordions {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 7px;
  margin:2px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover ,.accordions:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 10px;
  display: none;
  background-color: white;
  overflow: hidden;
}

#otherscript[type="submit"]/*Other Script button */
      {
  float:right;
  width:80px;
  margin-top:10px;
  height:30px;
  font-size:12px;
  background:#F7ECD2; /*#FAE6E3;  red */
  border:2px #DBDBDB;
  color:Grey;
  box-shadow:0px 2px 0px 0px #61380B;
border-radius:3px;
  font-family:'Stylish',sans-serif; 
  /* color:#337ab7; */

}   
#otherscript:hover {
  background-color: #ccc; 
}  
.gutter-2.row {
			margin-right: 0px;
			margin-left: 0px;
		}
.gutter-2 > [class^="col-"], .gutter-2 > [class^=" col-"] {
			padding-right: 0px;
			padding-left: 0px;
		}	
.brmedium {
      display: block;
      margin-bottom: -10px;
    }      	 
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.news-main{
  font-size:18px;
}

#login_form
{
 margin-top:100px;
 background-color:white;  
 width:265px;
 float:center;
 padding:20px;
 box-sizing:border-box;
 box-shadow:0px 0px 10px 0px #3B240B;
 margin-left:30px;
}

#login_form input[type="password"]
{
 width:110px;
 margin-top:10px;
 height:35px;
 padding-left:10px;
 font-size:16px;
}
#login_form input[type="submit"]
{
 width:110px;
 margin-top:10px;
 height:34px;
 font-size:16px;
 background-color:#8A4B08 ;
 border:none;
 box-shadow:0px 4px 0px 0px #61380B;
 color:white;
 border-radius:3px;
}
#login_form p
{
 margin:0px;
 margin-top:10px;
 color:#8A4B08;   
 font-size:17px;
 font-weight:bold;
}

.otherscriptexit[type="submit"]/*Other Script button */
      {
  float:left;
  width:80px;
  /* margin-top:10px; */
  height:30px;
  font-size:12px;
  background:#F7ECD2; 
  border:2px #DBDBDB;
  color:Grey;
  box-shadow:0px 2px 0px 0px #61380B;
  border-radius:3px;
  font-family:'Stylish',sans-serif; 
  /* color:#337ab7; */

}  

</style>

<?php
		// // Read linkattach.txt

$hidden='';

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
 $pass=$_POST['pass'];
 if($pass=="1111")
 {
  // $_SESSION['password']=$pass;
$hidden='hidden';

?>

<?php

  // include ('./header.php');####################
  // Read linkattach.txt
  $filename = "linksave.txt";
  $file = file($filename);

  //put content in array
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
  $link11 = $linkarray[11];
  $link12 = $linkarray[12]; 
  $link13 = $linkarray[13];

  $link14= $linkarray[14];
  $link15= $linkarray[15];
  // global $link0,$link1,$link2,$link3,$link4,$link5,$link6;
  ?>

<main >


    <!-- <div class="col-xs-12 col-sm-12 col-md-12"> -->
      <br>
   <span style="margin:10px 0px 10px 30px; color:grey;"> Editor for survey</span> 
   <a  href="reset_poll_result.php"  style="float:right; margin-right:7%;" onclick="return confirm('Are You sure?')" >Reset</a> 
      <!-- ADD link FORM -->
      <div class="card card-body ">
        <form action="linksave.php" method="POST" enctype="multipart/form-data">
  <div class="row">
          <div class="form-group">

          
              <div class="col-xs-9 col-sm-9 col-md-9">
                <span  class="circle-singleline">&nbsp제목&nbsp</span><span style="font-size:15px;"></span><br>
                <input type="text"  name="link8" style=" height:26px; width:95%; font-size: 15px; background:#f2f2f2; margin-left:17px;"
                value="<?php echo $link8; ?>" ><br><br>
              </div>

              <div class="col-xs-3 col-sm-3 col-md-3">
              <span  class="circle-singleline"    style=" float:right; margin-right:17px;" >&nbsp m&nbsp</span><span style="font-size:15px;"><br>
              <input type="text" name="link11" style=" float:right; height:26px; width:35px; font-size: 15px; background: #f2f2f2; margin-right:17px;"
              value="<?php echo $link11; ?>" >
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
              <span  class="circle-singleline">&nbspplaceholder&nbsp</span><span style="font-size:15px;"><br>
              <input type="text" name="link14" style=" float:left; height:26px; width:93%; font-size: 15px; background: #f2f2f2; margin-left:17px; margin-right:17px;"
              value="<?php echo $link14; ?>" ><br><br>
              </div>

             <div class="col-xs-6 col-sm-6 col-md-6">
              <span  class="circle-singleline">&nbsp내용&nbsp</span><span style="font-size:15px;"><br>
              <input type="text" id='files' name="link0" style="font-weight:bold;  height:26px; width:95%; font-size: 15px; background:#ffffb3; margin-left:17px; "
              value="<?php echo $link0; ?>" ><br>
             </div>
             <div class="col-xs-6 col-sm-6 col-md-6">
              <span  class="circle-singlelinex">&nbsp&nbsp</span><span style="font-size:15px;"><br>
              <input type="text" id='files' name="link1" style=" height:26px; width:95%; font-size: 15px; background: #f2f2f2; margin-right:17px;"
              value="<?php echo $link1; ?>" ><br><br>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <span  class="circle-singleline">&nbsp2&nbsp</span><span style="font-size:15px;"><?php echo '&nbsp'.$link2;?></span><br> -->
                <input type="text" id='files' name="link2" style="font-weight:bold;  height:26px; width:95%; font-size: 15px; background:#ffffb3; margin-left:17px;"
                value="<?php echo $link2; ?>" ><br>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <span  class="circle-singlelinex">&nbsp&nbsp</span><span style="font-size:15px;"><?php echo '&nbsp &nbsp'.$link3;?></span><br> -->
                <input type="text" id='files' name="link3" style=" height:26px; width:95%; font-size: 15px; background:#f2f2f2; margin-right:17px;"
                value="<?php echo $link3; ?>" ><br><br>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <span  class="circle-singleline">&nbsp3&nbsp</span><span style="font-size:15px;"><?php echo '&nbsp'.$link4;?></span><br> -->
                <input type="text" id='files' name="link4" style="font-weight:bold;  height:26px; width:95%; font-size: 15px; background:#ffffb3; margin-left:17px;"
                value="<?php echo $link4; ?>" ><br>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <span  class="circle-singlelinex">&nbsp&nbsp</span><span style="font-size:15px;"><?php echo '&nbsp &nbsp'.$link5;?></span><br> -->
                <input type="text" id='files' name="link5" style=" height:26px; width:95%; font-size: 15px; background:#f2f2f2; margin-right:17px;"
                value="<?php echo $link5; ?>" ><br><br>
              </div>

              <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <span  class="circle-singleline">&nbsp4&nbsp</span><span style="font-size:15px;"><?php echo '&nbsp'.$link6;?></span><br> -->
                <input type="text" id='files' name="link6" style="font-weight:bold;  height:26px; width:95%; font-size: 15px; background:#ffffb3; margin-left:17px;"
                value="<?php echo $link6; ?>" ><br>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <!-- <span  class="circle-singlelinex">&nbsp&nbsp</span><span style="font-size:15px;"><?php echo '&nbsp &nbsp'.$link7;?></span><br> -->
                <input type="text" id='files' name="link7" style=" height:26px; width:95%; font-size: 15px; background:#f2f2f2; margin-right:17px;"
                value="<?php echo $link7; ?>" ><br><br>
              </div>

              <div class="col-xs-8 col-sm-8 col-md-8">
                <span  class="circle-singleline">&nbspimg&nbsp</span><?php echo '&nbsp'.$link12;?><br>
                <input type="file" id='files' name="file_name" style=" height:26px; width:90%; font-size: 15px; background:#ffffb3; margin-left:17px;">
                <span style="margin-left:18px;">⬆️Image File (선택)</span><br><br>

              </div>
              <div class="col-xs-4 col-sm-4 col-md-4">
                <span  class="circle-singlelinex">&nbsp&nbsp</span><span style="font-size:15px;"><?php echo '&nbsp &nbsp'.$link10;?></span><br>
                <input type="text" id='files' name="link10" style=" height:26px; width:95%; font-size: 15px; background:#f2f2f2; margin-right:17px;"
                value="<?php echo $link10; ?>" ><br><br>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <span  class="circle-singlelinex">&nbspurl for image&nbsp</span><span style="font-size:13px;"><?php echo "url &nbsp# &nbsp''".'&nbsp &nbsp'.$link9;?></span><br>
                <input type="text" id='files' name="link9" style=" height:26px; width:95%; font-size: 15px; background:#f2f2f2; margin-left:17px;"
                value="<?php echo $link9; ?>" ><br>
             
                <br>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <span  class="circle-singlelinex">&nbspnote&nbsp</span><span style="font-size:13px;"><?php echo '&nbsp &nbsp'.$link15;?></span><br>
                <input type="text" id='files' name="link15" style=" height:26px; width:95%; font-size: 15px; background:#f2f2f2; margin-left:17px;"
                value="<?php echo $link15; ?>" ><br>
                <br>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="submit" name="linksave" style="background:DodgerBlue; color:white; height:35px; width:80px; font-size:20px; 
                border:none; border-radius:5px; margin-left:18px;" value="save"> <a href="./index.php" style="float:right; margin:9px 3% 0px 0px;">Home</a>

                <br><br>
                
                <!-- <a  href="reset_poll_result.php"  onclick="return confirm('Are You sure?')" ><button type="button" style=" background:DodgerBlue; color:white; height:40px; width:100px; 
                font-size:20px; border:none; border-radius:5px;" > Reset </button> data를 전부 1로 초기화</a> 
                <br> -->
              </div>
          </div>
        <!-- /form group -->


        </div>  <!--row-->  
        </form>
      </div>    
    <!-- </div> -->


<br>&nbsp 4개
<br>&nbsp &nbsp 따음표는 single ' 사용할 것(특히 url)
<br>&nbsp &nbsp link for image에 http:// address을 넣으면 link에 연결 됨<br>&nbsp &nbsp '#'으로 하면 link가 delete됨<br>&nbsp &nbsp 空欄으로 하면 image field 전체가 delete됨<br>
&nbsp &nbsp m&nbsp multi_vote '0' single_vote '1'<br>
&nbsp &nbsp 제목8 링크9 mode11 image12 날짜13 placeholder14 under_imagetxt10 note15


<?php 

}
else
{
//  $error="Incorrect Pssword";
   header('Location: ./index.php');
}
}

if(isset($_POST['page_logout']))
{
header('Location: ./index.php');
}

   error_reporting(0);///  error suppressing
   if($_SESSION['password']== "1111")
   {

}
else
{
 ?>
  <form method="post" action="" id="login_form"  <?php echo $hidden;?> >
  
  <input type="password" name="pass" placeholder="비밀번호" >
  <input type="submit" name="submit_pass" value="Log in"><a href="./index.php" style="float:right; margin:25px 3% 0px 0px;">Home</a>
  <p><small>"管理者의 秘密番號 入力"<small>    </p> 
  
 </form>

 <?php	
}
?>
    <!-- <p style="margin-left:10px;" ><br><br>linksave -> linksave.txt, Reset -> poll_result.txt</p> -->
    <script>
      $("textarea").each(function () {
      this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
    }).on("input", function () {
      this.style.height = "auto";
      this.style.height = (this.scrollHeight) + "px";
    });
    </script>

 </main>  
<?php 
//include('includes/footer.php'); 
?>
  