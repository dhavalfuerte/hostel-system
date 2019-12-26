@extends('Client.common.layout')
@section('cotent')
<div class="wrap">
    <div class="content">
        <div class="b-box">
            <h1>Facilities</h1>
          <div class="row">
              <div class="col-sm-4"><div style="width:275px;height:200px;float:left;border:groove;text-align:center;">
   
        <h2>Rooms</h2>
        <p>Both AC and NonAC rooms are available. If required then we 
are giving separate room. All Rooms will be provided a Cot, Bed and a 
pillow. The rooms will also have an attached bathroom.</p>
    </div></div>
              <div class="col-sm-4"><div style="width:275px;height:200px;float:left;border:groove;text-align:center;">
        <h2>Food</h2>
        <p>Hygenic variety of food will be served in Hostel, Starting 
from Morning breakfast, lunch and dinner. On special occations &amp; 
festival food is served acording to suitable traditions.</p></div></div>
              <div class="col-sm-4"><div style="width:275px;height:200px;float:left;border:groove;text-align:center;">
                
        <h2>Security</h2>
        <p>Our main motive is to make our inmates feel at home. Full 
time residential warden will reside in the hostel to take care of the 
inmates and security person will also be in the hostel 24 X 7.</p>
    </div></div>
</div>


           <h1 style="text-align:center;">Facilities For You</h1>
             <div class="feature-inner">
                            <ul>
                                 @forelse ($result as $row)
                                    <li class="list">{{$row->facilities}}</li>
                                 @empty
                                 @endforelse
                               <!-- <li class="list">Hostels convenient and closed to Rajkot schools, colleges and educational societies.</li>
                                <!--<li class="list">Transport facilities to and from hostels to educational societies.</li>
                                <li class="list">Huge ventilated clean rooms for student's good health.</li>
                                <li class="list">Hygienic healthy and nutritious food and snacks.</li>
                                <li class="list">Pure drinking water from R.O Plant.</li>
                                <li class="list">Daily Cleaning and Laundry facilities for students Rooms and clothes.</li>
                                <li class="list">CCTV Camera with 24 X 7 X 365  security.</li>
                                <li class="list">Limited students in every room.</li>
                                <li class="list">Reading rooms with books, news papers, magazines etc.</li>
                                <li class="list">Personal lockers for students.</li>
                                <li class="list">Entertainment zone with T.V.</li>
                                <li class="list">Indoor-Outdoor games facilities.</li>
                                <li class="list">On call doctor facility.</li>
                                <li class="list">Guidance from qualified experts for student's progress with their studies.</li>
                                <li class="list">Special time table and experienced staff for 8th to 12th Standard students to guide them.</li>
                                <li class="list">Personal contact to watch on students by experienced and well trained staff to uplift their morale.</li>
                                <li class="list">Education, discipline, culture and cleanliness are our first priority.</li>
                                -->
                            </ul>
                        </div>
    </div>
    </div>
</div>

@endsection
