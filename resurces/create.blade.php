<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


</head>

<body>
    <div class="col-4 ml-auto mr-auto border border-dark text-right">
        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-4">
                <label>title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="p-4">
                <label>pdf</label>
                <input type="file" name="pdf" class="form-control">
            </div>
            <button class="btn btn-info ">submit</button>
    </div>
    </form>
</body>

</html>
