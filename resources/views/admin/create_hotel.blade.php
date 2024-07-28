<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">
        /* Custom styles for the add room page */
        body {
            background-color: #1a202c;
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
        }

        .page-content {
            padding: 40px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .page-header h1 {
            font-size: 30px;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            border-bottom: 4px solid #f02323;
            padding-bottom: 5px;
            display: inline-block;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #374151;
            background-color: #4a5568;
            color: #fff;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #4c51bf;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 15px;
        }

        input[type="submit"]:hover {
            background-color: #434190;
        }

        /* Error message styling */
        .error-message {
            color: #f56565;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <h1>Add Hotels</h1>
        </div>

        <div class="container-fluid">
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

            <form action="{{ url('add_hotel') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="name">Hotel Name:</label>
                    <input type="text" name="name" id="name" required>
                </div>

                

                <div class="form-group">
                    <label for="place">Place:</label>
                    <input type="text" name="place" id="place" required>
                </div>


                <div class="form-group">
                    <label for="image">Upload Image:</label>
                    <input type="file" name="image" id="image" required>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Add Hotel">
                </div>
            </form>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
