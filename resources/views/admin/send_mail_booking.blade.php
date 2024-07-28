<!DOCTYPE html>
<html>
<head>
    <base href="/public">
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

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #2c3e50;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
        }

        .form-container input[type="text"],
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #4a5c67;
            background-color: #34495e;
            color: #ffffff;
        }

        .form-container textarea {
            resize: vertical;
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
            cursor: pointer;
        }

        .btn-primary {
            background-color: #0088cc;
        }

        .btn-primary:hover {
            background-color: #005580;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h2>Send Mail</h2>
        </div>

        <div class="form-container">


            <div>
                @if (session()->has('message'))
                    <div style="background: green;color:white" class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>

            @if ($errors)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="{{ url('mail_booking', $data->id) }}" method="post">
                @csrf
                <label for="greeting">Booking Greeting</label>
                <input type="text" id="greeting" name="greeting" required>

                <label for="body">Booking Details</label>
                <textarea id="body" name="body" rows="5" required></textarea>

                <label for="action_text">Action Text</label>
                <input type="text" id="action_text" name="action_text" required>

                <label for="action_url">Action URL</label>
                <input type="text" id="action_url" name="action_url" required>

                <label for="endline">End Line</label>
                <input type="text" id="endline" name="endline" required>

                <button style="margin-bottom: 30px" type="submit" class="btn btn-primary">Send Mail</button>
            </form>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
