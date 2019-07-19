<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 10/17/18
 * Time: 11:19 AM
 */

namespace App\Modules\Exceptions;


//use Illuminate\Database\QueryException;

class SameRecordIsExistException extends \Exception
{


    protected $subfix_prompt_info = "相同的记录已经存在";

    public function __construct(
        $message = "",
        $code = 400,
        \Throwable $previous = null
    ) {
        $this->code = $code;

        parent::__construct($message . $this->subfix_prompt_info, $code, $previous);
    }
}