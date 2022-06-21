<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <a href="/photos" class="btn btn-info" role="button">Back</a>
        <h2>List of photos</h2>
        <ul class="list-group">
        <li class="list-group-item"> {{ $photo->id }} </li>
        <li class="list-group-item">{{ $photo->title }}</li>
        <li class="list-group-item">{{ $photo->path }}</li>
        <li class="list-group-item">{{ $photo->created_at->diffForHumans() }}</li>
        </ul>
    </div>

</body>

</html>
