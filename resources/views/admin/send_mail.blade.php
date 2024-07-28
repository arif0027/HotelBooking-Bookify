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

        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .div_deg {
            padding: 10px 0;
            margin: 10px 0;
        }

        label {
            display: inline-block;
            width: 200px;
            font-weight: bold;
            color: #ffffff;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 220px);
            padding: 10px;
            border: 1px solid #4a5c67;
            border-radius: 5px;
            background-color: #30444e;
            color: #c5c5c5;
            font-size: 16px;
            margin-top: 5px;
        }

        textarea {
            height: 100px;
            resize: vertical;
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
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #005580;
        }

        h1 {
            font-size: 30px;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            border-bottom: 4px solid #e93131;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            input[type="text"],
            textarea {
                width: calc(100% - 220px);
            }

            h1 {
                font-size: 24px;
            }

            .btn-primary {
                padding: 10px 20px;
                font-size: 14px;
            }

            label {
                width: 100%;
                text-align: left;
                margin-bottom: 5px;
            }

            input[type="text"],
            textarea {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .btn-primary {
                padding: 8px 16px;
                font-size: 12px;
            }

            h1 {
                font-size: 20px;
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
                <div class="div_center">
                    <h1>Mail send to {{ $data->name }}</h1>

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


                    <form action="{{ url('mail', $data->id) }}" method="Post">
                        @csrf

                        <div class="div_deg">
                            <label for="greeting">Greeting:</label>
                            <input type="text" id="greeting" name="greeting">
                        </div>

                        <div class="div_deg">
                            <label for="body">Mail Body:</label>
                            <textarea id="body" name="body"></textarea>
                        </div>

                        <div class="div_deg">
                            <label for="action_text">Action Text:</label>
                            <input type="text" id="action_text" name="action_text">
                        </div>

                        <div class="div_deg">
                            <label for="action_url">Action Url:</label>
                            <input type="text" id="action_url" name="action_url">
                        </div>

                        <div class="div_deg">
                            <label for="endline">End Line:</label>
                            <input type="text" id="endline" name="endline">
                        </div>

                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Send Mail">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>
</html>
