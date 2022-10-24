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
            $table->string('nameErrors')->nullable(); // total count
            $table->string('nameWrongCharacter')->nullable(); // english a-z
            $table->string('nameNumberInput')->nullable();
            $table->string('nameTooLong')->nullable(); // max15
            $table->string('nameEmpty')->nullable();
            $table->string('nameTooShort')->nullable(); // min3
            $table->string('surnameTooShort')->nullable(); // min4
            $table->string('nameNoSpace')->nullable();
            $table->string('nameTooManySpace')->nullable();

            $table->string('emailErrors')->nullable();
            $table->string('emailWrongDomain')->nullable(); //@yahoo.com, @gmail.com, @protonmail.com only
            $table->string('emailNo@sign')->nullable();
            $table->string('emailTooMany@signs')->nullable();
            $table->string('emailBadCharacterBefore@sign')->nullable();
            $table->string('emailNameTooShort')->nullable(); // 3
            $table->string('emailNameTooLong')->nullable(); // 30
            $table->string('phoneErrors')->nullable();
            $table->string('phoneTooShort')->nullable();
            $table->string('phoneTooLong')->nullable();
            $table->string('phoneNotEuropean')->nullable();

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
