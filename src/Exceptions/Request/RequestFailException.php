<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 4/19/19
 * Time: 1:49 PM
 */

namespace App\Modules\Exceptions;

use App\Modules\Exceptions\Interfaces\WillLogExceptionInterface;
use Exception;
use Throwable;

class RequestFailException extends Exception implements WillLogExceptionInterface
{
    private $errorMsg;

    public function __construct(
        $error_msg,
        $request_illumination
    ) {
        $this->code = 500;

        $this->errorMsg = $error_msg;

        $this->message = sprintf('%s请求出错', $request_illumination);

        parent::__construct($this->message, $this->code, null);
    }
}
