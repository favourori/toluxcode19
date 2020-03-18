<?php

use Illuminate\Database\Seeder;
use App\Model\Role;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Role::truncate();
        $data = [
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'user'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'admin'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'superadmin'],
        ];
        Role::insert($data);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
