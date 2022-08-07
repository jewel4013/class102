<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>All country</h1>
        <a href="/country/create" class="btn btn-primary btn-sm">Create a new country</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Country Name</th>
                    <th>Capital Name</th>
                    <th>Currency Name</th>
                    <th>Population</th>
                    <th>Created_At</th>
                    <th>Updated_At</th>
                    <th>Modify</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allTableData as $data)
                    <tr>
                        <td>{{$data->id }}</td>
                        <td>{{$data->name }}</td>
                        <td>{{$data->capital }}</td>
                        <td>{{$data->currency }}</td>
                        <td>{{$data->population }}</td>
                        <td>{{$data->created_at }}</td>
                        <td>{{$data->updated_at->diffForHumans() }}</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-sm">Edit</a> Or
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>