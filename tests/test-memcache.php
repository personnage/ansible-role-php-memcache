<?php

$key = 'test-key';
$value = 'value';

if (class_exists('Memcache')) {
    $memcache = new \Memcache;
    $memcache->addServer('127.0.0.1', 11211);

    if ($memcache->add($key, $value, false, 1) && ($memcache->get($key) == $value)) {
      print "Memcache connection successful.\r\n";
      exit(0);
    }
}

print "Memcache not working properly.\r\n";
exit(1);
