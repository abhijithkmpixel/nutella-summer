<!DOCTYPE html>
<html lang="en-Me" dir="ltr">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4FKBL5');</script>
<!-- End Google Tag Manager -->

  <title>Nutella</title>
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
  <link rel="preload" href="https://www.nutella.com/me/en/header-footer.html?callback=localActivationProcessJson" as="script">

  <?php
  require("./includes/head.php");
  ?>
  <link rel="stylesheet" href="./assets/css/app.min.css" />
</head>

<body class="<?php if ($_POST) echo "pe-none opacity-75"; ?>">
<?php $emailExistTrue = false;?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4FKBL5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <?php
  // require('./includes/header.php');
  ?>
     <header id="nutella-header" class="nutella-embed-container">
  <div class="container">
    <div class="main-menu">
      <div class="region-header-top" id="nutella-embed-header-top"> <a href="ar.php" class="custom_lang_switch_btn">عربي</a></div>
      <div class="m-group" id="nutella-embed-header"><button class="navToggle"><span></span></button></div>
      <svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none"><path class="shape-overlays__path"></path><path class="shape-overlays__path"></path><path class="shape-overlays__path"></path><path class="shape-overlays__path"></path></svg>
    </div>
  </div>
</header>
  <!-- // promotion banner -->
  <section class="p_promo_page_main_banner">
    <div class="promotion_banner_img">
      <picture>
        <!-- <source media="(min-width:650px)" srcset="img_pink_flowers.jpg"> -->
        <source srcset="./uploads/banner.png" />
        <img src="./uploads/banner.png" alt="image" />
      </picture>
    </div>
  </section>

  <!-- banner ads strip -->
  <section class="p_banner_ads_strip">
    <picture>
      <source media="(max-width:570px)" srcset="./uploads/ads-570.png">
      <source srcset="./uploads/ads.png" />
      <img src="./uploads/ads.png" alt="image" />
    </picture>
    <button class="know_more">How to participate <img src="./uploads/press-button.png" alt="pressbutton"> </button>

    <div class="custom_modal v_hidden" id="knowMore">
      <div class="content_wrapper">
        <div class="close_btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
          </svg>
        </div>
        <div class="inner_rwapper">

          <div class="img_wrp">
            <picture>
              <source media="(max-width:570px)" srcset="./uploads/popup-mob.png">
              <source srcset="./uploads/popup.png" />
              <img src="./uploads/popup.png" alt="image" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p_ready_to_win_promo">
    <picture>
      <!-- <source media="(min-width:650px)" srcset="img_pink_flowers.jpg"> -->
      <source srcset="./uploads/bottombanner2.png" />
      <img src="./uploads/bottombanner2.png" alt="image" />
    </picture>
  </section>

  <section class="p_contact_form_section">
    <div class="fluid-container">
      <h3>Enter your details</h3>
      <div class="error_msgs">
        <h4></h4>
        <?php 
      if(isset($_POST['submit_btn'])  && (!isset($_POST['firstName']) || !isset($_POST['lastName']) || !isset($_POST['userEmail']) || !isset($_POST['userPhoneNumber'])) ){
        echo '<h4>Fields cannot be empty.</h4>';
      }
      ?>
      </div>
      <div class="p_form_wrapper">
        <div class="p_language_switcher_btn_wrp">
          <a href="index.php" class="lang_switch_btn lang_active">English</a>
          <a href="ar.php" class="lang_switch_btn">العربية</a>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" id="registrationform">
          <fieldset class="w-50">
            <label for="firstName">First name<span>*</span></label>
            <div class="field_group">
              <div class="f_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
              </div>
              <input type="text" id="firstName" name="firstName" maxlength="50"/>
            </div>
          </fieldset>

          <fieldset class="w-50">
            <label for="lastName">Last name<span>*</span></label>
            <div class="field_group">
              <div class="f_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                </svg>
              </div>
              <input type="text" id="lastName" name="lastName"  maxlength="50"/>
            </div>
          </fieldset>

          <fieldset class="w-100">
            <label for="userEmail">Email<span>*</span></label>
            <div class="field_group">
              <div class="f_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>
              </div>
              <input type="email" id="userEmail" name="userEmail"  maxlength="70"/>
            </div>
          </fieldset>

          <fieldset class="w-100">
            <label for="userPhoneNumber">Phone Number<span>*</span></label>
            <div class="field_group sm-wrap">
              <div class="f_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
              </div>
              <div class="select_field">
                <select name="countryCode" id="countryCode">
                  <option data-countryCode="GB" value="+47">Norway (+47)</option>
                  <option data-countryCode="US" value="+44">UK (+44)</option>
                  <option data-countryCode="DZ" value="+213">Algeria (+213)</option>
                  <option data-countryCode="AD" value="+376">Andorra (+376)</option>
                  <option data-countryCode="AO" value="+244">Angola (+244)</option>
                  <option data-countryCode="AI" value="+1264">Anguilla (+1264)</option>
                  <option data-countryCode="AG" value="+1268">Antigua & Barbuda (+1268)</option>
                  <option data-countryCode="AR" value="+54">Argentina (+54)</option>
                  <option data-countryCode="AM" value="+374">Armenia (+374)</option>
                  <option data-countryCode="AW" value="+297">Aruba (+297)</option>
                  <option data-countryCode="AU" value="+61">Australia (+61)</option>
                  <option data-countryCode="AT" value="+43">Austria (+43)</option>
                  <option data-countryCode="AZ" value="+994">Azerbaijan (+994)</option>
                  <option data-countryCode="BS" value="+1242">Bahamas (+1242)</option>
                  <option data-countryCode="BH" value="+973">Bahrain (+973)</option>
                  <option data-countryCode="BD" value="+880">Bangladesh (+880)</option>
                  <option data-countryCode="BB" value="+1246">Barbados (+1246)</option>
                  <option data-countryCode="BY" value="+375">Belarus (+375)</option>
                  <option data-countryCode="BE" value="+32">Belgium (+32)</option>
                  <option data-countryCode="BZ" value="+501">Belize (+501)</option>
                  <option data-countryCode="BJ" value="+229">Benin (+229)</option>
                  <option data-countryCode="BM" value="+1441">Bermuda (+1441)</option>
                  <option data-countryCode="BT" value="+975">Bhutan (+975)</option>
                  <option data-countryCode="BO" value="+591">Bolivia (+591)</option>
                  <option data-countryCode="BA" value="+387">Bosnia Herzegovina (+387)</option>
                  <option data-countryCode="BW" value="+267">Botswana (+267)</option>
                  <option data-countryCode="BR" value="+55">Brazil (+55)</option>
                  <option data-countryCode="BN" value="+673">Brunei (+673)</option>
                  <option data-countryCode="BG" value="+359">Bulgaria (+359)</option>
                  <option data-countryCode="BF" value="+226">Burkina Faso (+226)</option>
                  <option data-countryCode="BI" value="+257">Burundi (+257)</option>
                  <option data-countryCode="KH" value="+855">Cambodia (+855)</option>
                  <option data-countryCode="CM" value="+237">Cameroon (+237)</option>
                  <option data-countryCode="CA" value="+1">Canada (+1)</option>
                  <option data-countryCode="CV" value="+238">Cape Verde Islands (+238)</option>
                  <option data-countryCode="KY" value="+1345">Cayman Islands (+1345)</option>
                  <option data-countryCode="CF" value="+236">Central African Republic (+236)</option>
                  <option data-countryCode="CL" value="+56">Chile (+56)</option>
                  <option data-countryCode="CN" value="+86">China (+86)</option>
                  <option data-countryCode="CO" value="+57">Colombia (+57)</option>
                  <option data-countryCode="KM" value="+269">Comoros (+269)</option>
                  <option data-countryCode="CG" value="+242">Congo (+242)</option>
                  <option data-countryCode="CK" value="+682">Cook Islands (+682)</option>
                  <option data-countryCode="CR" value="+506">Costa Rica (+506)</option>
                  <option data-countryCode="HR" value="+385">Croatia (+385)</option>
                  <option data-countryCode="CU" value="+53">Cuba (+53)</option>
                  <option data-countryCode="CY" value="+90392">Cyprus North (+90392)</option>
                  <option data-countryCode="CY" value="+357">Cyprus South (+357)</option>
                  <option data-countryCode="CZ" value="+42">Czech Republic (+42)</option>
                  <option data-countryCode="DK" value="+45">Denmark (+45)</option>
                  <option data-countryCode="DJ" value="+253">Djibouti (+253)</option>
                  <option data-countryCode="DM" value="+1809">Dominica (+1809)</option>
                  <option data-countryCode="DO" value="+1809">Dominican Republic (+1809)</option>
                  <option data-countryCode="EC" value="+593">Ecuador (+593)</option>
                  <option data-countryCode="EG" value="+20">Egypt (+20)</option>
                  <option data-countryCode="SV" value="+503">El Salvador (+503)</option>
                  <option data-countryCode="GQ" value="+240">Equatorial Guinea (+240)</option>
                  <option data-countryCode="ER" value="+291">Eritrea (+291)</option>
                  <option data-countryCode="EE" value="+372">Estonia (+372)</option>
                  <option data-countryCode="ET" value="+251">Ethiopia (+251)</option>
                  <option data-countryCode="FK" value="+500">Falkland Islands (+500)</option>
                  <option data-countryCode="FO" value="+298">Faroe Islands (+298)</option>
                  <option data-countryCode="FJ" value="+679">Fiji (+679)</option>
                  <option data-countryCode="FI" value="+358">Finland (+358)</option>
                  <option data-countryCode="FR" value="+33">France (+33)</option>
                  <option data-countryCode="GF" value="+594">French Guiana (+594)</option>
                  <option data-countryCode="PF" value="+689">French Polynesia (+689)</option>
                  <option data-countryCode="GA" value="+241">Gabon (+241)</option>
                  <option data-countryCode="GM" value="+220">Gambia (+220)</option>
                  <option data-countryCode="GE" value="+7880">Georgia (+7880)</option>
                  <option data-countryCode="DE" value="+49">Germany (+49)</option>
                  <option data-countryCode="GH" value="+233">Ghana (+233)</option>
                  <option data-countryCode="GI" value="+350">Gibraltar (+350)</option>
                  <option data-countryCode="GR" value="+30">Greece (+30)</option>
                  <option data-countryCode="GL" value="+299">Greenland (+299)</option>
                  <option data-countryCode="GD" value="+1473">Grenada (+1473)</option>
                  <option data-countryCode="GP" value="+590">Guadeloupe (+590)</option>
                  <option data-countryCode="GU" value="+671">Guam (+671)</option>
                  <option data-countryCode="GT" value="+502">Guatemala (+502)</option>
                  <option data-countryCode="GN" value="+224">Guinea (+224)</option>
                  <option data-countryCode="GW" value="+245">Guinea - Bissau (+245)</option>
                  <option data-countryCode="GY" value="+592">Guyana (+592)</option>
                  <option data-countryCode="HT" value="+509">Haiti (+509)</option>
                  <option data-countryCode="HN" value="+504">Honduras (+504)</option>
                  <option data-countryCode="HK" value="+852">Hong Kong (+852)</option>
                  <option data-countryCode="HU" value="+36">Hungary (+36)</option>
                  <option data-countryCode="IS" value="+354">Iceland (+354)</option>
                  <option data-countryCode="IN" value="+91">India (+91)</option>
                  <option data-countryCode="ID" value="+62">Indonesia (+62)</option>
                  <option data-countryCode="IR" value="+98">Iran (+98)</option>
                  <option data-countryCode="IQ" value="+964">Iraq (+964)</option>
                  <option data-countryCode="IE" value="+353">Ireland (+353)</option>
                  <option data-countryCode="IL" value="+972">Israel (+972)</option>
                  <option data-countryCode="IT" value="+39">Italy (+39)</option>
                  <option data-countryCode="JM" value="+1876">Jamaica (+1876)</option>
                  <option data-countryCode="JP" value="+81">Japan (+81)</option>
                  <option data-countryCode="JO" value="+962">Jordan (+962)</option>
                  <option data-countryCode="KZ" value="+7">Kazakhstan (+7)</option>
                  <option data-countryCode="KE" value="+254">Kenya (+254)</option>
                  <option data-countryCode="KI" value="+686">Kiribati (+686)</option>
                  <option data-countryCode="KP" value="+850">Korea North (+850)</option>
                  <option data-countryCode="KR" value="+82">Korea South (+82)</option>
                  <option data-countryCode="KW" value="+965">Kuwait (+965)</option>
                  <option data-countryCode="KG" value="+996">Kyrgyzstan (+996)</option>
                  <option data-countryCode="LA" value="+856">Laos (+856)</option>
                  <option data-countryCode="LV" value="+371">Latvia (+371)</option>
                  <option data-countryCode="LB" value="+961">Lebanon (+961)</option>
                  <option data-countryCode="LS" value="+266">Lesotho (+266)</option>
                  <option data-countryCode="LR" value="+231">Liberia (+231)</option>
                  <option data-countryCode="LY" value="+218">Libya (+218)</option>
                  <option data-countryCode="LI" value="+417">Liechtenstein (+417)</option>
                  <option data-countryCode="LT" value="+370">Lithuania (+370)</option>
                  <option data-countryCode="LU" value="+352">Luxembourg (+352)</option>
                  <option data-countryCode="MO" value="+853">Macao (+853)</option>
                  <option data-countryCode="MK" value="+389">Macedonia (+389)</option>
                  <option data-countryCode="MG" value="+261">Madagascar (+261)</option>
                  <option data-countryCode="MW" value="+265">Malawi (+265)</option>
                  <option data-countryCode="MY" value="+60">Malaysia (+60)</option>
                  <option data-countryCode="MV" value="+960">Maldives (+960)</option>
                  <option data-countryCode="ML" value="+223">Mali (+223)</option>
                  <option data-countryCode="MT" value="+356">Malta (+356)</option>
                  <option data-countryCode="MH" value="+692">Marshall Islands (+692)</option>
                  <option data-countryCode="MQ" value="+596">Martinique (+596)</option>
                  <option data-countryCode="MR" value="+222">Mauritania (+222)</option>
                  <option data-countryCode="YT" value="+269">Mayotte (+269)</option>
                  <option data-countryCode="MX" value="+52">Mexico (+52)</option>
                  <option data-countryCode="FM" value="+691">Micronesia (+691)</option>
                  <option data-countryCode="MD" value="+373">Moldova (+373)</option>
                  <option data-countryCode="MC" value="+377">Monaco (+377)</option>
                  <option data-countryCode="MN" value="+976">Mongolia (+976)</option>
                  <option data-countryCode="MS" value="+1664">Montserrat (+1664)</option>
                  <option data-countryCode="MA" value="+212">Morocco (+212)</option>
                  <option data-countryCode="MZ" value="+258">Mozambique (+258)</option>
                  <option data-countryCode="MN" value="+95">Myanmar (+95)</option>
                  <option data-countryCode="NA" value="+264">Namibia (+264)</option>
                  <option data-countryCode="NR" value="+674">Nauru (+674)</option>
                  <option data-countryCode="NP" value="+977">Nepal (+977)</option>
                  <option data-countryCode="NL" value="+31">Netherlands (+31)</option>
                  <option data-countryCode="NC" value="+687">New Caledonia (+687)</option>
                  <option data-countryCode="NZ" value="+64">New Zealand (+64)</option>
                  <option data-countryCode="NI" value="+505">Nicaragua (+505)</option>
                  <option data-countryCode="NE" value="+227">Niger (+227)</option>
                  <option data-countryCode="NG" value="+234">Nigeria (+234)</option>
                  <option data-countryCode="NU" value="+683">Niue (+683)</option>
                  <option data-countryCode="NF" value="+672">Norfolk Islands (+672)</option>
                  <option data-countryCode="NP" value="+670">Northern Marianas (+670)</option>
                  <option data-countryCode="NO" value="+47">Norway (+47)</option>
                  <option data-countryCode="OM" value="+968">Oman (+968)</option>
                  <option data-countryCode="PW" value="+680">Palau (+680)</option>
                  <option data-countryCode="PA" value="+507">Panama (+507)</option>
                  <option data-countryCode="PG" value="+675">Papua New Guinea (+675)</option>
                  <option data-countryCode="PY" value="+595">Paraguay (+595)</option>
                  <option data-countryCode="PE" value="+51">Peru (+51)</option>
                  <option data-countryCode="PH" value="+63">Philippines (+63)</option>
                  <option data-countryCode="PL" value="+48">Poland (+48)</option>
                  <option data-countryCode="PT" value="+351">Portugal (+351)</option>
                  <option data-countryCode="PR" value="+1787">Puerto Rico (+1787)</option>
                  <option data-countryCode="QA" value="+974">Qatar (+974)</option>
                  <option data-countryCode="RE" value="+262">Reunion (+262)</option>
                  <option data-countryCode="RO" value="+40">Romania (+40)</option>
                  <option data-countryCode="RU" value="+7">Russia (+7)</option>
                  <option data-countryCode="RW" value="+250">Rwanda (+250)</option>
                  <option data-countryCode="SM" value="+378">San Marino (+378)</option>
                  <option data-countryCode="ST" value="+239">Sao Tome & Principe (+239)</option>
                  <option data-countryCode="SA" value="+966">Saudi Arabia (+966)</option>
                  <option data-countryCode="SN" value="+221">Senegal (+221)</option>
                  <option data-countryCode="CS" value="+381">Serbia (+381)</option>
                  <option data-countryCode="SC" value="+248">Seychelles (+248)</option>
                  <option data-countryCode="SL" value="+232">Sierra Leone (+232)</option>
                  <option data-countryCode="SG" value="+65">Singapore (+65)</option>
                  <option data-countryCode="SK" value="+421">Slovak Republic (+421)</option>
                  <option data-countryCode="SI" value="+386">Slovenia (+386)</option>
                  <option data-countryCode="SB" value="+677">Solomon Islands (+677)</option>
                  <option data-countryCode="SO" value="+252">Somalia (+252)</option>
                  <option data-countryCode="ZA" value="+27">South Africa (+27)</option>
                  <option data-countryCode="ES" value="+34">Spain (+34)</option>
                  <option data-countryCode="LK" value="+94">Sri Lanka (+94)</option>
                  <option data-countryCode="SH" value="+290">St. Helena (+290)</option>
                  <option data-countryCode="KN" value="+1869">St. Kitts (+1869)</option>
                  <option data-countryCode="SC" value="+1758">St. Lucia (+1758)</option>
                  <option data-countryCode="SD" value="+249">Sudan (+249)</option>
                  <option data-countryCode="SR" value="+597">Suriname (+597)</option>
                  <option data-countryCode="SZ" value="+268">Swaziland (+268)</option>
                  <option data-countryCode="SE" value="+46">Sweden (+46)</option>
                  <option data-countryCode="CH" value="+41">Switzerland (+41)</option>
                  <option data-countryCode="SI" value="+963">Syria (+963)</option>
                  <option data-countryCode="TW" value="+886">Taiwan (+886)</option>
                  <option data-countryCode="TJ" value="+7">Tajikstan (+7)</option>
                  <option data-countryCode="TH" value="+66">Thailand (+66)</option>
                  <option data-countryCode="TG" value="+228">Togo (+228)</option>
                  <option data-countryCode="TO" value="+676">Tonga (+676)</option>
                  <option data-countryCode="TT" value="+1868">Trinidad & Tobago (+1868)</option>
                  <option data-countryCode="TN" value="+216">Tunisia (+216)</option>
                  <option data-countryCode="TR" value="+90">Turkey (+90)</option>
                  <option data-countryCode="TM" value="+7">Turkmenistan (+7)</option>
                  <option data-countryCode="TM" value="+993">Turkmenistan (+993)</option>
                  <option data-countryCode="TC" value="+1649">Turks & Caicos Islands (+1649)</option>
                  <option data-countryCode="TV" value="+688">Tuvalu (+688)</option>
                  <option data-countryCode="UG" value="+256">Uganda (+256)</option>
                  <!-- <option data-countryCode="GB" value="+44">UK (+44)</option> -->
                  <option data-countryCode="UA" value="+380">Ukraine (+380)</option>
                  <option data-countryCode="AE" value="+971" Selected>United Arab Emirates (+971)</option>
                  <option data-countryCode="UY" value="+598">Uruguay (+598)</option>
                  <!-- <option data-countryCode="US" value="+1">USA (+1)</option> -->
                  <option data-countryCode="UZ" value="+7">Uzbekistan (+7)</option>
                  <option data-countryCode="VU" value="+678">Vanuatu (+678)</option>
                  <option data-countryCode="VA" value="+379">Vatican City (+379)</option>
                  <option data-countryCode="VE" value="+58">Venezuela (+58)</option>
                  <option data-countryCode="VN" value="+84">Vietnam (+84)</option>
                  <option data-countryCode="VG" value="+1284">Virgin Islands - British (+1284)</option>
                  <option data-countryCode="VI" value="+1340">Virgin Islands - US (+1340)</option>
                  <option data-countryCode="WF" value="+681">Wallis & Futuna (+681)</option>
                  <option data-countryCode="YE" value="+967">Yemen (South)(+967)</option>
                  <option data-countryCode="ZM" value="+260">Zambia (+260)</option>
                  <option data-countryCode="ZW" value="+263">Zimbabwe (+263)</option>
                </select>
              </div>
              <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="userPhoneNumber" maxlength="11" name="userPhoneNumber" />
            </div>
          </fieldset>

          <fieldset class="w-50">
            <label for="shopName">Shop</label>
            <div class="field_group">
              <div class="f_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
              </div>
              <input type="text" id="shopName" name="shopName"  maxlength="70"/>
            </div>
          </fieldset>

          <fieldset class="w-50">
            <label for="countryName">Country<span>*</span></label>
            <div class="field_group">
              <div class="f_icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                </svg>
              </div>
              <div class=" w-100">
                <select name="countryName" id="countryName" name="countryName">
                  <option value="Kuwait">Kuwait</option>
                  <option value="Oman">Oman</option>
                  <option value="UAE">UAE</option>
                  <option value="KSA">KSA</option>
                  <option value="Bahrain">Bahrain</option>
                </select>
              </div>
            </div>
          </fieldset>
          <fieldset class="w-100">
            <label for="uploadImage">Upload Receipt<span>*</span></label>
            <div class="image_placeholder">
              <img src="./uploads/img-upld.jpg" alt="Profile image" id="upload_image_placeholder" id="upload_image_placeholder" />
            </div>
            <label for="uploadImage" class="upload_picture_btn">Upload Receipt</label>
            <input type="file" accept="image/x-png,image/gif,image/jpeg,,image/heic" class="v_hidden" name="uploadImage" id="uploadImage" />
            <!-- <div class="field_group"></div> -->
          </fieldset>
          <fieldset class="w-100 mb-0">
          <input type="hidden" id="website_required" name="website_required">

            <!-- <div class="g-recaptcha" data-sitekey="6LfNks4iAAAAABWRGflFQLNfYaiEgFXqO7WH2Tsc"></div> -->
            <!-- <input type="submit" value="Submit form" id="submit_btn" name="submit_btn" class="submit_btn"> -->
            <button type="submit" id="submit_btn" name="submit_btn" class="submit_btn">Submit form <img src="./assets/img/loading.png" alt="loading icon"></button>
          </fieldset>
        </form>
      </div>
    </div>
  </section>


  <?php

  // $dbServerName = 'localhost';

  // $dbUserName = 'atlantis_user';

  // $dbPassword = '@tlantis_123#';

  // $dbName = "atlantis";
  require('./includes/config.php');


  $connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit_btn'])) {
      $first = mysqli_real_escape_string($connect, input_cleaner(($_POST["firstName"])));
      $last = mysqli_real_escape_string($connect, input_cleaner(($_POST["lastName"])));
      $email = mysqli_real_escape_string($connect, input_cleaner(($_POST["userEmail"])));
      $number = ($_POST["countryCode"] . $_POST["userPhoneNumber"]);
      $phno = mysqli_real_escape_string($connect, input_cleaner($number));
      $shopname = mysqli_real_escape_string($connect, input_cleaner(($_POST["shopName"])));
      $country = mysqli_real_escape_string($connect, input_cleaner(($_POST["countryName"])));
      $file = $_FILES['uploadImage'];
      $fileName = $_FILES['uploadImage']['name'];
      $fileTmpName = $_FILES['uploadImage']['tmp_name'];
      $fileSize = $_FILES['uploadImage']['size'];
      $fileErr = $_FILES['uploadImage']['error'];
      $fileType = $_FILES['uploadImage']['type'];
      if($first == "" || $last == "" || $email == "" || $_POST["userPhoneNumber"] || $country == ""){
        echo '
        <script>
        setTimeout(() => {

          document.querySelector("body").classList.remove("pe-none");
          document.querySelector("body").classList.remove("opacity-75");
        }, 500);
           if(document.querySelector("html").getAttribute("dir") == "rtl"){
          document.querySelector(".error_msgs h4").innerText = "FIelds cannot be empty";
        }else{
          document.querySelector(".error_msgs h4").innerText = "FIelds cannot be empty";
        }
        </script>
        ';
      }

      $fileExt = explode('.', $fileName);
      $fileActExt = strtolower(end($fileExt));

      $fileNewName = uniqid('', true) . "." . $fileActExt;
      $dest = 'uploadedimages/' . $fileNewName;


      /** Store the file details in variable */
