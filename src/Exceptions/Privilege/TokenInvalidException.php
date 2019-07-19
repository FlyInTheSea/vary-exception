<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 9/27/18
 * Time: 1:30 PM
 */

namespace App\Modules\Exceptions;


class TokenInvalidException extends \Exception
{
    public function __construct($message = "", $code = 401, \Throwable
    $previous = null)
    {
        $this->code = $code;
        parent::__construct($message, $code, $previous);
    }
}