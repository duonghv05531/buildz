<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>Our Services</p>
            <h2>We Provide Services</h2>
        </div>
        <div class="row">
            @foreach($service as $s)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$s->delay}}">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset("$s->img")}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{$s->description}}
                                @guest
                                @else
                                <a class="btn-primary active" href="{{route('service.edit',$s->id)}}">Edit</a>
                                @endguest
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{$s->name}}</h3>
                        <a class="btn" href="{{asset("$s->img")}}" data-lightbox="service">+</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>