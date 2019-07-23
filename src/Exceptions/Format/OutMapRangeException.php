<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 6/19/19
 * Time: 11:02 AM
 */

namespace VaryException\Exceptions\Format;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

class OutMapRangeException extends VaryException
{
    public function __construct($val)
    {
        $code = ExceptionCodeConstants::out_map_range_code;

        $message = sprintf(ExceptionCodeConstants::out_map_range_msg, $val);

        parent::__construct($message, $code);
    }
}
