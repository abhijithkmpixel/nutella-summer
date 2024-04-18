<!DOCTYPE html>
<html lang="ar-Me" dir="rtl">

<head>
    <title>Nutella</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
    <link rel="preload" href="https://www.nutella.com/me/en/header-footer.html?callback=localActivationProcessJson" as="script">

    <?php
    require("./includes/head.php");
    ?>
    <link rel="stylesheet" href="./assets/css/app.css" />
</head>

<body class="<?php if ($_POST) echo "pe-none opacity-50"; ?>">
    <?php $emailExistTrue = false; ?>

    <?php
    // require('./includes/header.php');
    ?>
    <header id="nutella-header" class="nutella-embed-container">
        <div class="container">
            <div class="main-menu">
                <div class="region-header-top" id="nutella-embed-header-top"> <a href="ar.php" class="custom_lang_switch_btn">عربي</a></div>
                <div class="m-group" id="nutella-embed-header"><button class="navToggle"><span></span></button></div>
                <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path class="shape-overlays__path"></path>
                    <path class="shape-overlays__path"></path>
                    <path class="shape-overlays__path"></path>
                    <path class="shape-overlays__path"></path>
                </svg>
            </div>
        </div>
    </header>

    <div class="fixed__loading_text" style="display: none;">Please wait!</div>
    <!-- // promotion banner -->
    <section class="p_promo_page_main_banner">
        <a href="javascript:void;" id="scrolltoform" class="float__btn">أدخل هنا</a>
        <img src="./uploads/nutella-jar.png" alt="" class="sidejar">
        <div class="side_grid">
            <div class="side_grid_item side_grid_item1"><img src="./uploads/1.png" alt=""></div>
            <div class="side_grid_item side_grid_item2"><img src="./uploads/2.png" alt=""></div>
            <div class="side_grid_item side_grid_item3"><img src="./uploads/3.png" alt=""></div>
            <div class="side_grid_item side_grid_item4"><img src="./uploads/4.png" alt=""></div>
        </div>
        <div class="promotion_banner_img">
            <picture>
                <source media="(max-width:990px)" srcset="./uploads/mobilebanner.png">
                <source srcset="./uploads/bg-banner.png" />
                <img src="./uploads/bg-banner.png" alt="image" />
            </picture>
        </div>
    </section>

    <!-- banner ads strip -->
    <section class="parallax__image__block">
        <picture>
            <!-- <source media="(min-width:650px)" srcset="img_pink_flowers.jpg"> -->
            <source srcset="./uploads/parallax-image.jpg" />
            <img src="./uploads/parallax-image.jpg" alt="image" />
        </picture>
    </section>

    <section class="p_ready_to_win_promo">
        <picture>
            <!-- <source media="(min-width:650px)" srcset="img_pink_flowers.jpg"> -->
            <source srcset="./uploads/how-to-participate.jpg" />
            <img src="./uploads/how-to-participate.jpg" alt="image" />
        </picture>
    </section>

    <section class="p_contact_form_section" id="registration_form">
        <div class="fluid-container">
            <h3>سجل بياناتك</h3>
            <div class="btn__wrapper"><a href="/index.php">English</a><a href="/ar.php" class="active">العربية</a></div>
            <div class="error_msgs">
                <h4></h4>
                <?php
                // if (isset($_POST['submit_btn'])  && (!isset($_POST['firstName']) || !isset($_POST['lastName']) || !isset($_POST['userEmail']) || !isset($_POST['userPhoneNumber']))) {
                //   echo '<h4>Fields cannot be empty.</h4>';
                // }
                ?>
            </div>
            <div class="p_form_wrapper">

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" id="registrationform">
                    <div class="form__inner__wrap">
                        <span class="float_image nuts"><img src="./uploads/nuts.png" alt="nuts image"></span>
                        <span class="float_image jar"><img src="./uploads/jar.png" alt="nuts image"></span>

                        <fieldset class="w-50">
                            <label for="firstName">الاسم الأول<span>*</span></label>
                            <div class="field_group">
                                <input type="text" id="firstName" name="firstName" maxlength="50" />
                            </div>
                        </fieldset>

                        <fieldset class="w-50">
                            <label for="lastName">الاسم الأخير<span>*</span></label>
                            <div class="field_group">
                                <input type="text" id="lastName" name="lastName" maxlength="50" />
                            </div>
                        </fieldset>

                        <fieldset class="w-50">
                            <label for="userEmail">البريد الإلكتروني<span>*</span></label>
                            <div class="field_group">
                                <input type="email" id="userEmail" name="userEmail" maxlength="70" />
                            </div>
                        </fieldset>

                        <fieldset class="w-50">
                            <label for="userPhoneNumber">رقم الهاتف<span>*</span></label>
                            <div class="field_group sm-wrap">
                                <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="userPhoneNumber" maxlength="11" name="userPhoneNumber" />
                            </div>
                        </fieldset>

                        <fieldset class="w-50">
                            <label for="shopName">المتجر</label>
                            <div class="field_group">
                                <input type="text" id="shopName" name="shopName" maxlength="70" />
                            </div>
                        </fieldset>

                        <fieldset class="w-50">
                            <label for="countryName">البلد<span>*</span></label>
                            <div class="field_group">
                                <div class=" w-100 select__field">
                                    <select name="countryName" id="countryName" name="countryName">
                                        <option value="Kuwait">الكويت</option>
                                        <option value="Oman">عمان</option>
                                        <option value="UAE">الإمارت العربية المتحدة</option>
                                        <option value="KSA">السعودية</option>
                                        <option value="Bahrain">البحرين</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="w-100">
                            <label for="uploadImage">حمِّل الصورة<span>*</span></label>
                            <div class="image_placeholder">
                                <img src="./uploads/upload-icon.png" alt="Profile image" id="upload_image_placeholder" id="upload_image_placeholder" />
                                <label for="uploadImage" class="upload_picture_btn">حمِّل الصورة</label>
                                <input type="file" accept="image/x-png,image/gif,image/jpeg,,image/heic" class="v_hidden" name="uploadImage" id="uploadImage" />
                            </div>
                            <!-- <div class="field_group"></div> -->
                        </fieldset>
                    </div>
                    <fieldset class="w-100 mb-0">
                        <input type="hidden" id="website_required" name="website_required">

                        <!-- <div class="g-recaptcha" data-sitekey="6LfNks4iAAAAABWRGflFQLNfYaiEgFXqO7WH2Tsc"></div> -->
                        <!-- <input type="submit" value="Submit form" id="submit_btn" name="submit_btn" class="submit_btn"> -->
                        <div class="submit__button__wrap">
                            <span class="float__image right"><img src="./uploads/arrow.png" alt="arrow icon"></span>
                            <button type="submit" id="submit_btn" name="submit_btn" class="submit_btn">إرسال<img src="./assets/img/loading.png" alt="loading icon"></button>
                            <span class="float__image left"><img src="./uploads/arrow.png" alt="arrow icon"></span>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>


    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';
    require('./includes/config.php');


    $connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['submit_btn'])) {
            $first = mysqli_real_escape_string($connect, input_cleaner(($_POST["firstName"])));
            $last = mysqli_real_escape_string($connect, input_cleaner(($_POST["lastName"])));
            $email = mysqli_real_escape_string($connect, input_cleaner(($_POST["userEmail"])));
            // $number = ($_POST["countryCode"] . $_POST["userPhoneNumber"]);
            $phno = mysqli_real_escape_string($connect, input_cleaner(($_POST["userPhoneNumber"])));
            $shopname = mysqli_real_escape_string($connect, input_cleaner(($_POST["shopName"])));
            $country = mysqli_real_escape_string($connect, input_cleaner(($_POST["countryName"])));
            $file = $_FILES['uploadImage'];
            $fileName = $_FILES['uploadImage']['name'];
            $fileTmpName = $_FILES['uploadImage']['tmp_name'];
            $fileSize = $_FILES['uploadImage']['size'];
            $fileErr = $_FILES['uploadImage']['error'];
            $fileType = $_FILES['uploadImage']['type'];
            // if ($first == "" || $last == "" || $email == "" || $_POST["userPhoneNumber"] || $country == "") {
            //   echo '
            //   <script>
            //   setTimeout(() => {

            //     document.querySelector("body").classList.remove("pe-none");
            //     document.querySelector("body").classList.remove("opacity-50");
            //   }, 1000);
            //   //    if(document.querySelector("html").getAttribute("dir") == "rtl"){
            //   //   document.querySelector(".error_msgs h4").innerText = "FIelds cannot be empty";
            //   // }else{
            //   //   document.querySelector(".error_msgs h4").innerText = "FIelds cannot be empty";
            //   // }
            //   </script>
            //   ';
            // }

            $fileExt = explode('.', $fileName);
            $fileActExt = strtolower(end($fileExt));

            $fileNewName = uniqid('', true) . "." . $fileActExt;
            $dest = 'uploadedimages/' . $fileNewName;


            /** Store the file details in variable */
            $product_invoice    = $_FILES['uploadImage'];
            if ($_FILES['uploadImage']['error'] == 0) {

                /** Uploaded file name */
                $file_name          = $product_invoice['name'];
                $file_tmp           = $product_invoice['tmp_name'];

                /** Allowed MIME extensions */
                $file_extensions    = ['image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png', 'image/gif', 'image/heic', 'image/heif', 'heic'];

                /** Using finfo to just get the MIME type */
                $finfo      = new finfo(FILEINFO_MIME_TYPE);

                /** You will get extension along with the mime types */
                $extension  = $finfo->file($file_tmp);

                /** Check File extensions */
                if (!in_array($extension, $file_extensions)) {
                    $errors[] = 'File allowed extensions ' . implode(', ', $file_extensions);

                    echo '<script>
          
          document.getElementById("firstName").value ="' . $first . '"; 
          document.getElementById("lastName").value ="' . $last . '"; 
          document.getElementById("userEmail").value ="' . $email . '"; 
          document.getElementById("userPhoneNumber").value ="' . $_POST["userPhoneNumber"] . '"; 
          document.getElementById("shopName").value ="' . $shopname . '"; 
          document.getElementById("countryName").value ="' . $country . '"; 
          setTimeout(() => {
      
            document.querySelector("body").classList.remove("pe-none");
            document.querySelector("body").classList.remove("opacity--50");
          }, 500);
            if(document.querySelector("html").getAttribute("dir") == "rtl"){
            document.querySelector(".error_msgs h4").innerText = "Invalid file type! Please upload an image.";
          }else{
            document.querySelector(".error_msgs h4").innerText = "Invalid file type! Please upload an image.";
          }
          </script>';
                } else {

                    if ($fileErr === 0) {
                        if (!file_exists('uploadedimages')) {
                            @mkdir('uploadedimages', 0777);
                        }

                        $checksql = "SELECT first_name FROM $userTableName WHERE email='$email'";
                        $checkExist = mysqli_query($connect, $checksql);
                        $exist = mysqli_num_rows($checkExist);

                        if ($exist != 0) {
                            echo '<script>
        
                  document.getElementById("firstName").value ="' . $first . '"; 
                  document.getElementById("lastName").value ="' . $last . '"; 
                  document.getElementById("userEmail").value ="' . $email . '"; 
                  document.getElementById("userPhoneNumber").value ="' . $_POST["userPhoneNumber"] . '"; 
                  document.getElementById("shopName").value ="' . $shopname . '"; 
                  document.getElementById("countryName").value ="' . $country . '"; 
                  setTimeout(() => {
            
                    document.querySelector("body").classList.remove("pe-none");
                    document.querySelector("body").classList.remove("opacity-50");
                  }, 500);
                  if(document.querySelector("html").getAttribute("dir") == "ltr"){
                    document.querySelector(".error_msgs h4").innerText = "Email already exist!";
                  }else{
                    document.querySelector(".error_msgs h4").innerText = "البريد الإلكتروني موجود بالفعل";
                  }
                     var element = document.getElementById("registration_form");

                  var offsetTop = element.offsetTop;

                  window.scrollTo({
                    top: offsetTop,
                    // behavior: "smooth"
                  });
                
                  </script>';
                            $emailExistTrue = true;
                        } else {
                            move_uploaded_file($fileTmpName, $dest);

                            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {

                                $link = "https";
                            } else {
                                $link = "http";
                            }
                            $link .= "://";
                            $link .= $_SERVER['HTTP_HOST'];
                            $link .= $_SERVER['REQUEST_URI'];
                            $dirPath = dirname($link);


                            $imagePath = $dirPath . '/uploadedimages/' . $fileNewName;
                            $sql = "INSERT INTO $userTableName (	first_name,	last_name ,email,phone,shop_name,country,image_url,lang) VALUES ('$first','$last','$email','$phno','$shopname','$country','$imagePath','ar');";

                            $postData = mysqli_query($connect, $sql);
                            // echo '<script>window.location.href = "success.php"</script>';

                            $mail = new PHPMailer(true);
                            $mail->isSMTP();
                            $mail->Host = 'smtp.gmail.com';
                            $mail->SMTPAuth = true;
                            $mail->Username = 'pixelflames.developer@gmail.com';
                            $mail->Password = 'qptfscnvaxqyiywc';
                            $mail->SMTPSecure = 'ssl';
                            $mail->Port = 465;

                            $mail->setFrom('pixelflames.developer@gmail.com');

                            $mail->addAddress($email);

                            $mail->isHTML(true);
                            $mail->Subject = 'Nutella.';
                            $mail->Body = 'Name:' . $first . '  <br> ';
                            $mail->Body .= 'Email:' . $email . '  <br> ';
                            $mail->Body .= 'Phone:' . $phno . '<br>   ';
                            // $mail->Body .= 'Message:' . $_POST["comments"] . '';
                            try {
                                $mail->send();
                            } catch (Exception $e) {
                                echo $e->getMessage();
                                exit(); //Boring error messages from anything else!
                            }

                            echo "
              
                  <div class='success_overlay' id='success_overlay'></div>
                     <div class='success__popup' id='success__popup'>
                          <button class='success__popup__close__btn' id='close__popupbtn'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-lg' viewBox='0 0 16 16'>
                              <path d='M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z' />
                            </svg></button>
                           <picture>
                            <source media='(max-width:990px)' srcset='./uploads/mobile.png'>
                            <source srcset='./uploads/desk.png' />
                            <img src='./uploads/desk.png' alt='image' />
                          </picture>
                        </div>
              <script>
                  var element = document.getElementById('registration_form');

                  var offsetTop = element.offsetTop;

                  window.scrollTo({
                    top: offsetTop,
                    // behavior: 'smooth' 
                  });
                   document.querySelector('body').classList.remove('pe-none');
                    document.querySelector('body').classList.remove('opacity-50');
                    document.querySelector('#close__popupbtn').addEventListener('click',function(){
                      var success_overlay = document.getElementById('success_overlay');
                      var success__popup = document.getElementById('success__popup');
                      success_overlay.parentNode.removeChild(success_overlay);
                      success__popup.parentNode.removeChild(success__popup);
                    })
              </script>
              ";
                        }
                    }
                }
            }
        }
    }
    function input_cleaner($input)
    {
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        $input = str_replace("'", '"', $input);
        return $input;
    }
    ?>


    <?php
    require("./includes/footer.php");
    ?>
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/validate.min.js"></script>
    <script src="./assets/js/heic2any.min.js"></script>
    <script src="./assets/js/gsap.min.js"></script>
    <script src="./assets/js/scrollTrigger.min.js"></script>
    <script src="./assets/js/app.js"></script>

    <script src="https://www.nutella.com/me/en/header-footer.js"></script>

    <?php
    require("./includes/scripts.php");
    ?>
    <script type="application/javascript" src="https://www.nutella.com/me/en/header-footer.html?callback=localActivationProcessJson"></script>
    <script src="./assets/js/header-footer.js"></script>

</body>

</html>