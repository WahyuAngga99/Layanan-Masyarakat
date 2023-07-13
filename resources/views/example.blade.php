<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Laravel 10 tutorial</h1>
        <div class="card bg-light mt-3">
            <div class="card-header">
                import export excel to database
            </div>
            <div class="card-body">
                <form action="{{route('user.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control" name="file">
             
                <br>
                <button class="btn btn-primary" type="submit">import</button><br>
            </form>
            <br>
            <a href="{{route('user.export')}}" class="btn btn-warning">download</a>
                <table>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <th>{{$user->id}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>