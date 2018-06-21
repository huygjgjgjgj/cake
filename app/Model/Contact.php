<?php
/**
 * Created by PhpStorm.
 * User: Staff
 * Date: 20/06/2018
 * Time: 17:08
 */
App::uses('Model','AppModel');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class Contact extends AppModel
{
    var $useTable = "contacts";
    public $primaryKey = 'id';

    public $validate = array(
        "cmt" => array(
            'rule' => '/^[a-z0-9]{9,13}$/i',
            'message' => 'Chứng minh thư phải là số nguyên và bảng chữ cái, trong khoảng từ 9 đến 13 ký tự',
        ),
//        "Email" => array(
//            'rule' => 'notEmpty',
//            'message' => 'Chưa nhập Email',
//        )
    );
}