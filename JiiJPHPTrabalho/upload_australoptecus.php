
<?php
$dir= $_POST['diretorio'];
if(is_dir($dir)){
    //nada
}else{
    mkdir($dir);
}
$nomeTempero = $_FILES['userfile']['tmp_name'];
$nomeFamilia = $_FILES['userfile']['name'];
$noneFile = $_POST['nome'];
$parInfo = pathinfo("$nomeFamilia");
$ext =$parInfo['extension'];
$extenções = array("jpeg","jpg","png");
if(in_array($ext,$extenções)){           
$ctr = move_uploaded_file($nomeTempero,$dir."/".$nomeFamilia.".$ext");
}

 if($ctr){
    echo "Uploadado com sucesso !!!!";
 }else{
     echo "Upload sem sucesso !!!";
 } 
 echo "<a href=\"galeriadoJIIJsquirt.php\"> <button> Ir para galeria </button> </a> <br>";
 echo "<a href=\"deletarhihi.php\"> <button> Deletar  Imagem </button> </a>";
