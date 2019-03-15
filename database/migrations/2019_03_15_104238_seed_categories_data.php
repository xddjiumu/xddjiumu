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
                'name'        => '新闻资讯',
                'description' => '发布现行家装行业新的技术标准，技术，行业成熟方案',
            ],
            [
                'name'        => '公司动态',
                'description' => '发布公司最近运营状态，内部运营，外部活动，加盟招商，优惠活动',
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
