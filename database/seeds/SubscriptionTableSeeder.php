<?php

use Illuminate\Database\Seeder;
use App\Model\Subscription;
use Carbon\Carbon;

class SubscriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Subscription::truncate();
        $data = [
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'basic'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'premium'],
                ['created_at' => Carbon::now(), 'updated_at' => Carbon::now(), 'name' => 'ultimate'],
        ];
        Subscription::insert($data);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
