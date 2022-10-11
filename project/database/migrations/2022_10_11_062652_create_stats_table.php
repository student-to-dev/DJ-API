<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('nameErrors'); // bendras count
            $table->string('nameWrongCharacter'); // english a-z
            $table->string('nameNumberInput');
            $table->string('nameTooLong'); //15
            $table->string('surnameTooLong'); //20
            $table->string('nameTooShort'); // 3
            $table->string('surnameTooShort'); // 4
            $table->string('nameNoSpace');
            $table->string('nameTooManySpace'); // 1 space only
            // $table->string('nameAlready');

            $table->string('emailErrors');
            $table->string('emailWrongDomain'); //@yahoo.com, @gmail.com, @protonmail.com only
            $table->string('emailNo@sign');
            $table->string('emailTooMany@signs');
            $table->string('emailBadCharacterBefore@sign');
            $table->string('emailNameTooShort'); // 3
            $table->string('emailNameTooLong'); // 30
            $table->string('emailNotUnique'); // 30

            // /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]
            // {1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            $table->string('phoneErrors');
            $table->string('phoneTooShort');
            $table->string('phoneTooLong');
            $table->string('phoneNotUnique');
            $table->string('phoneErrors');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
};
