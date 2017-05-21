<?php

use Illuminate\Database\Seeder;
use Site\Models\CompanyUser;
use Site\Models\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class,5)->create()->each(function($o){
            $o->users()->save(factory(CompanyUser::class)->make());
        });

    }
}
