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

        <a href="/photos/create" class="btn btn-info" role="button">Add Photos</a>
        <h2>List of photos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>

                    <th>Path</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($photos as $photo)
                    <tr>
                        <td>{{ $photo->id }}</td>
                        <td>{{ $photo->title }}</td>

                        <td>{{ $photo->path }}</td>
                        <td>{{ $photo->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('photos.show',$photo->id) }}">Show</a></td>
                        <td><a href="{{ route('photos.edit',$photo->id) }}">Edit</a></td>

                    </tr>
                @empty
                    <tr>
                        <td alight="centre" colspan="5">No Photos</td>
                    </tr>

            </tbody>

        </table>
        @endforelse
    </div>

</body>

</html>
