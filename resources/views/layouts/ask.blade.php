<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Frequently Asked Question</p>
            <h2>You May Ask</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    @foreach($ask as $a)
                    @if($a->id <6) <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#{{$a->href}}">
                                {{$a->question}}
                            </a>
                        </div>
                        <div id="{{$a->href}}" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                {{$a->answer}}
                            </div>
                        </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <div id="accordion-2">
                @foreach($ask as $a)
                @if($a->id > 5)
                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="card-header">
                        <a class="card-link collapsed" data-toggle="collapse" href="#{{$a->href}}">
                            {{$a->question}}
                        </a>
                    </div>
                    <div id="{{$a->href}}" class="collapse" data-parent="#accordion-2">
                        <div class="card-body">
                            {{$a->answer}}
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>