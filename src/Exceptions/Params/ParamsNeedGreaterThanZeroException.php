<?php

namespace App\Modules\Exceptions;

/**
 * Class ParseException
 * @package App\Modules\Exceptions
 */
class ParamsNeedGreaterThanZeroException extends \Exception
{
    public $parse_info;

    public function __construct(
        $receive_num
    ) {
        $this->code = 400;

        $this->message = sprintf("传递的参数应该大于0 实际传递的是%s", $receive_num);
    }
}

