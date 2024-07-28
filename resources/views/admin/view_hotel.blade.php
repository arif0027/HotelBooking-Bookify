<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1f2833;
            color: #c5c5c5;
        }

        

        .page-content {
            padding: 40px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .table_deg {
            border-collapse: collapse;
            width: 80%;
            margin: auto;
            margin-top: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        .table_deg th, .table_deg td {
            border: 1px solid #4a5c67;
            padding: 15px;
            text-align: center;
        }

        .table_deg th {
            background-color: #32424a;
            color: #ffffff;
            font-weight: bold;
        }

        .table_deg td {
            background-color: #2c3e50;
        }

        .table_deg tr:nth-child(even) td {
            background-color: #34495e;
        }

        .table_deg tr:hover td {
            background-color: #3a4d5c;
        }

        .btn {
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-danger {
            background-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        .btn-warning {
            background-color: #f39c12;
        }

        .btn-warning:hover {
            background-color: #e67e22;
        }

        img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-bottom: 30px; color: #ffffff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); border-bottom: 4px solid #e93131; display: inline-block; padding-bottom: 5px;">
                  Hotel Management
              </h1>

                <table class="table_deg">
                    <tr>
                        <th>Hotel Name</th>
                        <th>Place</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>

                    @foreach ($data as $data)
                    <tr>
                        <td>{{ $data->hotel_name }}</td>
                        <td>{{ $data->place }}</td>
                        <td>
                            <img src="room/{{ $data->image }}" alt="Room Image">
                        </td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this?');" class="btn btn-danger" href="{{ url('hotel_delete', $data->id) }}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ url('hotel_update', $data->id) }}">Update</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
