<?php

require_once 'vendor/autoload.php';

$data = array(
    'writer_type' => 'file', // 目前只支持file
    'db_type' => 'mysql',
    'db_username' => 'root',
    'db_password' => '',
    'db_host' => '127.0.0.1',
    'db_name' => 'hsl',
    'db_port' => '3306',
    'db_charset' => 'utf8mb4',
    'file_path' => '/Users/levan/code/ant-backup/demo', // 需读写权限
    'file_name' => '', // 可为空
    'ignore'=> ['telescope_entries', 'telescope_entries_tags', 'telescope_monitoring'],
    'gz_write' => true  // 是否开启gzip压缩,需gzip拓展
);
$BC = new AntBackup\AntBackup($data);

// 备份
//$rs = $BC->dbBackup();
//print_r($rs);

// 获取备份列表
//$list = $BC->getBackupList();
//print_r($list);
//
//// 恢复指定文件
$rs = $BC->dbRecover('20191125073101_backup.gz');
var_dump($rs);
