<?php

namespace App\Exports;

use App\Models\AppointmentRequest;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use PhpOffice\PhpSpreadsheet\Style\Border;
use Carbon\Carbon;

class CustomerDataExport implements FromCollection, WithHeadings, WithStyles, WithMapping, ShouldAutoSize, WithEvents
{
    use Exportable;

    protected $startDate;
    protected $endDate;

    public function __construct($startDate, $endDate)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }


    public function collection()
    {

        return AppointmentRequest::whereBetween('created_at', [$this->startDate, $this->endDate])
        ->get();
    }
    public function headings(): array
    {
        return [
        'CUSTOMER DATA REPORT'
        ];

    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
            $event->sheet->getDelegate()->mergeCells('A1:H1');
            $event->sheet->getDelegate()->getRowDimension(1)->setRowHeight(30);

            $event->sheet->getDelegate()->insertNewRowBefore(2);
            $event->sheet->getDelegate()->setCellValue('A2', 'DATE ENQUIRY');
            $event->sheet->getDelegate()->setCellValue('B2', 'NAME');
            $event->sheet->getDelegate()->setCellValue('C2', 'EMAIL');
            $event->sheet->getDelegate()->setCellValue('D2', 'CONTACT NUMBER');
            $event->sheet->getDelegate()->setCellValue('E2', 'DATE OF EVENT');
            $event->sheet->getDelegate()->setCellValue('F2', 'TIME OF EVENT');
            $event->sheet->getDelegate()->setCellValue('G2', 'OCCASION');
            $event->sheet->getDelegate()->setCellValue('H2', 'MESSAGE');




                // Apply borders to cells
                $cellRange = 'A2:H2'; // Range of cells to apply borders
                $event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['argb' => 'FF000000'], // Border color
                        ],
                    ],
                ]);
            },
        ];
    }

    public function map($row): array
    {
        $dateTime = Carbon::parse($row->date . ' ' . $row->time);
        return [
            $row->created_at->format('F-d-Y'),
            $row->name,
            $row->email,
            $row->contact_number,
            $dateTime->format('F-d-Y'), // Date
            $dateTime->format('h:i A'), // Time
            $row->occasion,
            $row->message,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:H1')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'ffff'], // baby pink
            ],

            'font' => [
                'bold' => true,
                'color' => ['rgb' => '000000'],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, // Center-align text horizontally
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER, // Center-align text vertically
            ],
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, // Thin border
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ]);

        // Apply styles to each cell in the data range
        $lastRow = $sheet->getHighestRow();
        $lastColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $lastRow; $row++) {
            for ($col = 'A'; $col <= $lastColumn; $col++) {
                // Apply style to each cell
                $sheet->getStyle("{$col}{$row}")->applyFromArray([
                    'alignment' => [
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                    ],
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['rgb' => '000000'],
                        ],
                    ],
                ]);
            }
        }

    }

}
