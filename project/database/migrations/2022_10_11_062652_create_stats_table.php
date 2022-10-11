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
            $table->string('nameErrors'); // total count
            $table->string('nameWrongCharacter'); // english a-z
            $table->string('nameNumberInput');
            $table->string('nameTooLong'); // max15
            $table->string('surnameTooLong'); // max20
            $table->string('nameTooShort'); // min3
            $table->string('surnameTooShort'); // min4
            $table->string('nameNoSpace');
            $table->string('nameTooManySpace');

            $table->string('emailErrors');
            $table->string('emailWrongDomain'); //@yahoo.com, @gmail.com, @protonmail.com only
            $table->string('emailNo@sign');
            $table->string('emailTooMany@signs');
            $table->string('emailBadCharacterBefore@sign');
            $table->string('emailNameTooShort'); // 3
            $table->string('emailNameTooLong'); // 30

            // /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]
            // {1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            
            $table->string('phoneErrors');
            $table->string('phoneTooShort');
            $table->string('phoneTooLong');
            $table->string('phoneNotEuropean');

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
