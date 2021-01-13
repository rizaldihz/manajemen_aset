<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExcelService;

class ReportController extends BaseController
{
    protected $excelService;
    public function __construct(ExcelService $excelService)
    {
        $this->excelService = $excelService;
    }
    public function report_view()
    {
        return view('dashboard.report');
    }
    public function export_excel()
    {
        return $this->excelService->export();
    }
}
