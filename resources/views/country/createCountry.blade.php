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
        <h1>Creat a new country</h1>

        <form action="/country/create" class="" method="POST">

            @csrf

            <div class="form-gorup mt-3">
                <label for="name">Country Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-gorup mt-3">
                <label for="capital">Capital Name</label>
                <input type="text" class="form-control" name="capital" id="capital">
            </div>
            <div class="form-gorup mt-3">
                <label for="currency">Currency Name</label>
                <input type="text" class="form-control" name="currency" id="currency">
            </div>
            <div class="form-gorup mt-3">
                <label for="population">Population</label>
                <input type="text" class="form-control" name="population" id="population">
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</body>
</html>