$product_invoice    = $_FILES['uploadImage'];
if($_FILES['uploadImage']['error'] == 0 ){

  /** Uploaded file name */
  $file_name          = $product_invoice['name'];
  $file_tmp           = $product_invoice['tmp_name'];
  
  /** Allowed MIME extensions */
  $file_extensions    = ['image/jpeg', 'image/pjpeg', 'image/x-png','image/png','image/gif','image/heic','image/heif', 'heic'];
  
  /** Using finfo to just get the MIME type */
  $finfo      = new finfo(FILEINFO_MIME_TYPE);
  
  /** You will get extension along with the mime types */
  $extension  = $finfo->file($file_tmp);
  
  /** Check File extensions */
  if(!in_array($extension, $file_extensions)){
      $errors[] = 'File allowed extensions '. implode(', ', $file_extensions);
  
      echo '<script>
          
      document.getElementById("firstName").value ="'.$first.'"; 
      document.getElementById("lastName").value ="'.$last.'"; 
      document.getElementById("userEmail").value ="'.$email.'"; 
      document.getElementById("countryCode").value ="'.$_POST["countryCode"].'"; 
      document.getElementById("userPhoneNumber").value ="'.$_POST["userPhoneNumber"].'"; 
      document.getElementById("shopName").value ="'.$shopname.'"; 
      document.getElementById("countryName").value ="'.$country.'"; 
      setTimeout(() => {
  
        document.querySelector("body").classList.remove("pe-none");
        document.querySelector("body").classList.remove("opacity-75");
      }, 500);
         if(document.querySelector("html").getAttribute("dir") == "rtl"){
        document.querySelector(".error_msgs h4").innerText = "Invalid file type! Please upload an image.";
      }else{
        document.querySelector(".error_msgs h4").innerText = "Invalid file type! Please upload an image.";
      }
      </script>';
  }else{
  
    if ($fileErr === 0) {
      if (!file_exists('uploadedimages')) {
        @mkdir('uploadedimages', 0777);
      }
  
      $checksql = "SELECT first_name FROM $userTableName WHERE email='$email'";
      $checkExist = mysqli_query($connect, $checksql);
      $exist = mysqli_num_rows($checkExist);
  
      if ($exist != 0) {
        echo '<script>
        
        document.getElementById("firstName").value ="'.$first.'"; 
        document.getElementById("lastName").value ="'.$last.'"; 
        document.getElementById("userEmail").value ="'.$email.'"; 
        document.getElementById("countryCode").value ="'.$_POST["countryCode"].'"; 
        document.getElementById("userPhoneNumber").value ="'.$_POST["userPhoneNumber"].'"; 
        document.getElementById("shopName").value ="'.$shopname.'"; 
        document.getElementById("countryName").value ="'.$country.'"; 
        setTimeout(() => {
  
          document.querySelector("body").classList.remove("pe-none");
          document.querySelector("body").classList.remove("opacity-75");
        }, 500);
        if(document.querySelector("html").getAttribute("dir") == "ltr"){
          document.querySelector(".error_msgs h4").innerText = "Email already exist!";
        }else{
          document.querySelector(".error_msgs h4").innerText = "البريد الإلكتروني موجود بالفعل";
        }
      
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
        $sql = "INSERT INTO $userTableName (	first_name,	last_name ,email,phone,shop_name,country,image_url) VALUES ('$first','$last','$email','$phno','$shopname','$country','$imagePath');";
  
        $postData = mysqli_query($connect, $sql);
        echo '<script>window.location.href = "success.php"</script>';
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

  <section class="terms_n_conditions  ">
    <a href="./assets/img/nutella.pdf" target="_blank" class="anchor_link">Terms & conditions</a>
  </section>

  <section class="page_end_copy_right">
    <div class="image_holder">
      <picture>
        <!-- <source media="(min-width:650px)" srcset="img_pink_flowers.jpg"> -->
        <source srcset="./uploads/copy.jpg" />
        <img src="./uploads/copy.jpg" alt="image" />
      </picture>
    </div>
  </section>

  <?php
  require("./includes/footer.php");
  ?>
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/validate.min.js"></script>
  <script src="./assets/js/heic2any.min.js"></script>
  <script src="./assets/js/app.js"></script>

  <script src="https://www.nutella.com/me/en/header-footer.js"></script>

  <?php
  require("./includes/scripts.php");
  ?>
  <script type="application/javascript" src="https://www.nutella.com/me/en/header-footer.html?callback=localActivationProcessJson"></script>
  <script src="./assets/js/header-footer.js"></script>

</body>

</html>