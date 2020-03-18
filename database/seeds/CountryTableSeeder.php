<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('countries')->truncate();
        //african countries
        $countries = array();
        $countries[] = array("code"=>"DZ","name"=>"Algeria","d_code"=>"+213");
        $countries[] = array("code"=>"AO","name"=>"Angola","d_code"=>"+244");
        $countries[] = array("code"=>"BJ","name"=>"Benin","d_code"=>"+229");
        $countries[] = array("code"=>"BW","name"=>"Botswana","d_code"=>"+267");
        $countries[] = array("code"=>"BF","name"=>"Burkina Faso","d_code"=>"+226");
        $countries[] = array("code"=>"BI","name"=>"Burundi","d_code"=>"+257");
        $countries[] = array("code"=>"CM","name"=>"Cameroon","d_code"=>"+237");
        $countries[] = array("code"=>"CV","name"=>"Cape Verde","d_code"=>"+238");
        $countries[] = array("code"=>"CF","name"=>"Central African Republic","d_code"=>"+236");
        $countries[] = array("code"=>"TD","name"=>"Chad","d_code"=>"+235");
        $countries[] = array("code"=>"KM","name"=>"Comoros","d_code"=>"+269");
        $countries[] = array("code"=>"CD","name"=>"Democratic Republic of Congo","d_code"=>"+243");
        $countries[] = array("code"=>"CG","name"=>"Republic of the Congo","d_code"=>"+242");
        $countries[] = array("code"=>"CI","name"=>"Côte d'Ivoire" ,"d_code"=>"+225");
        $countries[] = array("code"=>"DJ","name"=>"Djibouti","d_code"=>"+253");
        $countries[] = array("code"=>"EG","name"=>"Egypt","d_code"=>"+20");
        $countries[] = array("code"=>"GQ","name"=>"Equatorial Guinea","d_code"=>"+240");
        $countries[] = array("code"=>"ER","name"=>"Eritrea","d_code"=>"+291");
        $countries[] = array("code"=>"ET","name"=>"Ethiopia","d_code"=>"+251");
        $countries[] = array("code"=>"GA","name"=>"Gabon","d_code"=>"+241");
        $countries[] = array("code"=>"GM","name"=>"Gambia","d_code"=>"+220");
        $countries[] = array("code"=>"GH","name"=>"Ghana","d_code"=>"+233");
        $countries[] = array("code"=>"GN","name"=>"Guinea","d_code"=>"+224");
        $countries[] = array("code"=>"GW","name"=>"Guinea-Bissau","d_code"=>"+245");
        $countries[] = array("code"=>"KE","name"=>"Kenya","d_code"=>"+254");
        $countries[] = array("code"=>"LS","name"=>"Lesotho","d_code"=>"+266");
        $countries[] = array("code"=>"LR","name"=>"Liberia","d_code"=>"+231");
        $countries[] = array("code"=>"LY","name"=>"Libya","d_code"=>"+218");
        $countries[] = array("code"=>"MG","name"=>"Madagascar","d_code"=>"+261");
        $countries[] = array("code"=>"MW","name"=>"Malawi","d_code"=>"+265");
        $countries[] = array("code"=>"ML","name"=>"Mali","d_code"=>"+223");
        $countries[] = array("code"=>"MR","name"=>"Mauritania","d_code"=>"+222");
        $countries[] = array("code"=>"MU","name"=>"Mauritius","d_code"=>"+230");
        $countries[] = array("code"=>"MA","name"=>"Morocco","d_code"=>"+212");
        $countries[] = array("code"=>"MZ","name"=>"Mozambique","d_code"=>"+258");
        $countries[] = array("code"=>"NA","name"=>"Namibia","d_code"=>"+264");
        $countries[] = array("code"=>"NE","name"=>"Niger","d_code"=>"+227");
        $countries[] = array("code"=>"NG","name"=>"Nigeria","d_code"=>"+234");
        $countries[] = array("code"=>"RW","name"=>"Rwanda","d_code"=>"+250");
        $countries[] = array("code"=>"ST","name"=>"São Tomé and Príncipe" ,"d_code"=>"+239");
        $countries[] = array("code"=>"SN","name"=>"Senegal","d_code"=>"+221");
        $countries[] = array("code"=>"SC","name"=>"Seychelles","d_code"=>"+248");
        $countries[] = array("code"=>"SL","name"=>"Sierra Leone","d_code"=>"+232");
        $countries[] = array("code"=>"SO","name"=>"Somalia","d_code"=>"+252");
        $countries[] = array("code"=>"ZA","name"=>"South Africa","d_code"=>"+27");
        $countries[] = array("code"=>"SS","name"=>"South Sudan","d_code"=>"+211");
        $countries[] = array("code"=>"SD","name"=>"Sudan","d_code"=>"+249");
        $countries[] = array("code"=>"SZ","name"=>"Swaziland","d_code"=>"+268");
        $countries[] = array("code"=>"TZ","name"=>"Tanzania","d_code"=>"+255");
        $countries[] = array("code"=>"TG","name"=>"Togo","d_code"=>"+228");
        $countries[] = array("code"=>"TN","name"=>"Tunisia","d_code"=>"+216");
        $countries[] = array("code"=>"UG","name"=>"Uganda","d_code"=>"+256");
        $countries[] = array("code"=>"ZM","name"=>"Zambia","d_code"=>"+260");
        $countries[] = array("code"=>"ZW","name"=>"Zimbabwe","d_code"=>"+263");

        DB::table('countries')->insert($countries);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
