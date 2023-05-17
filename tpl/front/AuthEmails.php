<html>
<head>
  <meta charset="utf-8">
  <title>newsletter</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LdZ5WMkAAAAAOrxO_PcwVm6Jor04bfT0E1-Oz5J"></script>
  <style>* {
    padding: 0;
    margin: 0;
    color: #1a1f36;
    box-sizing: border-box;
    word-wrap: break-word;
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Ubuntu,sans-serif;
  }
  body {
      min-height: 100%;
      background-color: #ffffff;
  }
  h1 {
      letter-spacing: -1px;
  }
  a {
    color: #c77618;
    text-decoration: unset;
  }
  .login-root {
      background: #fff;
      display: flex;
      width: 100%;
      min-height: 100vh;
      overflow: hidden;
  }
  .loginbackground {
      min-height: 692px;
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      top: 0;
      z-index: 0;
      overflow: hidden;
  }
  .flex-flex {
      display: flex;
  }
  .align-center {
    align-items: center; 
  }
  .center-center {
    align-items: center;
    justify-content: center;
  }
  .box-root {
      box-sizing: border-box;
  }
  .flex-direction--column {
      -ms-flex-direction: column;
      flex-direction: column;
  }
  .loginbackground-gridContainer {
      display: -ms-grid;
      display: grid;
      -ms-grid-columns: [start] 1fr [left-gutter] (86.6px)[16] [left-gutter] 1fr [end];
      grid-template-columns: [start] 1fr [left-gutter] repeat(16,86.6px) [left-gutter] 1fr [end];
      -ms-grid-rows: [top] 1fr [top-gutter] (64px)[8] [bottom-gutter] 1fr [bottom];
      grid-template-rows: [top] 1fr [top-gutter] repeat(8,64px) [bottom-gutter] 1fr [bottom];
      justify-content: center;
      margin: 0 -2%;
      transform: rotate(-12deg) skew(-12deg);
  }
  .box-divider--light-all-2 {
      box-shadow: inset 0 0 0 2px #e3e8ee;
  }
  .box-background--blue {
      background-color: #F9941E;
  }
  .box-background--white {
    background-color: #fbc98e; 
  }
  .box-background--blue800 {
      background-color: #c77618;
  }
  .box-background--gray100 {
      background-color: #F99E34;
  }
  .box-background--cyan200 {
      background-color: #FAA94B;
  }
  .padding-top--64 {
    padding-top: 64px;
  }
  .padding-top--24 {
    padding-top: 24px;
  }
  .padding-top--48 {
    padding-top: 48px;
  }
  .padding-bottom--24 {
    padding-bottom: 24px;
  }
  .padding-horizontal--48 {
    padding: 48px;
  }
  .padding-bottom--15 {
    padding-bottom: 15px;
  }
  
  
  .flex-justifyContent--center {
    -ms-flex-pack: center;
    justify-content: center;
  }
  
  .formbg {
      margin: 0px auto;
      width: 100%;
      max-width: 448px;
      background: white;
      border-radius: 4px;
      box-shadow: rgba(60, 66, 87, 0.12) 0px 7px 14px 0px, rgba(0, 0, 0, 0.12) 0px 3px 6px 0px;
  }
  .formbgbu {
    margin: 0px auto;
    width: 100%;
    max-width: 448px;
}
  span {
      display: block;
      font-size: 20px;
      line-height: 28px;
      color: #1a1f36;
  }
  label {
      margin-bottom: 10px;
  }
  .reset-pass a,label {
      font-size: 14px;
      font-weight: 600;
      display: block;
  }
  .reset-pass > a {
      text-align: right;
      margin-bottom: 10px;
  }
  .grid--50-50 {
      display: grid;
      grid-template-columns: 50% 50%;
      align-items: center;
  }
  
  .field input {
      font-size: 16px;
      line-height: 28px;
      padding: 8px 16px;
      width: 100%;
      min-height: 44px;
      border: unset;
      border-radius: 4px;
      outline-color: rgb(84 105 212 / 0.5);
      background-color: rgb(255, 255, 255);
      box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(60, 66, 87, 0.16) 0px 0px 0px 1px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px;
  }
  /* .ensable{
    background-color:rgba(0, 0, 0, 0.12);
  } */
  .disable input[type="submit"] {
      background-color: rgba(0, 0, 0, 0.12);
      box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
                  rgb(249, 148, 30) 0px 0px 0px 1px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                  rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
      color: #fff;
      font-weight: 600;
      cursor: pointer;
  }
  input[type="submit"] {
    background-color: rgba(249, 148, 30, 0.82);
    box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
                rgb(249, 148, 30) 0px 0px 0px 1px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
                rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
    color: #fff;
    font-weight: 600;
    cursor: pointer;
}
.btn {
  background-color: rgba(249, 148, 30, 0.82);
  box-shadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
              rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
              rgba(0, 0, 0, 0.12) 0px 1px 1px 0px, 
              rgb(249, 148, 30) 0px 0px 0px 1px, 
              rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
              rgba(0, 0, 0, 0) 0px 0px 0px 0px, 
              rgba(60, 66, 87, 0.08) 0px 2px 5px 0px;
  color: #fff;
  font-weight: 600;
  cursor: pointer;
}
.display-none {
    display: none;
  }

  .field-checkbox input {
      width: 20px;
      height: 15px;
      margin-right: 5px; 
      box-shadow: unset;
      min-height: unset;
  }
  .field-checkbox label {
      display: flex;
      align-items: center;
      margin: 0;
  }
  a.ssolink {
      display: block;
      text-align: center;
      font-weight: 600;
  }
  .footer-link span {
      font-size: 14px;
      text-align: center;
  }
  .listing a {
      color: #697386;
      font-weight: 600;
      margin: 0 10px;
  }
  
  .animationRightLeft {
    animation: animationRightLeft 2s ease-in-out infinite;
  }
  .animationLeftRight {
    animation: animationLeftRight 2s ease-in-out infinite;
  }
  .tans3s {
    animation: animationLeftRight 3s ease-in-out infinite;
  }
  .tans4s {
    animation: animationLeftRight 4s ease-in-out infinite;
  }
  
  @keyframes animationLeftRight {
    0% {
      transform: translateX(0px);
    }
    50% {
      transform: translateX(1000px);
    }
    100% {
      transform: translateX(0px);
    }
  } 
  
  @keyframes animationRightLeft {
    0% {
      transform: translateX(0px);
    }
    50% {
      transform: translateX(-1000px);
    }
    100% {
      transform: translateX(0px);
    }
  } 

