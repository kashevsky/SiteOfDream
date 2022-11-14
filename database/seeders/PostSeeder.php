<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
                'title'=>'Статья о котиках',
                'description' => 'Супер мега крутая статья',
                'image' =>'https://i.pinimg.com/736x/6a/9e/47/6a9e4750e99bfd241cbf1f5c9acba702.jpg',
                'content' => 'котики - это коты, а коты это котики'
            ]
            );
            DB::table('posts')->insert(
                [
                    'title'=>'Статья о собачках',
                    'description' => 'Мега ульра крутецкая статья',
                    'image' =>'https://api.bnnapp.com/__proxy_host/itd2.mycdn.me/image?id=893958869915&t=20&plc=MOBILE&tkn=*wjZqhk0_Ex7YUOc08qC7bV0mAdQ',
                    'content' => 'собачки - это собаки, а собаки это собаки'
                ]
                );
                DB::table('posts')->insert(
                    [
                        'title'=>'А это статья о поросятах',
                        'description' => 'Единственная и неповторимая статья',
                        'image' =>'https://wallbox.ru/resize/640x960/wallpapers/main/201628/c8ddfaa8f3d7233.jpg',
                        'content' => 'Поросята с хрюнделями'
                    ]
                    );
    }
}
