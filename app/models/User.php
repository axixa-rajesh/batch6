<?php
class User extends Model
{
    function checkLogin($info,$is_admin='no'){
        $info['email']=addslashes($info['email']);
        $info['password']=md5($info['password']);
        echo $sql="select * from user where email='$info[email]'";
        $rs=$this->query($sql);
        $uinfo=$rs->fetch(PDO::FETCH_ASSOC);
        if(isset($uinfo['password']) && $uinfo['password']==$info['password']){
                if($uinfo['is_admin']=='yes'){
                    if($is_admin=='yes'){
                        return $uinfo;
                    }else{
                        return "block";
                    }
                }else{
                return $uinfo;

                }
        }
        return false;
    }
}

?>