@extends('layouts/main')

@section('head')
    <meta name="keywords" content="​Your most unhappy customers are your greatest source of learning., ​Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.">
    <meta name="description" content="">
    <title>blog_templete</title>
<link rel="stylesheet" href="{{css_path('blog_templete.css')}}" media="screen">
    @endsection


    @section('main')

    <section class="u-clearfix u-section-2" id="sec-c61a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-text u-text-1">  {{ $blog->category . ' | ' . substr($blog->updated_at, 0, 2 + 2 + 2 + 1 + 4) }}</p>
        <h1 class="u-align-center u-text u-text-2">{{$blog->post_title}}</h1>
        <h2 class="u-align-center u-subtitle u-text u-text-3">{{$blog->description}}</h2>
      </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-cd25">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-40 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <div class="u-clearfix u-custom-html u-expanded-width u-custom-html-1">
               @php
                   echo $blog->post_content;
               @endphp



                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-shape-rectangle u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-3">
                      <p class="u-align-center u-text u-text-1">Your Ad Here</p>
                    </div>
                  </div>
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-text-black u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2e46"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-2e46"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-text-black u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4403"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-4403"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-text-black u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1b6b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-1b6b"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                    </a>
                  </div>
                  <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-2">
                    <div class="u-container-layout u-container-layout-4">
                      <p class="u-align-center u-text u-text-2">Your Ad Here</p>
                    </div>
                  </div>
                  <h1 class="u-align-center u-text u-title u-text-3">Releted Posts</h1>
                  <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                      <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-5">
                          <img class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" src="images/6da37d41dc79b6e060f720bcc6cd8989c54a42e62357553e0e1eaebd7a8e8838839b421ae4affe81f7f4da312d2a4bbe21f125a3d7c306f28be15c_1280.jpg" alt="" data-image-width="1280" data-image-height="800">
                          <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-3">
                            <div class="u-container-layout u-container-layout-6">
                              <p class="u-text u-text-custom-color-1 u-text-4">&nbsp;Category</p>
                              <p class="u-custom-font u-font-oswald u-text u-text-5">Sample text. Click to select the Text Element.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-7">
                          <img class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-2" src="images/6da37d41dc79b6e060f720bcc6cd8989c54a42e62357553e0e1eaebd7a8e8838839b421ae4affe81f7f4da312d2a4bbe21f125a3d7c306f28be15c_1280.jpg" alt="" data-image-width="1280" data-image-height="800">
                          <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-4">
                            <div class="u-container-layout u-container-layout-8">
                              <p class="u-text u-text-custom-color-1 u-text-6"> &nbsp; Category</p>
                              <p class="u-custom-font u-font-oswald u-text u-text-7">Sample text. Click to select the Text Element.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="u-container-style u-list-item u-repeater-item">
                        <div class="u-container-layout u-similar-container u-container-layout-9">
                          <img class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-3" src="images/6da37d41dc79b6e060f720bcc6cd8989c54a42e62357553e0e1eaebd7a8e8838839b421ae4affe81f7f4da312d2a4bbe21f125a3d7c306f28be15c_1280.jpg" alt="" data-image-width="1280" data-image-height="800">
                          <div class="u-align-left u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-5">
                            <div class="u-container-layout u-container-layout-10">
                              <p class="u-text u-text-custom-color-1 u-text-8"> &nbsp; Category</p>
                              <p class="u-custom-font u-font-oswald u-text u-text-9">Sample text. Click to select the Text Element.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-6">
                    <div class="u-container-layout u-container-layout-11">
                      <p class="u-align-center u-text u-text-10">Your Ad Here</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-4" id="sec-befa">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h2 class="u-text u-text-1">Share On</h2>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.196 112.196" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-194c"></use></svg><svg class="u-svg-content" viewBox="0 0 112.196 112.196" x="0px" y="0px" id="svg-194c" style="enable-background:new 0 0 112.196 112.196;"><g><circle style="fill:currentColor;" cx="56.098" cy="56.098" r="56.098"></circle><path style="fill:#FFFFFF;" d="M70.201,58.294h-10.01v36.672H45.025V58.294h-7.213V45.406h7.213v-8.34   c0-5.964,2.833-15.303,15.301-15.303L71.56,21.81v12.51h-8.151c-1.337,0-3.217,0.668-3.217,3.513v7.585h11.334L70.201,58.294z"></path>
