<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/jquery.steps.css">
 <script src="jquery.js"></script> 
 <script src="jquery.steps.js"></script> 
  <script src="jquery.validate.js"></script>
  <script>
  // This is called with the results from from FB.getLoginStatus().
  $.validator.addMethod('minStrict', function (value, el, param) {
    return value > param;
});
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '224353570014',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });


  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('fblogin').value="1";
      document.getElementById("fbbutton").style.display = "none";
      document.getElementById('status').innerHTML =
        'Hi , ' + response.name + '!';
    });
  }
</script>
  <script>
  $(function ()
        {

var form = $("#myForm").show();
 var validator =form.validate({
    rules: {
        uploadedfile: "required",
     	fblogin:{required:true,
     	min:1,
     	}
    },
    messages: {
        uploadedfile: "請附上照片",
       fblogin:"請登入先Facebook"
    }
});
form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
         if (newIndex === 1 && Number($("#fblogin").val()) < 1)
        {
        document.getElementById('status').innerHTML ="請登入facebook";
            return false;
        }
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
       form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
        
    },
     onStepChanged: function (event, currentIndex, priorIndex)
    {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#fblogin").val()) >= 1)
        {
            form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3)
        {
            form.steps("previous");
        }
    },
	onFinishing: function (event, currentIndex)
    {
    	
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
	onFinished: function (event, currentIndex)
    {
        form.submit();
    }
   
});
		}).validate();

</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=136861589844296";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<title>we love guam 結婚篇</title>

</head>

<body>
<div id="formbody1">
<div id="banner">
<img src="image/banner.jpg" />
</div>
<form method="POST" action="submit.php" id="myForm" enctype="multipart/form-data">

<h3>讚好支持我們</h3>
 <fieldset>
 <input type="hidden" value="0" id="fblogin" name="fblogin" class="required">
<fb:login-button scope="public_profile,email" onlogin="checkLoginState();" id="fbbutton">
</fb:login-button>
<div id="status"></div>
 <h2>請Like 下面的專頁</h2>
 <div class="fb-page" data-href="https://www.facebook.com/umagazinehk" data-hide-cover="true" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/umagazinehk"><a href="https://www.facebook.com/umagazinehk" class="required">U Magazine</a></blockquote></div></div><br/>
  <div class="fb-page" data-href="https://www.facebook.com/visitguam.hk" data-hide-cover="true" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/visitguam.hk"><a href="https://www.facebook.com/visitguam.hk">Guam Visitors Bureau (HK) /  關島觀光局 (香港)</a></blockquote></div></div><br/>
   <div class="fb-page" data-href="https://www.facebook.com/hongthaitravel" data-hide-cover="true" data-show-facepile="false" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/hongthaitravel"><a href="https://www.facebook.com/hongthaitravel">康泰旅行社 Hong Thai Travel</a></blockquote></div></div>
 </fieldset>
 <h3>分享你與摯愛的甜蜜</h3>
 <fieldset>
 
<h2>分享你與摯愛的甜蜜的甜蜜合照</h2><br />

   <input name="uploadedfile" type="file" id="file" class="required"><br />
   <br />
   <h2>分享你們想去關島結婚的原因（100字以內）</h2><br />
   <textarea name="reason" rows="8" cols="70"></textarea>

  
    </fieldset>
    
    <h3>填妥個人資料</h3>
    <fieldset>
    <h2>正確填寫個人資料</h2>
    英文全名（與身份證相同）*<br/>
    
<input type="text" name="name" value="" class="required"><br/>
身份證首4位數字*<br/>
<input type="text" name="idnum" id="idnum" value="" class="required number" maxlength="4"><br/>
聯絡電話*<br/>
<input type="text" name="phone" value="" class="required number"><br/>
電郵地址*<br/>
<input type="text" name="email" value="" class="required email"><br/>
<div id="agree">
閣下提供的個人資料，只會用作得獎通知及向資訊訂閱者發送推廣資料之用。如未獲閣下的同意，我們將不會使用閣下的個人資料作推廣或其他用途。
我們有機會為閣下提供香港經濟日報集團旗下刊物、網站及公司的最新優惠、推廣、講座、活動、產品及服務，涵蓋投資理財、金融、地產、電腦、電訊及電子產品、教育、招聘、進修、管理、旅遊、飲食、美容、時裝、消閒娛樂、潮流及生活消費品、家居、親子、寵物、健康、交通、保險、文化藝術、體育、環保、慈善公益、書刊雜誌訂閱，以及我們合作夥伴相關類別的最新情報和訊息，以及合作夥伴相關類別的訊息，並或會邀請閣下參加意見調查。香港經濟日報集團成員包括：香港經濟日報及其校園版、晴報、iMoney智富雜誌、e-zone、U Magazine、經濟日報出版社、經濟商學院、經濟通、環富通、交易通、經濟地產庫(EPRC)、樂本‧健、CTgoodjobs.hk、U Travel、U Food、U Beauty、U Know。閣下如欲了解U周刊如何處理你的個人資料，請瀏覽私隱政策聲明。http://umagazine.ufood.com.hk/privacypolicy</div><br/>

<input type="checkbox" name="terms_and_conditions">本人同意收取U 周刊 (U Magazine) 所發出的優惠及推廣訊息<br/>
    </fieldset><br/>
   
</form>*為必須填寫欄目
</div> 
</body>
</html>