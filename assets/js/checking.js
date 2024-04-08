jQuery.validator.addMethod("mobilefield", function (value, element) {
  return this.optional(element) || /^([0-9-+]{7,11})$/i.test(value);
});
jQuery.validator.addMethod("emailfield", function (value, element) {
  return (
    this.optional(element) ||
    /^([A-Za-z0-9._+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63})$/i.test(value)
  );
});
let emailValid = false;
var globalVar = undefined;
let imageValid = true;

jQuery("#registrationform").validate({
  ignore: ".ignore",
  errorElement: "span",
  rules: {
    firstName: {
      required: true,
      // minlength: 2,
      // maxlength: 30,
    },
    lastName: {
      required: true,
      // minlength: 1,
      // maxlength: 30,
    },
    userEmail: {
      required: true,
      emailfield: true,
    },
    userPhoneNumber: {
      required: true,
      // minlength: 7,
      // maxlength: 20,
      mobilefield: true,
    },
    // shopName: {
    //   required: false,
    // },
    countryName: {
      required: true,
    },
    uploadImage: {
      required: true,
    },
  },
  errorPlacement: function (error, element) {
    // error.appendTo(jQuery(element).closest('form'));

    jQuery("input.valid").closest("fieldset").removeClass("error_border");

    setTimeout(function () {
      jQuery(element).closest("fieldset").addClass("error_border");
    }, 100);
  },
  messages: {
    firstName: {
      required:
        $("html").attr("dir") == "rtl"
          ? "الاسم الأول مطلوب"
          : "First name is required",
    },
    lastName: {
      required:
        $("html").attr("dir") == "rtl"
          ? "الاسم الأخير مطلوب"
          : "Last name is required",
    },
    userEmail: {
      required:
        $("html").attr("dir") == "rtl"
          ? "عنوان البريد الإلكتروني مطلوب"
          : "Email Address is required",
    },
    userPhoneNumber: {
      required:
        $("html").attr("dir") == "rtl"
          ? "مطلوب رقم الجوال"
          : "Mobile number is required",
      mobilefield:
        $("html").attr("dir") == "rtl" ? "إدخال غير صالح" : "Invalid number.",
    },
    countryName: {
      required:
        $("html").attr("dir") == "rtl"
          ? "حقل البلد مطلوب"
          : "Country field is required",
    },
    uploadImage: {
      required:
        $("html").attr("dir") == "rtl" ? "الصورة مطلوبة" : "Image is required",
    },
  },
  submitHandler: function (form) {
  
    jQuery("#emailValidError").remove();
    jQuery("fieldset").removeClass("error");
    jQuery("#emailValidError").closest("fieldset").removeClass("error_border");
    $("body").addClass("pe-none opacity-75 ");

    var inputval = document.getElementById("userEmail").value;
    const checkemailvalidation = async () => {
      let tempval = 0;
      await fetch("isEmailValid.php", {
        method: "POST",
        body: JSON.stringify(inputval),
      })
        .then((res) => res.text())
        .then((txt) => {
          tempval = JSON.parse(txt);
          console.log(tempval);
        });

      if (tempval[0].COUNT != 0) {
        setTimeout(() => {
          jQuery("#emailValidError")
            .closest("fieldset")
            .addClass("error_border");
        }, 100);
        $("body").removeClass("pe-none opacity-75 ");

        document.getElementById("userEmail").scrollIntoView({
          behavior: "auto",
          block: "center",
          inline: "center",
        });
        if (jQuery("html").attr("dir") == "rtl") {
          jQuery("#userEmail")
            .closest("fieldset")
            .append(
              "<h4 id='emailValidError' class='error'>البريد الإلكتروني موجود بالفعل</h4>"
            );
        } else {
          jQuery("#userEmail")
            .closest("fieldset")
            .append(
              "<h4 id='emailValidError' class='error'>Email already exist!</h4>"
            );
        }

        return false;
      } else if ($("#website_required").val() != "" && imageValid == true) {
        emailValid = true;
          $("body").addClass("pe-none opacity-75 ");
          return true;
      }
    };

   return true;
  },
});

