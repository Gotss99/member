<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Member-Laravel</title>
</head>
<body>
    <div class="container mt-5">


        <div class="row">
            <div class="col-lg-12 mb-3">
                <h2>Member All::</h2>

                <a href="" class="btn btn-primary">Create Member</a>
            </div>

            <div class="col-lg-12 mb-3">
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>

                    @foreach ($members as $member)
                        <tr>
                            <td>{{ $member->id }}</td>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->address }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</body>
</html>
