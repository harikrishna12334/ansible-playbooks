<?php
$AUTOCONFIG = array (
  'dbtype'            => 'mysql',
  'dbname'            => 'owncloud',
  'dbhost'            => 'localhost',
  'dbtableprefix'     => '',
  'dbuser'            => 'owncloud',
  'dbpass'            => '{{mysql_owncloud_password}}',
  "adminlogin"        => "{{owncloud_adminlogin}}",
  "adminpass"         => "{{owncloud_adminpass}}",
  "directory"         => "/home/owncloud/data", // datadirectory
);
