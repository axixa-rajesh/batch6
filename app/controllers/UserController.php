<?php
class UserController extends Controller
{
    public $user;
    public function __construct()
    {
        parent::__construct();
        $this->user = $this->loadModel('user');
    }
    public function index()
    {
        if(Session::get('logindtl')){
            redirect('disease');
        }
        if(request('email')){
            $email= trim(request('email'));
            $password = trim(request('password'));
            
            if($email && $password){
                    if($info=$this->user->checkLogin(compact('email','password'))){
                                if($info=='block'){
                            Session:: set( 'emsg', "You can't access");

                                }else{
                                    Session::set('logindtl',$info);
                                    redirect("disease");
                                }
                           }else{
                Session:: set('emsg', "Please Enter valid username and password");

                           } 
                    
            }else{
                Session::set('emsg',"Please Enter Both username and password");
            }
        }

        $this->view->load("user.index");
    }
    public function logout(){
        Session::destroy();
        redirect("user");

    }    
}
