<div class="our_room">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="titlepage">
                   <h2>Our Hotel</h2>
                   <p>Lorem Ipsum available, but the majority have suffered </p>
               </div>
           </div>
       </div>

       <div class="row">
           @foreach ($hotel as $hotels)
               <div class="col-md-4 col-sm-6">
                   <div id="serv_hover" class="room">
                       <div class="room_img">
                           <img style="height:200px; width:350px" src="room/{{ $hotels->image }}" alt="#"/>
                       </div>
                       <div class="bed_room">
                           <h3>{{ $hotels->hotel_name }}</h3>
                           <p>{{ $hotels->place }}</p>
                           @if ($hotels->place == "Cox's Bazar")
                               <a style="margin-top: 10px" class="btn btn-danger" href="{{ url('our_coxrooms') }}">Check Hotel</a>
                           @elseif ($hotels->place == "Dhaka")
                               <a style="margin-top: 10px" class="btn btn-danger" href="{{ url('our_rooms') }}">Check Hotel</a>
                           @else
                               <!-- Handle other places if needed -->
                               <a style="margin-top: 10px" class="btn btn-danger" href="{{ url('our_rooms') }}">Check Hotel</a>
                           @endif
                       </div>
                   </div>
               </div>
           @endforeach
       </div>
   </div>
</div>
