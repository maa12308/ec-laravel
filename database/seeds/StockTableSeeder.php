<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
   {
       DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
       DB::table('stocks')->insert([
           'name' => 'マグカップ',
           'detail' => 'マグです',
           'fee' => 1000,
           'imgpath' => 'mug.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'コーヒーミル',
           'detail' => 'ミルです',
           'fee' => 8000,
           'imgpath' => 'coffee-grinder.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'コーヒー豆',
           'detail' => 'まめです',
           'fee' => 2000,
           'imgpath' => 'coffee-beans.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'ティースプーン',
           'detail' => 'スプーンです',
           'fee' => 1000,
           'imgpath' => 'teaspoon.jpg',
       ]);


       DB::table('stocks')->insert([
           'name' => 'はちみつ',
           'detail' => 'はちみつです',
           'fee' => 1800,
           'imgpath' => 'honey.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'チョコレート',
           'detail' => 'チョコです',
           'fee' => 800,
           'imgpath' => 'chocolate.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'シャンパン',
           'detail' => '泡です',
           'fee' => 30000,
           'imgpath' => 'champagne.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'シャンパンクーラー',
           'detail' => 'シャンパンクーラーです',
           'fee' => 2000,
           'imgpath' => 'champagne-cooler.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'シャンパングラス',
           'detail' => 'シャンパングラスです',
           'fee' => 1200,
           'imgpath' => 'champagne-glass.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'ビール',
           'detail' => 'ビールです',
           'fee' => 1300,
           'imgpath' => 'beer-beer.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'ナッツ',
           'detail' => 'アーモンドです',
           'fee' => 700,
           'imgpath' => 'almonds.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'マカロン',
           'detail' => 'マカロンです',
           'fee' => 600,
           'imgpath' => 'macaroons.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => '歯ブラシ',
           'detail' => '歯ブラシです',
           'fee' => 300,
           'imgpath' => 'toothbrushes.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'せっけん',
           'detail' => 'せっけんです',
           'fee' => 1200,
           'imgpath' => 'bar-soap.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'タオル',
           'detail' => 'タオルです',
           'fee' => 2200,
           'imgpath' => 'towel.jpg',
       ]);

       DB::table('stocks')->insert([
           'name' => 'サングラス',
           'detail' => 'サングラスです',
           'fee' => 8000,
           'imgpath' => 'sunglasses.jpg',
       ]);
   }
}
