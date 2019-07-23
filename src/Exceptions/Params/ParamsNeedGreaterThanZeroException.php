<?php

namespace VaryException\Exceptions\Params;

use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

/**
 * Class ParseException
 * @package App\Modules\Exceptions
 */
class ParamsNeedGreaterThanZeroException extends VaryException
{
    public $parse_info;

    public function __construct(
        $receive_num
    ) {
        $code = ExceptionCodeConstants::params_need_greater_than_zero_code;

        $message = sprintf(ExceptionCodeConstants::params_need_greater_than_zero_msg, $receive_num);

        parent::__construct($message, $code);
    }
}

