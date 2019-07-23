<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 5/19/19
 * Time: 8:59 PM
 */


namespace VaryException\Exceptions\Omit;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class OmitException extends VaryException
{
    public function __construct()
    {
        $message = ExceptionCodeConstants::omit_msg;

        $code = ExceptionCodeConstants::omit_code;

        parent::__construct($message, $code);
    }
}