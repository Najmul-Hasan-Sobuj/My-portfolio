<div class="service-area service-primery padding-top" id="service">
    <div class="container">
        <div class="row">
            @if ($service)
                @foreach ($service as $services)
                    <div class="col-lg-4">
                        <div class="single-service bg-secondary pricing2 h-100">
                            <div class="service-icon">
                                <img src="{{ asset('global_assets/uploads/' . $services->icon) }}" alt="">
                            </div>
                            <div class="service-text">
                                <h4 class="text-white">{{ $services->title }}</h4>
                                <p class="text-white">{{ $services->description }}</p>
                            </div>
                            <div class="circles-wrap">
                                <div class="circles">
                                    <span class="circle circle-1"></span>
                                    <span class="circle circle-2"></span>
                                    <span class="circle circle-3"></span>
                                    <span class="circle circle-4"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
