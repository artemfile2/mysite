<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')
            ->insert([
                'id' => 1,
                'title' => 'Web - develop title zagolovok text',
                'user' => 'Сопик Артем',
                'content' => 'Веб-разработка — процесс создания веб-сайта или веб-приложения. 
                              Основными этапами процесса являются веб-дизайн, вёрстка страниц, 
                              программирование для веб на стороне клиента и сервера, 
                              а также конфигурирование веб-сервера.',
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);

        DB::table('posts')
            ->insert([
                'id' => 2,
                'title' => 'PHP it\'s real cool for web',
                'user' => 'Сопик Артем',
                'content' => 'PHP (англ. PHP: Hypertext Preprocessor — 
                              «PHP: препроцессор гипертекста»; первоначально Personal 
                              Home Page Tools — «Инструменты для создания персональных 
                              веб-страниц») — скриптовый язык общего назначения, 
                              интенсивно применяемый для разработки веб-приложений. 
                              В настоящее время поддерживается подавляющим большинством 
                              хостинг-провайдеров и является одним из лидеров среди языков, 
                              применяющихся для создания динамических веб-сайтов.',
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);

        DB::table('posts')
            ->insert([
                'id' => 3,
                'title' => 'Laravel frameworks my live',
                'user' => 'Артем Atem',
                'content' => 'Laravel — бесплатный веб-фреймворк с открытым кодом, 
                              предназначенный для разработки с использованием 
                              архитектурной модели MVC (англ. Model View Controller — 
                              модель-представление-контроллер). Laravel выпущен под 
                              лицензией MIT. Исходный код проекта размещается на GitHub.
                              В результате опроса sitepoint.com в декабре 2013 года о 
                              самых популярных PHP-фреймворках Laravel занял место самого 
                              многообещающего проекта на 2014 год.',
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);

        DB::table('posts')
            ->insert([
                'id' => 4,
                'title' => 'Git cool systems ',
                'user' => 'Atem S',
                'content' => 'Git (произн. «гит») — распределённая система управления версиями. 
                              Проект был создан Линусом Торвальдсом для управления разработкой 
                              ядра Linux, первая версия выпущена 7 апреля 2005 года.',
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);

        DB::table('posts')
            ->insert([
                'id' => 5,
                'title' => 'JQery',
                'user' => 'A S',
                'content' => 'jQuery — библиотека JavaScript, фокусирующаяся на взаимодействии 
                              JavaScript и HTML. Библиотека jQuery помогает легко получать 
                              доступ к любому элементу',
                'created_at' => Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s'),
            ]);
    }
}
