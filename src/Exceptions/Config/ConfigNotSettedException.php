<?php

namespace App\Modules\Exceptions;

class ConfigNotSettedException extends \Exception
{
    public function __construct(
        $message = ""
    ) {
        $this->code = 400;

        $this->message = sprintf('%s ' ,$message);
        throw new ConfigNotSettedException('没有配置 页面 ' . $page_name . ' 的图像类型');

    }
}

