<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>التسجيل في مدارس الإحسان</title>
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
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
  $stDate  = @$_POST['stDate'];
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
            <h2>معلومات ولي الامر (الأب)</h2>
            <div class="inputData">
              <div class="inputRow">
                <input type="text" name="fatherId" id="fatherId" placeholder="هوية ولي الأمر (الأب)" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="father1stName" id="father1stName" placeholder="الاسم الاول" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="father2ndName" id="father2ndName" placeholder="الاسم الثاني" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="fatherSurName" id="fatherSurName" placeholder="اسم العائلة" required/>
              </div>
              <div class="inputRow">
                <input type="tel" name="fatherTel" id="fatherTel" placeholder="جوال ولي الامر" required/>
              </div>
              <div class="inputRow">
                <input type="email" name="fatherEmail" id="fatherEmail" placeholder="البريد الالكتروني" required/>
              </div>
            </div>
          </div>

          <div class="studentData">
            <h2>معلومات الطالب</h2>
            <div class="inputData">
              <div class="inputRow">
                <input type="text" name="stId" id="stId" placeholder="هوية الطالب" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="st1stName" id="st1stName" placeholder="اسم الطالب" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="st2ndName" id="st2ndName" placeholder="اسم الأب" required/>
              </div>
              <div class="inputRow">
                <input type="text" name="stSurName" id="stSurName" placeholder="اسم العائلة" required/>
              </div>
              <div class="inputRow">
                <input type="date" min="2000-01-01" max="2018-12-30" name="stDate" id="stDate" required/>
              </div>

              <div class="inputRow" >
                <div class="select">
                  <select name="nationality" id="nationality">
                    <option selected disabled>اختيار الجنسية</option>
                    <option value="ksa">
                      <div class="country">
                        <p class="countryName">المملكة العربية السعودية</p>
                      </div>
                    </option>
                    <option value="egypt">
                      <div class="country">
                        <p class="countryName">مصر</p>
                      </div>
                    </option>
                    <option value="algeria">
                      <div class="country">
                        <p class="countryName">الجزائر</p>
                      </div>
                    </option>
                    <option value="sudan">
                      <div class="country">
                        <p class="countryName">السودان</p>
                      </div>
                    </option>
                    <option value="somalia">
                      <div class="country">
                        <p class="countryName">الصومال</p>
                      </div>
                    </option>
                    <option value="iraq">
                      <div class="country">
                        <p class="countryName">العراق</p>
                      </div>
                    </option>
                    <option value="morocco">
                      <div class="country">
                        <p class="countryName">المغرب</p>
                      </div>
                    </option>
                    <option value="yemen">
                      <div class="country">
                        <p class="countryName">اليمن</p>
                      </div>
                    </option>
                    <option value="syria">
                      <div class="country">
                        <p class="countryName">سوريا</p>
                      </div>
                    </option>
                    
                    <option value="Tunisia">
                      <div class="country">
                        <p class="countryName">تونس</p>
                      </div>
                    </option>
                    <option value="Jordan">
                      <div class="country">
                        <p class="countryName">الاردن</p>
                      </div>
                    </option>
                    <option value="uae">
                      <div class="country">
                        <p class="countryName">الامارات العربية المتحدة</p>
                      </div>
                    </option>
                    <option value="libya">
                      <div class="country">
                        <p class="countryName">ليبيا</p>
                      </div>
                    </option>
                    <option value="palestine">
                      <div class="country">
                        <p class="countryName">فلسطين</p>
                      </div>
                    </option>
                    <option value="oman">
                      <div class="country">
                        <p class="countryName">سلطنة عمان</p>
                      </div>
                    </option>
                    <option value="kuwait">
                      <div class="country">
                        <p class="countryName">الكويت</p>
                      </div>
                    </option>
                    <option value="mauritania">
                      <div class="country">
                        <p class="countryName">موريتانيا</p>
                      </div>
                    </option>
                    <option value="qatar">
                      <div class="country">
                        <p class="countryName">قطر</p>
                      </div>
                    </option>
                    <option value="bahrain">
                      <div class="country">
                        <p class="countryName">البحرين</p>
                      </div>
                    </option>
                    <option value="djibouti">
                      <div class="country">
                        <p class="countryName">جيبوتي</p>
                      </div>
                    </option>
                    <option value="comoros">
                      <div class="country">
                        <p class="countryName">جزر القمر</p>
                      </div>
                    </option>
                    <option value="lebanon">
                      <div class="country">
                        <p class="countryName">لبنان</p>
                      </div>
                    </option>
                  </select>
                </div>
              </div>
              <div class="inputRow" >
                <div class="select">
                  <select name="level" id="level">
                    <option selected disabled>اختيار الصف</option>
                    <optgroup label="رياض الأطفال">
                      <option value="KG 2">KG 2</option>
                      <option value="KG 3">KG 3</option>
                    </optgroup>
                    <optgroup label="المرحلة الاساسية">
                      <option value="اساسي الصف الاول">الصف الاول</option>
                      <option value="اساسي الصف الثاني">الصف الثاني</option>
                      <option value="اساسي الصف الثالث">الصف الثالث</option>
                      <option value="اساسي الصف الرابع">الصف الرابع</option>
                      <option value="اساسي الصف الخامس">الصف الخامس</option>
                      <option value="اساسي الصف السادس">الصف السادس</option>
                    </optgroup>
                    <optgroup label="المرحلة المتوسطة">
                      <option value="متوسط الصف الاول">الصف الاول</option>
                      <option value="متوسط الصف الثاني">الصف الثاني</option>
                      <option value="متوسط الصف الثالث">الصف الثالث</option>
                    </optgroup>
                    <optgroup label="المرحلة الثانوية">
                      <option value="ثانوي الصف الاول">الصف الاول</option>
                      <option value="ثانوي الصف الثاني">الصف الثاني</option>
                      <option value="ثانوي الصف الثالث">الصف الثالث</option>
                    </optgroup>
                  </select>
                </div>
              </div>
              <!-- <div class="inputRow">
                <input type="tel" name="" id="" placeholder="اختيار الجنسية" required/>
              </div> -->
              <div class="inputRow gender">
                <label>:الجنس</label>
                <div class="genderType">
                  <div class="male">
                    <label>ذكر</label>
                    <input type="radio" name="gender" value="male" id="gender" checked required>
                  </div>
                  <div class="female">
                    <label>انثي</label>
                    <input type="radio" name="gender" value="female" id="gender" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="submit">
          <input type="submit" value="تقديم الطلب">
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
