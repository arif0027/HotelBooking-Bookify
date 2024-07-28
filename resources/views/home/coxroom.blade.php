<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our SeaMoon Room</h2>
                <p>Cox's Bazar, Enjoy your time.</p>
             </div>
          </div>
       </div>


       
       <div class="row">
         @foreach ($cox as $coxs)

          <div class="col-md-4 col-sm-6">
             <div id="serv_hover"  class="room">
                <div class="room_img">
                   <img style="height:200px; width:350px" src="room/{{ $coxs->image }}" alt="#"/>
                </div>
                <div class="bed_room">
                   <h3>{{ $coxs->room_title }}</h3>
                   <p>{!! Str::limit($coxs->description, 50) !!} </p>
                   <a style="margin-top: 10px" class="btn btn-danger" href="{{ url('coxroom_details', $coxs->id) }}">Hotel Room Details</a>
                </div>
             </div>
          </div>

          @endforeach
          

       </div>
    </div>
 </div>