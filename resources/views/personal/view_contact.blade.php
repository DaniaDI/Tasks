<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table of contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            /* padding: 2rem; */
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
            font-weight: bold;
        }

        /* .table-container {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        } */

        table img {
            border-radius: 8px;
            border: 2px solid #dee2e6;
        }
    </style>

</head>

<body>
    <h1> Contact Table</h1>
    <!-- On tables -->
    <div class="container table-container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NAME</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>MSG</th>
                        <th>IMAGE</th>
                        <th>CREATED_AT</th>
                        <th>UPDATED_AT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $c)
                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->name }}</td>
                            <td>{{ $c->phone }}</td>
                            <td>{{ $c->email }}</td>
                            <td>{{ $c->area }}</td> <!--same as msg-->
                            <td> <img style="width:60px" src="{{ asset('uploads/' . $c->image) }}"></td>
                            <td>{{ $c->created_at }}</td>
                            <td>{{ $c->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</body>

</html>
