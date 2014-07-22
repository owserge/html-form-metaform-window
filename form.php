<?php
if($_REQUEST['owsForm']) {
$message = "Имя: ".$_REQUEST['owsName']."\nТелефон: ".$_REQUEST['owsPhone']."\nКомментарии: ".$_REQUEST['owsComments'];
mail("mail@hotmail.com",'Callback',$message,"From: robot@hotmail.com\n"); 
print "<script>alert('Ваше сообщение было успешно отправлено, спасибо!');</script>";
}
?>

<style type="text/css">
#owsBCK {opacity:0.4; filter:alpha(opacity=40); background:#000000; width:100%; height:100%; position:fixed; display:none;z-index:100}
#owsWIN {background:#ffffff; border: 1px solid #555555; border-radius:10; position:fixed; left:50%; top:50%; font-family: Helvetica; display:none;z-index:101}
#owsWIN {padding:13px; margin-left:-190px; margin-top:-100px; width:360px;}
#owsWIN #close {position:absolute; right:6px; top:-1px; font-size:22px; color: #000000;}
#owsWIN #close a {text-decoration: none; color: #000000; }
#owsWIN #submit { text-align:center; padding: 10px 0 0 0; }
#owsWIN #submit input { width:80px; height:80px; font-size:18px;}
#owsWIN form {padding:15px 0 0 0; margin:0}
#owsWIN #inputs input {font-size:18px; margin:5px; width:100%; }
</style>
<script language='javascript'>
function owsShow(what) {
document.getElementById('owsBCK').style.display = what;
document.getElementById('owsWIN').style.display = what; }
/* checking fields and sending */
function owsSend() {
var phone = document.getElementById('owsPhone').value;
if(phone.length<5){alert('Вы не ввели номер телефона.')} 
else {document.getElementById('owsForm').submit();}
}
</script>
<div id='owsBCK'></div><div id='owsWIN'><a href="javascript: owsShow('none');"><div id='close'>&times;</div></a>
<form name='owsForm' id='owsForm' action='/' method='post'>
<div id='inputs'>

<input type='hidden' name='owsForm' value='1'>
<input type='text' name='owsPhone' id='owsPhone' placeholder='*Номер телефона'><br>
<input type='text' name='owsName' placeholder='Ваше имя'><br>
<input type='text' name='owsComments' placeholder='Комментарии (время для звонка)'><br>

</div><div id='submit'><input type='button' onClick='owsSend();' value='send'></div>
</form></div>
