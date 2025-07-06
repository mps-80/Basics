<?php

function handleException(Throwable $exception) {
    echo "Uncaught Exception ->" . $exception->getMessage(). "<br/>";
}

//handling fatal errors
register_shutdown_function(function(){
    $error = error_get_last();
    if ($error) {
        throw new ErrorException("Oops! Uncaught fatal error", -1, $error['type'], $error['file'], $error['line']);
    }
});

//for warnings
set_error_handler(function($level, $error, $file, $line) {
    if(0 === error_reporting()) {
        return false;
    }
    throw new ErrorException($error, -1, $level, $file, $line);
});

set_exception_handler('handleException');

require 'NonExistFile.php';
