<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 4/19/19
 * Time: 1:49 PM
 */

namespace App\Modules\Exceptions;

use App\Models\ErrorLog;
use App\Modules\Exceptions\Interfaces\WillLogExceptionInterface;
use Exception;
use Throwable;

class RequestFailException extends Exception implements WillLogExceptionInterface
{

    public function __construct(
        $request_illumination,
        $url,
        $params,
        Throwable $throwable,
        $method
    ) {
        $this->code = 500;

        $log = ErrorLog::generate($throwable);

        $this->message = sprintf('%s请求出错 地址是%s 参数是%s 请求方式 %s 原始错误信息 %s 错误日志id %s', $request_illumination,
            $url,
            json_encode($params),
            $method,
            $throwable->getMessage(),
            $log->id
        );

        parent::__construct($this->message, $this->code, null);
    }
}
