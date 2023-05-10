<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="/dashboard.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Document</title>
    <style>
        .quest label {
            font-size: 18px;
            padding-top: 50px;
        }

        .quest span {
            font-size: 18px;
            padding-left: 5px
        }

        .quest {
            margin-top: 1px;
        }

        input {
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        @include('navbar')
        <main>
            <form method="post" action="/submit">
                @csrf
                <fieldset>
                    <legend style="text-align:center; font-size:13px; ">
                        <h2>Practice Questions</h2>
                    </legend>
                    <p style="margin-top:10px; font-weight:bold; font-size:18px;">Answer each of the following questions
                        currently</p>

                    @foreach ($post as $item)
                        <div class="quest" id="user_table">

                            <label for="">{{ $loop->iteration }}</label>
                            <span>{{ $item->questions }}</span>
                            <p>
                                <input type="hidden" name="q" value="{{ $item->id }}">
                                <input type="radio" id="{{ $item->id }}" name="{{ $item->id }}"
                                    value="{{ $item->option_a }}">{{ $item->option_a }}
                            <p>
                                <input type="radio" id="{{ $item->id }}" name="{{ $item->id }}"
                                    value="{{ $item->option_b }}">{{ $item->option_b }}
                            <p>
                                <input type="radio" id="{{ $item->id }}" name="{{ $item->id }}"
                                    value="{{ $item->option_c }}">{{ $item->option_c }}
                            <p>
                                <input type="radio"id="{{ $item->id }}" name="{{ $item->id }}"
                                    value="{{ $item->option_d }}">{{ $item->option_d }}
                                <hr>
                        </div>
                    @endforeach, i
                    <div class="mt-4" id="pagination">

                    </div>
                    <button
                        style="text-align:center; padding:12px; font-size:15px; background-color:#7380ec;width:20%; margin-left:80%;
             color:white; border:none;"
                        name="submit">Submit</button>
                </fieldset>


            </form>
        </main>
        <div class="right">
            @include('header')
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
    <script>
        $(document).ready(function() {

            $('#pagination').on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href');

                $.ajax({
                    type: 'GET',
                    url: page,
                    success: function(data) {
                        $('#user_table').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>
