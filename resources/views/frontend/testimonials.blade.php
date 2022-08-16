<div class="testimonials-area testimonials-area-primery section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="primery-heading">
                    <strong class="filltext">Testimonials</strong>
                    <small>Testimonials</small>
                    <h2>Happy Clients TO <span>says</span></h2>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="primery-info-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit </p>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="testimonials owl-carousel">
                    @if ($testimonial)
                        @foreach ($testimonial as $testimonials)
                            <div class="testimonial">
                                <div class="testimonial-img animated fadeInLeft">
                                    <img src="{{ asset('global_assets/uploads/requestImg/' . $testimonials->image) }}"
                                        alt="">
                                </div>
                                <div class="testimonial-text animated fadeInDown">
                                    <img src="front_end/img/icon/quote.png" alt="">
                                    <h4>{{ $testimonials->clients_statement }}</h4>
                                    <p>{{ $testimonials->name }}, {{ $testimonials->country }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
