<html>

<head>
    <title>Course Data</title>
</head>

<body>
    <h2>Course Data</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Aksi</th>
            </tr>

        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>Edit | Hapus</td>
            </tr>
            @endforeach
        </tbody>


        </thead>



    </table>



</body>

</html>