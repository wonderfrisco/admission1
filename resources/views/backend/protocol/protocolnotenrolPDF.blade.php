<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Enrolment Protocol List</title>
    <style>
        table {
            font-size: 9;
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: rgb(136, 187, 221);
            color: white;
            font-weight: bolder;
            text-align: center;
            font-size: 11;
            text-transform: uppercase;
        }
        /* th, td {
            padding: 8px 4px;
        } */
        tr:nth-child(odd) {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="7" style="background: none; color:black">Labone Senior High Schol</th>
            </tr>
            <tr>
                <th colspan="7" style="background: none; color:black"> Protocol Not Enrolled</th>
            </tr>
            <tr>
                <td colspan="7" style="text-align: center"> <img src="{{ public_path('frontend/img/header-image.jpg') }}" width="70" alt=""></td>
            </tr>
            <tr>
                <th>SN</th>
                <th>Index Number</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Programme</th>
                <th>Track</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $placement)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $placement->index }}</td>
                <td>{{ $placement->name }}</td>
                <td>{{ $placement->gender->name }}</td>
                <td>{{ $placement->programme->name }}</td>
                <td>{{ $placement->track }}</td>
                <td>{{ $placement->status->name }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>
