<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExcelService;
use App\Services\Plugins\Excel\IExcelExportManager;


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
    public function export_excel(IExcelExportManager $excelExportManager)
    {
        return $this->excelService->export($excelExportManager);
    }
}
