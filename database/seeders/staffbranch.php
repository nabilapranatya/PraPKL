<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class staffbranch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staffbranch = [
        ['staffNo' => 'SL21','sName' => 'John White', 'position' => 'Manager ','salary'=>'30000','branchNo'=>'B005','bAdress'=>'22 Deer Rd.London'],
        ['staffNo' => 'SG37','sName' => 'Ann Beech', 'position' => 'Assistant ','salary'=>'1200','branchNo'=>'B003','bAdress'=>'163 Main St, Glasgrow'],
        ['staffNo' => 'SG14','sName' => 'David Ford', 'position' => 'Supervisor ','salary'=>'1800','branchNo'=>'B003','bAdress'=>'163 Main St, Glasgrow'],
        ['staffNo' => 'SA9','sName' => 'Marry Howe', 'position' => 'Asistent ','salary'=>'900','branchNo'=>'B007','bAdress'=>'16 Argyll St, Aberdeen'],
        ['staffNo' => 'SG5','sName' => 'Susan Brand', 'position' => 'Manager','salary'=>'24000','branchNo'=>'B003','bAdress'=>'163 Main St, Glasgrow'],
        ['staffNo' => 'SL41','sName' => 'Julie Lee', 'position' => 'Asistent ','salary'=>'9000','branchNo'=>'B005','bAdress'=>'22 Deer Rd, London'],
        ];
        DB::table('staffbranch')->insert($staffbranch);
    }

}
