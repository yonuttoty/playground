<?php

setcookie('samesite-test', '1', [
    'samesite' => 'strict',
    'path' => '/'
]);

echo 'Test';