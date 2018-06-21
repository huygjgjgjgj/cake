<?php
/**
 * Created by PhpStorm.
 * User: Staff
 * Date: 19/06/2018
 * Time: 16:35
 */

class UsersController extends AppController
{
    var $name = "Users";
    var $helpers = array("Html");
    var $component = array("Session");
    public $uses = array('Account','Contact');

    function login(){

        $username = "";
        $error = "";
//        if($this->request->is('post')){
//            $data = $this->request->data;
//        }

        if($this->request->is('post')){
            $username = $this->request->data('username');
            $password = $this->request->data('password');

            if($this->Account->checkLogin($username,$password)) {
                $this->Session->write("session", $username); //ghi session
                $this->redirect("info");
            }else{
                $error = "Tên đăng nhập và mật khẩu không đúng";
            }

        }
        $this->set('data',$username);
        $this->set("error",$error);
    }

    function info(){
        if($this->Session->check("session")){//kiểm tra có session hay không
            
        }
    }
    function logout(){
        $this->Session->delete('session'); //xóa session
        $this->redirect("login"); //chuyển trang login
    }

    function Register(){
        $this->Contact->set($this->data);
        if ($this->Account->save($this->request->data)) {
            if ($this->Contact->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect('info');
            }else{
                $errors['Contact'] = $this->Contact->validationErrors;
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }else{
            $errors['Account'] = $this->Account->validationErrors;
        }
    }
}









































