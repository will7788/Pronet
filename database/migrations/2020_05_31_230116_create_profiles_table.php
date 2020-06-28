<?php
//William Thornton, Sam Krall, 06/28/2020
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("status")->nullable(true);
            $table->string("street")->nullable(true);
            $table->string("city")->nullable(true);
            $table->string("state")->nullable(true);
            $table->integer("zip")->nullable(true);
            $table->text("about")->nullable(true);

            $table->timestamps();

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
