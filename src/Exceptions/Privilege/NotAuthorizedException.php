<?php
/**
 * Created by PhpStorm.
 * User: zhu
 * Date: 9/27/18
 * Time: 2:22 PM
 */

namespace App\Modules\Exceptions;

use Exception;

class NotAuthorizedException extends Exception
{

    public function __construct()
    {
        $this->code    = 400;
        $this->message = '没权限';
    }

}