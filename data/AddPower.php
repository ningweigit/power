<?php
/**
 * Created by PhpStorm.
 * User: zyb
 * Date: 2019/5/4
 * Time: 18:32
 */
class Service_Data_Query_AddPower{
   /* public function __construct(){
        $this->_objDaoStaff = new Dao_Query_Staff();
    }*/

    /**
     * @param $customUid
     */
    public function getStaffByUid($customUid){
    $arrConds =[
        'staff_uid' => $customUid,
    ];
    $arrFields = Dao_Query_Staff::$ALL_FIELDS;
    $listRes=$this->_objDaoStaff->getListByConds($arrConds, $arrFields);
        return $listRes;
    }
    public function dianxiao()
    {
        return 'aa';
    }

}
