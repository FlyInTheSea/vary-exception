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

class VaryException extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $this->record();

        parent::__construct($message, $code, $previous);
    }


    /**
     * 如果抛出一个错误
     *
     * 下面的逻辑是往数据库里写日志
     *
     * 但是如果写日志的时候又抛出异常 (不论捕捉未捕捉 因为 调用 construct 的时候就已经有写日志的行为了)
     *
     * 则会进入死循环
     *
     * 想到的两种方法解决
     * 1.  将写数据库相关的异常单独处理
     * 2.  不采取写入数据库的行为  写入文件 然后使用进程单独对文件进行解析 写入到表
     *
     * 决定采用写入文件的形式
     */
    public function record() : void
    {
        
    }
}