<?php

namespace App\Services\Plugins\Excel\Maatwebsite;

use Exception;
use App\Services\Plugins\Excel\Maatwebsite\Exports\ReportExport;
use App\Services\Plugins\Excel\IExcelExportManager;

class MaatwebsiteExcelExport implements IExcelExportManager
{
    protected $generator;
    public function __construct()
    {
        $this->setup();
    }
    public function setup(){
        $this->generator = NULL;
    }
    public function setContent($content){
        $this->generator = new ReportExport($content[0], $content[1]);
    }
    public function export($filename=NULL){
        return $this->generator->download($filename);
    }
}