<div class="skill-area primery-skill section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="primery-heading">
                    <strong class="filltext">my carrer</strong>
                    <small>MY EXPERIENCE</small>
                    <h2>Experience and <span>skill</span></h2>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="primery-info-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ratione reprehenderit,
                        error qui enim sit ex provident </p>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
        <div class="row">
            @if ($experience)
                @foreach ($experience as $experiences)
                    <div class="col-lg-4">
                        <div class="skill-box skill-box2 h-100">
                            <small>{{ $experiences->starting_year }} --
                                {{ $experiences->ending_year }} ({{ strtoupper($experiences->designation) }})</small>
                            <h5>{{ $experiences->title }}</h5>
                            <p>{{ $experiences->details }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
