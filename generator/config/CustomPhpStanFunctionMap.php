<?php

/**
 * Our own custom function map, used to quickly correct errors in phpstan's function map.
 * This file must always be check against phpstan file to remove duplicates as phpstan keep getting corrected.
 */

return [
    'password_hash' => ['string|false', 'password'=>'string', 'algo'=>'int|string|null', 'options='=>'array'],
    'com_load_typelib' => ['bool', 'typelib_name'=>'string', 'case_insensitive='=>'bool'], // case_insensitive is a bool
    'sem_get' => ['resource|false', 'key'=>'int', 'max_acquire='=>'int', 'perm='=>'int', 'auto_release='=>'bool'], // auto_release is a bool
    'imap_open' => ['resource|false', 'mailbox'=>'string', 'user'=>'string', 'password'=>'string', 'flags='=>'int', 'retries='=>'int', 'options=' => 'array'], //the last 3 parameters were renamed
    'imagerotate' => ['resource|false', 'src_im'=>'resource', 'angle'=>'float', 'bgdcolor'=>'int', 'ignoretransparent='=>'bool'], //ignoretransparent is a bool instead of a int
    'pg_pconnect' => ['resource|false', 'connection_string'=>'string', 'flags' => 'int'], //flags is an int instead of a string
    'get_headers' => ['array|false', 'url'=>'string', 'format='=>'bool', 'context='=>'resource'], // format is a bool instead of int
    'imagegrabwindow' => ['GdImage|false', 'handle'=>'int', 'client_area'=>'bool'], // client_ara is a bool instead of an int
    'curl_init' => ['CurlHandle|false', 'url'=>'string'], // the return value is a CurlHandle instead of a resource
];
