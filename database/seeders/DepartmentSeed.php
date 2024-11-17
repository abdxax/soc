<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dep1=new Department();
        $dep1->dep_name="SOC";
        $dep1->save();

        $dep2=new Department();
        $dep2->dep_name="GOC";
        $dep2->save();

        $dep3=new Department();
        $dep3->dep_name="GCC";
        $dep3->save();

        $dep4=new Department();
        $dep4->dep_name="System Admin";
        $dep4->save();

    }
}
