<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stats')->insert([

            'nameErrors' => NULL,
            'nameWrongCharacter' => NULL,
            'nameNumberInput' => NULL,
            'nameTooLong' => NULL,
            'nameEmpty' => NULL,
            'nameTooShort' => NULL,
            'surnameTooShort' => NULL,
            'nameNoSpace' => NULL,
            'nameTooManySpace' => NULL,
            'emailErrors' => NULL,
            'emailWrongDomain' => NULL,
            'emailNo@sign' => NULL,
            'emailTooMany@signs' => NULL,
            'emailBadCharacterBefore@sign' => NULL,
            'emailNameTooShort' => NULL,
            'emailNameTooLong' => NULL,
            'phoneErrors' => NULL,
            'phoneTooShort' => NULL,
            'phoneTooLong' => NULL,
            'phoneNotEuropean' => NULL,
        ]);
    }
}
