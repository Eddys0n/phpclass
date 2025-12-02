<?php

namespace App\Models;

use CodeIgniter\Model;

class Member extends Model
{
    public function user_login($email,$txtPassword)
    {
        $db = db_connect();
        $sql ='select memberPassword, memberKey, roleID, memberID from members where memberEmail = ? and roleID =2';
        $query = $db->query($sql,[$email]);
        $row = $query->getFirstRow();

        if($row!=null){
            $DBPass = $row->memberPassword;
            $MemberKey = $row->memberKey;
            $txtPassword = md5($txtPassword. $MemberKey);
            if($txtPassword==$DBPass){
                return true;
            }else{
                return false;
            }

        }else{
            return false;
        }
    }
    public function create_account($username, $email,$txtPassword, $roleID)
    {
        $db = db_connect();
        //memberkey
        $memberKey =  sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
        $hashedPassword = md5($txtPassword, $memberKey);

        $sql = "INSERT INTO members (memberName, memberEmail, memberPassword, memberKey, roleID) VALUES (?, ?, ?, ?, ?);";

        try {
            $db->query($sql,[
               $username,
               $email,
               $hashedPassword,
               $memberKey,
               $roleID
            ]);
            if ($db->affectedRows()>0){
                return true;
            }
            return false;
        } catch (\mysqli_sql_exception $e){
            return false;
        }

    }

}