let imagePLaceeholderSrc = $("#upload_image_placeholder").attr("src");
var isValidFile = false;
function validateFile() {
  var allowedExtension = ["jpeg", "jpg", "png"];
  var fileExtension = document
    .getElementById("uploadImage")
    .value.split(".")
    .pop()
    .toLowerCase();

  for (var index in allowedExtension) {
    if (fileExtension === allowedExtension[index]) {
      isValidFile = true;
      break;
    }
  }

  if (!isValidFile) {
    alert("Allowed Extensions are : *." + allowedExtension.join(", *."));
  }

  return isValidFile;
}
// function to conver HEIC to png
function convertHeicToJpg(input) {
  var fileName = $(input).val();
  var fileNameExt = fileName.substr(fileName.lastIndexOf(".") + 1);
  if (fileNameExt == "heic") {
    var blob = $(input)[0].files[0]; //ev.target.files[0];
    heic2any({
      blob: blob,
      toType: "image/jpg",
    })
      .then(function (resultBlob) {
        var url = URL.createObjectURL(resultBlob);

        $("#upload_image_placeholder").attr("src", url);

        //previewing the uploaded picture
        //adding converted picture to the original <input type="file">
        let fileInputElement = $(input)[0];
        let container = new DataTransfer();
        let file = new File([resultBlob], "heic" + ".jpg", {
          type: "image/jpeg",
          lastModified: new Date().getTime(),
        });
        container.items.add(file);
        fileInputElement.files = container.files;
        // console.log("added");
      })
      .catch(function (x) {
        console.log(x.code);
        console.log(x.message);
      });
  }
  return true;
}
// function to conver HEIC to png end

$("#uploadImage").change(function (event) {
  let file = event.target.files[0];
  var tmppath = URL.createObjectURL(file);
  if ($("#imageValidError").length > 0) {
    $("#imageValidError").remove();
  }
  var fileInput = $(this);

  var allowedExtension = ["heic"];
  var fileExtension = document
    .getElementById("uploadImage")
    .value.split(".")
    .pop()
    .toLowerCase();

  for (var index in allowedExtension) {
    if (fileExtension === allowedExtension[index]) {
      const waitforconvert = async () => {
        $("#upload_image_placeholder").attr("src", tmppath);
        $(".image_placeholder").append(
          '<div class="spinner-border text-dark" role="status"><img src="./assets/img/loading.png"></div>'
        );
        $(".image_placeholder img").addClass("opacity-50");
        const convertToJpg = await convertHeicToJpg(fileInput);
        if (convertToJpg) {
          var url = window.URL || window.webkitURL;
          var image = new Image();
          if (file.size < 2000000) {
  
            $("#submit_btn").attr("disabled", false);
            $("#submit_btn").removeClass("opacity-75 cursor_notallowed");
            imageValid = true;
            $("#upload_image_placeholder").attr("src", tmppath);
          } else {
            alert(`File ${file.name} is too large to upload.(max. size : 2Mb)`);
          }
          image.src = url.createObjectURL(fileInput[0].files[0]);
          $(".spinner-border").remove();
          $(".image_placeholder img").removeClass("opacity-50");
        }
      };
      waitforconvert();
      // break;
    } else {
      if (fileInput.length && fileInput[0].files && fileInput[0].files.length) {
        var url = window.URL || window.webkitURL;
        var image = new Image();
        image.onload = function () {
          if (file.size < 2000000) {
            $("#submit_btn").attr("disabled", false);
            $("#submit_btn").removeClass("opacity-75 cursor_notallowed");
            imageValid = true;
            $("#upload_image_placeholder").attr("src", tmppath);
          } else {
            alert(`File ${file.name} is too large to upload.(max. size : 2Mb)`);
          }
        };
        image.onerror = function () {
          imageValid = false;
          $("#submit_btn").attr("disabled", true);
          $("#submit_btn").addClass("opacity-75 cursor_notallowed");
          $("#upload_image_placeholder").attr("src", imagePLaceeholderSrc);
          if (jQuery("html").attr("dir") == "rtl") {
            jQuery("#uploadImage")
              .closest("fieldset")
              .append(
                "<h4 id='imageValidError' class='error'>نوع الملف غير صالح! يرجى تحميل صورة.</h4>"
              );
          } else {
            jQuery("#uploadImage")
              .closest("fieldset")
              .append(
                "<h4 id='imageValidError' class='error'>Invalid file type! Please upload an image.</h4>"
              );
          }
          // alert('Invalid image');
        };
        image.src = url.createObjectURL(fileInput[0].files[0]);
      }
    }
  }

  // if(!isValidFile) {
  //     alert('Allowed Extensions are : *.' + allowedExtension.join(', *.'));
  // }
});

$(".p_banner_ads_strip .know_more").click(function () {
  $("#knowMore").toggleClass("v_hidden");
  $("body").addClass("overflow_hidden");
});

$(".custom_modal .close_btn").click(function () {
  $("#knowMore").toggleClass("v_hidden");
  $("body").removeClass("overflow_hidden");
});
