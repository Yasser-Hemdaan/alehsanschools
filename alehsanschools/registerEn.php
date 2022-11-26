<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration in Al-Ihsan Schools</title>
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/styleEn.css" />
  </head>
  <body>
    <!-- Start landing -->
    <div class="landing">
        <a href="index.html" class="back">
          <i class="fa-solid fa-angle-left"></i>
        </a>
      <div class="header">
        <div class="image">
          <img src="assets/images/logo.png" alt="" />
        </div>
      </div>
    </div>
    <!-- End landing -->


<?php
if(isset($_POST['st1stName'])) {
     
  $email_to = "alahsan.1415@gmail.com";
	$email_subject = "تقديم طلب";
	
	// - Do not edit below this line :)
    if(!isset($_POST['fatherId']) ||
        !isset($_POST['father1stName']) ||
        !isset($_POST['father2ndName']) ||
		!isset($_POST['fatherSurName']) ||
        !isset($_POST['fatherTel']) ||
		//!isset($_POST['fatherEmail']) ||
		!isset($_POST['stId']) ||
        !isset($_POST['st1stName']) ||
		!isset($_POST['st2ndName']) ||
		    !isset($_POST['stDate']) ||
    !isset($_POST['fatherSurName']) ||
		    !isset($_POST['gender']) ||
    !isset($_POST['nationality']) ||
		    !isset($_POST['level']) 
		
		)
		{
        die('لابد من ادخال كافة البيانات المطلوبة <br/>');      
    }
     
	       

    $fatherId = @$_POST['fatherId']; 
    $father1stName = @$_POST['father1stName'];
    $father2ndName = @$_POST['father2ndName'];
    $fatherSurName = @$_POST['fatherSurName'];
	$fatherTel = @$_POST['fatherTel'];
	$fatherEmail = @$_POST['fatherEmail'];
	
	$stId = @$_POST['stId'];
	$st1stName = @$_POST['st1stName'];
	$st2ndName = @$_POST['st2ndName'];
	$stSurName = @$_POST['stSurName'];
	$stDate = @$_POST['stDate'];
	$gender = @$_POST['gender'];
	$nationality = @$_POST['nationality'];
	$level = @$_POST['level'];
	$message = "";
	
    //$message = @$_POST['message'];
	
	
	/* if(preg_match("/\b(?:(?:https?|ftp|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$message)){
	// prevent form from saving code goes here
	 echo "<script>alert('Please remove URLs');</script>"; 
	 echo "<script>window.history.back();</script>"; 
	}
	else{ */

		$phone = @$_POST['phone'];
		$type_see = @$_POST['typesee'];
		$captch_val = @$_POST['captch_val'];
		
		/* if($type_see != $captch_val){
			echo ('<p style="margin-top:40px;">'.$bad_captcha.'</p>');
		}else{ */
	  
			$email_message = "Form details below.\n\n";
			 
			function clean_string($string) {
			  $bad = array("content-type","bcc:","to:","cc:","href");
			  return str_replace($bad,"",$string);
			}
			 
			 
			 	 /*
			$fatherId
    $father2ndName father1stName
    $fatherSurName
			fatherTel  fatherEmail

stId  st1stName  st2ndName  stSurName  
gender   nationality  level
 */
			$email_message .= "هوية ولي الأمر (الأب): ".clean_string($fatherId)."\n";
			$email_message .= "الاسم الاول: ".clean_string($father1stName)."\n";
		    $email_message .= "الاسم الثاني: ".clean_string($father2ndName)."\n";
			$email_message .= "اسم العائلة: ".clean_string($fatherSurName)."\n";
			$email_message .= "جوال ولي الامر: ".clean_string($fatherTel)."\n";
			$email_message .= "البريد الالكتروني: ".clean_string($fatherEmail)."\n";
			
			$email_message .= "هوية الطالب: ".clean_string($stId)."\n";
			$email_message .= "اسم الطالب: ".clean_string($st1stName)."\n";
			$email_message .= "اسم الأب: ".clean_string($st2ndName)."\n";
			$email_message .= "اسم العائلة: ".clean_string($stSurName)."\n";
			$email_message .= "تاريخ الميلاد: ".clean_string($stDate)."\n";
			$email_message .= "الجنس: ".clean_string($gender)."\n";
			$email_message .= "الجنسية: ".clean_string($nationality)."\n";
			$email_message .= "الصف: ".clean_string($level)."\n";
			
			//$email_message .= "Message: ".clean_string($message);
			 
			$headers = 'From: '.$fatherEmail."\r\n".
			'Reply-To: '.$email."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
			
			//mail($email_to, $email_subject, $email_message, $headers); 
			
			if(mail($email_to, $email_subject, $email_message, $headers)){
				//echo "<div align='center'><h2>تم تقديم الطلب شكرا لك</h2></div>";
				echo"<script language='JavaScript'>window.location.href = 'successAr.html'</script>";
			}
			
		//}//if($type_see != $captch_val )
	//}//if(preg_match)
		
}
?>

    <!-- Start content -->

    <div class="content">
      <form action="" method="post">
        <div class="form">
          <div class="parentData">
            <h2>Parent information (father)</h2>
            <div class="inputData">
              <div class="inputRow">
                <input type="text" name="fatherId" id="fatherId" placeholder="father id" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="father1stName" id="father1stName" placeholder="first name" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="father2ndName" id="father2ndName" placeholder="second name" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="fatherSurName" id="fatherSurName" placeholder="last name" required/>
              </div>
              <div class="inputRow">
                <input type="tel" name="fatherTel" id="fatherTel" placeholder="phone number" required/>
              </div>
              <div class="inputRow">
                <input type="email" name="fatherEmail" id="fatherEmail" placeholder="email" required/>
              </div>
            </div>
          </div>
          <div class="studentData">
            <h2>Student information</h2>
            <div class="inputData">
              <div class="inputRow">       
                <input type="text" name="stId" id="stId" placeholder="student id" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="st1stName" id="st1stName" placeholder="student name" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="st2ndName" id="st2ndName" placeholder="father name" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="stSurName" id="stSurName" placeholder="last name" required/>
              </div>
              <div class="inputRow">
                <input type="date" min="2000-01-01" max="2018-12-30" name="stDate" id="stDate" required/>
              </div>

              <div class="inputRow" >
                <div class="select">
                  <select name="nationality" id="nationality">
                    <option selected disabled>select nationality</option>
                    <option value="ksa">
                      <div class="country">
                        <p class="countryName">KSA</p>
                      </div>
                    </option>
                    <option value="egypt">
                      <div class="country">
                        <p class="countryName">egypt</p>
                      </div>
                    </option>
                    <option value="algeria">
                      <div class="country">
                        <p class="countryName">algeria</p>
                      </div>
                    </option>
                    <option value="sudan">
                      <div class="country">
                        <p class="countryName">sudan</p>
                      </div>
                    </option>
                    <option value="iraq">
                      <div class="country">
                        <p class="countryName">iraq</p>
                      </div>
                    </option>
                    <option value="morocco">
                      <div class="country">
                        <p class="countryName">morocco</p>
                      </div>
                    </option>
                    <option value="yemen">
                      <div class="country">
                        <p class="countryName">yemen</p>
                      </div>
                    </option>
                    <option value="syria">
                      <div class="country">
                        <p class="countryName">syria</p>
                      </div>
                    </option>
                    <option value="somalia">
                      <div class="country">
                        <p class="countryName">somalia</p>
                      </div>
                    </option>
                    <option value="Tunisia">
                      <div class="country">
                        <p class="countryName">tunisia</p>
                      </div>
                    </option>
                    <option value="Jordan">
                      <div class="country">
                        <p class="countryName">jordan</p>
                      </div>
                    </option>
                    <option value="uae">
                      <div class="country">
                        <p class="countryName">UAE</p>
                      </div>
                    </option>
                    <option value="libya">
                      <div class="country">
                        <p class="countryName">libya</p>
                      </div>
                    </option>
                    <option value="palestine">
                      <div class="country">
                        <p class="countryName">palestine</p>
                      </div>
                    </option>
                    <option value="oman">
                      <div class="country">
                        <p class="countryName">oman</p>
                      </div>
                    </option>
                    <option value="kuwait">
                      <div class="country">
                        <p class="countryName">kuwait</p>
                      </div>
                    </option>
                    <option value="mauritania">
                      <div class="country">
                        <p class="countryName">mauritania</p>
                      </div>
                    </option>
                    <option value="qatar">
                      <div class="country">
                        <p class="countryName">qatar</p>
                      </div>
                    </option>
                    <option value="bahrain">
                      <div class="country">
                        <p class="countryName">bahrain</p>
                      </div>
                    </option>
                    <option value="djibouti">
                      <div class="country">
                        <p class="countryName">djibouti</p>
                      </div>
                    </option>
                    <option value="comoros">
                      <div class="country">
                        <p class="countryName">comoros</p>
                      </div>
                    </option>
                    <option value="lebanon">
                      <div class="country">
                        <p class="countryName">lebanon</p>
                      </div>
                    </option>
                  </select>
                </div>
              </div> 
              <div class="inputRow" >
                <div class="select">
                  <select name="level" id="level">
                    <option selected disabled>select level</option>
                    <optgroup label="Kindergarten">
                      <option value="KG 2">KG 2</option>
                      <option value="KG 3">KG 3</option>
                    </optgroup>
                    <optgroup label="primary level">
                      <option value="اساسي الصف الاول">class one</option>
                      <option value="اساسي الصف الثاني">class two</option>
                      <option value="اساسي الصف الثالث">class three</option>
                      <option value="اساسي الصف الرابع">class four</option>
                      <option value="اساسي الصف الخامس">class five</option>
                      <option value="اساسي الصف السادس">class six</option>
                    </optgroup>
                    <optgroup label="middle level">
                      <option value="متوسط الصف الاول">class one</option>
                      <option value="متوسط الصف الثاني">class two</option>
                      <option value="متوسط الصف الثالث">class three</option>
                    </optgroup>
                    <optgroup label="high level">
                      <option value="ثانوي الصف الاول">class one</option>
                      <option value="ثانوي الصف الثاني">class two</option>
                      <option value="ثانوي الصف الثالث">class three</option>
                    </optgroup>
                  </select>
                </div>
              </div>
              <!-- <div class="inputRow">
                <input type="tel" name="" id="" placeholder="اختيار الجنسية" required/>
              </div> -->
              <div class="inputRow gender">
                <label>six:</label>
                <div class="genderType">
				  <div class="male">
                    <label>male</label>
                    <input type="radio" name="gender" value="male" id="gender" checked required>
                  </div>
                  <div class="female">
                    <label>female</label>
                    <input type="radio" name="gender" value="female" id="gender" required>
                  </div>
				
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="submit">
          <input type="submit" value="Submission">
        </div>
      </form>
      
    </div>


      </div>
    </div>
    <!-- End content -->

    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
