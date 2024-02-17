<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => '1 класс - Математика',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для первоклассников. Математика - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '1',
        ]);
        DB::table('events')->insert([
            'title' => '1 класс - Русский язык',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для первоклассников. Русский язык - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '2',
        ]);
        DB::table('events')->insert([
            'title' => '1 класс - Окружающий мир',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для первоклассников. Окружающий мир - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '3',
        ]);
        DB::table('events')->insert([
            'title' => '1 класс - Межпредметная',
            'description' => 'Всероссийская олимпиада «УчёныйКотик»  для первоклассников. Межпредметная - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '4',
        ]);
        DB::table('events')->insert([
            'title' => '2 класс - Математика',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для второклассников. Математика - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '1',
        ]);
        DB::table('events')->insert([
            'title' => '2 класс - Русский язык',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для второклассников. Русский язык - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '2',
        ]);
        DB::table('events')->insert([
            'title' => '2 класс - Окружающий мир',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для второклассников. Окружающий мир - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '3',
        ]);
        DB::table('events')->insert([
            'title' => '2 класс - Межпредметная',
            'description' => 'Всероссийская олимпиада «УчёныйКотик»  для второклассников. Межпредметная - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '4',
        ]);
        DB::table('events')->insert([
            'title' => '3 класс - Математика',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для третьеклассников. Математика - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '1',
        ]);
        DB::table('events')->insert([
            'title' => '3 класс - Русский язык',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для третьеклассников. Русский язык - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '2',
        ]);
        DB::table('events')->insert([
            'title' => '3 класс - Окружающий мир',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для третьеклассников. Окружающий мир - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '3',
        ]);
        DB::table('events')->insert([
            'title' => '3 класс - Межпредметная',
            'description' => 'Всероссийская олимпиада «УчёныйКотик»  для третьеклассников. Межпредметная - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '4',
        ]);
        DB::table('events')->insert([
            'title' => '4 класс - Математика',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для четвероклассников. Математика - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '1',
        ]);
        DB::table('events')->insert([
            'title' => '4 класс - Русский язык',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для четвероклассников. Русский язык - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '2',
        ]);
        DB::table('events')->insert([
            'title' => '4 класс - Окружающий мир',
            'description' => 'Всероссийская олимпиада «УчёныйКотик» для четвероклассников. Окружающий мир - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '3',
        ]);
        DB::table('events')->insert([
            'title' => '4 класс - Межпредметная',
            'description' => 'Всероссийская олимпиада «УчёныйКотик»  для четвероклассников. Межпредметная - I сезон',
            'deadline' => '31.05.24',
            'category_events_id' => '4',
        ]);
    }
}
