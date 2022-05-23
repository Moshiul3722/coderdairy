@extends('layouts.frontend')
@section('content')







<section id="blog" class="a1Z a1I[120px] a3A">
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
                    <p
                        class="
              a1S aH
              md:a1T
              a1U
              md:a1U
            ">
                        {{-- There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form. --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="a8 a1K ab[-16px] a1x">


            @foreach ( $allProblems as $problem)

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
{{-- <a href="{{url('problem/'.$problem->id)}}" এইটাও কাজ করে--উল্টা পাল্ট--}}
                            <a href="{{route('problem',$problem->id)}}"
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
              {{-- {{strip_tags($problem->description)}} --}}

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
                                        Graphic Designer
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














        </div>



        {{-- <div class="a8 a1K ab[-16px] wow fadeInUp" data-wow-delay=".15s">
            <div class="a7 ae">
                <ul class="a8 a9 a3d a1x">
                    <li class="a3e">
                        {{ $allProblems->links() }}
                    </li>
                </ul>
            </div>
            </div> --}}



    </div>
</section>

@endsection
