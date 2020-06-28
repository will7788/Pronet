<?php
//William Thornton, Sam Krall, 06/28/2020
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("name")->nullable(true);
            $table->string("date")->nullable(true);
            $table->string("city")->nullable(true);
            $table->string("state")->nullable(true);
            $table->integer("zip")->nullable(true);
            $table->text("duties")->nullable(true);
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
        Schema::dropIfExists('portfolios');
    }
}
