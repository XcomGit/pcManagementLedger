<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Core\Configure;

/**
 * PC_MANAGEMENT_LEDGER Entity
 */
class PcManagementLedger extends Entity
{
    /**
     * 管理用ステータスの日本語名を取得します
     * 
     * @return string 管理用ステータスの日本語
     */
    public function getPcStatusJp(): string
    {
        $pcStatus = Configure::read('pcStatus');
        return isset($pcStatus[$this->pc_status]) ? $pcStatus[$this->pc_status] : '';
    }

    /**
     * 部署の日本語名を取得します
     * 
     * @return string 部署の日本語
     */
    public function getDeptJp(): string
    {
        $dept = Configure::read('dept');
        return isset($dept[$this->dept]) ? $dept[$this->dept] : '';
    }

    /**
     * グループの日本語名を取得します
     * 
     * @return string グループの日本語
     */
    public function getStaffGroupJp(): string
    {
        $staffGroup = Configure::read('staffGroup');
        return isset($staffGroup[$this->staff_group]) ? $staffGroup[$this->staff_group] : '';
    }

    /**
     * 社員区分の日本語名を取得します
     * 
     * @return string 社員区分の日本語
     */
    public function getStaffPostJp(): string
    {
        $staffPost = Configure::read('staffPost');
        return isset($staffPost[$this->staff_post]) ? $staffPost[$this->staff_post] : '';
    }

    /**
     * 社員部署の日本語名を取得します
     * 
     * @return string 社員部署の日本語
     */
    public function getStaffDeptJp(): string
    {
        $staffDept = Configure::read('staffDept');
        return isset($staffDept[$this->staff_dept]) ? $staffDept[$this->staff_dept] : '';
    }

    /**
     * 利用用途区分の日本語名を取得します
     * 
     * @return string 利用用途区分の日本語
     */
    public function getUseStatusJp(): string
    {
        $useStatus = Configure::read('useStatus');
        return isset($useStatus[$this->use_status]) ? $useStatus[$this->use_status] : '';
    }

    /**
     * 種別の日本語名を取得します
     * 
     * @return string 種別の日本語
     */
    public function getPcTypeJp(): string
    {
        $pcType = Configure::read('pcType');
        return isset($pcType[$this->pc_type]) ? $pcType[$this->pc_type] : '';
    }

    /**
     * OSの日本語名を取得します
     * 
     * @return string OSの日本語
     */
    public function getOsJp(): string
    {
        $os = Configure::read('os');
        return isset($os[$this->os]) ? $os[$this->os] : '';
    }

    /**
     * ESETの日本語名を取得します
     * 
     * @return string ESETの日本語
     */
    public function getEsetJp(): string
    {
        $eset = Configure::read('eset');
        return isset($eset[$this->eset]) ? $eset[$this->eset] : '';
    }

    /**
     * 場所の日本語名を取得します
     * 
     * @return string 場所の日本語
     */
    public function getAreaJp(): string
    {
        $area = Configure::read('area');
        return isset($area[$this->area]) ? $area[$this->area] : '';
    }
}