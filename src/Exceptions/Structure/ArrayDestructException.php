<?php

namespace VaryException\Exceptions\Structure;

use Throwable;
use VaryException\Constants\ExceptionCodeConstants;
use VaryException\Exceptions\VaryException;

/**
 * Class ParseException
 * @package App\Modules\Exceptions
 */
class ArrayDestructException extends VaryException
{
    public $parse_info;

    private $exceptionInfo;

    private $illumination;

    public function __construct(
        $illumination,//析构的说明
        $parse_info,//析构的内容
        Throwable $exception_info//解析时抛出的异常
    )
    {
        $this->illumination = $illumination;

        $this->parse_info = $parse_info;

        $this->exceptionInfo = $exception_info;

        $code = ExceptionCodeConstants::array_destruct_code;

        $message = sprintf(
            ExceptionCodeConstants::array_destruct_msg
        );

        parent::__construct($message, $code);

    }
}

