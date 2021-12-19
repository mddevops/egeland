# Egeland

 После клонирование запустите composer update <br>
 
 Cгенерировайте файл .env вручную, запустив:

    cp .env.example .env
    php artisan key:generate
 
 Настройте .env файл, были созданы несколько таблиц для тестирование, запустите php artisan migrate <br>
 
 Чтобы таблицы не были пустыми, запустите php artisan db:seed, добавяться несколько записов во все таблицы. <br>
 
 Запускаем проект php artisan serve<br>
 
 Все вовросы с ответом на главной страницы. 
 
 Список файлов где записан код:<br>
 
 Routes\web<br>
 App\Model\User<br>
 App\Model\TestUser<br>
 App\Model\CourseUser<br>
 App\Model\UserSetting<br>
 App\Model\Test<br>
 App\Model\Question<br>
 App\Model\QuestionType<br>
 App\Http\Controllers\WelcomeController<br>
 App\Http\Controllers\UserController<br> 
 Resource\views\welcome.blade<br>
 
 
 
 
 
