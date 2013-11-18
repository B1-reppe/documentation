<?php

############## Add new references here  ##################
############## Adjust when editing docs ##################

$mapping = array(
               'admin-ldap'              => '/admin_manual/auth_ldap.html',
               'admin-dir_permissions'   => '/admin_manual/installation/installation_source.html#set-the-directory-permissions',
               'admin-source_install'    => '/admin_manual/installation/installation_source.html',
               'admin-install'           => '/admin_manual/installation.html',
               
               'user-webdav'             => '/user_manual/files/files.html',
           );

############# Do not edit below this line #################

$from = $_GET['to'];
$proto = isset($_SERVER['HTTPS']) ? 'https' : 'http';
$port = $_SERVER['SERVER_PORT'];
$port = ($port !== '80' && $port !== '443') ? ":$port" : '';
$name = $_SERVER['SERVER_NAME'];
$path = dirname($_SERVER['REQUEST_URI']);

if (array_key_exists($from, $mapping)) {
    $target = $mapping[$from];
} else {
    $target = '';
}

$location = "$proto://$name$port$path$target";

header('HTTP/1.1 302 Moved Temporarily');
header('Location: '.$location);

