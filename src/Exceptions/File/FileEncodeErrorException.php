<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 10/17/18
 * Time: 2:00 PM
 */

namespace VaryException\Exceptions\File;


use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class FileEncodeErrorException extends VaryException
{
    public function __construct()
    {
        $message = ExceptionCodeConstants::file_encode_error_code_msg;

        $code = ExceptionCodeConstants::file_encode_error_code;

        parent::__construct($message, $code, null);
    }
}