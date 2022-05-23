@extends('layouts.frontend')
@section('content')
@include('frontend.components.hero')
{{-- @include('frontend.blog')
<h1>Hello</h1> --}}


<section id="blog" class="a1k a1Z a1I[120px] a3A">
    <div class="aa">
        <div class="a8 a1K ab[-16px]">
            <div class="a7 ae">
                <div class="
            a1L aB[570px] a1M a3s[100px]
            wow
            fadeInUp
          "
                    data-wow-delay=".1s">
                    <h2
                        class="
              a1A
              dark:aI
              a1g a1O
              sm:a1P
              md:a24[45px]
              a1Q
            ">
                        Problems
                    </h2>
                    {{-- <p
                        class="
              a1S aH
              md:a1T
              a1U
              md:a1U
            ">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p> --}}
                </div>
            </div>
        </div>
        <div class="a8 a1K ab[-16px] a1x">

            {{-- start the card --}}

{{-- {{dd($problems)}} --}}

@foreach ( $problems as $problem)

<div class="a7 md:aU/3 lg:a1_/2 xl:a1_/3 ae">
    <div class="
ad aw
dark:av
a33 a13 a2p a1V
wow
fadeInUp
"
        data-wow-delay=".1s">
        <a href="javascript:void(0)" class="a7 ah ad">
            <span
                class="
    a3
    a34
    a35
    a1k
    a1w
    aM
    a9
    a1x
    aK
    ae
    a2P
    a1b
    aI
  ">
  {{$problem->category->name}}
            </span>
<div style="background-image: url({{optional($problem->media)->first()->name['url']??'https://picsum.photos/200?random='.rand(1,20)}}); background-size:cover; height: 300px"></div>

        </a>
        <div
            class="
  a36
  sm:a2Y
  md:ai md:az
  lg:a2Y
  xl:ai xl:a37
  2xl:a2Y
">
            <h3>
                <a href="{{url('problem/'.$problem->id)}}"
                    class="
      a1g a1A
      dark:aI
      a27
      sm:a2u
      ah a1Q
      hover:a1W
      dark:hover:a1W
    ">

    {{Str::limit($problem->name, 20)}}
                    {{-- {{$problem->name}} --}}
                </a>
            </h3>
            <p
                class="
    aH
    a1S
    a1R
    a38
    a2E
    a2B
    a2z
    a2M
    dark:a2o dark:a2M
  ">
  {{-- {{dd($problem->description)}} --}}

  {{strip_tags(Str::limit($problem->description, 100))}}
            </p>
            <div class="a8 a9">
                <div
                    class="
      a8 a9 a39 a2O
      xl:a3a
      2xl:a39
      xl:a2A
      2xl:a2O
      a3b a2z a2M
      dark:a2o dark:a2M
    ">
                    <div
                        class="
        aB[40px]
        a7
        at[40px]
        a1w
        a2p
        a2G
      ">


                        <img src="{{$problem->user->image['url']}}" alt="author"
                            class="a7" />
                    </div>
                    <div class="a7">
                        <h4
                            class="
          a1b a1R a1h
          dark:aI
          a2K
        ">
                            By
                            <a href="javascript:void(0)"
                                class="
            a1h
            dark:aI
            hover:a1W
            dark:hover:a1W
          ">
                                {{$problem->user->name}}
                            </a>
                        </h4>
                        <p class="a3c a1S">
                            {{-- Graphic Designer --}}
                        </p>
                    </div>
                </div>
                <div class="a22">
                    <h4
                        class="
        a1b a1R a1h
        dark:aI
        a2K
      ">
                        Date
                    </h4>
                    <p class="a3c a1S">{{ Carbon\Carbon::parse($problem->created_at)->format('d M, Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach


<div class="a8 a9 a1x">
    <a href="{{route('allProblems')}}"
        class="
aH
a2P
a1A
a1
a29
dark:aI dark:aw dark:a29
a3q a1l
hover:a3G
dark:hover:a3G
a3F
a13
a1p
a1a
a2j
">
        Explore More
    </a>
</div>

{{-- end the card --}}



        </div>
    </div>
</section>


<section id="contact" class="a1I[120px] a3A">
    <div class="aa">
        <div class="a8 a1K ab[-16px]">
            <div class="a7 lg:a2q/12 ae">
                <div class="
            a1k a3g[3%]
            dark:av
            a13 a3t a2s
            lg:a2v
            sm:a3B[55px]
            lg:a3t
            xl:a3B[55px]
            wow
            fadeInUp
          "
                    data-wow-delay=".15s
          ">
                    <h2
                        class="
              a1g a1A
              dark:aI
              a2u
              sm:a1O
              lg:a2u
              xl:a1O
              a30
            ">
                        Need Help? Open a Ticket
                    </h2>
                    <p class="a1S aH a1R a2s">
                        Our support team will get back to you ASAP via email.
                    </p>
                    <form>
                        <div class="a8 a1K ab[-16px]">
                            <div class="a7 md:a1_/2 ae">
                                <div class="a23">
                                    <label for="name"
                                        class="
                      ah a1b a1R a1h
                      dark:aI
                      a30
                    ">
                                        Your Name
                                    </label>
                                    <input type="text" placeholder="Enter your name"
                                        class="
                      a7 a3l a3m
                      dark:a3w[#242B51]
                      a13 a33
                      dark:a1n
                      a1i
                      az
                      a1S
                      aH
                      a3x
                      a3o
                      focus-visible:aE
                      focus:a3p
                    " />
                                </div>
                            </div>
                            <div class="a7 md:a1_/2 ae">
                                <div class="a23">
                                    <label for="email"
                                        class="
                      ah a1b a1R a1h
                      dark:aI
                      a30
                    ">
                                        Your Email
                                    </label>
                                    <input type="email" placeholder="Enter your email"
                                        class="
                      a7 a3l a3m
                      dark:a3w[#242B51]
                      a13 a33
                      dark:a1n
                      a1i
                      az
                      a1S
                      aH
                      a3x
                      a3o
                      focus-visible:aE
                      focus:a3p
                    " />
                                </div>
                            </div>
                            <div class="a7 ae">
                                <div class="a23">
                                    <label for="message"
                                        class="
                      ah a1b a1R a1h
                      dark:aI
                      a30
                    ">
                                        Your Message
                                    </label>
                                    <textarea name="message" rows="5" placeholder="Enter your Message"
                                        class="
                      a7 a3l a3m
                      dark:a3w[#242B51]
                      a13 a33
                      dark:a1n
                      a1i
                      az
                      a1S
                      aH
                      a3x
                      a3o
                      focus-visible:aE
                      focus:a3p
                      a3C
                    "></textarea>
                                </div>
                            </div>
                            <div class="a7 ae">
                                <a href="javascript:void(0)"
                                    class="
                    aH
                    a1R
                    aI
                    a1k
                    a3q
                    a1m
                    hover:a2i hover:a1n
                    a13
                    a1p
                    a1a
                    a2j
                  ">
                                    Submit Ticket
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="a7 lg:a20/12 ae">
                <div class="
            ad
            a1H
            a13
            a1k
            a3g[3%]
            dark:a29
            a2Y
            sm:a3t
            lg:a2Y
            xl:a3t
            a2v
            wow
            fadeInUp
          "
                    data-wow-delay=".2s
          ">
                    <h3
                        class="
              a1A
              dark:aI
              a1g a2u a2D a1Q
            ">
                        Subscribe to receive future updates
                    </h3>
                    <p
                        class="
              a1R
              aH
              a1S
              a1U
              a3u
              a2F
              a2B
              a2z
              a3v
              dark:a2o dark:a3v
            ">
                        Lorem ipsum dolor sited Sed ullam corper consectur adipiscing
                        Mae ornare massa quis lectus.
                    </p>
                    <form>
                        <input type="text" name="name" placeholder="Enter your name"
                            class="
                a7
                a3l
                a2z
                a2M
                dark:a2o
                dark:a2M
                dark:a3w[#242B51]
                a13
                a1i
                az
                a1R
                a1S
                aH
                a3x
                a3o
                focus-visible:aE
                focus:a3p focus:a3y
                a1Q
              " />
                        <input type="email" name="email" placeholder="Enter your email"
                            class="
                a7
                a3l
                a2z
                a2M
                dark:a2o
                dark:a2M
                dark:a3w[#242B51]
                a13
                a1i
                az
                a1R
                a1S
                aH
                a3x
                a3o
                focus-visible:aE
                focus:a3p focus:a3y
                a1Q
              " />
                        <input type="submit" value="Subscribe"
                            class="
                a7
                a3l
                a3p
                a1k
                a13
                a1i
                az
                a1R
                aI
                aH
                a1M
                a3o
                a1r
                focus-visible:aE
                hover:a1n hover:a2i
                a1p a3z a2j a1Q
              " />
                        <p
                            class="
                aH
                a1S
                a1M
                a1R
                a1U
              ">
                            No spam guaranteed, So please don’t send any spam mail.
                        </p>
                    </form>
                    <div class="a3 a4 a5 a1Y[-1]">
                        <svg width="370" height="596" viewBox="0 0 370 596" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_88:141" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="370" height="596">
                                <rect width="370" height="596" rx="2" fill="#1D2144" />
                            </mask>
                            <g mask="url(#mask0_88:141)">
                                <path opacity="0.15"
                                    d="M15.4076 50.9571L54.1541 99.0711L71.4489 35.1605L15.4076 50.9571Z"
                                    fill="url(#paint0_linear_88:141)" />
                                <path opacity="0.15" d="M20.7137 501.422L44.6431 474.241L6 470.624L20.7137 501.422Z"
                                    fill="url(#paint1_linear_88:141)" />
                                <path opacity="0.1"
                                    d="M331.676 198.309C344.398 204.636 359.168 194.704 358.107 180.536C357.12 167.363 342.941 159.531 331.265 165.71C318.077 172.69 318.317 191.664 331.676 198.309Z"
                                    fill="url(#paint2_linear_88:141)" />
                                <g opacity="0.3">
                                    <path
                                        d="M209 89.9999C216 77.3332 235.7 50.7999 258.5 45.9999C287 39.9999 303 41.9999 314 30.4999C325 18.9999 334 -3.50014 357 -3.50014C380 -3.50014 395 4.99986 408.5 -8.50014C422 -22.0001 418.5 -46.0001 452 -37.5001C478.8 -30.7001 515.167 -45 530 -53"
                                        stroke="url(#paint3_linear_88:141)" />
                                    <path
                                        d="M251 64.9999C258 52.3332 277.7 25.7999 300.5 20.9999C329 14.9999 345 16.9999 356 5.49986C367 -6.00014 376 -28.5001 399 -28.5001C422 -28.5001 437 -20.0001 450.5 -33.5001C464 -47.0001 460.5 -71.0001 494 -62.5001C520.8 -55.7001 557.167 -70 572 -78"
                                        stroke="url(#paint4_linear_88:141)" />
                                    <path
                                        d="M212 73.9999C219 61.3332 238.7 34.7999 261.5 29.9999C290 23.9999 306 25.9999 317 14.4999C328 2.99986 337 -19.5001 360 -19.5001C383 -19.5001 398 -11.0001 411.5 -24.5001C425 -38.0001 421.5 -62.0001 455 -53.5001C481.8 -46.7001 518.167 -61 533 -69"
                                        stroke="url(#paint5_linear_88:141)" />
                                    <path
                                        d="M249 40.9999C256 28.3332 275.7 1.79986 298.5 -3.00014C327 -9.00014 343 -7.00014 354 -18.5001C365 -30.0001 374 -52.5001 397 -52.5001C420 -52.5001 435 -44.0001 448.5 -57.5001C462 -71.0001 458.5 -95.0001 492 -86.5001C518.8 -79.7001 555.167 -94 570 -102"
                                        stroke="url(#paint6_linear_88:141)" />
                                </g>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_88:141" x1="13.4497" y1="63.5059" x2="81.144"
                                    y2="41.5072" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint1_linear_88:141" x1="28.1579" y1="501.301" x2="8.69936"
                                    y2="464.391" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint2_linear_88:141" x1="338" y1="167" x2="349.488"
                                    y2="200.004" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint3_linear_88:141" x1="369.5" y1="-53" x2="369.5"
                                    y2="89.9999" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint4_linear_88:141" x1="411.5" y1="-78" x2="411.5"
                                    y2="64.9999" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint5_linear_88:141" x1="372.5" y1="-69" x2="372.5"
                                    y2="73.9999" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                                <linearGradient id="paint6_linear_88:141" x1="409.5" y1="-102" x2="409.5"
                                    y2="40.9999" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="white" />
                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
