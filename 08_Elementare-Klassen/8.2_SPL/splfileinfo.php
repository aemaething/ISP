<?php

$fi = new SplFileInfo(sys_get_temp_dir());

var_dump($fi->getRealPath());
// string(56) "/private/var/folders/62/pkmd9jxd4xjct3ljwzr8nzp80000gn/T"

var_dump($fi->isDir());
// bool(true)

var_dump($fi->isWritable());
// bool(true)
