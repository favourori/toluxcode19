<?php

use Illuminate\Database\Seeder;
use App\Model\Status;
use Carbon\Carbon;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Status::truncate();
        $data = [
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'pending'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'active'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'delivered'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'confirmed'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'rejected'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'verified'],
        ];
        Status::insert($data);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
