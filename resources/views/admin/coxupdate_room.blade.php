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
        }

        .page-content {
            padding: 40px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .div_center {
            text-align: center;
        }

        .div_deg {
            padding-top: 10px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 5px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        textarea,
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #4a5c67;
            border-radius: 5px;
            background-color: #30444e;
            color: #c5c5c5;
            font-size: 16px;
            margin-top: 5px;
        }

        select {
            width: 100%;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 5px;
            margin-top: 5px;
        }

        .btn-primary {
            background-color: #0088cc;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #005580;
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
    </style>
</head>
<body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="div_center">
                    <h1 style="font-size: 30px; font-weight: bold; text-align: center; margin-bottom: 30px; color: #ffffff; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); border-bottom: 4px solid #e93131; display: inline-block; padding-bottom: 5px;">
                        Update Hotel Rooms
                    </h1>

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

                    <form action="{{ url('coxedit_room', $data->id) }}" method="Post" enctype="multipart/form-data">
                        @csrf

                        <div class="div_deg form-group">
                            <label for="title">Room Title:</label>
                            <input type="text" name="title" id="title" value="{{ $data->room_title }}">
                        </div>

                        <div class="div_deg form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description">{{ $data->description }}</textarea>
                        </div>

                        <div class="div_deg form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" value="{{ $data->price }}">
                        </div>

                        <div class="div_deg form-group">
                            <label for="type">Room Type:</label>
                            <select name="type" id="type">
                                <option selected value="{{ $data->room_type }}">{{ $data->room_type }}</option>
                                <option value="regular">Regular</option>
                                <option value="premium">Premium</option>
                                <option value="deluxe">Deluxe</option>
                            </select>
                        </div>

                        <div class="div_deg form-group">
                            <label for="wifi">Free Wifi:</label>
                            <select name="wifi" id="wifi">
                                <option selected value="{{ $data->wifi }}">{{ $data->wifi }}</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="div_deg form-group">
                            <label for="current_image">Current Image:</label>
                            <img id="current_image" src="/room/{{ $data->image }}" alt="">
                        </div>

                        <div class="div_deg form-group">
                            <label for="image">Upload Image:</label>
                            <input type="file" name="image" id="image">
                        </div>

                        <div class="div_deg form-group">
                            <input class="btn btn-primary" type="submit" value="Update Hotel Room">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