</g></svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112.197 112.197" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-037f"></use></svg><svg class="u-svg-content" viewBox="0 0 112.197 112.197" x="0px" y="0px" id="svg-037f" style="enable-background:new 0 0 112.197 112.197;"><g><circle style="fill:#55ACEE;" cx="56.099" cy="56.098" r="56.098"></circle><g><path style="fill:#F1F2F2;" d="M90.461,40.316c-2.404,1.066-4.99,1.787-7.702,2.109c2.769-1.659,4.894-4.284,5.897-7.417    c-2.591,1.537-5.462,2.652-8.515,3.253c-2.446-2.605-5.931-4.233-9.79-4.233c-7.404,0-13.409,6.005-13.409,13.409    c0,1.051,0.119,2.074,0.349,3.056c-11.144-0.559-21.025-5.897-27.639-14.012c-1.154,1.98-1.816,4.285-1.816,6.742    c0,4.651,2.369,8.757,5.965,11.161c-2.197-0.069-4.266-0.672-6.073-1.679c-0.001,0.057-0.001,0.114-0.001,0.17    c0,6.497,4.624,11.916,10.757,13.147c-1.124,0.308-2.311,0.471-3.532,0.471c-0.866,0-1.705-0.083-2.523-0.239    c1.706,5.326,6.657,9.203,12.526,9.312c-4.59,3.597-10.371,5.74-16.655,5.74c-1.08,0-2.15-0.063-3.197-0.188    c5.931,3.806,12.981,6.025,20.553,6.025c24.664,0,38.152-20.432,38.152-38.153c0-0.581-0.013-1.16-0.039-1.734    C86.391,45.366,88.664,43.005,90.461,40.316L90.461,40.316z"></path>
</g>
</g></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="Instagram" title="Instagram" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7eb4"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7eb4"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="LinkedIn" title="LinkedIn" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0e51"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0e51"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
                    </a>
                    <a class="u-social-url" target="_blank" data-type="Pinterest" title="Pinterest" href=""><span class="u-icon u-social-icon u-social-pinterest u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7a74"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7a74"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M61.1,76.9c-4.7-0.3-6.7-2.7-10.3-5c-2,10.7-4.6,20.9-11.9,26.2c-2.2-16.1,3.3-28.2,5.9-41
            c-4.4-7.5,0.6-22.5,9.9-18.8c11.6,4.6-10,27.8,4.4,30.7C74.2,72,80.3,42.8,71,33.4C57.5,19.6,31.7,33,34.9,52.6
            c0.8,4.8,5.8,6.2,2,12.9c-8.7-1.9-11.2-8.8-10.9-17.8C26.5,32.8,39.3,22.5,52.2,21c16.3-1.9,31.6,5.9,33.7,21.2
            C88.2,59.5,78.6,78.2,61.1,76.9z"></path></svg></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-5" id="sec-e3a5">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Also Read</h1>
      </div>
    </section>
    <section class="u-clearfix u-section-6" id="sec-8e47">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">

            @php
            $popular_posts = app('App\Http\Controllers\indexController')->get_recent_6_posts();
        @endphp

@foreach ($popular_posts as $item)


            <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1"> <a href="{{ url('/blogs/' . $item->str_url) }}">
                <img class="u-expanded-width u-image u-image-round u-radius-10 u-image-1" src="{{ $item->image }}" alt="" data-image-width="1280" data-image-height="921"></a>
                <p class="u-text u-text-1"> {{ $item->category . ' | ' . substr($item->updated_at, 0, 2 + 2 + 2 + 1 + 4) }}</p>
                <h1 class="u-custom-font u-font-pt-sans u-text u-title u-text-2"> <a href="{{ url('/blogs/' . $item->str_url) }}"> {{ $item->post_title }} </a></h1>
              </div>
            </div>

            @endforeach
          </div>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
      </div>
    </section>

    @endsection
