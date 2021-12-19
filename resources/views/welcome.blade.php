<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
        <script>

            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('09842792d6fa9d6f6507', {
                cluster: 'eu'
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                alert(JSON.stringify(data));
            });
        </script>
        <title>EgeLand</title>

    </head>
    <body>
        <div class="container">
            <div class="row mt-5">
                @if (count($errors))
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('message') }}</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="col-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Задание #1 (Commands)
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <code>
                                        php artisan make:model NameOfModel –m <br>

                                        (Создаёт модель, “-m” вместе с моделью создаёт миграцию)<br><hr>

                                        php artisan make:controller NameOfController --resource<br>

                                        (Создаёт контроллер, “--resource” в контроллере создаёт все функции CRUD (чтение, запись, обновление и удаление))<br><hr>

                                        php artisan make:migration create_users_table<br>

                                        (Создаёт миграцию с названием таблицы Users)<br><hr>

                                        php artisan make:event NameOfEvent<br>

                                        (Создаёт событие)<br>
                                    </code>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Задание #2 (Commands)
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <code>
                                        php artisan migrate <br>

                                        (Запускает миграцию) <br><hr>

                                        php artisan queue:work <br>

                                        (Запуск очереди)
                                    </code>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Задание #3 (Form)
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <form role="form" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}

                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="inputEmail3" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="surname" class="col-sm-2 col-form-label">Surname</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="surname" class="form-control" id="surname" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Задание #4 (Select)
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <code>
                                        $user_first = User::query()->select('phone_number as Phone number','vk as VK')->get(); <br>
                                        $user_two = DB::table('users')->select('phone_number as Phone number','vk as VK')->get();
                                    </code>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                    Задание #5 (Relations)
                                </button>
                            </h2>
                            <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Test -> Question</h3><br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Test</th>
                                            <th scope="col">Question</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($test_question as $test)
                                            <tr>
                                                <th scope="row">{{$test->id}}</th>
                                                <td>{{$test->name}}</td>
                                                <td>
                                                <td>
                                                    @forelse($test->questions as $question)
                                                        {{$question->question}}
                                                    @empty
                                                    @endforelse
                                                </td>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table> <br>
                                    <h3>Question -> Test</h3><br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Question</th>
                                            <th scope="col">Test</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($question_test as $question)
                                            <tr>
                                                <th scope="row">{{$question->id}}</th>
                                                <td>{{$question->question}}</td>
                                                <td>
                                                    {{$question->tests->name}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table><br>

                                    <h3>Question -> QuestionType</h3><br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Question</th>
                                            <th scope="col">Question type</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($question_test as $question)
                                            <tr>
                                                <th scope="row">{{$question->id}}</th>
                                                <td>{{$question->question}}</td>
                                                <td>
                                                <td>
                                                    @forelse($question->question_types as $types)
                                                        {{$types->question_type}}<br>
                                                    @empty
                                                    @endforelse
                                                </td>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table> <br>
                                    <h3>QuestionType -> Question</h3><br>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Question type</th>
                                            <th scope="col">Question</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($question_type as $type)
                                            <tr>
                                                <th scope="row">{{$type->id}}</th>
                                                <td>{{$type->question_type}}</td>
                                                <td>
                                                    {{$type->questions->question}}
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                                    Задание #6 (Joins)
                                </button>
                            </h2>
                            <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Surname</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Test</th>
                                            <th scope="col">Course</th>
                                            <th scope="col">Setting</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($datas as $data)
                                            <tr>
                                                <th scope="row">{{$data->id}}</th>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->surname}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->test_name}}</td>
                                                <td>{{$data->course_name}}</td>
                                                <td>{{$data->avatar}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingseven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                                    Задание #7 (Ajax form)
                                </button>
                            </h2>
                            <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <form id="addUser">
                                        {{csrf_field()}}
                                        <div class="row mb-3">
                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="inputEmail3" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="surname" class="col-sm-2 col-form-label">Surname</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="surname" class="form-control" id="surname" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingeight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseeight" aria-expanded="false" aria-controls="flush-collapseeight">
                                    Задание #8 (WebSocket 'Pusher')
                                </button>
                            </h2>
                            <div id="flush-collapseeight" class="accordion-collapse collapse" aria-labelledby="flush-headingeight" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">

                                    <h1>Pusher Test</h1>
                                    <p>
                                        Try publishing an event to channel <code>my-channel</code>
                                        with event name <code>my-event</code>.
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript">
        $(document).ready(function(){

            $('#addUser').on('submit',function(e){
                e.preventDefault();

                $.ajax({
                    type:"POST",
                    url:"/user_store_ajax",
                    data:$('#addUser').serialize(),
                    dataType:"json",
                    success:function(data){
                        alert('Запись добавлена');
                    },
                    error: function(data) {
                        alert('Возникла ошибка');
                    }

                });
            });
        });
    </script>

</html>
