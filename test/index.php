<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/jquery.steps.css">
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
 <script src="jquery.steps.js"></script> 
  <script src="jquery.validate.js"></script>
  <script>
  $(function ()
        {

var form = $("#myForm").show();
 var validator =form.validate({
    rules: {
        uploadedfile: "required",
     
    },
    messages: {
        uploadedfile: "請附上照片",
       
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
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
        
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
<title>無標題文件</title>

</head>

<body>
<div id="formbody">
<div id="banner">
<img src="image/banner.jpg" />
</div>
<form method="POST" action="submit.php" id="myForm" enctype="multipart/form-data">
<h3>讚好支持我們</h3>
 <fieldset>
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