<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Team</p>
            <h2>Meet Our Engineer</h2>
        </div>
        <div class="row">
            @foreach($engineer as $e)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset("$e->avatar")}}" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>{{$e->name}}</h2>
                        <p>{{$e->position}}</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href="">
                            @guest
                            @else
                            <a class="btn-primary active" href="{{route('slidee.edit',$e->id)}}">Edit</a>
                            @endguest
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>