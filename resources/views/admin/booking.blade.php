<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1f2833;
            color: #c5c5c5;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .page-content {
            padding: 20px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            margin-top: 20px;
        }

        .table_deg {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .table_deg th, .table_deg td {
            border: 1px solid #4a5c67;
            padding: 8px;
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
            display: inline-block;
            margin: 2px 0;
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

        .btn-success {
            background-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }

        .btn-primary {
            background-color: #0088cc;
        }

        .btn-primary:hover {
            background-color: #005580;
        }

        .status-approved {
            color: skyblue;
        }

        .status-rejected {
            color: red;
        }

        .status-waiting {
            color: yellow;
        }

        img {
            max-width: 200px;
            border-radius: 5px;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #155724;
        }

        .close {
            float: right;
            font-size: 20px;
            font-weight: bold;
            line-height: 1;
            color: #ffffff;
            opacity: .6;
            transition: opacity 0.3s ease;
            cursor: pointer;
        }

        .close:hover {
            opacity: 1;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            border-bottom: 4px solid #e93131;
            display: inline-block;
            padding-bottom: 10px;
        }

        @media (max-width: 768px) {
            .table_deg th, .table_deg td {
                padding: 10px;
            }

            h1 {
                font-size: 28px;
            }
        }

        @media (max-width: 480px) {
            .table_deg th, .table_deg td {
                padding: 5px;
            }

            h1 {
                font-size: 24px;
            }

            .btn {
                padding: 5px 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Room Bookings</h1>

            <div class="table-container">
                <table class="table_deg">
                    <tr>
                        <th class="th_deg">Room ID</th>
                        <th class="th_deg">Customer Name</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Arrival Date</th>
                        <th class="th_deg">Leaving Date</th>
                        <th class="th_deg">Status</th>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Status Update</th>
                        <th class="th_deg">Send Mail</th>
                    </tr>

                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->room_id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->start_date }}</td>
                            <td>{{ $data->end_date }}</td>
                            <td>
                                @if ($data->status == 'approve')
                                    <span class="status-approved">Approved</span>
                                @elseif ($data->status == 'rejected')
                                    <span class="status-rejected">Rejected</span>
                                @else
                                    <span class="status-waiting">Waiting</span>
                                @endif
                            </td>
                            <td>{{ $data->room->room_title }}</td>
                            <td>{{ $data->room->price }}</td>
                            <td><img src="/room/{{ $data->room->image }}" alt=""></td>
                            <td>
                                <a onclick="return confirm('Are you sure to delete this?');" href="{{ url('delete_booking', $data->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                            <td>
                                <span style="display:block; margin-bottom:5px;">
                                    <a class="btn btn-success" href="{{ url('approve_book', $data->id) }}">Approve</a>
                                </span>
                                <a class="btn btn-warning" href="{{ url('reject_book', $data->id) }}">Reject</a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ url('send_mail_booking', $data->id) }}">Send Mail</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
          </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
