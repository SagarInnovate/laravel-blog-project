@extends('layouts/main')

@section('head')
    <meta name="keywords"
        content="Trending, ​Your most unhappy customers are your greatest source of learning., ​Your most unhappy customers are your greatest source of learning., ​Your most unhappy customers are your greatest source of learning., ​Your most unhappy customers are your greatest source of learning., ​Your most unhappy customers are your greatest source of learning., Recent Posts, ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., Popular Posts, ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., ​​Your most unhappy customers are your greatest source of learning., Categories, ​&nbsp;guruji&nbsp;&nbsp;mysipkar">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="{{ css_path('Home.css') }}" media="screen">
@endsection


@section('main')
    <section class="u-clearfix u-section-1" id="sec-4d92">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-align-center u-text u-text-1">Trending</h1>
        </div>
    </section>
    <section class="u-carousel u-slide u-block-c94b-1" id="carousel_bae9" data-interval="5000" data-u-ride="carousel">
        <ol class="u-absolute-hcenter u-carousel-indicators u-block-c94b-2">
            <li data-u-target="#carousel_bae9" class="u-active u-active-custom-color-1 u-grey-25 u-hover-grey-15"
                data-u-slide-to="0"></li>
            <li data-u-target="#carousel_bae9" class="u-active-custom-color-1 u-grey-25 u-hover-grey-15"
                data-u-slide-to="1"></li>
            <li data-u-target="#carousel_bae9" class="u-active-custom-color-1 u-grey-25 u-hover-grey-15"
                data-u-slide-to="2"></li>
            <li data-u-target="#carousel_bae9" class="u-active-custom-color-1 u-grey-25 u-hover-grey-15"
                data-u-slide-to="3"></li>
            <li data-u-target="#carousel_bae9" class="u-active-custom-color-1 u-grey-25 u-hover-grey-15"
                data-u-slide-to="4"></li>
        </ol>
        <div class="u-carousel-inner" role="listbox">

            @php
            $recent_6_post = app('App\Http\Controllers\indexController')->get_recent_6_posts();
        @endphp


        @foreach ($recent_6_post as $item)
          <div class="u-active u-align-center u-carousel-item u-clearfix u-section-2-1">
            <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div class="u-container-style u-image u-image-round u-layout-cell u-radius-15 u-size-24 u-image-1"
                                data-image-width="1280" data-image-height="852"
                                style="background-image: url('{{ $item->image }}');">
                                <div class="u-container-layout u-container-layout-1"></div>
                            </div>
                            <div
                                class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-36 u-layout-cell-2">
                                <div class="u-container-layout u-valign-middle u-container-layout-2">
                                    <p class="u-small-text u-text u-text-variant u-text-1">
                                        <span style="font-weight: 700;"> {{ $item->category . ' | ' . substr($item->updated_at, 0, 2 + 2 + 2 + 1 + 4) }}
                                    </p>
                                    <h1 class="u-custom-font u-font-titillium-web u-text u-text-2"> <a
                                            href="{{ url('/blogs/' . $item->str_url) }}"> {{ $item->post_title }}</a></h1>
                                    <p class="u-text u-text-3">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

            {{-- <div class="u-align-center u-carousel-item u-clearfix u-section-2-2">
                <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div
                                    class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                                    <div class="u-border-14 u-border-grey-75 u-container-layout u-container-layout-1">
                                        <h1 class="u-align-center u-custom-font u-font-titillium-web u-text u-text-1">Your
                                            Ad Here</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="u-align-center u-carousel-item u-clearfix u-section-2-3">
                <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div class="u-container-style u-image u-image-round u-layout-cell u-radius-15 u-size-24 u-image-1"
                                    data-image-width="1280" data-image-height="848">
                                    <div class="u-container-layout u-container-layout-1"></div>
                                </div>
                                <div
                                    class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-36 u-layout-cell-2">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <p class="u-small-text u-text u-text-variant u-text-1">
                                            <span style="font-weight: 700;">travel,business </span>- 2-7-2002
                                        </p>
                                        <h1 class="u-custom-font u-font-titillium-web u-text u-text-2"> Your most unhappy
                                            customers are your greatest source of learning.</h1>
                                        <p class="u-text u-text-3"> Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind texts. Separated they
                                            live in Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-align-center u-carousel-item u-clearfix u-section-2-4">
                <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div class="u-container-style u-image u-image-round u-layout-cell u-radius-15 u-size-24 u-image-1"
                                    data-image-width="1280" data-image-height="901">
                                    <div class="u-container-layout u-container-layout-1"></div>
                                </div>
                                <div
                                    class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-36 u-layout-cell-2">
                                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                                        <p class="u-small-text u-text u-text-variant u-text-1">
                                            <span style="font-weight: 700;">travel,business </span>- 2-7-2002
                                        </p>
                                        <h1 class="u-custom-font u-font-titillium-web u-text u-text-2"> Your most unhappy
                                            customers are your greatest source of learning.</h1>
                                        <p class="u-text u-text-3"> Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind texts. Separated they
                                            live in Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="u-align-center u-carousel-item u-clearfix u-section-2-5">
                <div class="u-align-left u-clearfix u-sheet u-sheet-1">
                    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <div class="u-layout-row">
                                <div class="u-container-style u-image u-image-round u-layout-cell u-radius-15 u-size-24 u-image-1"
                                    data-image-width="1280" data-image-height="853">
                                    <div class="u-container-layout u-container-layout-1"></div>
                                </div>
                                <div
                                    class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-size-36 u-layout-cell-2">
                                    <div class="u-container-layout u-container-layout-2">
                                        <p class="u-small-text u-text u-text-variant u-text-1">
                                            <span style="font-weight: 700;">travel,business </span>- 2-7-2002
                                        </p>
                                        <h1 class="u-custom-font u-font-titillium-web u-text u-text-2"> Your most unhappy
                                            customers are your greatest source of learning.</h1>
                                        <p class="u-text u-text-3"> Far far away, behind the word mountains, far from the
                                            countries Vokalia and Consonantia, there live the blind texts. Separated they
                                            live in Bookmarksgrove right at the coast of the Semantics, a large language
                                            ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-hidden u-text-grey-30 u-block-c94b-3"
            href="#carousel_bae9" role="button" data-u-slide="prev">
            <span aria-hidden="true">
                <svg class="u-svg-link" viewBox="0 0 477.175 477.175">
                    <path
                        d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z">
                    </path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="u-carousel-control u-carousel-control-next u-hidden u-text-grey-30 u-block-c94b-4" href="#carousel_bae9"
            role="button" data-u-slide="next">
            <span aria-hidden="true">
                <svg class="u-svg-link" viewBox="0 0 477.175 477.175">
                    <path
                        d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z">
                    </path>
                </svg>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </section>
    <section class="u-clearfix u-section-3" id="carousel_0567">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-align-center u-text u-text-1">Recent Posts</h1>
        </div>
    </section>
    {{-- <section class="u-clearfix u-grey-10 u-section-4" id="sec-01f7">
        <div class="u-clearfix u-sheet u-sheet-1">
            <p class="u-align-center u-large-text u-text u-text-variant u-text-1">Your Ad Here</p>
        </div>
    </section> --}}
    <section class="u-clearfix u-section-5" id="sec-ba47">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">


                    @php
                        $recent_6_post = app('App\Http\Controllers\indexController')->get_recent_6_posts();
                    @endphp


                    @foreach ($recent_6_post as $item)
                        <div class="u-container-style u-custom-item u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img style="background-color: gray" class="u-expanded-width u-image u-image-round u-radius-10 u-image-1"
                                    src="{{ $item->image }}" alt="" data-image-width="1280"
                                    data-image-height="921">
                                <p class="u-align-center u-text u-text-1">
                                    {{ $item->category . ' | ' . substr($item->updated_at, 0, 2 + 2 + 2 + 1 + 4) }}</p>
                                <h1 class="u-align-left u-custom-font u-font-pt-sans u-text u-title u-text-2">
                                    {{ $item->post_title }}</h1>
                                <p class="u-align-left u-text u-text-3">{{ $item->description }}<span
                                        style="font-size: 1.125rem;">
                                        <span style="font-size: 1rem;"></span>
                                    </span>
                                </p>
                                <a href="{{ url('/blogs/' . $item->str_url) }}"
                                    class="u-align-center u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-hover-white u-btn-1">Read
                                    more</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    {{-- <section class="u-clearfix u-section-6" id="sec-5e3d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href=""
                class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-3-base u-radius-50 u-btn-1">Load
                more</a>
        </div>
    </section> --}}
    {{-- <section class="u-clearfix u-section-7" id="carousel_2733">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-align-center u-text u-text-1">Categories</h1>
        </div>
    </section>
    <section class="u-clearfix u-section-8" id="sec-d2b2">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    @php
                        $category = app('App\Http\Controllers\indexController')->get_9_category();
                    @endphp
                    @foreach ($category as $item)
                        <div class="u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img class="u-expanded-height-xs u-image u-image-default u-image-1"
                                    src="images/6da37d41dc79b6e060f720bcc6cd8989c54a42e62357553e0e1eaebd7a8e8838839b421ae4affe81f7f4da312d2a4bbe21f125a3d7c306f28be15c_1280.jpg"
                                    alt="" data-image-width="1280" data-image-height="800">
                                <div class="u-align-left u-container-style u-group u-white u-group-1">
                                    <div
                                        class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
                                        <p class="u-text u-text-custom-color-1 u-text-1">&nbsp;Category</p>
                                        <p class="u-custom-font u-font-oswald u-text u-text-2">Sample text. Click to select
                                            the
                                            Text Element.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section> --}}
    <section class="u-clearfix u-section-9" id="carousel_e3f0">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-align-center u-text u-text-1">Popular Posts</h1>
        </div>
    </section>
    <section class="u-clearfix u-section-10" id="carousel_50e2">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-list u-list-1" id="last">

                <div class="u-repeater u-repeater-1">
                    @php
                        $popular_posts = app('App\Http\Controllers\indexController')->all_posts();
                    @endphp


                    @foreach ($popular_posts as $item)
                        <div class="u-container-style u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-container-layout-1">
                                <img style="background-color: gray" class="u-expanded-width u-image u-image-round u-radius-10 u-image-1"
                                    src="{{ $item->image }}" alt="" data-image-width="1280"
                                    data-image-height="921">
                                <p class="u-align-center u-text u-text-1">
                                    {{ $item->category . ' | ' . substr($item->updated_at, 0, 2 + 2 + 2 + 1 + 4) }}</p>
                                <h1 class="u-align-left u-custom-font u-font-pt-sans u-text u-title u-text-2">
                                    {{ $item->post_title }}</h1>
                                <p class="u-align-left u-text u-text-3">{{ $item->description }}<span
                                        style="font-size: 1.125rem;">
                                        <span style="font-size: 1rem;"></span>
                                    </span>
                                </p>
                                <a href="{{ url('/blogs/' . $item->str_url) }}"
                                    class="u-align-center u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-hover-white u-btn-1">Read
                                    more</a>
                            </div>
                        </div>
                    @endforeach


                  </div>

                </div>



            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-11" id="carousel_5484">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-align-center u-text u-text-1">Categories</h1>
        </div>
    </section>
    <section class="u-clearfix u-section-12" id="sec-4b7b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-custom-font u-font-pt-sans u-subtitle u-text u-text-1">
              @php
              $category = app('App\Http\Controllers\indexController')->all_category();
          @endphp

              @foreach ($category as $item)



              <a style="margin: 5px;"
                    href="{{url('/category/'.$item->category_name)}}"
                    class="u-border-none u-btn u-button-style u-custom-color-1 u-text-body-alt-color u-btn-2">{{$item->category_name}}</a>

                    @endforeach

            </h2>
        </div>
    </section>
@endsection
