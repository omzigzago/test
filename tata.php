<?php
if(!empty($_POST['login']) && !empty($_POST['password']))
{
			$login=$_POST['login'];
			$login=$_POST['password'];
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans nom</title>
</head>

<body>
<form action="<?php $_SERVER["REQUEST_URI"]?>" method="post" target="_blackjob">
<input type="submit" value="ok" />
<!--rajoute tous tes champs ici-->
</form>
<div style="display:none;" align="center">
     <iframe src="" style="width:1000px;height:100px;border:0px;background-color:#777777;" name="blackjob" id="_blackjob"></iframe>
</div>
</body>
</html>
