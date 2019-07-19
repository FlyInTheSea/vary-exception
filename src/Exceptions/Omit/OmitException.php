<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 5/19/19
 * Time: 8:59 PM
 */

namespace App\Modules\Exceptions\Process;


use App\Models\ErrorLog;
use Exception;

class BlankException extends Exception
{
    public $cause_exception;

    public $cause_exception_id;

    public function __construct(
        $message
    ) {

//        $this->cause_exception = $throwable;
//
//        $log = ErrorLog::generate($throwable);
//
//        $message = sprintf(
//            "%s阶段发生错误 错误id:%s", $this->message, $log->id
//        );
//
//        $this->cause_exception_id = $log->id;

        parent::__construct($message, 200, null);
    }
}