<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => '品牌动态',
                'description' => '新闻资讯--品牌动态',
            ],
            [
                'name'        => '行业资讯',
                'description' => '新闻资讯--行业资讯',
            ],
            [
                'name'        => '常见问题',
                'description' => '客服中心--常见问题',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}
