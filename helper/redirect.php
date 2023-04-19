<?php
function redirect($path)
{
    $path = ROOT . str_replace('.', '/', $path);
    // echo $path;
    header("Location:$path");
    // echo "<script>location.href='$path';</script>";
}
function check_login($k='logindtl',$rd='user'){
    if(!Session::get($k)){
            redirect($rd);
    }
}
function move($from,$to){
    $path="publics/files/".$to;
    move_uploaded_file($from,$path);
    return "files/".$to;
}