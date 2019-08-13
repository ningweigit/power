<?php

/**
 * Created by PhpStorm.
 * User: zyb
 * Date: 2019/4/24
 * Time: 19:33
 */
class Service_Page_Query_GetZybUser
{
    public function execute($arrInput){
       // var_dump($arrInput);exit;
       // $userInfo = array();
        $uname = $arrInput['uname'];
        $header = [
            'cookie'    => $_COOKIE,
            'pathinfo'  => '/upms/member/getemployeebyuname',
            ];
        $ret=ral('upms','POST',array('uname' =>$uname,),rand(),$header);
        $ret = json_decode($ret, true);
        $userInfo = $ret['data']['employeeInfo'];
        var_dump($userInfo);
        if(empty($userInfo)){
             Bd_Log::warning("Error:[param error], Detail:[$uname do not exist]");
        }else{
            //如果用户为作业帮用户判断是否注册过upms系统
            $obj = new Service_Data_Query_AddPower();
            $func = $arrInput['system'][0];
            var_dump($arrInput['system']);
            $res = $obj->$func();
            var_dump($res);exit;

        }







/*
        if(empty($ret)){
            Bd_Log::warning("Error:[param error], Detail:[$uname do not exist]");
        }else{
            $userInfo = $ret;
            $email = $userInfo['email'];
            $phone = $userInfo['phone'];
            $ucloud = new Hk_Service_Ucloud();
            $uid = $ucloud->getUserUid($phone);
            if($uid !== false){
                $userInfo['uid'] = $uid;
            }
        }

        return array(
                'userInfo' => $userInfo,
                );
    }
    private function _checkInput($arrInput){
        if(empty($arrInput['uname'])){
             throw new Hk_Util_Exception(Hk_Util_ExceptionCodes::PARAM_ERROR,"缺少参数：uname");
        }
    }*/
    }
}
