// ==================================================
// Project Name  :  Quizo
// File          :  JS Base
// Version       :  1.0.0
// Author        :  jthemes (https://themeforest.net/user/jthemes)
// ==================================================
var totalData = document.getElementById("total_data").value;

$(function(){
  "use strict";
  var hasil_jawaban="";
  // ========== Form-select-option ========== //

  for(let i = 1; i <= totalData; i++) {
    $(".step_" + i).on('click', function(){
      var jawaban = $("input[name=stp_" + i + "_select_option]:checked").attr('id');
      hasil_jawaban = $("#" + jawaban).val();
      var id = $("#id_soal_" + i).val();
      var login = $("#login").val();
      var jenis = $("#jenis").val();
      console.log(id);
      console.log(hasil_jawaban);
        if(hasil_jawaban !== undefined) {
          $(".step_" + i).removeClass("active");
          $(this).addClass("active");
          // alert($("input[name=stp_1_select_option]:checked").val());
          $.ajax({
            url: "../quiz/updateJawaban.php?id=" + id + "&jawaban=" + hasil_jawaban + "&login=" + login + "&jenis=" + jenis,
            type: "GET",
            dataType: "json",
            success: function (data) {
                // var result = $('<div />').append(data).find('#showresults').html();
                // $('#showresults').html(result);
                // console.log(data);
                alert('Jawaban Dipilih ' + data );
            },
            error: function (xhr, status) {
                alert("Sorry, there was a problem!");
            },
            complete: function (xhr, status) {
                //$('#showresults').slideDown('slow')
            }
        });
      }
    });
  }

  // $(".step_1").on('click', function(){
  //   $(".step_1").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_1_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  //   // alert($("input[name=stp_1_select_option]:checked").val());
  // });
  // $(".step_2").on('click', function(){
  //   $(".step_2").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_2_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_3").on('click', function(){
  //   $(".step_3").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_3_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_4").on('click', function(){
  //   $(".step_4").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_4_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_5").on('click', function(){
  //   $(".step_5").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_5_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_6").on('click', function(){
  //   $(".step_6").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_6_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_7").on('click', function(){
  //   $(".step_7").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_7_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_8").on('click', function(){
  //   $(".step_8").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_8_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_9").on('click', function(){
  //   $(".step_9").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_9_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });
  // $(".step_10").on('click', function(){
  //   $(".step_10").removeClass("active");
  //   $(this).addClass("active");
  //   var jawaban = $("input[name=stp_10_select_option]:checked").attr('id');
  //   hasil_jawaban = $("#" + jawaban).val();
  //   console.log(hasil_jawaban);
  // });


  
  // ================== CountDown function ================
  // $('.countdown_timer').each(function(){
  //   $('[data-countdown]').each(function() {
  //     var $this = $(this), finalDate = $(this).data('countdown');
  //     console.log($(this).data('countdown'));
  //     $this.countdown(finalDate, function(event) {
  //       var $this = $(this).html(event.strftime(''
  //       + '<div class="count_number">%S</div>'));
  //     });
  //   });
  // });
  let time = 300;
  const countdownEl = document.getElementById('detik');
  const login = document.getElementById('login').value;
  setInterval(updateCountdown, 1000);
  function updateCountdown() {
    if(time == 0){
      window.location.replace('hasil_quiz.php?username=' + login);
    }
    let second = time;
    countdownEl.innerHTML = `${second}`;

    time--;
  }

  // // =====================Progress Increment====================
  $(document).on( 'click', '#nextBtn', function(){
    var $progressbar = $('.count_progress');
    for (var i = 1; i<=totalData; i++) {
      var className = 'clip-'+i;
      if ($progressbar.hasClass(className)) {
        $progressbar.removeClass(className).addClass('clip-'+(i+1));
        break;
      }
    }
  });
  // // =====================Progress Decrement====================
  $(document).on( 'click', '#prevBtn', function(){
    var $progressbar = $('.count_progress');
    for (var i = 1; i<=totalData; i++) {
      var className = 'clip-'+i;
      if ($progressbar.hasClass(className)) {
        $progressbar.removeClass(className).addClass('clip-'+(i+1));
        break;
      }
    }
  });
  
});

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("multisteps_form_panel");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    
    document.getElementById("nextBtn").innerHTML = "Next Question" + ' <span><i class="fas fa-arrow-right"></i></span>';
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("multisteps_form_panel");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("wizard").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("multisteps_form_panel");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}

function move() {
  var elem = document.getElementById("myBar");
  var width = parseInt(elem.innerHTML);
  var aim = width + Math.floor(100/totalData);
  var id = setInterval(frame, Math.floor(100/totalData));
  
  function frame() {
    if (width >= aim) {
      clearInterval(id);
    } else if(width >= 100) {
      width=0;
      aim = Math.floor(100/totalData);
      elem.style.width = width + '%';
      elem.innerHTML = width * 1 + '%';
    } else {
      width++;
      elem.style.width = width + '%';
      elem.innerHTML = width * 1 + '%';
    }
  }
}
