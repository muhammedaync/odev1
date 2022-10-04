<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>
 
<body bgcolor="green">
<form action="dortislem.php" method="post">
 <input type="text" name="rakam1" />
 <input type="text" name="rakam2" />
 <select name="islem"> 
 <option>İşlem</option>
 <option value="topla">+</option>
 <option value="cikar">-</option> 
 <option value="carp">*</option>
 <option value="bol">/</option>
 </select><br /><br />
 <input name="btn" type="submit" value="sonuc" />
 </form>
	
<?php
if(isset($_POST["btn"])){
 $rakam1=$_POST["rakam1"];
 $rakam2=$_POST["rakam2"]; 
 $islem=$_POST["islem"];
 switch ($islem)
 {
	 case "topla": $sonuc=$rakam1+$rakam2;break;
	 case "cikar": $sonuc=$rakam1-$rakam2;break;
	 case "carp" : $sonuc=$rakam1*$rakam2;break; 
	 case "bol" : $sonuc=$rakam1/$rakam2;break; 
	 } 
	 echo "İlk Rakam = " .$rakam1."<br>"; 
	 echo "İkinci Rakam = " .$rakam2."<br>"; 
	 echo "sonuc = " .$sonuc; 
	 }
	 ?>
</body>
</html>