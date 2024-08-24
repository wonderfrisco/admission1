<?php

namespace App\Exports;

use App\Models\placement;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithDefaultStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Style as DefaultStyles;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PlacementExport implements FromView, Withheadings, ShouldAutoSize, WithMapping, WithStyles, WithDefaultStyles
{
    protected  $data;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($data)
    {
        $this->data = $data;
    }
    // public function array(): array
    // {
    //     return $this->data->toArray();
    // }
    public function view(): View
    {
        return view('backend.placement.export', [
            'data' => $this->data
        ]);
    }
    // public function collection()
    // {
    //     return placement::all();
    // }

public function headings():array{
    return [

        [
            'Index Number',
            'Name',
            'Gender',
            'Aggregate',
            'Programme',
            'Track',
            'Status',
        ]
    ];
}
public function map($row): array {
    return[
        $row['index'],
        $row['name'],
        $row['gender'],
        $row['aggregate'],
        $row['programme'],
        $row['track'],
        $row['status'],
    ];
}

public function styles(Worksheet $sheet)
{
    // return [
    //     // '1'=> ['font'=>['bold'=>true]]
    // ];
    $sheet->getStyle('1')->getFont()->setBold(true);
    $sheet->getStyle('2')->getFont()->setBold(true);
    $sheet->getStyle('1')->getFont()->setSize(11);
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
