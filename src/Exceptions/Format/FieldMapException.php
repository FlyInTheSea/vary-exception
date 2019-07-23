<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 10/14/18
 * Time: 1:23 AM
 */

namespace VaryException\Exceptions\Format;

use VaryException\Exceptions\VaryException;

class FieldMapException extends VaryException
{
    public function __construct()
    {
        $message = '';

        $code = 1;

        parent::__construct($message, $code);
    }
}
