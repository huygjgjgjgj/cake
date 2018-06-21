<?php
/**
 * Created by PhpStorm.
 * User: Staff
 * Date: 20/06/2018
 * Time: 14:24
 */
App::uses('Model','AppModel');
class Account extends AppModel
{
    var $useTable = "accounts";
    function checkLogin($username,$password){
        $sql = array('conditions' => array('username'=>$username, 'password'=>$password));
        $data = $this->find('all',$sql);
        if($this->getNumRows()==0){
            return false;
        }else{
            return true;
        }
    }

    public $validate = array(
        'username' => array(
            'rule1' => array(
                'rule'=>'/^[a-z0-9]{9,13}$/i',
                'message' => 'Tên đăng nhập phải là số nguyên và bảng chữ cái, trong khoảng từ 4 đến 10 ký tự',
            ),
            'rule2' => array(
                'rule' => 'alphaNumeric',
                'required'  =>  true ,
                'message'  =>  'ko được để rỗng'
            )
        )
    );
}