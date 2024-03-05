<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //
        $qb = DB::table('vaccines');
        $insert = [
            [
                'id' => null,
                'child_id' => 1,
                'name' => 'インフルエンザ菌ｂ型（ヒブ）',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => '肺炎球菌',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => 'B型肝炎',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => 'ロタウイルス',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => '４種混合',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => '３種混合',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => 'ポリオ',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => 'BCG',
                'startdate' => 5,
                'enddate' => 6,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => '麻疹・風疹混合',
                'startdate' => 12,
                'enddate' => 23,
                'type' => 1
            ],
            [
                'id' => null,
                'child_id' => 1,
                'name' => '水痘',
                'startdate' => 2,
                'enddate' => 3,
                'type' => 1
            ],
        ];
        $qb->insert($insert);
    }
}
