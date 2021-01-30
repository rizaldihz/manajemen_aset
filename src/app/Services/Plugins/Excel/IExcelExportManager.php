<?php

namespace App\Services\Plugins\Excel;

use Exception;

interface IExcelExportManager
{
    public function setup();
    public function setContent($content);
    public function export($filename=NULL);
}