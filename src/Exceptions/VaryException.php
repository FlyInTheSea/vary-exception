<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 7/19/19
 * Time: 11:05 AM
 */

namespace VaryException\Exceptions;

use Exception;
use Throwable;

/**
 * 并非所有的异常都集成此 父类
 * Class VaryException
 * @package VaryException\Exceptions
 */
class VaryException extends Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {


        parent::__construct($message, $code, $previous);
    }
}