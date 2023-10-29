<div class="students-stories-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Videos</h2>
        </div>
        <div class="row justify-content-center">
            @for($i=0; $i<4;$i++)
                @if (clean($shortcode->{'link' . $i}))
                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" data-aos-once="true">
                        <div class="single-stories-card style2">
                            <iframe src="{{ $shortcode->{'link' . $i} }}" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>

                @endif

            @endfor

        </div>
    </div>
</div>
