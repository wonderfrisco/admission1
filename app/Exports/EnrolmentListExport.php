<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Style as DefaultStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EnrolmentListExport implements FromView, WithHeadings, ShouldAutoSize, WithStyles, WithDefaultStyles
{
    protected  $data;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('backend.enrolment.enrolmentListExcel', [
            'data' => $this->data
        ]);
    }

    public function headings():array{
        return [

            [
                'Index Number',
                'Name',
                'Gender',
                'Aggregate',
                'Programme',
                'Status',
                'House',
                'Date of Birth',
                'Place of Birth',
                'Raw Score',
                'Nationality',
                'Region',
                'District',
                'Basic School',
                'Home Town',
                'Enrolment Code',
                'Residential Address',
                'Religion',
                'Disability',
                'Medications',
                'Allergies',
                // 'Parent/Guardian Name',
                // 'Parent/Guardian Occupation',
                // 'Parent/Guardian phone',
                // 'Parent/Guardian Home',
                // 'Parent/Guardian Address',
                // 'Relationship',
                // 'Emergency Contact Name',
                // 'Emergency Contact Occupation',
                // 'Emergency Contact Phone',
                // 'Emergency Contact Home',
                // 'Emergency Contact Address',
                // 'Relationship',


            ]
        ];
    }

    // public function map($row): array {
    //     return[
    //         $row['index'],
    //         $row['name'],
    //         $row['gender'],
    //         $row['aggregate'],
    //         $row['programme'],
    //         $row['track'],
    //         $row['status'],
    //     ];
    // }

    public function styles(Worksheet $sheet)
{
    // return [
    //     // '1'=> ['font'=>['bold'=>true]]
    // ];
    $sheet->getStyle('1')->getFont()->setBold(true);
    $sheet->getStyle('2')->getFont()->setBold(true);
    $sheet->getStyle('3')->getFont()->setBold(true);
    $sheet->getStyle('1')->getFont()->setSize(13);
    $sheet->getStyle('2')->getFont()->setSize(13);
}

public function defaultStyles(DefaultStyles $defaultStyle)
{
    return [
        'font' => [
            'name' => 'Cambria',
            'size' => 10
        ],
        'alignment' => [
            'vetical' => Alignment::VERTICAL_CENTER,
        ],
    ];
}
}
