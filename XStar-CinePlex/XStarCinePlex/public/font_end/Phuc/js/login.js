//Login-form

document.addEventListener(
  "DOMContentLoaded",
  function () {
    var tab = document.querySelectorAll(".tablinks");
    var login = document.querySelector(".form-container");
    var res = document.querySelector(".res-container");
    console.log(res);
    tab[1].onclick = function () {
      login.classList.add("ko");
      res.classList.remove("ko");
    };
    tab[0].onclick = function () {
      login.classList.remove("ko");
      res.classList.add("ko");
    };
  },
  false
);
//function ajax
if ($("#loginForm").length > 0) {
  $("#loginForm").validate({
    rules: {
      textName: {
        required: true,
        maxlength: 50,
      },
      textPhone: {
        required: true,
        digits: true,
        minlength: 10,
        maxlength: 12,
      },
      textEmail: {
        required: true,
        maxlength: 50,
        email: true,
      },
      textPassword: {
        required: true,
        minlength: 6,
      },
      textBirth: {
        required: true,
      },
      gender: {
        required: true,
      },
    },
    messages: {
      textName: {
        required: "Please enter your name",
        maxlength: "Your last name maxlength should be 50 character",
      },
      textPhone: {
        required: "Please enter your phone number",
        digits: "Please enter only numbers",
        minlength: "The phone number should be between 10 and 12 digits",
      },
      textEmail: {
        required: "Plesea enter your email",
        email: "Please enter valid email",
      },
      textPassword: {
        required: "Please enter your password",
        minlength: "Your passowrd must be min 6 chacreater",
      },
      textBirth: {
        required: "Please enter your BirthDay",
      },
      gender: {
        required: "Please choose your gender",
      },
    },
    submitHandler: function (form) {
      $.ajaxSetup({
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
      });
      $("#send_reg").html("Sending..");
      $.ajax({
        url: "http://127.0.0.1:8000/user/register",
        type: "Post",
        data: $("#loginForm").serialize(),
        success: function (response) {
          $("#send_reg").html("REGISTER");
          $("#res_message").show();
          $("#res_message").html(response.msg);
          $("#msg_div").removeClass("d-none");
          document.getElementById("loginForm").reset();
          setTimeout(function () {
            $("#res_message").hide();
            $("#msg_div").hide();
          }, 2000);
          setInterval('location.reload()', 2000);
        },
        /*      error: function (response) {
          $("#send_reg").html("Register");
          $("#res_message").show();
          $("#res_message").html(response.msg);
          $("#msg_div").removeClass("d-none");
        }, */
        error: function (response) {
            $('#textNameError').text(response.responseJSON.errors.textName);
            $('#textEmailError').text(response.responseJSON.errors.textEmail);
            $('#textPhoneError').text(response.responseJSON.errors.textPhone);
            $('#textPasswordError').text(response.responseJSON.errors.textPassword);
            $('#textBirtherror').text(response.responseJSON.errors.textBirth);
            $("#send_reg").html("REGISTER");
        },
      });
    },
  });
}

/* function cleardata() {
  $("#textName").val("");
  $("#textEmail").val("");
  $("#textPhone").val("");
  $("#textPassword").val("");
  $("#textBirth").val("");
}
$("#loginForm").on("submit", function (event) {
  event.preventDefault();

  var name = $("#textName").val();
  var email = $("#textEmail").val();
  var phone = $("#textPhone").val();
  var password = $("#textPassword").val();
  var birthday = $("#textBirth").val();
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
  $.ajax({
    url: "/register",
    type: "POST",
    data: {
      textName: name,
      textPhone: phone,
      textEmail: email,
      textPassword: password,
      textBirth: birthday,
    },
    success: function (data) {
      cleardata();
      console.log("succesfull");
    },

    error: function (error) {
        console.log(error.responseJSON.errors);
    },
  });
}); */
