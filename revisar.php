<html>
<head>
<title>informar se o numero e positivo,negativo ou nulo.</title>
</head>
<body>
<form name="numero" id="numero"  type="text" method="POST" >
<label>digite um numero:</label>
<input name="num" id="num"  type="text">
<input type="submit" name="ok" id="ok" value="ok">
  </form>
  
        
 <?php
$n= $_POST['num'];

if ($n>0){
echo "esse numero e positivo";
}
else if($n<0){
    echo "esse numero e negativo";   

}
else{
     echo "esse numero e nulo";
}

 ?>       
</body>
</html>