<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 6/19/19
 * Time: 11:02 AM
 */

namespace App\Modules\Exceptions;


use App\Models\OmissionErrorLog;

class OutMapRangeException extends \Exception
{
    public function __construct($msg)
    {
        $this->code = 400;

        $this->message = sprintf('%s 不在范围 ', $msg);

        OmissionErrorLog::generate($this);
    }
}
