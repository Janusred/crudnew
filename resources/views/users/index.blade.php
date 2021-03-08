<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <div class="row">
            <div class=" col-sm-8 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card- body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                    @foreach($errors->all()as $errors)
                    - {{ $errors}} <br>
                    @endforeach
                    </div>
                    @endif
                        <form action="{{ route('users.store') }}" method="POST">
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-auto">
                                    @csrf
                                    <button type="submit " class="btn btn-primary">Enviar</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>&nbsp;</th>
                        </tr>

                    </thead>
                    <tbody>

                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>Eliminar</td>

                        </tr>

                        @andforeach

                    </tbody>
                </table>
            </div>

        </div>



    </div>
</body>

</html>