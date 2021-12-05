<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Departments</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /* align-items: center; */
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .pagination {
                display: flex;
                list-style-type: none;
                padding-left: 0;
            }

            .pagination li {
                font-size: 1.2rem;
                margin: 3px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">
            {{-- full-height --}}
            <div>
                <div class="content">
                    <div class="title m-b-md">
                        Departments
                    </div>

                    {{-- {{ $workers->name }} --}}
                    @foreach ($departments as $department)
                        <p>Id: {{ $department->id }}, Name: {{ $department->name }}</p>
                        <hr>
                    @endforeach
                </div>
                {{ $departments->links() }}
            </div>
        </div>
    </body>
</html>
