<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff =[
        ['staffNo' => 'SL21','sName' => 'John White', 'position' => 'Manager ','salary'=>'30000','branchNo'=>'B005'],
        ['staffNo' => 'SG37','sName' => 'Ann Beech', 'position' => 'Assistant ','salary'=>'1200','branchNo'=>'B003'],
        ['staffNo' => 'SG14','sName' => 'David Ford', 'position' => 'Supervisor ','salary'=>'1800','branchNo'=>'B003'],
        ['staffNo' => 'SA9','sName' => 'Marry Howe', 'position' => 'Asistent ','salary'=>'900','branchNo'=>'B007'],
        ['staffNo' => 'SG5','sName' => 'Susan Brand', 'position' => 'Manager','salary'=>'24000','branchNo'=>'B003'],
        ['staffNo' => 'SL41','sName' => 'Julie Lee', 'position' => 'Asistent ','salary'=>'9000','branchNo'=>'B005'],
        ];
        DB::table('staff')->insert($staff);
    }
}
