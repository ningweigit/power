<?php
/**
 * Created by PhpStorm.
 * User: zyb
 * Date: 2019/4/24
 * Time: 19:23
 */

class Action_GetZybUser extends DataFactory_ActionAbstract {
    public function invoke()
    {
        $arrInput = [
            'system' => !empty($this->_requestParam['system']) ? (array)$this->_requestParam['system'] : [],
            'uname' => isset($this->_requestParam['uname']) ? (string)$this->_requestParam['uname'] : '',

        ];

        $objPs = new Service_Page_Query_GetZybUser();
        $arrOutput = $objPs->execute($arrInput);

        return $arrOutput;

    }
}
