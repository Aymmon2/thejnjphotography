<?php

namespace App\Http\Controllers;

use App\Models\AppointmentRequest;
use Illuminate\Http\Request;
use App\Exports\CustomerDataExport;
use Maatwebsite\Excel\Facades\Excel;
use DateTime;

class CustomerExportController extends Controller
{

    public function CustomerDataController(Request $request){
        $startDate = $request->input('date_start');
        $endDate = $request->input('date_end');

    if (!$startDate || !$endDate) {
        $startDate = (new Datetime())->modify('first day of this month')->format('Y-m-d');
        $endDate = (new DateTime())->modify('last day of this month')->format('Y-m-d');
    }
        $data = AppointmentRequest::whereBetween('created_at', [$startDate, $endDate])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('customerdata', compact('endDate','startDate','data'));
    }

    public function CustomerDataExport(Request $request){
        $startDate = $request->input('date_start');
        $endDate = $request->input('date_end');

        if (!$startDate || !$endDate) {
            $startDate = now()->startOfMonth()->format('Y-m-d');
            $endDate = now()->endOfMonth()->format('Y-m-d');
        }
        return Excel::download(new CustomerDataExport($startDate, $endDate), 'Book Appointment Record.xlsx');
    }
}
