<?php

use Illuminate\Database\Seeder;

class LgaTableSeeder extends Seeder {


    /**
     * Run the database seeds.
     *
     * @return void
     */

	public function run()
	{
		DB::table('lgas')->delete();
		DB::table('lgas')->insert(array(

			array(
				'id' => 1,
				'name' => 'Aba North',
				'state_id' => 510,
			),

			array(
				'id' => 2,
				'name' => 'Aba South',
				'state_id' => 510,
			),

			array(
				'id' => 3,
				'name' => 'Arochukwu',
				'state_id' => 510,
			),

			array(
				'id' => 4,
				'name' => 'Bende',
				'state_id' => 510,
			),

			array(
				'id' => 5,
				'name' => 'Ikwuano',
				'state_id' => 510,
			),

			array(
				'id' => 6,
				'name' => 'Isiala Ngwa North',
				'state_id' => 510,
			),

			array(
				'id' => 7,
				'name' => 'Isiala Ngwa South',
				'state_id' => 510,
			),

			array(
				'id' => 8,
				'name' => 'Isuikwuato',
				'state_id' => 510,
			),

			array(
				'id' => 9,
				'name' => 'Obi Ngwa',
				'state_id' => 510,
			),

			array(
				'id' => 10,
				'name' => 'Ohafia',
				'state_id' => 510,
			),

			array(
				'id' => 11,
				'name' => 'Osisioma',
				'state_id' => 510,
			),

			array(
				'id' => 12,
				'name' => 'Ugwunagbo',
				'state_id' => 510,
			),

			array(
				'id' => 13,
				'name' => 'Ukwa East',
				'state_id' => 510,
			),

			array(
				'id' => 14,
				'name' => 'Ukwa West',
				'state_id' => 510,
			),

			array(
				'id' => 15,
				'name' => 'Umuahia North',
				'state_id' => 510,
			),

			array(
				'id' => 16,
				'name' => 'Umuahia South',
				'state_id' => 510,
			),

			array(
				'id' => 17,
				'name' => 'Umu Nneochi',
				'state_id' => 510,
			),

			array(
				'id' => 18,
				'name' => 'Demsa',
				'state_id' => 511,
			),

			array(
				'id' => 19,
				'name' => 'Fufure',
				'state_id' => 511,
			),

			array(
				'id' => 20,
				'name' => 'Ganye',
				'state_id' => 511,
			),

			array(
				'id' => 21,
				'name' => 'Gayuk',
				'state_id' => 511,
			),

			array(
				'id' => 22,
				'name' => 'Gombi',
				'state_id' => 511,
			),

			array(
				'id' => 23,
				'name' => 'Grie',
				'state_id' => 511,
			),

			array(
				'id' => 24,
				'name' => 'Hong',
				'state_id' => 511,
			),

			array(
				'id' => 25,
				'name' => 'Jada',
				'state_id' => 511,
			),

			array(
				'id' => 26,
				'name' => 'Lamurde',
				'state_id' => 511,
			),

			array(
				'id' => 27,
				'name' => 'Madagali',
				'state_id' => 511,
			),

			array(
				'id' => 28,
				'name' => 'Maiha',
				'state_id' => 511,
			),

			array(
				'id' => 29,
				'name' => 'Mayo Belwa',
				'state_id' => 511,
			),

			array(
				'id' => 30,
				'name' => 'Michika',
				'state_id' => 511,
			),

			array(
				'id' => 31,
				'name' => 'Mubi North',
				'state_id' => 511,
			),

			array(
				'id' => 32,
				'name' => 'Mubi South',
				'state_id' => 511,
			),

			array(
				'id' => 33,
				'name' => 'Numan',
				'state_id' => 511,
			),

			array(
				'id' => 34,
				'name' => 'Shelleng',
				'state_id' => 511,
			),

			array(
				'id' => 35,
				'name' => 'Song',
				'state_id' => 511,
			),

			array(
				'id' => 36,
				'name' => 'Toungo',
				'state_id' => 511,
			),

			array(
				'id' => 37,
				'name' => 'Yola North',
				'state_id' => 511,
			),

			array(
				'id' => 38,
				'name' => 'Yola South',
				'state_id' => 511,
			),

			array(
				'id' => 39,
				'name' => 'Eastern Obolo',
				'state_id' => 512,
			),

			array(
				'id' => 40,
				'name' => 'Esit Eket',
				'state_id' => 512,
			),

			array(
				'id' => 41,
				'name' => 'Essien Udim',
				'state_id' => 512,
			),

			array(
				'id' => 42,
				'name' => 'Abak',
				'state_id' => 512,
			),

			array(
				'id' => 43,
				'name' => 'Eket',
				'state_id' => 512,
			),

			array(
				'id' => 44,
				'name' => 'Etim Ekpo',
				'state_id' => 512,
			),

			array(
				'id' => 45,
				'name' => 'Etinan',
				'state_id' => 512,
			),

			array(
				'id' => 46,
				'name' => 'Ibeno',
				'state_id' => 512,
			),

			array(
				'id' => 47,
				'name' => 'Ibesikpo Asutan',
				'state_id' => 512,
			),

			array(
				'id' => 48,
				'name' => 'Ibiono-Ibom',
				'state_id' => 512,
			),

			array(
				'id' => 49,
				'name' => 'Ika',
				'state_id' => 512,
			),

			array(
				'id' => 50,
				'name' => 'Ikono',
				'state_id' => 512,
			),

			array(
				'id' => 51,
				'name' => 'Ikot Abasi',
				'state_id' => 512,
			),

			array(
				'id' => 52,
				'name' => 'Ikot Ekpene',
				'state_id' => 512,
			),

			array(
				'id' => 53,
				'name' => 'Ini',
				'state_id' => 512,
			),

			array(
				'id' => 54,
				'name' => 'Itu',
				'state_id' => 512,
			),

			array(
				'id' => 55,
				'name' => 'Mbo',
				'state_id' => 512,
			),

			array(
				'id' => 56,
				'name' => 'Mkpat-Enin',
				'state_id' => 512,
			),

			array(
				'id' => 57,
				'name' => 'Nsit-Atai',
				'state_id' => 512,
			),

			array(
				'id' => 58,
				'name' => 'Nsit-Ibom',
				'state_id' => 512,
			),

			array(
				'id' => 59,
				'name' => 'Nsit-Ubium',
				'state_id' => 512,
			),

			array(
				'id' => 60,
				'name' => 'Obot Akara',
				'state_id' => 512,
			),

			array(
				'id' => 61,
				'name' => 'Okobo',
				'state_id' => 512,
			),

			array(
				'id' => 62,
				'name' => 'Onna',
				'state_id' => 512,
			),

			array(
				'id' => 63,
				'name' => 'Oron',
				'state_id' => 512,
			),

			array(
				'id' => 64,
				'name' => 'Oruk Anam',
				'state_id' => 512,
			),

			array(
				'id' => 65,
				'name' => 'Udung-Uko',
				'state_id' => 512,
			),

			array(
				'id' => 66,
				'name' => 'Ukanafun',
				'state_id' => 512,
			),

			array(
				'id' => 67,
				'name' => 'Uruan',
				'state_id' => 512,
			),

			array(
				'id' => 68,
				'name' => 'Urue-Offong/Oruko',
				'state_id' => 512,
			),

			array(
				'id' => 69,
				'name' => 'Uyo',
				'state_id' => 512,
			),

			array(
				'id' => 70,
				'name' => 'Aguata',
				'state_id' => 513,
			),

			array(
				'id' => 71,
				'name' => 'Anambra East',
				'state_id' => 513,
			),

			array(
				'id' => 72,
				'name' => 'Anambra West',
				'state_id' => 513,
			),

			array(
				'id' => 73,
				'name' => 'Anaocha',
				'state_id' => 513,
			),

			array(
				'id' => 74,
				'name' => 'Awka North',
				'state_id' => 513,
			),

			array(
				'id' => 75,
				'name' => 'Awka South',
				'state_id' => 513,
			),

			array(
				'id' => 76,
				'name' => 'Ayamelum',
				'state_id' => 513,
			),

			array(
				'id' => 77,
				'name' => 'Dunukofia',
				'state_id' => 513,
			),

			array(
				'id' => 78,
				'name' => 'Ekwusigo',
				'state_id' => 513,
			),

			array(
				'id' => 79,
				'name' => 'Idemili North',
				'state_id' => 513,
			),

			array(
				'id' => 80,
				'name' => 'Idemili South',
				'state_id' => 513,
			),

			array(
				'id' => 81,
				'name' => 'Ihiala',
				'state_id' => 513,
			),

			array(
				'id' => 82,
				'name' => 'Njikoka',
				'state_id' => 513,
			),

			array(
				'id' => 83,
				'name' => 'Nnewi North',
				'state_id' => 513,
			),

			array(
				'id' => 84,
				'name' => 'Nnewi South',
				'state_id' => 513,
			),

			array(
				'id' => 85,
				'name' => 'Ogbaru',
				'state_id' => 513,
			),

			array(
				'id' => 86,
				'name' => 'Onitsha North',
				'state_id' => 513,
			),

			array(
				'id' => 87,
				'name' => 'Onitsha South',
				'state_id' => 513,
			),

			array(
				'id' => 88,
				'name' => 'Orumba North',
				'state_id' => 513,
			),

			array(
				'id' => 89,
				'name' => 'Orumba South',
				'state_id' => 513,
			),

			array(
				'id' => 90,
				'name' => 'Oyi',
				'state_id' => 513,
			),

			array(
				'id' => 91,
				'name' => 'Alkaleri',
				'state_id' => 514,
			),

			array(
				'id' => 92,
				'name' => 'Bauchi',
				'state_id' => 514,
			),

			array(
				'id' => 93,
				'name' => 'Bogoro',
				'state_id' => 514,
			),

			array(
				'id' => 94,
				'name' => 'Damban',
				'state_id' => 514,
			),

			array(
				'id' => 95,
				'name' => 'Darazo',
				'state_id' => 514,
			),

			array(
				'id' => 96,
				'name' => 'Dass',
				'state_id' => 514,
			),

			array(
				'id' => 97,
				'name' => 'Gamawa',
				'state_id' => 514,
			),

			array(
				'id' => 98,
				'name' => 'Ganjuwa',
				'state_id' => 514,
			),

			array(
				'id' => 99,
				'name' => 'Giade',
				'state_id' => 514,
			),

			array(
				'id' => 100,
				'name' => 'Itas/Gadau',
				'state_id' => 514,
			),

			array(
				'id' => 101,
				'name' => 'Jama-are',
				'state_id' => 514,
			),

			array(
				'id' => 102,
				'name' => 'Katagum',
				'state_id' => 514,
			),

			array(
				'id' => 103,
				'name' => 'Kirfi',
				'state_id' => 514,
			),

			array(
				'id' => 104,
				'name' => 'Misau',
				'state_id' => 514,
			),

			array(
				'id' => 105,
				'name' => 'Ningi',
				'state_id' => 514,
			),

			array(
				'id' => 106,
				'name' => 'Shira',
				'state_id' => 514,
			),

			array(
				'id' => 107,
				'name' => 'Tafawa Balewa',
				'state_id' => 514,
			),

			array(
				'id' => 108,
				'name' => 'Toro',
				'state_id' => 514,
			),

			array(
				'id' => 109,
				'name' => 'Warji',
				'state_id' => 514,
			),

			array(
				'id' => 110,
				'name' => 'Zaki',
				'state_id' => 514,
			),

			array(
				'id' => 111,
				'name' => 'Brass',
				'state_id' => 515,
			),

			array(
				'id' => 112,
				'name' => 'Ekeremor',
				'state_id' => 515,
			),

			array(
				'id' => 113,
				'name' => 'Kolokuma/Opokuma',
				'state_id' => 515,
			),

			array(
				'id' => 114,
				'name' => 'Nembe',
				'state_id' => 515,
			),

			array(
				'id' => 115,
				'name' => 'Ogbia',
				'state_id' => 515,
			),

			array(
				'id' => 116,
				'name' => 'Sagbama',
				'state_id' => 515,
			),

			array(
				'id' => 117,
				'name' => 'Southern Ijaw',
				'state_id' => 515,
			),

			array(
				'id' => 118,
				'name' => 'Yenagoa',
				'state_id' => 515,
			),

			array(
				'id' => 119,
				'name' => 'Agatu',
				'state_id' => 516,
			),

			array(
				'id' => 120,
				'name' => 'Apa',
				'state_id' => 516,
			),

			array(
				'id' => 121,
				'name' => 'Ado',
				'state_id' => 516,
			),

			array(
				'id' => 122,
				'name' => 'Buruku',
				'state_id' => 516,
			),

			array(
				'id' => 123,
				'name' => 'Gboko',
				'state_id' => 516,
			),

			array(
				'id' => 124,
				'name' => 'Guma',
				'state_id' => 516,
			),

			array(
				'id' => 125,
				'name' => 'Gwer East',
				'state_id' => 516,
			),

			array(
				'id' => 126,
				'name' => 'Gwer West',
				'state_id' => 516,
			),

			array(
				'id' => 127,
				'name' => 'Katsina-Ala',
				'state_id' => 516,
			),

			array(
				'id' => 128,
				'name' => 'Konshisha',
				'state_id' => 516,
			),

			array(
				'id' => 129,
				'name' => 'Kwande',
				'state_id' => 516,
			),

			array(
				'id' => 130,
				'name' => 'Logo',
				'state_id' => 516,
			),

			array(
				'id' => 131,
				'name' => 'Makurdi',
				'state_id' => 516,
			),

			array(
				'id' => 132,
				'name' => 'Obi',
				'state_id' => 516,
			),

			array(
				'id' => 133,
				'name' => 'Ogbadibo',
				'state_id' => 516,
			),

			array(
				'id' => 134,
				'name' => 'Ohimini',
				'state_id' => 516,
			),

			array(
				'id' => 135,
				'name' => 'Oju',
				'state_id' => 516,
			),

			array(
				'id' => 136,
				'name' => 'Okpokwu',
				'state_id' => 516,
			),

			array(
				'id' => 137,
				'name' => 'Oturkpo',
				'state_id' => 516,
			),

			array(
				'id' => 138,
				'name' => 'Tarka',
				'state_id' => 516,
			),

			array(
				'id' => 139,
				'name' => 'Ukum',
				'state_id' => 516,
			),

			array(
				'id' => 140,
				'name' => 'Ushongo',
				'state_id' => 516,
			),

			array(
				'id' => 141,
				'name' => 'Vandeikya',
				'state_id' => 516,
			),

			array(
				'id' => 142,
				'name' => 'Abadam',
				'state_id' => 517,
			),

			array(
				'id' => 143,
				'name' => 'Askira/Uba',
				'state_id' => 517,
			),

			array(
				'id' => 144,
				'name' => 'Bama',
				'state_id' => 517,
			),

			array(
				'id' => 145,
				'name' => 'Bayo',
				'state_id' => 517,
			),

			array(
				'id' => 146,
				'name' => 'Biu',
				'state_id' => 517,
			),

			array(
				'id' => 147,
				'name' => 'Chibok',
				'state_id' => 517,
			),

			array(
				'id' => 148,
				'name' => 'Damboa',
				'state_id' => 517,
			),

			array(
				'id' => 149,
				'name' => 'Dikwa',
				'state_id' => 517,
			),

			array(
				'id' => 150,
				'name' => 'Gubio',
				'state_id' => 517,
			),

			array(
				'id' => 151,
				'name' => 'Guzamala',
				'state_id' => 517,
			),

			array(
				'id' => 152,
				'name' => 'Gwoza',
				'state_id' => 517,
			),

			array(
				'id' => 153,
				'name' => 'Hawul',
				'state_id' => 517,
			),

			array(
				'id' => 154,
				'name' => 'Jere',
				'state_id' => 517,
			),

			array(
				'id' => 155,
				'name' => 'Kaga',
				'state_id' => 517,
			),

			array(
				'id' => 156,
				'name' => 'Kala/Balge',
				'state_id' => 517,
			),

			array(
				'id' => 157,
				'name' => 'Konduga',
				'state_id' => 517,
			),

			array(
				'id' => 158,
				'name' => 'Kukawa',
				'state_id' => 517,
			),

			array(
				'id' => 159,
				'name' => 'Kwaya Kusar',
				'state_id' => 517,
			),

			array(
				'id' => 160,
				'name' => 'Mafa',
				'state_id' => 517,
			),

			array(
				'id' => 161,
				'name' => 'Magumeri',
				'state_id' => 517,
			),

			array(
				'id' => 162,
				'name' => 'Maiduguri',
				'state_id' => 517,
			),

			array(
				'id' => 163,
				'name' => 'Marte',
				'state_id' => 517,
			),

			array(
				'id' => 164,
				'name' => 'Mobbar',
				'state_id' => 517,
			),

			array(
				'id' => 165,
				'name' => 'Monguno',
				'state_id' => 517,
			),

			array(
				'id' => 166,
				'name' => 'Ngala',
				'state_id' => 517,
			),

			array(
				'id' => 167,
				'name' => 'Nganzai',
				'state_id' => 517,
			),

			array(
				'id' => 168,
				'name' => 'Shani',
				'state_id' => 517,
			),

			array(
				'id' => 169,
				'name' => 'Abi',
				'state_id' => 518,
			),

			array(
				'id' => 170,
				'name' => 'Akamkpa',
				'state_id' => 518,
			),

			array(
				'id' => 171,
				'name' => 'Akpabuyo',
				'state_id' => 518,
			),

			array(
				'id' => 172,
				'name' => 'Bakassi',
				'state_id' => 518,
			),

			array(
				'id' => 173,
				'name' => 'Bekwarra',
				'state_id' => 518,
			),

			array(
				'id' => 174,
				'name' => 'Biase',
				'state_id' => 518,
			),

			array(
				'id' => 175,
				'name' => 'Boki',
				'state_id' => 518,
			),

			array(
				'id' => 176,
				'name' => 'Calabar Municipal',
				'state_id' => 518,
			),

			array(
				'id' => 177,
				'name' => 'Calabar South',
				'state_id' => 518,
			),

			array(
				'id' => 178,
				'name' => 'Etung',
				'state_id' => 518,
			),

			array(
				'id' => 179,
				'name' => 'Ikom',
				'state_id' => 518,
			),

			array(
				'id' => 180,
				'name' => 'Obanliku',
				'state_id' => 518,
			),

			array(
				'id' => 181,
				'name' => 'Obubra',
				'state_id' => 518,
			),

			array(
				'id' => 182,
				'name' => 'Obudu',
				'state_id' => 518,
			),

			array(
				'id' => 183,
				'name' => 'Odukpani',
				'state_id' => 518,
			),

			array(
				'id' => 184,
				'name' => 'Ogoja',
				'state_id' => 518,
			),

			array(
				'id' => 185,
				'name' => 'Yakuur',
				'state_id' => 518,
			),

			array(
				'id' => 186,
				'name' => 'Yala',
				'state_id' => 518,
			),

			array(
				'id' => 187,
				'name' => 'Aniocha North',
				'state_id' => 519,
			),

			array(
				'id' => 188,
				'name' => 'Aniocha South',
				'state_id' => 519,
			),

			array(
				'id' => 189,
				'name' => 'Bomadi',
				'state_id' => 519,
			),

			array(
				'id' => 190,
				'name' => 'Burutu',
				'state_id' => 519,
			),

			array(
				'id' => 191,
				'name' => 'Ethiope East',
				'state_id' => 519,
			),

			array(
				'id' => 192,
				'name' => 'Ethiope West',
				'state_id' => 519,
			),

			array(
				'id' => 193,
				'name' => 'Ika North East',
				'state_id' => 519,
			),

			array(
				'id' => 194,
				'name' => 'Ika South',
				'state_id' => 519,
			),

			array(
				'id' => 195,
				'name' => 'Isoko North',
				'state_id' => 519,
			),

			array(
				'id' => 196,
				'name' => 'Isoko South',
				'state_id' => 519,
			)
		));

		DB::table('lgas')->insert(array(
			array(
				'id' => 197,
				'name' => 'Ndokwa East',
				'state_id' => 519,
			),

			array(
				'id' => 198,
				'name' => 'Ndokwa West',
				'state_id' => 519,
			),

			array(
				'id' => 199,
				'name' => 'Okpe',
				'state_id' => 519,
			),

			array(
				'id' => 200,
				'name' => 'Oshimili North',
				'state_id' => 519,
			),

			array(
				'id' => 201,
				'name' => 'Oshimili South',
				'state_id' => 519,
			),

			array(
				'id' => 202,
				'name' => 'Patani',
				'state_id' => 519,
			),

			array(
				'id' => 203,
				'name' => 'Sapele',
				'state_id' => 519,
			),

			array(
				'id' => 204,
				'name' => 'Udu',
				'state_id' => 519,
			),

			array(
				'id' => 205,
				'name' => 'Ughelli North',
				'state_id' => 519,
			),

			array(
				'id' => 206,
				'name' => 'Ughelli South',
				'state_id' => 519,
			),

			array(
				'id' => 207,
				'name' => 'Ukwuani',
				'state_id' => 519,
			),

			array(
				'id' => 208,
				'name' => 'Uvwie',
				'state_id' => 519,
			),

			array(
				'id' => 209,
				'name' => 'Warri North',
				'state_id' => 519,
			),

			array(
				'id' => 210,
				'name' => 'Warri South',
				'state_id' => 519,
			),

			array(
				'id' => 211,
				'name' => 'Warri South West',
				'state_id' => 519,
			),

			array(
				'id' => 212,
				'name' => 'Abakaliki',
				'state_id' => 520,
			),

			array(
				'id' => 213,
				'name' => 'Afikpo North',
				'state_id' => 520,
			),

			array(
				'id' => 214,
				'name' => 'Afikpo South (Edda)',
				'state_id' => 520,
			),

			array(
				'id' => 215,
				'name' => 'Ebonyi',
				'state_id' => 520,
			),

			array(
				'id' => 216,
				'name' => 'Ezza North',
				'state_id' => 520,
			),

			array(
				'id' => 217,
				'name' => 'Ezza South',
				'state_id' => 520,
			),

			array(
				'id' => 218,
				'name' => 'Ikwo',
				'state_id' => 520,
			),

			array(
				'id' => 219,
				'name' => 'Ishielu',
				'state_id' => 520,
			),

			array(
				'id' => 220,
				'name' => 'Ivo',
				'state_id' => 520,
			),

			array(
				'id' => 221,
				'name' => 'Izzi',
				'state_id' => 520,
			),

			array(
				'id' => 222,
				'name' => 'Ohaozara',
				'state_id' => 520,
			),

			array(
				'id' => 223,
				'name' => 'Ohaukwu',
				'state_id' => 520,
			),

			array(
				'id' => 224,
				'name' => 'Onicha',
				'state_id' => 520,
			),

			array(
				'id' => 225,
				'name' => 'Aninri',
				'state_id' => 523,
			),

			array(
				'id' => 226,
				'name' => 'Awgu',
				'state_id' => 523,
			),

			array(
				'id' => 227,
				'name' => 'Enugu East',
				'state_id' => 523,
			),

			array(
				'id' => 228,
				'name' => 'Enugu North',
				'state_id' => 523,
			),

			array(
				'id' => 229,
				'name' => 'Enugu South',
				'state_id' => 523,
			),

			array(
				'id' => 230,
				'name' => 'Ezeagu',
				'state_id' => 523,
			),

			array(
				'id' => 231,
				'name' => 'Igbo Etiti',
				'state_id' => 523,
			),

			array(
				'id' => 232,
				'name' => 'Igbo Eze North',
				'state_id' => 523,
			),

			array(
				'id' => 233,
				'name' => 'Igbo Eze South',
				'state_id' => 523,
			),

			array(
				'id' => 234,
				'name' => 'Isi Uzo',
				'state_id' => 523,
			),

			array(
				'id' => 235,
				'name' => 'Nkanu East',
				'state_id' => 523,
			),

			array(
				'id' => 236,
				'name' => 'Nkanu West',
				'state_id' => 523,
			),

			array(
				'id' => 237,
				'name' => 'Nsukka',
				'state_id' => 523,
			),

			array(
				'id' => 238,
				'name' => 'Oji River',
				'state_id' => 523,
			),

			array(
				'id' => 239,
				'name' => 'Udenu',
				'state_id' => 523,
			),

			array(
				'id' => 240,
				'name' => 'Udi',
				'state_id' => 523,
			),

			array(
				'id' => 241,
				'name' => 'Uzo Uwani',
				'state_id' => 523,
			),

			array(
				'id' => 242,
				'name' => 'Akoko-Edo',
				'state_id' => 521,
			),

			array(
				'id' => 243,
				'name' => 'Egor',
				'state_id' => 521,
			),

			array(
				'id' => 244,
				'name' => 'Esan Central',
				'state_id' => 521,
			),

			array(
				'id' => 245,
				'name' => 'Esan North-East',
				'state_id' => 521,
			),

			array(
				'id' => 246,
				'name' => 'Esan South-East',
				'state_id' => 521,
			),

			array(
				'id' => 247,
				'name' => 'Esan West',
				'state_id' => 521,
			),

			array(
				'id' => 248,
				'name' => 'Etsako Central',
				'state_id' => 521,
			),
			array(
				'id' => 249,
				'name' => 'Etsako East',
				'state_id' => 521,
			),

			array(
				'id' => 250,
				'name' => 'Etsako West',
				'state_id' => 521,
			),

			array(
				'id' => 251,
				'name' => 'Igueben',
				'state_id' => 521,
			),

			array(
				'id' => 252,
				'name' => 'Ikpoba Okha',
				'state_id' => 521,
			),

			array(
				'id' => 253,
				'name' => 'Orhionmwon',
				'state_id' => 521,
			),

			array(
				'id' => 254,
				'name' => 'Oredo',
				'state_id' => 521,
			),

			array(
				'id' => 255,
				'name' => 'Ovia North-East',
				'state_id' => 521,
			),

			array(
				'id' => 256,
				'name' => 'Ovia South-West',
				'state_id' => 521,
			),

			array(
				'id' => 257,
				'name' => 'Owan East',
				'state_id' => 521,
			),

			array(
				'id' => 258,
				'name' => 'Owan West',
				'state_id' => 521,
			),

			array(
				'id' => 259,
				'name' => 'Uhunmwonde',
				'state_id' => 521,
			),
		));

		DB::table('lgas')->insert(array(

			array(
				'id' => 260,
				'name' => 'Ado Ekiti',
				'state_id' => 522,
			),

			array(
				'id' => 261,
				'name' => 'Efon',
				'state_id' => 522,
			),

			array(
				'id' => 262,
				'name' => 'Ekiti East',
				'state_id' => 522,
			),

			array(
				'id' => 263,
				'name' => 'Ekiti South-West',
				'state_id' => 522,
			),

			array(
				'id' => 264,
				'name' => 'Ekiti West',
				'state_id' => 522,
			),

			array(
				'id' => 265,
				'name' => 'Emure',
				'state_id' => 522,
			),

			array(
				'id' => 266,
				'name' => 'Gbonyin',
				'state_id' => 522,
			),

			array(
				'id' => 267,
				'name' => 'Ido Osi',
				'state_id' => 522,
			),

			array(
				'id' => 268,
				'name' => 'Ijero',
				'state_id' => 522,
			),

			array(
				'id' => 269,
				'name' => 'Ikere',
				'state_id' => 522,
			),

			array(
				'id' => 270,
				'name' => 'Ikole',
				'state_id' => 522,
			),

			array(
				'id' => 271,
				'name' => 'Ilejemeje',
				'state_id' => 522,
			),

			array(
				'id' => 272,
				'name' => 'Irepodun/Ifelodun',
				'state_id' => 522,
			),

			array(
				'id' => 273,
				'name' => 'Ise/Orun',
				'state_id' => 522,
			),

			array(
				'id' => 274,
				'name' => 'Moba',
				'state_id' => 522,
			),

			array(
				'id' => 275,
				'name' => 'Oye',
				'state_id' => 522,
			),

			array(
				'id' => 276,
				'name' => 'Akko',
				'state_id' => 525,
			),

			array(
				'id' => 277,
				'name' => 'Balanga',
				'state_id' => 525,
			),

			array(
				'id' => 278,
				'name' => 'Billiri',
				'state_id' => 525,
			),

			array(
				'id' => 279,
				'name' => 'Dukku',
				'state_id' => 525,
			),

			array(
				'id' => 280,
				'name' => 'Funakaye',
				'state_id' => 525,
			),

			array(
				'id' => 281,
				'name' => 'Gombe',
				'state_id' => 525,
			),

			array(
				'id' => 282,
				'name' => 'Kaltungo',
				'state_id' => 525,
			),

			array(
				'id' => 283,
				'name' => 'Kwami',
				'state_id' => 525,
			),

			array(
				'id' => 284,
				'name' => 'Nafada',
				'state_id' => 525,
			),

			array(
				'id' => 285,
				'name' => 'Shongom',
				'state_id' => 525,
			),

			array(
				'id' => 286,
				'name' => 'Yamaltu/Deba',
				'state_id' => 525,
			),
			array(
				'id' => 287,
				'name' => 'Aboh Mbaise',
				'state_id' => 526,
			),

			array(
				'id' => 288,
				'name' => 'Ahiazu Mbaise',
				'state_id' => 526,
			),

			array(
				'id' => 289,
				'name' => 'Ehime Mbano',
				'state_id' => 526,
			),

			array(
				'id' => 290,
				'name' => 'Ezinihitte',
				'state_id' => 526,
			),

			array(
				'id' => 291,
				'name' => 'Ideato North',
				'state_id' => 526,
			),

			array(
				'id' => 292,
				'name' => 'Ideato South',
				'state_id' => 526,
			),

			array(
				'id' => 293,
				'name' => 'Ihitte/Uboma',
				'state_id' => 526,
			),

			array(
				'id' => 294,
				'name' => 'Ikeduru',
				'state_id' => 526,
			),

			array(
				'id' => 295,
				'name' => 'Isiala Mbano',
				'state_id' => 526,
			),

			array(
				'id' => 296,
				'name' => 'Isu',
				'state_id' => 526,
			),

			array(
				'id' => 297,
				'name' => 'Mbaitoli',
				'state_id' => 526,
			),

			array(
				'id' => 298,
				'name' => 'Ngor Okpala',
				'state_id' => 526,
			),

			array(
				'id' => 299,
				'name' => 'Njaba',
				'state_id' => 526,
			),

			array(
				'id' => 300,
				'name' => 'Nkwerre',
				'state_id' => 526,
			),

			array(
				'id' => 301,
				'name' => 'Nwangele',
				'state_id' => 526,
			),

			array(
				'id' => 302,
				'name' => 'Obowo',
				'state_id' => 526,
			),

			array(
				'id' => 303,
				'name' => 'Oguta',
				'state_id' => 526,
			),

			array(
				'id' => 304,
				'name' => 'Ohaji/Egbema',
				'state_id' => 526,
			),

			array(
				'id' => 305,
				'name' => 'Okigwe',
				'state_id' => 526,
			),

			array(
				'id' => 306,
				'name' => 'Orlu',
				'state_id' => 526,
			),

			array(
				'id' => 307,
				'name' => 'Orsu',
				'state_id' => 526,
			),

			array(
				'id' => 308,
				'name' => 'Oru East',
				'state_id' => 526,
			)
		));

		DB::table('lgas')->insert(array(

			array(
				'id' => 309,
				'name' => 'Oru West',
				'state_id' => 526,
			),

			array(
				'id' => 310,
				'name' => 'Owerri Municipal',
				'state_id' => 526,
			),

			array(
				'id' => 311,
				'name' => 'Owerri North',
				'state_id' => 526,
			),

			array(
				'id' => 312,
				'name' => 'Owerri West',
				'state_id' => 526,
			),

			array(
				'id' => 313,
				'name' => 'Unuimo',
				'state_id' => 526,
			),

			array(
				'id' => 314,
				'name' => 'Auyo',
				'state_id' => 527,
			),

			array(
				'id' => 315,
				'name' => 'Babura',
				'state_id' => 527,
			),

			array(
				'id' => 316,
				'name' => 'Biriniwa',
				'state_id' => 527,
			),

			array(
				'id' => 317,
				'name' => 'Birnin Kudu',
				'state_id' => 527,
			),

			array(
				'id' => 318,
				'name' => 'Buji',
				'state_id' => 527,
			),

			array(
				'id' => 319,
				'name' => 'Dutse',
				'state_id' => 527,
			),

			array(
				'id' => 320,
				'name' => 'Gagarawa',
				'state_id' => 527,
			),

			array(
				'id' => 321,
				'name' => 'Garki',
				'state_id' => 527,
			),

			array(
				'id' => 322,
				'name' => 'Gumel',
				'state_id' => 527,
			),

			array(
				'id' => 323,
				'name' => 'Guri',
				'state_id' => 527,
			),

			array(
				'id' => 324,
				'name' => 'Gwaram',
				'state_id' => 527,
			),

			array(
				'id' => 325,
				'name' => 'Gwiwa',
				'state_id' => 527,
			),

			array(
				'id' => 326,
				'name' => 'Hadejia',
				'state_id' => 527,
			),

			array(
				'id' => 327,
				'name' => 'Jahun',
				'state_id' => 527,
			),

			array(
				'id' => 328,
				'name' => 'Kafin Hausa',
				'state_id' => 527,
			),

			array(
				'id' => 329,
				'name' => 'Kazaure',
				'state_id' => 527,
			),

			array(
				'id' => 330,
				'name' => 'Kiri Kasama',
				'state_id' => 527,
			),

			array(
				'id' => 331,
				'name' => 'Kiyawa',
				'state_id' => 527,
			),

			array(
				'id' => 332,
				'name' => 'Kaugama',
				'state_id' => 527,
			),

			array(
				'id' => 333,
				'name' => 'Maigatari',
				'state_id' => 527,
			),

			array(
				'id' => 334,
				'name' => 'Malam Madori',
				'state_id' => 527,
			),

			array(
				'id' => 335,
				'name' => 'Miga',
				'state_id' => 527,
			),

			array(
				'id' => 336,
				'name' => 'Ringim',
				'state_id' => 527,
			),

			array(
				'id' => 337,
				'name' => 'Roni',
				'state_id' => 527,
			),

			array(
				'id' => 338,
				'name' => 'Sule Tankarkar',
				'state_id' => 527,
			),

			array(
				'id' => 339,
				'name' => 'Taura',
				'state_id' => 527,
			),

			array(
				'id' => 340,
				'name' => 'Yankwashi',
				'state_id' => 527,
			),

			array(
				'id' => 341,
				'name' => 'Birnin Gwari',
				'state_id' => 528,
			),

			array(
				'id' => 342,
				'name' => 'Chikun',
				'state_id' => 528,
			),

			array(
				'id' => 343,
				'name' => 'Giwa',
				'state_id' => 528,
			),

			array(
				'id' => 344,
				'name' => 'Igabi',
				'state_id' => 528,
			),

			array(
				'id' => 345,
				'name' => 'Ikara',
				'state_id' => 528,
			),

			array(
				'id' => 346,
				'name' => 'Jaba',
				'state_id' => 528,
			),

			array(
				'id' => 347,
				'name' => 'Jema-a',
				'state_id' => 528,
			),

			array(
				'id' => 348,
				'name' => 'Kachia',
				'state_id' => 528,
			),

			array(
				'id' => 349,
				'name' => 'Kaduna North',
				'state_id' => 528,
			),

			array(
				'id' => 350,
				'name' => 'Kaduna South',
				'state_id' => 528,
			),

			array(
				'id' => 351,
				'name' => 'Kagarko',
				'state_id' => 528,
			),

			array(
				'id' => 352,
				'name' => 'Kajuru',
				'state_id' => 528,
			),

			array(
				'id' => 353,
				'name' => 'Kaura',
				'state_id' => 528,
			),

			array(
				'id' => 354,
				'name' => 'Kauru',
				'state_id' => 528,
			),

			array(
				'id' => 355,
				'name' => 'Kubau',
				'state_id' => 528,
			),

			array(
				'id' => 356,
				'name' => 'Kudan',
				'state_id' => 528,
			),

			array(
				'id' => 357,
				'name' => 'Lere',
				'state_id' => 528,
			),

			array(
				'id' => 358,
				'name' => 'Makarfi',
				'state_id' => 528,
			),

			array(
				'id' => 359,
				'name' => 'Sabon Gari',
				'state_id' => 528,
			),

			array(
				'id' => 360,
				'name' => 'Sanga',
				'state_id' => 528,
			),

			array(
				'id' => 361,
				'name' => 'Soba',
				'state_id' => 528,
			),

			array(
				'id' => 362,
				'name' => 'Zangon Kataf',
				'state_id' => 528,
			),

			array(
				'id' => 363,
				'name' => 'Zaria',
				'state_id' => 528,
			),

			array(
				'id' => 364,
				'name' => 'Ajingi',
				'state_id' => 529,
			),

			array(
				'id' => 365,
				'name' => 'Albasu',
				'state_id' => 529,
			),

			array(
				'id' => 366,
				'name' => 'Bagwai',
				'state_id' => 529,
			),

			array(
				'id' => 367,
				'name' => 'Bebeji',
				'state_id' => 529,
			),

			array(
				'id' => 368,
				'name' => 'Bichi',
				'state_id' => 529,
			),

			array(
				'id' => 369,
				'name' => 'Bunkure',
				'state_id' => 529,
			),

			array(
				'id' => 370,
				'name' => 'Dala',
				'state_id' => 529,
			),

			array(
				'id' => 371,
				'name' => 'Dambatta',
				'state_id' => 529,
			),

			array(
				'id' => 372,
				'name' => 'Dawakin Kudu',
				'state_id' => 529,
			),

			array(
				'id' => 373,
				'name' => 'Dawakin Tofa',
				'state_id' => 529,
			),

			array(
				'id' => 374,
				'name' => 'Doguwa',
				'state_id' => 529,
			),

			array(
				'id' => 375,
				'name' => 'Fagge',
				'state_id' => 529,
			),

			array(
				'id' => 376,
				'name' => 'Gabasawa',
				'state_id' => 529,
			),

			array(
				'id' => 377,
				'name' => 'Garko',
				'state_id' => 529,
			),

			array(
				'id' => 378,
				'name' => 'Garun Mallam',
				'state_id' => 529,
			),

			array(
				'id' => 379,
				'name' => 'Gaya',
				'state_id' => 529,
			),

			array(
				'id' => 380,
				'name' => 'Gezawa',
				'state_id' => 529,
			),

			array(
				'id' => 381,
				'name' => 'Gwale',
				'state_id' => 529,
			),

			array(
				'id' => 382,
				'name' => 'Gwarzo',
				'state_id' => 529,
			),

			array(
				'id' => 383,
				'name' => 'Kabo',
				'state_id' => 529,
			),

			array(
				'id' => 384,
				'name' => 'Kano Municipal',
				'state_id' => 529,
			),

			array(
				'id' => 385,
				'name' => 'Karaye',
				'state_id' => 529,
			),

			array(
				'id' => 386,
				'name' => 'Kibiya',
				'state_id' => 529,
			),

			array(
				'id' => 387,
				'name' => 'Kiru',
				'state_id' => 529,
			),

			array(
				'id' => 388,
				'name' => 'Kumbotso',
				'state_id' => 529,
			),

			array(
				'id' => 389,
				'name' => 'Kunchi',
				'state_id' => 529,
			),

			array(
				'id' => 390,
				'name' => 'Kura',
				'state_id' => 529,
			),

			array(
				'id' => 391,
				'name' => 'Madobi',
				'state_id' => 529,
			),

			array(
				'id' => 392,
				'name' => 'Makoda',
				'state_id' => 529,
			),

			array(
				'id' => 393,
				'name' => 'Minjibir',
				'state_id' => 529,
			),

			array(
				'id' => 394,
				'name' => 'Nasarawa',
				'state_id' => 529,
			),

			array(
				'id' => 395,
				'name' => 'Rano',
				'state_id' => 529,
			),

			array(
				'id' => 396,
				'name' => 'Rimin Gado',
				'state_id' => 529,
			),

			array(
				'id' => 397,
				'name' => 'Rogo',
				'state_id' => 529,
			),

			array(
				'id' => 398,
				'name' => 'Shanono',
				'state_id' => 529,
			),

			array(
				'id' => 399,
				'name' => 'Sumaila',
				'state_id' => 529,
			),

			array(
				'id' => 400,
				'name' => 'Takai',
				'state_id' => 529,
			),

			array(
				'id' => 401,
				'name' => 'Tarauni',
				'state_id' => 529,
			),

			array(
				'id' => 402,
				'name' => 'Tofa',
				'state_id' => 529,
			),

			array(
				'id' => 403,
				'name' => 'Tsanyawa',
				'state_id' => 529,
			),

			array(
				'id' => 404,
				'name' => 'Tudun Wada',
				'state_id' => 529,
			),

			array(
				'id' => 405,
				'name' => 'Ungogo',
				'state_id' => 529,
			),

			array(
				'id' => 406,
				'name' => 'Warawa',
				'state_id' => 529,
			),

			array(
				'id' => 407,
				'name' => 'Wudil',
				'state_id' => 529,
			),

			array(
				'id' => 408,
				'name' => 'Bakori',
				'state_id' => 530,
			),

			array(
				'id' => 409,
				'name' => 'Batagarawa',
				'state_id' => 530,
			),

			array(
				'id' => 410,
				'name' => 'Batsari',
				'state_id' => 530,
			),

			array(
				'id' => 411,
				'name' => 'Baure',
				'state_id' => 530,
			),

			array(
				'id' => 412,
				'name' => 'Bindawa',
				'state_id' => 530,
			),

			array(
				'id' => 413,
				'name' => 'Charanchi',
				'state_id' => 530,
			),

			array(
				'id' => 414,
				'name' => 'Dandume',
				'state_id' => 530,
			),

			array(
				'id' => 415,
				'name' => 'Danja',
				'state_id' => 530,
			),

			array(
				'id' => 416,
				'name' => 'Dan Musa',
				'state_id' => 530,
			),

			array(
				'id' => 417,
				'name' => 'Daura',
				'state_id' => 530,
			),

			array(
				'id' => 418,
				'name' => 'Dutsi',
				'state_id' => 530,
			),

			array(
				'id' => 419,
				'name' => 'Dutsin Ma',
				'state_id' => 530,
			),

			array(
				'id' => 420,
				'name' => 'Faskari',
				'state_id' => 530,
			),

			array(
				'id' => 421,
				'name' => 'Funtua',
				'state_id' => 530,
			),

			array(
				'id' => 422,
				'name' => 'Ingawa',
				'state_id' => 530,
			),

			array(
				'id' => 423,
				'name' => 'Jibia',
				'state_id' => 530,
			),

			array(
				'id' => 424,
				'name' => 'Kafur',
				'state_id' => 530,
			),

			array(
				'id' => 425,
				'name' => 'Kaita',
				'state_id' => 530,
			),

			array(
				'id' => 426,
				'name' => 'Kankara',
				'state_id' => 530,
			),

			array(
				'id' => 427,
				'name' => 'Kankia',
				'state_id' => 530,
			),

			array(
				'id' => 428,
				'name' => 'Katsina',
				'state_id' => 530,
			),

			array(
				'id' => 429,
				'name' => 'Kurfi',
				'state_id' => 530,
			),

			array(
				'id' => 430,
				'name' => 'Kusada',
				'state_id' => 530,
			),

			array(
				'id' => 431,
				'name' => 'Mai-Adua',
				'state_id' => 530,
			),

			array(
				'id' => 432,
				'name' => 'Malumfashi',
				'state_id' => 530,
			),

			array(
				'id' => 433,
				'name' => 'Mani',
				'state_id' => 530,
			),

			array(
				'id' => 434,
				'name' => 'Mashi',
				'state_id' => 530,
			),

			array(
				'id' => 435,
				'name' => 'Matazu',
				'state_id' => 530,
			),

			array(
				'id' => 436,
				'name' => 'Musawa',
				'state_id' => 530,
			),

			array(
				'id' => 437,
				'name' => 'Rimi',
				'state_id' => 530,
			),

			array(
				'id' => 438,
				'name' => 'Sabuwa',
				'state_id' => 530,
			),

			array(
				'id' => 439,
				'name' => 'Safana',
				'state_id' => 530,
			),

			array(
				'id' => 440,
				'name' => 'Sandamu',
				'state_id' => 530,
			),

			array(
				'id' => 441,
				'name' => 'Zango',
				'state_id' => 530,
			),

			array(
				'id' => 442,
				'name' => 'Aleiro',
				'state_id' => 531,
			),

			array(
				'id' => 443,
				'name' => 'Arewa Dandi',
				'state_id' => 531,
			),

			array(
				'id' => 444,
				'name' => 'Argungu',
				'state_id' => 531,
			),

			array(
				'id' => 445,
				'name' => 'Augie',
				'state_id' => 531,
			),

			array(
				'id' => 446,
				'name' => 'Bagudo',
				'state_id' => 531,
			),

			array(
				'id' => 447,
				'name' => 'Birnin Kebbi',
				'state_id' => 531,
			),

			array(
				'id' => 448,
				'name' => 'Bunza',
				'state_id' => 531,
			),

			array(
				'id' => 449,
				'name' => 'Dandi',
				'state_id' => 531,
			),

			array(
				'id' => 450,
				'name' => 'Fakai',
				'state_id' => 531,
			),

			array(
				'id' => 451,
				'name' => 'Gwandu',
				'state_id' => 531,
			),

			array(
				'id' => 452,
				'name' => 'Jega',
				'state_id' => 531,
			),

			array(
				'id' => 453,
				'name' => 'Kalgo',
				'state_id' => 531,
			),

			array(
				'id' => 454,
				'name' => 'Koko/Besse',
				'state_id' => 531,
			),

			array(
				'id' => 455,
				'name' => 'Maiyama',
				'state_id' => 531,
			),

			array(
				'id' => 456,
				'name' => 'Ngaski',
				'state_id' => 531,
			),

			array(
				'id' => 457,
				'name' => 'Sakaba',
				'state_id' => 531,
			),

			array(
				'id' => 458,
				'name' => 'Shanga',
				'state_id' => 531,
			),

			array(
				'id' => 459,
				'name' => 'Suru',
				'state_id' => 531,
			),

			array(
				'id' => 460,
				'name' => 'Wasagu/Danko',
				'state_id' => 531,
			),

			array(
				'id' => 461,
				'name' => 'Yauri',
				'state_id' => 531,
			),

			array(
				'id' => 462,
				'name' => 'Zuru',
				'state_id' => 531,
			),

			array(
				'id' => 463,
				'name' => 'Adavi',
				'state_id' => 532,
			),

			array(
				'id' => 464,
				'name' => 'Ajaokuta',
				'state_id' => 532,
			),

			array(
				'id' => 465,
				'name' => 'Ankpa',
				'state_id' => 532,
			),

			array(
				'id' => 466,
				'name' => 'Bassa',
				'state_id' => 532,
			),

			array(
				'id' => 467,
				'name' => 'Dekina',
				'state_id' => 532,
			),

			array(
				'id' => 468,
				'name' => 'Ibaji',
				'state_id' => 532,
			),

			array(
				'id' => 469,
				'name' => 'Idah',
				'state_id' => 532,
			),

			array(
				'id' => 470,
				'name' => 'Igalamela Odolu',
				'state_id' => 532,
			),

			array(
				'id' => 471,
				'name' => 'Ijumu',
				'state_id' => 532,
			),

			array(
				'id' => 472,
				'name' => 'Kabba/Bunu',
				'state_id' => 532,
			),

			array(
				'id' => 473,
				'name' => 'Kogi',
				'state_id' => 532,
			),

			array(
				'id' => 474,
				'name' => 'Lokoja',
				'state_id' => 532,
			),

			array(
				'id' => 475,
				'name' => 'Mopa Muro',
				'state_id' => 532,
			),

			array(
				'id' => 476,
				'name' => 'Ofu',
				'state_id' => 532,
			),

			array(
				'id' => 477,
				'name' => 'Ogori/Magongo',
				'state_id' => 532,
			),

			array(
				'id' => 478,
				'name' => 'Okehi',
				'state_id' => 532,
			),

			array(
				'id' => 479,
				'name' => 'Okene',
				'state_id' => 532,
			),

			array(
				'id' => 480,
				'name' => 'Olamaboro',
				'state_id' => 532,
			),

			array(
				'id' => 481,
				'name' => 'Omala',
				'state_id' => 532,
			),

			array(
				'id' => 482,
				'name' => 'Yagba East',
				'state_id' => 532,
			),

			array(
				'id' => 483,
				'name' => 'Yagba West',
				'state_id' => 532,
			),

			array(
				'id' => 484,
				'name' => 'Asa',
				'state_id' => 533,
			),

			array(
				'id' => 485,
				'name' => 'Baruten',
				'state_id' => 533,
			),

			array(
				'id' => 486,
				'name' => 'Edu',
				'state_id' => 533,
			),

			array(
				'id' => 487,
				'name' => 'Ekiti',
				'state_id' => 533,
			),

			array(
				'id' => 488,
				'name' => 'Ifelodun',
				'state_id' => 533,
			),

			array(
				'id' => 489,
				'name' => 'Ilorin East',
				'state_id' => 533,
			),

			array(
				'id' => 490,
				'name' => 'Ilorin South',
				'state_id' => 533,
			),

			array(
				'id' => 491,
				'name' => 'Ilorin West',
				'state_id' => 533,
			),

			array(
				'id' => 492,
				'name' => 'Irepodun',
				'state_id' => 533,
			),

			array(
				'id' => 493,
				'name' => 'Isin',
				'state_id' => 533,
			),

			array(
				'id' => 494,
				'name' => 'Kaiama',
				'state_id' => 533,
			),

			array(
				'id' => 495,
				'name' => 'Moro',
				'state_id' => 533,
			),

			array(
				'id' => 496,
				'name' => 'Offa',
				'state_id' => 533,
			),

			array(
				'id' => 497,
				'name' => 'Oke Ero',
				'state_id' => 533,
			),

			array(
				'id' => 498,
				'name' => 'Oyun',
				'state_id' => 533,
			),

			array(
				'id' => 499,
				'name' => 'Pategi',
				'state_id' => 533,
			),

			array(
				'id' => 500,
				'name' => 'Agege',
				'state_id' => 534,
			),

			array(
				'id' => 501,
				'name' => 'Ajeromi-Ifelodun',
				'state_id' => 534,
			),

			array(
				'id' => 502,
				'name' => 'Alimosho',
				'state_id' => 534,
			),

			array(
				'id' => 503,
				'name' => 'Amuwo-Odofin',
				'state_id' => 534,
			),

			array(
				'id' => 504,
				'name' => 'Apapa',
				'state_id' => 534,
			),

			array(
				'id' => 505,
				'name' => 'Badagry',
				'state_id' => 534,
			),

			array(
				'id' => 506,
				'name' => 'Epe',
				'state_id' => 534,
			),

			array(
				'id' => 507,
				'name' => 'Eti Osa',
				'state_id' => 534,
			),

			array(
				'id' => 508,
				'name' => 'Ibeju-Lekki',
				'state_id' => 534,
			),

			array(
				'id' => 509,
				'name' => 'Ifako-Ijaiye',
				'state_id' => 534,
			),

			array(
				'id' => 510,
				'name' => 'Ikeja',
				'state_id' => 534,
			),

			array(
				'id' => 511,
				'name' => 'Ikorodu',
				'state_id' => 534,
			),

			array(
				'id' => 512,
				'name' => 'Kosofe',
				'state_id' => 534,
			),

			array(
				'id' => 513,
				'name' => 'Lagos Island',
				'state_id' => 534,
			),

			array(
				'id' => 514,
				'name' => 'Lagos Mainland',
				'state_id' => 534,
			),

			array(
				'id' => 515,
				'name' => 'Mushin',
				'state_id' => 534,
			),

			array(
				'id' => 516,
				'name' => 'Ojo',
				'state_id' => 534,
			),

			array(
				'id' => 517,
				'name' => 'Oshodi-Isolo',
				'state_id' => 534,
			),

			array(
				'id' => 518,
				'name' => 'Shomolu',
				'state_id' => 534,
			),

			array(
				'id' => 519,
				'name' => 'Surulere',
				'state_id' => 534,
			),

			array(
				'id' => 520,
				'name' => 'Akwanga',
				'state_id' => 535,
			),

			array(
				'id' => 521,
				'name' => 'Awe',
				'state_id' => 535,
			),

			array(
				'id' => 522,
				'name' => 'Doma',
				'state_id' => 535,
			),

			array(
				'id' => 523,
				'name' => 'Karu',
				'state_id' => 535,
			),

			array(
				'id' => 524,
				'name' => 'Keana',
				'state_id' => 535,
			),

			array(
				'id' => 525,
				'name' => 'Keffi',
				'state_id' => 535,
			),

			array(
				'id' => 526,
				'name' => 'Kokona',
				'state_id' => 535,
			),

			array(
				'id' => 527,
				'name' => 'Lafia',
				'state_id' => 535,
			),

			array(
				'id' => 528,
				'name' => 'Nasarawa',
				'state_id' => 535,
			),

			array(
				'id' => 529,
				'name' => 'Nasarawa Egon',
				'state_id' => 535,
			),

			array(
				'id' => 530,
				'name' => 'Obi',
				'state_id' => 535,
			),

			array(
				'id' => 531,
				'name' => 'Toto',
				'state_id' => 535,
			),

			array(
				'id' => 532,
				'name' => 'Wamba',
				'state_id' => 535,
			),

			array(
				'id' => 533,
				'name' => 'Agaie',
				'state_id' => 536,
			),

			array(
				'id' => 534,
				'name' => 'Agwara',
				'state_id' => 536,
			),

			array(
				'id' => 535,
				'name' => 'Bida',
				'state_id' => 536,
			),

			array(
				'id' => 536,
				'name' => 'Borgu',
				'state_id' => 536,
			),

			array(
				'id' => 537,
				'name' => 'Bosso',
				'state_id' => 536,
			),

			array(
				'id' => 538,
				'name' => 'Chanchaga',
				'state_id' => 536,
			),

			array(
				'id' => 539,
				'name' => 'Edati',
				'state_id' => 536,
			),

			array(
				'id' => 540,
				'name' => 'Gbako',
				'state_id' => 536,
			),

			array(
				'id' => 541,
				'name' => 'Gurara',
				'state_id' => 536,
			),

			array(
				'id' => 542,
				'name' => 'Katcha',
				'state_id' => 536,
			),

			array(
				'id' => 543,
				'name' => 'Kontagora',
				'state_id' => 536,
			),

			array(
				'id' => 544,
				'name' => 'Lapai',
				'state_id' => 536,
			),

			array(
				'id' => 545,
				'name' => 'Lavun',
				'state_id' => 536,
			),

			array(
				'id' => 546,
				'name' => 'Magama',
				'state_id' => 536,
			),

			array(
				'id' => 547,
				'name' => 'Mariga',
				'state_id' => 536,
			),

			array(
				'id' => 548,
				'name' => 'Mashegu',
				'state_id' => 536,
			),

			array(
				'id' => 549,
				'name' => 'Mokwa',
				'state_id' => 536,
			),

			array(
				'id' => 550,
				'name' => 'Moya',
				'state_id' => 536,
			),

			array(
				'id' => 551,
				'name' => 'Paikoro',
				'state_id' => 536,
			),

			array(
				'id' => 552,
				'name' => 'Rafi',
				'state_id' => 536,
			),

			array(
				'id' => 553,
				'name' => 'Rijau',
				'state_id' => 536,
			),

			array(
				'id' => 554,
				'name' => 'Shiroro',
				'state_id' => 536,
			),

			array(
				'id' => 555,
				'name' => 'Suleja',
				'state_id' => 536,
			),

			array(
				'id' => 556,
				'name' => 'Tafa',
				'state_id' => 536,
			),

			array(
				'id' => 557,
				'name' => 'Wushishi',
				'state_id' => 536,
			),

			array(
				'id' => 558,
				'name' => 'Abeokuta North',
				'state_id' => 537,
			),

			array(
				'id' => 559,
				'name' => 'Abeokuta South',
				'state_id' => 537,
			),

			array(
				'id' => 560,
				'name' => 'Ado-Odo/Ota',
				'state_id' => 537,
			),

			array(
				'id' => 561,
				'name' => 'Egbado North',
				'state_id' => 537,
			),

			array(
				'id' => 562,
				'name' => 'Egbado South',
				'state_id' => 537,
			),

			array(
				'id' => 563,
				'name' => 'Ewekoro',
				'state_id' => 537,
			),

			array(
				'id' => 564,
				'name' => 'Ifo',
				'state_id' => 537,
			),

			array(
				'id' => 565,
				'name' => 'Ijebu East',
				'state_id' => 537,
			),

			array(
				'id' => 566,
				'name' => 'Ijebu North',
				'state_id' => 537,
			),

			array(
				'id' => 567,
				'name' => 'Ijebu North East',
				'state_id' => 537,
			),

			array(
				'id' => 568,
				'name' => 'Ijebu Ode',
				'state_id' => 537,
			),

			array(
				'id' => 569,
				'name' => 'Ikenne',
				'state_id' => 537,
			),

			array(
				'id' => 570,
				'name' => 'Imeko Afon',
				'state_id' => 537,
			),

			array(
				'id' => 571,
				'name' => 'Ipokia',
				'state_id' => 537,
			),

			array(
				'id' => 572,
				'name' => 'Obafemi Owode',
				'state_id' => 537,
			),

			array(
				'id' => 573,
				'name' => 'Odeda',
				'state_id' => 537,
			),

			array(
				'id' => 574,
				'name' => 'Odogbolu',
				'state_id' => 537,
			),

			array(
				'id' => 575,
				'name' => 'Ogun Waterside',
				'state_id' => 537,
			),

			array(
				'id' => 576,
				'name' => 'Remo North',
				'state_id' => 537,
			),

			array(
				'id' => 577,
				'name' => 'Shagamu',
				'state_id' => 537,
			),

			array(
				'id' => 578,
				'name' => 'Akoko North-East',
				'state_id' => 538,
			),

			array(
				'id' => 579,
				'name' => 'Akoko North-West',
				'state_id' => 538,
			),

			array(
				'id' => 580,
				'name' => 'Akoko South-West',
				'state_id' => 538,
			),

			array(
				'id' => 581,
				'name' => 'Akoko South-East',
				'state_id' => 538,
			),

			array(
				'id' => 582,
				'name' => 'Akure North',
				'state_id' => 538,
			),

			array(
				'id' => 583,
				'name' => 'Akure South',
				'state_id' => 538,
			),

			array(
				'id' => 584,
				'name' => 'Ese Odo',
				'state_id' => 538,
			),

			array(
				'id' => 585,
				'name' => 'Idanre',
				'state_id' => 538,
			),

			array(
				'id' => 586,
				'name' => 'Ifedore',
				'state_id' => 538,
			),

			array(
				'id' => 587,
				'name' => 'Ilaje',
				'state_id' => 538,
			),

			array(
				'id' => 588,
				'name' => 'Ile Oluji/Okeigbo',
				'state_id' => 538,
			),

			array(
				'id' => 589,
				'name' => 'Irele',
				'state_id' => 538,
			),

			array(
				'id' => 590,
				'name' => 'Odigbo',
				'state_id' => 538,
			),

			array(
				'id' => 591,
				'name' => 'Okitipupa',
				'state_id' => 538,
			),

			array(
				'id' => 592,
				'name' => 'Ondo East',
				'state_id' => 538,
			),

			array(
				'id' => 593,
				'name' => 'Ondo West',
				'state_id' => 538,
			),

			array(
				'id' => 594,
				'name' => 'Ose',
				'state_id' => 538,
			),

			array(
				'id' => 595,
				'name' => 'Owo',
				'state_id' => 538,
			),

			array(
				'id' => 596,
				'name' => 'Atakunmosa East',
				'state_id' => 539,
			),

			array(
				'id' => 597,
				'name' => 'Atakunmosa West',
				'state_id' => 539,
			),

			array(
				'id' => 598,
				'name' => 'Aiyedaade',
				'state_id' => 539,
			),

			array(
				'id' => 599,
				'name' => 'Aiyedire',
				'state_id' => 539,
			),

			array(
				'id' => 600,
				'name' => 'Boluwaduro',
				'state_id' => 539,
			),

			array(
				'id' => 601,
				'name' => 'Boripe',
				'state_id' => 539,
			),

			array(
				'id' => 602,
				'name' => 'Ede North',
				'state_id' => 539,
			),

			array(
				'id' => 603,
				'name' => 'Ede South',
				'state_id' => 539,
			),

			array(
				'id' => 604,
				'name' => 'Ife Central',
				'state_id' => 539,
			),

			array(
				'id' => 605,
				'name' => 'Ife East',
				'state_id' => 539,
			),

			array(
				'id' => 606,
				'name' => 'Ife North',
				'state_id' => 539,
			),

			array(
				'id' => 607,
				'name' => 'Ife South',
				'state_id' => 539,
			),

			array(
				'id' => 608,
				'name' => 'Egbedore',
				'state_id' => 539,
			),

			array(
				'id' => 609,
				'name' => 'Ejigbo',
				'state_id' => 539,
			),

			array(
				'id' => 610,
				'name' => 'Ifedayo',
				'state_id' => 539,
			),

			array(
				'id' => 611,
				'name' => 'Ifelodun',
				'state_id' => 539,
			),

			array(
				'id' => 612,
				'name' => 'Ila',
				'state_id' => 539,
			),

			array(
				'id' => 613,
				'name' => 'Ilesa East',
				'state_id' => 539,
			),

			array(
				'id' => 614,
				'name' => 'Ilesa West',
				'state_id' => 539,
			),

			array(
				'id' => 615,
				'name' => 'Irepodun',
				'state_id' => 539,
			),

			array(
				'id' => 616,
				'name' => 'Irewole',
				'state_id' => 539,
			),

			array(
				'id' => 617,
				'name' => 'Isokan',
				'state_id' => 539,
			),

			array(
				'id' => 618,
				'name' => 'Iwo',
				'state_id' => 539,
			),

			array(
				'id' => 619,
				'name' => 'Obokun',
				'state_id' => 539,
			),

			array(
				'id' => 620,
				'name' => 'Odo Otin',
				'state_id' => 539,
			),

			array(
				'id' => 621,
				'name' => 'Ola Oluwa',
				'state_id' => 539,
			),

			array(
				'id' => 622,
				'name' => 'Olorunda',
				'state_id' => 539,
			),

			array(
				'id' => 623,
				'name' => 'Oriade',
				'state_id' => 539,
			),

			array(
				'id' => 624,
				'name' => 'Orolu',
				'state_id' => 539,
			),

			array(
				'id' => 625,
				'name' => 'Osogbo',
				'state_id' => 539,
			),

			array(
				'id' => 626,
				'name' => 'Afijio',
				'state_id' => 540,
			),

			array(
				'id' => 627,
				'name' => 'Akinyele',
				'state_id' => 540,
			),

			array(
				'id' => 628,
				'name' => 'Atiba',
				'state_id' => 540,
			),

			array(
				'id' => 629,
				'name' => 'Atisbo',
				'state_id' => 540,
			),

			array(
				'id' => 630,
				'name' => 'Egbeda',
				'state_id' => 540,
			),

			array(
				'id' => 631,
				'name' => 'Ibadan North',
				'state_id' => 540,
			),

			array(
				'id' => 632,
				'name' => 'Ibadan North-East',
				'state_id' => 540,
			),

			array(
				'id' => 633,
				'name' => 'Ibadan North-West',
				'state_id' => 540,
			),

			array(
				'id' => 634,
				'name' => 'Ibadan South-East',
				'state_id' => 540,
			),

			array(
				'id' => 635,
				'name' => 'Ibadan South-West',
				'state_id' => 540,
			),

			array(
				'id' => 636,
				'name' => 'Ibarapa Central',
				'state_id' => 540,
			),

			array(
				'id' => 637,
				'name' => 'Ibarapa East',
				'state_id' => 540,
			),

			array(
				'id' => 638,
				'name' => 'Ibarapa North',
				'state_id' => 540,
			),

			array(
				'id' => 639,
				'name' => 'Ido',
				'state_id' => 540,
			),

			array(
				'id' => 640,
				'name' => 'Irepo',
				'state_id' => 540,
			),

			array(
				'id' => 641,
				'name' => 'Iseyin',
				'state_id' => 540,
			),

			array(
				'id' => 642,
				'name' => 'Itesiwaju',
				'state_id' => 540,
			),

			array(
				'id' => 643,
				'name' => 'Iwajowa',
				'state_id' => 540,
			),

			array(
				'id' => 644,
				'name' => 'Kajola',
				'state_id' => 540,
			),

			array(
				'id' => 645,
				'name' => 'Lagelu',
				'state_id' => 540,
			),

			array(
				'id' => 646,
				'name' => 'Ogbomosho North',
				'state_id' => 540,
			),

			array(
				'id' => 647,
				'name' => 'Ogbomosho South',
				'state_id' => 540,
			),

			array(
				'id' => 648,
				'name' => 'Ogo Oluwa',
				'state_id' => 540,
			),

			array(
				'id' => 649,
				'name' => 'Olorunsogo',
				'state_id' => 540,
			),

			array(
				'id' => 650,
				'name' => 'Oluyole',
				'state_id' => 540,
			),

			array(
				'id' => 651,
				'name' => 'Ona Ara',
				'state_id' => 540,
			),

			array(
				'id' => 652,
				'name' => 'Orelope',
				'state_id' => 540,
			),

			array(
				'id' => 653,
				'name' => 'Ori Ire',
				'state_id' => 540,
			),

			array(
				'id' => 654,
				'name' => 'Oyo',
				'state_id' => 540,
			),

			array(
				'id' => 655,
				'name' => 'Oyo East',
				'state_id' => 540,
			),

			array(
				'id' => 656,
				'name' => 'Saki East',
				'state_id' => 540,
			),

			array(
				'id' => 657,
				'name' => 'Saki West',
				'state_id' => 540,
			),

			array(
				'id' => 658,
				'name' => 'Surulere',
				'state_id' => 540,
			),

			array(
				'id' => 659,
				'name' => 'Bokkos',
				'state_id' => 541,
			),

			array(
				'id' => 660,
				'name' => 'Barkin Ladi',
				'state_id' => 541,
			),

			array(
				'id' => 661,
				'name' => 'Bassa',
				'state_id' => 541,
			),

			array(
				'id' => 662,
				'name' => 'Jos East',
				'state_id' => 541,
			),

			array(
				'id' => 663,
				'name' => 'Jos North',
				'state_id' => 541,
			),

			array(
				'id' => 664,
				'name' => 'Jos South',
				'state_id' => 541,
			),

			array(
				'id' => 665,
				'name' => 'Kanam',
				'state_id' => 541,
			),

			array(
				'id' => 666,
				'name' => 'Kanke',
				'state_id' => 541,
			),

			array(
				'id' => 667,
				'name' => 'Langtang South',
				'state_id' => 541,
			),

			array(
				'id' => 668,
				'name' => 'Langtang North',
				'state_id' => 541,
			),

			array(
				'id' => 669,
				'name' => 'Mangu',
				'state_id' => 541,
			),

			array(
				'id' => 670,
				'name' => 'Mikang',
				'state_id' => 541,
			),

			array(
				'id' => 671,
				'name' => 'Pankshin',
				'state_id' => 541,
			),

			array(
				'id' => 672,
				'name' => 'Qua-an Pan',
				'state_id' => 541,
			),

			array(
				'id' => 673,
				'name' => 'Riyom',
				'state_id' => 541,
			),

			array(
				'id' => 674,
				'name' => 'Shendam',
				'state_id' => 541,
			),

			array(
				'id' => 675,
				'name' => 'Wase',
				'state_id' => 541,
			),

			array(
				'id' => 676,
				'name' => 'Abua/Odual',
				'state_id' => 542,
			),

			array(
				'id' => 677,
				'name' => 'Ahoada East',
				'state_id' => 542,
			),

			array(
				'id' => 678,
				'name' => 'Ahoada West',
				'state_id' => 542,
			),

			array(
				'id' => 679,
				'name' => 'Akuku-Toru',
				'state_id' => 542,
			),

			array(
				'id' => 680,
				'name' => 'Andoni',
				'state_id' => 542,
			),

			array(
				'id' => 681,
				'name' => 'Asari-Toru',
				'state_id' => 542,
			),

			array(
				'id' => 682,
				'name' => 'Bonny',
				'state_id' => 542,
			),

			array(
				'id' => 683,
				'name' => 'Degema',
				'state_id' => 542,
			),

			array(
				'id' => 684,
				'name' => 'Eleme',
				'state_id' => 542,
			),

			array(
				'id' => 685,
				'name' => 'Emuoha',
				'state_id' => 542,
			),

			array(
				'id' => 686,
				'name' => 'Etche',
				'state_id' => 542,
			),

			array(
				'id' => 687,
				'name' => 'Gokana',
				'state_id' => 542,
			),

			array(
				'id' => 688,
				'name' => 'Ikwerre',
				'state_id' => 542,
			),

			array(
				'id' => 689,
				'name' => 'Khana',
				'state_id' => 542,
			),

			array(
				'id' => 690,
				'name' => 'Obio/Akpor',
				'state_id' => 542,
			),

			array(
				'id' => 691,
				'name' => 'Ogba/Egbema/Ndoni',
				'state_id' => 542,
			),

			array(
				'id' => 692,
				'name' => 'Ogu/Bolo',
				'state_id' => 542,
			),

			array(
				'id' => 693,
				'name' => 'Okrika',
				'state_id' => 542,
			),

			array(
				'id' => 694,
				'name' => 'Omuma',
				'state_id' => 542,
			),

			array(
				'id' => 695,
				'name' => 'Opobo/Nkoro',
				'state_id' => 542,
			),

			array(
				'id' => 696,
				'name' => 'Oyigbo',
				'state_id' => 542,
			),

			array(
				'id' => 697,
				'name' => 'Port Harcourt',
				'state_id' => 542,
			),

			array(
				'id' => 698,
				'name' => 'Tai',
				'state_id' => 542,
			),

			array(
				'id' => 699,
				'name' => 'Binji',
				'state_id' => 543,
			),

			array(
				'id' => 700,
				'name' => 'Bodinga',
				'state_id' => 543,
			),

			array(
				'id' => 701,
				'name' => 'Dange Shuni',
				'state_id' => 543,
			),

			array(
				'id' => 702,
				'name' => 'Gada',
				'state_id' => 543,
			),

			array(
				'id' => 703,
				'name' => 'Goronyo',
				'state_id' => 543,
			),

			array(
				'id' => 704,
				'name' => 'Gudu',
				'state_id' => 543,
			),

			array(
				'id' => 705,
				'name' => 'Gwadabawa',
				'state_id' => 543,
			),

			array(
				'id' => 706,
				'name' => 'Illela',
				'state_id' => 543,
			),

			array(
				'id' => 707,
				'name' => 'Isa',
				'state_id' => 543,
			),

			array(
				'id' => 708,
				'name' => 'Kebbe',
				'state_id' => 543,
			),

			array(
				'id' => 709,
				'name' => 'Kware',
				'state_id' => 543,
			),

			array(
				'id' => 710,
				'name' => 'Rabah',
				'state_id' => 543,
			),

			array(
				'id' => 711,
				'name' => 'Sabon Birni',
				'state_id' => 543,
			),

			array(
				'id' => 712,
				'name' => 'Shagari',
				'state_id' => 543,
			),

			array(
				'id' => 713,
				'name' => 'Silame',
				'state_id' => 543,
			),

			array(
				'id' => 714,
				'name' => 'Sokoto North',
				'state_id' => 543,
			),

			array(
				'id' => 715,
				'name' => 'Sokoto South',
				'state_id' => 543,
			),

			array(
				'id' => 716,
				'name' => 'Tambuwal',
				'state_id' => 543,
			),

			array(
				'id' => 717,
				'name' => 'Tangaza',
				'state_id' => 543,
			),

			array(
				'id' => 718,
				'name' => 'Tureta',
				'state_id' => 543,
			),

			array(
				'id' => 719,
				'name' => 'Wamako',
				'state_id' => 543,
			),

			array(
				'id' => 720,
				'name' => 'Wurno',
				'state_id' => 543,
			),

			array(
				'id' => 721,
				'name' => 'Yabo',
				'state_id' => 543,
			),

			array(
				'id' => 722,
				'name' => 'Ardo Kola',
				'state_id' => 544,
			),

			array(
				'id' => 723,
				'name' => 'Bali',
				'state_id' => 544,
			),

			array(
				'id' => 724,
				'name' => 'Donga',
				'state_id' => 544,
			),

			array(
				'id' => 725,
				'name' => 'Gashaka',
				'state_id' => 544,
			),

			array(
				'id' => 726,
				'name' => 'Gassol',
				'state_id' => 544,
			),

			array(
				'id' => 727,
				'name' => 'Ibi',
				'state_id' => 544,
			),

			array(
				'id' => 728,
				'name' => 'Jalingo',
				'state_id' => 544,
			),

			array(
				'id' => 729,
				'name' => 'Karim Lamido',
				'state_id' => 544,
			),

			array(
				'id' => 730,
				'name' => 'Kumi',
				'state_id' => 544,
			),

			array(
				'id' => 731,
				'name' => 'Lau',
				'state_id' => 544,
			),

			array(
				'id' => 732,
				'name' => 'Sardauna',
				'state_id' => 544,
			),

			array(
				'id' => 733,
				'name' => 'Takum',
				'state_id' => 544,
			),

			array(
				'id' => 734,
				'name' => 'Ussa',
				'state_id' => 544,
			),

			array(
				'id' => 735,
				'name' => 'Wukari',
				'state_id' => 544,
			),

			array(
				'id' => 736,
				'name' => 'Yorro',
				'state_id' => 544,
			),

			array(
				'id' => 737,
				'name' => 'Zing',
				'state_id' => 544,
			),

			array(
				'id' => 738,
				'name' => 'Bade',
				'state_id' => 545,
			),

			array(
				'id' => 739,
				'name' => 'Bursari',
				'state_id' => 545,
			),

			array(
				'id' => 740,
				'name' => 'Damaturu',
				'state_id' => 545,
			),

			array(
				'id' => 741,
				'name' => 'Fika',
				'state_id' => 545,
			),

			array(
				'id' => 742,
				'name' => 'Fune',
				'state_id' => 545,
			),

			array(
				'id' => 743,
				'name' => 'Geidam',
				'state_id' => 545,
			),

			array(
				'id' => 744,
				'name' => 'Gujba',
				'state_id' => 545,
			),

			array(
				'id' => 745,
				'name' => 'Gulani',
				'state_id' => 545,
			),

			array(
				'id' => 746,
				'name' => 'Jakusko',
				'state_id' => 545,
			),

			array(
				'id' => 747,
				'name' => 'Karasuwa',
				'state_id' => 545,
			),

			array(
				'id' => 748,
				'name' => 'Machina',
				'state_id' => 545,
			),

			array(
				'id' => 749,
				'name' => 'Nangere',
				'state_id' => 545,
			),

			array(
				'id' => 750,
				'name' => 'Nguru',
				'state_id' => 545,
			),

			array(
				'id' => 751,
				'name' => 'Potiskum',
				'state_id' => 545,
			),

			array(
				'id' => 752,
				'name' => 'Tarmuwa',
				'state_id' => 545,
			),

			array(
				'id' => 753,
				'name' => 'Yunusari',
				'state_id' => 545,
			),

			array(
				'id' => 754,
				'name' => 'Yusufari',
				'state_id' => 545,
			),

			array(
				'id' => 755,
				'name' => 'Anka',
				'state_id' => 546,
			),

			array(
				'id' => 756,
				'name' => 'Bakura',
				'state_id' => 546,
			),

			array(
				'id' => 757,
				'name' => 'Birnin Magaji/Kiyaw',
				'state_id' => 546,
			),

			array(
				'id' => 758,
				'name' => 'Bukkuyum',
				'state_id' => 546,
			),

			array(
				'id' => 759,
				'name' => 'Bungudu',
				'state_id' => 546,
			),

			array(
				'id' => 760,
				'name' => 'Gummi',
				'state_id' => 546,
			),

			array(
				'id' => 761,
				'name' => 'Gusau',
				'state_id' => 546,
			),

			array(
				'id' => 762,
				'name' => 'Kaura Namoda',
				'state_id' => 546,
			),

			array(
				'id' => 763,
				'name' => 'Maradun',
				'state_id' => 546,
			),

			array(
				'id' => 764,
				'name' => 'Maru',
				'state_id' => 546,
			),

			array(
				'id' => 765,
				'name' => 'Shinkafi',
				'state_id' => 546,
			),

			array(
				'id' => 766,
				'name' => 'Talata Mafara',
				'state_id' => 546,
			),

			array(
				'id' => 767,
				'name' => 'Chafe',
				'state_id' => 546,
			),

			array(
				'id' => 768,
				'name' => 'Zurmi',
				'state_id' => 546,
			),

			array(
				'id' => 769,
				'name' => 'Abaji',
				'state_id' => 524,
			),

			array(
				'id' => 770,
				'name' => 'Bwari',
				'state_id' => 524,
			),

			array(
				'id' => 771,
				'name' => 'Gwagwalada',
				'state_id' => 524,
			),

			array(
				'id' => 772,
				'name' => 'Kuje',
				'state_id' => 524,
			),

			array(
				'id' => 773,
				'name' => 'Kwali',
				'state_id' => 524,
			),

			array(
				'id' => 774,
				'name' => 'Municipal Area Council',
				'state_id' => 524,
			),

		));
	}

}