/* CSS */
.button-33 {
  background-color: #fbc98e;
  border-radius: 100px;
  box-shadow: rgba(249, 148, 30, .2) 0 -25px 18px -14px inset,rgba(249, 148, 30, .15) 0 1px 2px,rgba(249, 148, 30, .15) 0 2px 4px,rgba(249, 148, 30, .15) 0 4px 8px,rgba(249, 148, 30, .15) 0 8px 16px,rgba(249, 148, 30, .15) 0 16px 32px;
  color: #c77618;
  cursor: pointer;
  display: inline-block;
  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
  padding: 10px 40px;
  text-align: center;
  text-decoration: none;
  transition: all 250ms;
  border: 0;
  font-size: 20px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-33:hover {
  box-shadow: rgba(249, 148, 30,.35) 0 -25px 18px -14px inset,rgba(249, 148, 30,.25) 0 1px 2px,rgba(249, 148, 30,.25) 0 2px 4px,rgba(249, 148, 30,.25) 0 4px 8px,rgba(249, 148, 30,.25) 0 8px 16px,rgba(249, 148, 30,.25) 0 16px 32px;
  transform: scale(1.05) rotate(-1deg);
}</style>
  </head>

<body>
<script>jQuery(document).ready(function($) {
  $('#btnsub').click( function(e) {
    e.preventDefault();
    $("#btnsub").prop('disabled', true);
    $("#status").addClass("disable");
    var email = $("#emailsub").val();   
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: '/wp-admin/admin-ajax.php',
      data: {
        action: 'wp_subscriber',
        email: email
      },
      success: function(response) {
          alert("Please Check Your e-mail");
          window.location.replace("https://www.arotco-gmbh.de/");
        
      },
      error: function(response) {
        alert(response.responseJSON.message);
        $("#btnsub").prop('disabled', false);
        $("#status").removeClass("disable");
      }
    });
  });

  $('#btnunsub').click( function(e) {
    e.preventDefault();
    $("#btnunsub").prop('disabled', true);
    $("#unstatus").addClass("disable");
    var email = $("#emailunsub").val();   
    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: '/wp-admin/admin-ajax.php',
      data: {
        action: 'wp_unsubscriber',
        email: email
      },
      success: function(response) {
        alert("Please Check Your e-mail");
        window.location.replace("https://www.arotco-gmbh.de/");
        
      },
      error: function(response) {
        alert(response.responseJSON.message);
        $("#btnunsub").prop('disabled', false);
        $("#unstatus").removeClass("disable");
      }
    });
  });
$('#agree').click(function() {
    if ($("#agree").is(':checked')) {
      $("#btnsub").prop('disabled', false);
      $("#status").removeClass("disable");
    } else {
      $("#btnsub").prop('disabled', true);
      $("#status").addClass("disable");
    }
  }
);
$('#unagree').click(function() {
  if ($("#unagree").is(':checked')) {
    $("#btnunsub").prop('disabled', false);
    $("#unstatus").removeClass("disable");
  } else {
    $("#btnunsub").prop('disabled', true);
    $("#unstatus").addClass("disable");
  }
}
);


$("#subscribe").click(function() {
$("#formsub").removeClass("display-none");
$("#unsubscribe").css("display","none");
$("#subscribe").css("display","none");
}
);
$("#unsubscribe").click(function() {
  $("#formunsub").removeClass("display-none");
  $("#unsubscribe").css("display","none");
  $("#subscribe").css("display","none");
  }
  );



});</script>

 
  <div id="login-rootid"class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        
        </div>
        <div  class="formbg-outer">
        
          <div class="formbgbu">
          <Button id="subscribe"  class="button-33">subscribe</Button>
          
          <Button id="unsubscribe"  class="button-33" style="padding: 10px 30px;">Unsubscribe</Button>
          </div>
          <div id="formsub" class="formbg display-none" >
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15"> subscribe newsletter </span>
              <form id="subform"  method="post" >
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input id="emailsub" type="email" name="email">
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox"   id="agree" name="agree" value="agree">I would like to get informed about goods availability and special offers
                  </label>
                </div>
                <div id="status" class="disable field padding-bottom--24">
                 
                  <input  
         type='submit' name="submit" value="Continue" id="btnsub" disabled>
                </div>  
              </form>
            </div>
          </div>
        </div>
        <div id="formunsub" class="formbg-outer display-none">
        <div class="formbg">
          
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15"> Unsubscribe newsletter </span>
              <form id="unsubform">
                <div class="field padding-bottom--24">
                  <label for="email">Email</label>
                  <input id="emailunsub" type="email" name="email">
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox"   id="unagree" name="unagree" value="unagree">I do not like to receive any promotional emails or updates
                  </label>
                </div>
                <div id="unstatus" class="disable field padding-bottom--24">
                  <input  type="submit" name="submit" value="Continue" id="btnunsub" disabled>
                </div>  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>