<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('home.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .room-details {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
        }

        .room-img img {
            height: 300px;
            width: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        h3 {
            margin-top: 0;
        }

        .titlepage h2 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
        }

        .titlepage p {
            font-size: 18px;
            color: #666;
        }

        .book-room {
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .book-room h1 {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .alert {
            margin-bottom: 20px;
            border-radius: 5px;
            padding: 10px 20px;
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert button.close {
            font-size: 16px;
            font-weight: bold;
            color: inherit;
            background: transparent;
            border: 0;
            cursor: pointer;
        }
    </style>
</head>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        @include('home.header')
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div id="serv_hover" class="room room-details">
                        <div class="room-img">
                            <img src="/room/{{ $room->image }}" alt="Room Image" />
                        </div>
                        <div class="bed_room">
                            <h3>Room Title : {{ $room->room_title }}</h3>
                            <p>Room Description : {{ $room->description }}</p>
                            <h4>Free Wifi : {{ $room->wifi }}</h4>
                            <h4>Room Type : {{ $room->room_type }}</h4>
                            <h3>Price : {{ $room->price }}</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="book-room">
                        <h1>Book Room</h1>

                        @if (session()->has('message'))
                            <div style="background: green;color:white" class="alert alert-success">
                                {{ session()->get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ url('add_booking', $room->id) }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" @if (Auth::id()) value="{{ Auth::user()->name }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" @if (Auth::id()) value="{{ Auth::user()->email }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" id="phone" name="phone" @if (Auth::id()) value="{{ Auth::user()->phone }}" @endif>
                            </div>

                            <div class="form-group">
                                <label for="startDate">Start Date</label>
                                <input type="date" id="startDate" name="startDate">
                            </div>

                            <div class="form-group">
                                <label for="endDate">End Date</label>
                                <input type="date" id="endDate" name="endDate">
                            </div>

                            <div class="form-group">
                                <label style="white-space: nowrap" for="paymentMethod">Payment Method:</label>
                                <div>
                                    <label><input type="radio" name="payment_method" value="cash"> Cash</label>
                                    <label><input type="radio" name="payment_method" value="card"> Card</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Book Room">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  footer -->
    @include('home.footer')


    <script type="text/javascript">
        $(function() {
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if (month < 10)
                month = '0' + month.toString();

            if (day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', maxDate);
            $('#endDate').attr('min', maxDate);

        });
    </script>
</body>

</html>
