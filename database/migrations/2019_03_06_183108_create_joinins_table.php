<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoininsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('joinins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('姓名');
            $table->string('mobile')->comment('手机');
            $table->string('address')->comment('地址');
            $table->string('product')->comment('主营产品');
            $table->string('telephone')->comment('电话');
            $table->string('fax')->comment('传真');
            $table->string('code')->comment('邮编');
            $table->string('email')->comment('邮箱');
            $table->string('message')->nullable()->comment('留言内容');
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
        Schema::dropIfExists('joinins');
    }
}
