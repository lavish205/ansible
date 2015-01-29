<?php
// Zabbix GUI configuration file
global $DB;

// Valid types are MYSQL, SQLITE3 or POSTGRESQL
$DB["TYPE"]			= 'MYSQL';
$DB["SERVER"]			= 'localhost';
$DB["PORT"]			= '0';

// SQLITE3 use full path to file/database: $DB["DATABASE"] = '/var/lib/zabbix/zabbix.sqlite3';
$DB["DATABASE"]			= '{{ zabbix_server_db_name }}';
$DB["USER"]			= '{{ zabbix_server_db_user }}';
$DB["PASSWORD"]			= '{{ zabbix_server_db_pass }}';
// SCHEMA is relevant only for IBM_DB2 database
$DB["SCHEMA"]			= '';

$ZBX_SERVER			= 'localhost';
$ZBX_SERVER_PORT		= '10051';
$ZBX_SERVER_NAME		= '';

$IMAGE_FORMAT_DEFAULT	= IMAGE_FORMAT_PNG;
?>
