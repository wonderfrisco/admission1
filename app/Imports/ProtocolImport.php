<?php

namespace App\Imports;

use App\Models\Placement;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithUpsertColumns;
use Maatwebsite\Excel\Concerns\WithUpserts;
use Maatwebsite\Excel\Validators\Failure;

class ProtocolImport implements ToModel,WithHeadingRow, WithUpserts, WithUpsertColumns, WithBatchInserts, WithChunkReading, SkipsEmptyRows
{

    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        $gender = 3;
        if($row['gender'] =='Male') {
            $gender = 1;
        }
        else {
            $gender = 2;
        }
        $status = 3;
        if($row['status'] =='Boarding') {
            $status = 1;
        }
        else {
            $status = 2;
        }

        $programme = 0;
        if($row['programme'] =='GENERAL SCIENCE'){
            $programme = 1;
        }
        elseif($row['programme'] =='GENERAL ARTS'){
            $programme = 2;
        }
        elseif($row['programme'] =='HOME ECONOMICS'){
            $programme = 3;
        }
        elseif($row['programme'] =='VISUAL ARTS'){
            $programme = 4;
        }
        elseif($row['programme'] =='BUSINESS'){
            $programme = 5;
        }
        else{
            $programme = 6;
        }

        return new Placement([
            'index' => $row['index'],
            'name' => $row['name'],
            'gender_id' => $gender,
            'aggregate' => $row['aggregate'],
            'programme_id' => $programme,
            'track' => $row['track'],
            'status_id' => $status,
            'enroll' => false,
            'protocol' => true,
            // 'contact' => $row['contact'],

        ]);
    }
    public function headingRow():int{
        return 3;
    }

    public function uniqueBy()
        {
            return 'index';
        }
    public function upsertColumns()
        {
            return ['name', 'gender_id', 'aggregate', 'programme_id', 'track','status_id'];
        }

        public function batchSize(): int
    {
        return 500;
    }

    public function chunkSize(): int
    {
        return 500;
    }
}
