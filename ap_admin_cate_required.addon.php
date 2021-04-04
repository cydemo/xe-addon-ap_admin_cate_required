<?php

if(!defined('__XE__')) exit();

/**
 * @file ap_admin_cate_required.addon.php
 * @author cydemo (cydemo@gmail.com)
 * @brief Category Selection will be Required also to Administrator
**/

if ($called_position != 'after_module_proc' || $this->module != 'board' || $this->act != 'dispBoardWrite' || Context::get('logged_info')->is_admin != 'Y') return;

Context::unloadJsFile($this->module_path.'tpl/filter', 'insert_admin.xml');
Context::addJsFilter($this->module_path.'tpl/filter', 'insert.xml');

return;

?>