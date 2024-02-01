@extends('layouts.app2')

@section('content')
    <style>
        /* TIMELINE */
        .wrap {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            color: #000;
            font-size: 14px;
            line-height: 21px;
            max-width: 1840px;
            margin: 0 auto;
            position: relative;
            margin-top: 40px;
        }

        .btn-blauw {
            color: white;
        }

        .btn-btn-oranje {
            color: white;
        }

        .timeline-wrap {
            position: relative;
            padding: 0 0px;
        }

        .timeline {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            background-repeat: repeat-x;
            background-size: 10px 2px;
            background-position: center top 60%;
            background-image: -webkit-gradient(linear, left top, right top, color-stop(66%, #000), color-stop(0, transparent));
            background-image: linear-gradient(90deg, #7beae5 66%, transparent 0);
            padding: 50px 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1 1 100%;
            -ms-flex: 1 1 100%;
            flex: 1 1 100%;
            flex-flow: row nowrap;
            transition: height .2s ease-out;
            transition: height .2s ease-out;
            transition: height .2s ease-out;
        }

        .timeline-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            justify-content: space-between;
            flex-flow: wrap;
            -webkit-transition: max-width .2s, -webkit-transform .4s ease-out;
            transition: max-width .2s, -webkit-transform .4s ease-out;
            transition: max-width .2s, transform .4s ease-out;
            transition: max-width .2s, transform .4s ease-out, -webkit-transform .4s ease-out;
            cursor: pointer;
            margin: 0 35px;
            height: auto;
        }

        .i-is-active.timeline-item {
            cursor: default;
        }

        .p-timeline-item:hover {
            transform: scale(1.1);
            transition: transform .3s ease;
        }

        .bmw:hover time,
        .mini:hover time,
        .bmw time,
        .mini time {
            transition: color .1s ease;
        }

        .p-timeline-item.i-is-active {
            cursor: default;
        }

        .bmw .p-timeline-block,
        .mini .p-timeline-block,
        .mini:hover .p-timeline-block,
        .bmw:hover .p-timeline-block {
            transition: background-color 0.5s ease;
        }

        .p-timeline-date,
        .p-timeline-block {
            width: 100%;
        }

        .p-timeline-date {
            text-shadow: 1px 1px #000000;
            font-weight: 600;
            font-size: 30px;
            color: #c2c2c2;
            margin-top: 25px;
            text-align: center;
            margin-left: 40px;
        }

        .bmw:hover .p-timeline-block {
            background-color: #1EC4BD;
        }

        .mini:hover .p-timeline-block {
            background-color: #1EC4BD;
        }

        .p-timeline-block {
            min-width: 32px;
            min-height: 32px;
            max-width: 32px;
            max-height: 32px;
            border: solid 3.5px #1EC4BD;
            border-radius: 50%;
            background-color: white;
            position: relative;
            top: 3px;
            left: 48px;
            margin: 10px 0px 20px 10px;
        }

        .p-timeline-item {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            min-width: 100px;
            max-width: 100px;
            position: relative;
            text-align: center;
            transition: color .3s ease-in-out;
            transition: transform .3s ease;
        }

        .i-is-active.p-timeline-item:hover {
            transform: none;
        }

        .i-is-active .p-timeline-item {
            transform: scale(1.1);
        }

        .close {
            position: absolute;
            right: 10px;
            top: 10px;
            width: 32px;
            height: 32px;
            opacity: 0.7;
            cursor: pointer;
        }

        .close:hover {
            opacity: 1;
        }

        .close:before,
        .close:after {
            position: absolute;
            left: 15px;
            content: ' ';
            height: 25px;
            width: 2px;
            background-color: #333;
        }

        .close:before {
            transform: rotate(45deg);
        }

        .close:after {
            transform: rotate(-45deg);
        }

        /*Custom scrollbar styling*/
        .timeline::-webkit-scrollbar {
            height: 8px;
        }

        .timeline::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px lightgrey;
            border-radius: 10px;
        }

        /* Track */
        .timeline::-webkit-scrollbar-thumb {
            background: #949494;
            border-radius: 10px;
        }

        /* Handle */

        /*  ========== Media Queries ========== */

        /* laptop resolutions*/
        @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) and (-webkit-min-device-pixel-ratio: 1) {
            .timeline {
                background-position: center top 60%;
            }
        }

        /*Tablet - Portrait*/
        @media screen and (max-width: 1020px) {
            .wrap {
                padding: 0 40px;
            }

            .timeline-wrap {
                padding: 0;
            }
        }

        /* Mobile devices */
        @media screen and (max-width: 768px) {
            .p-timeline-block {
                margin-top: 0;
            }

            .timeline {
                background-position: center top 55%;
            }

            .timeline-item {
                margin: 0 10px;
            }

            .p-timeline-block {
                min-width: 45px;
                min-height: 45px;
                max-width: 45px;
                max-height: 45px;
            }

            .p-timeline-date {
                font-size: 16px;
            }

            .close {
                right: 0px;
            }

            .timeline-title {
                line-height: 1em;
                font-size: 1.5em;
            }

            .timeline::-webkit-scrollbar {
                height: 4px;
            }
        }
    </style>


    <div class="clearfix striped-sections left">
        <div>
            <div class="container">


                <div class="row text-left" style="margin-top:9rem;">
                    <h1 class="titl" style="color:black;">Sobre Nós</h1>
                </div>


                <div class="wrap">
                    <div class="timeline-wrap">
                        <ul class="timeline">

                            <a href="sobre-nos#2019">
                                <li class="timeline-item mini">
                                    <div class="p-timeline-item">
                                        <time class="p-timeline-date"> 2019</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="sobre-nos#2020">
                                <li class="timeline-item bmw">
                                    <div class="p-timeline-item">
                                        <time class="p-timeline-date"> 2020</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="sobre-nos#2021">
                                <li class="timeline-item bmw">
                                    <div class="p-timeline-item">
                                        <time class="p-timeline-date"> 2021</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>

                            <a href="sobre-nos#2022">
                                <li class="timeline-item bmw">
                                    <div class="p-timeline-item">
                                        <time class="p-timeline-date"> 2022</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>
                            <a href="sobre-nos#2023">
                                <li class="timeline-item bmw">
                                    <div class="p-timeline-item">
                                        <time class="p-timeline-date"> 2023</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>
                            <a href="sobre-nos#equipa">
                                <li class="timeline-item bmw">
                                    <div class="p-timeline-item">
                                        <time class="p-timeline-date">Equipa</time>
                                        <div class="p-timeline-block"></div>
                                    </div>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>

                <div id="equipa" class="section techwix-team-section techwix-team-section-03 section-padding">
                    <div class="container">
                        <div class="team-wrap">
                            <div class="row text-left" id="" style="margin-top:5rem;">
                                <h1 class="titl" style="color:black;">Equipa</h1>
                            </div>

                            <div class="row">
                                @foreach ($teamData as $data)
                                    @if ($data['prioridade'] == 1)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single-team ">
                                                <div class="team-img">
                                                    <a href="#">
                                                        <img src="{{ $data['photo'] }}" alt="" class="team-photo">
                                                    </a>
                                                </div>

                                                <div class="team-content">
                                                    <h3 class="name"><a href="#"> {{ $data['user_name'] }}</a>
                                                    </h3>
                                                    <span class="designation">{{ $data['team_name'] }}</span>

                                                    <div class="team-social">
                                                        <ul class="social">
                                                            @if (isset($data['linkedin']))
                                                                <li><a href="{{ $data['linkedin'] }}"><i
                                                                            class="fab fa-linkedin"></i></a></li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                @foreach ($teamData as $data)
                                    @if ($data['prioridade'] == 0)
                                        <div class="col-lg-3 col-sm-6 team-toggle">
                                            <div class="single-team ">
                                                <div class="team-img">
                                                    <a href="#">
                                                        <img src="{{ $data['photo'] }}" alt="" class="team-photo">
                                                    </a>
                                                </div>

                                                <div class="team-content">
                                                    <h3 class="name"><a href="#"> {{ $data['user_name'] }}</a>
                                                    </h3>
                                                    <span class="designation">{{ $data['team_name'] }}</span>
                                                    <div class="team-social">
                                                        <ul class="social">
                                                            @if (isset($data['linkedin']))
                                                                <li><a href="{{ $data['linkedin'] }}"><i
                                                                            class="fab fa-linkedin"></i></a></li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                                <style>
                                    .team-toggle {
                                        display: none;
                                    }

                                    .team-photo {
                                        width: 100%;
                                        height: 323px;
                                        object-fit: cover;
                                        object-position: center;
                                    }

                                    @media (max-width: 767px) {
                                        .team-photo {
                                            height: auto;
                                            /* Ajusta a altura em dispositivos menores para manter a responsividade */
                                        }
                                    }
                                </style>

                            </div>

                            <!-- team-toggle --->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="more-team-content text-center">
                                        <p><a href="#" id="more-content-team">Ver Mais <i
                                                    id="bla"class="fas fa-long-arrow-alt-down"></i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="row text-left" id="2019" style="margin-top:2rem;">
                    <h1 class="titl" style="color:black;">2019</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="https://www.flickr.com/photos/iscteiul/albums/72157703465466132/with/40169351553"><img
                                        src="assets/images/20190.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a
                                            href="https://www.flickr.com/photos/iscteiul/albums/72157703465466132/with/40169351553">Fotos</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href=""> <img src="assets/images/20191.jpg" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title">Aftermovie</h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=whi8FWV8R6g"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href=""><img src="assets/images/20192.jpg" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title">It Speed Talk-Aptoide</h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=Wgmm6ib4UF8"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:1rem;">
                    <div class="col-lg-12">
                        <div class="more-choose-content text-center">
                            <p style="color:black"><a href="https://www.youtube.com/@fistaiscte-iul8897">Ver mais <i
                                        class="fas fa-long-arrow-alt-right"></i></a> </p>
                        </div>
                    </div>
                </div>

                <div class="row text-left" id="2020" style="margin-top:2rem;">
                    <h1 class="titl" style="color:black;">2020</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="https://www.flickr.com/photos/iscteiul/albums/72157713355133396/"><img
                                        src="assets/images/20201.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a
                                            href="https://www.flickr.com/photos/iscteiul/albums/72157713355133396/">Fotos</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="#"><img src="assets/images/20200.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title">Aftermovie</h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=7rzzwawyz78"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="#"><img src="assets/images/20202.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a href="#">Teaser</a></h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=q1mGkXNzqXU"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:1rem;">
                    <div class="col-lg-12">
                        <div class="more-choose-content text-center">
                            <p style="color:black"><a href="https://www.youtube.com/@fistaiscte-iul8897">Ver mais <i
                                        class="fas fa-long-arrow-alt-right"></i></a> </p>
                        </div>
                    </div>
                </div>

                <div class="row text-left" id="2021" style="margin-top:2rem;">
                    <h1 class="titl" style="color:black;">2021</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="#"><img src="assets/images/20210.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a href="#">Aftermovie</a></h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=cicTTBijw84"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="#"><img src="assets/images/20211.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a href="#">Teaser</a></h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=eDkPfvbTwy0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="#"><img src="assets/images/20212.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a href="#">Keynote</a></h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=bmlj_m4FABo"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:1rem;">
                    <div class="col-lg-12">
                        <div class="more-choose-content text-center">
                            <p style="color:black"><a href="https://www.youtube.com/@fistaiscte-iul8897">Ver mais <i
                                        class="fas fa-long-arrow-alt-right"></i></a> </p>
                        </div>
                    </div>
                </div>
                <div class="row text-left" id="2022" style="margin-top:2rem;">
                    <h1 class="titl" style="color:black;">2022</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="https://www.flickr.com/photos/iscteiul/albums/72177720296917280/"><img
                                        src="assets/images/20222.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a
                                            href="https://www.flickr.com/photos/iscteiul/albums/72177720296917280/">Fotos</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="#"><img src="assets/images/20221.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a href="#">Aftermovie</a></h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=aiE6tCvtQeQ"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="#"><img src="assets/images/20220.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a href="#">Conferência</a></h3>
                                </div>
                                <a class="play-btn popup-video"
                                    href="https://www.youtube.com/watch?time_continue=3&v=0rsqM2uDV8c"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:1rem;">
                    <div class="col-lg-12">
                        <div class="more-choose-content text-center">
                            <p style="color:black"><a href="https://www.youtube.com/@fistaiscte-iul8897">Ver mais <i
                                        class="fas fa-long-arrow-alt-right"></i></a> </p>
                        </div>
                    </div>
                </div>

                <div class="row text-left" id="2023" style="margin-top:2rem;">
                    <h1 class="titl" style="color:black;">2023</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="solution-item solution-item-sm">
                            <div class="solution-img">
                                <a href="https://www.flickr.com/photos/iscteiul/albums/72177720306431849/"><img
                                        src="assets/images/20230.png" alt=""></a>
                            </div>
                            <div class="solution-content">
                                <div class="solution-title">
                                    <h3 class="title"><a
                                            href="https://www.flickr.com/photos/iscteiul/albums/72177720306431849/">Fotos</a>
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!---<div class="col-lg-4">
                                                        <div class="solution-item solution-item-sm">
                                                            <div class="solution-img">
                                                                <a href="#"><img src="assets/images/solution-img2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="solution-content">
                                                                <div class="solution-title">
                                                                    <h3 class="title"><a href="#">AfterMovie</a></h3>
                                                                </div>
                                                                <a class="play-btn popup-video"
                                                                    href="https://www.youtube.com/watch?time_continue=3&v=_X0eYtY8T_U"><i
                                                                        class="fas fa-play"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="solution-item solution-item-sm">
                                                            <div class="solution-img">
                                                                <a href="#"><img src="assets/images/solution-img2.jpg" alt=""></a>
                                                            </div>
                                                            <div class="solution-content">
                                                                <div class="solution-title">
                                                                    <h3 class="title"><a href="#">Teaser</a></h3>
                                                                </div>
                                                                <a class="play-btn popup-video"
                                                                    href="https://www.youtube.com/watch?time_continue=3&v=_X0eYtY8T_U"><i
                                                                        class="fas fa-play"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>--->
                </div>
                <div class="row" style="margin-top:1rem;">
                    <div class="col-lg-12">
                        <div class="more-choose-content text-center">
                            <p style="color:black"><a href="https://www.youtube.com/@fistaiscte-iul8897">Ver mais <i
                                        class="fas fa-long-arrow-alt-right"></i></a> </p>
                        </div>
                    </div>
                </div>





                <script>
                    var toggleLink = document.getElementById('more-content-team');
                    var toggleableElements = document.querySelectorAll('.team-toggle');
                    var icon = document.getElementById('bla');

                    var currentState = false;

                    toggleLink.addEventListener('click', function() {
                        event.preventDefault(); // Prevent the default behavior of the anchor element
                        currentState = !currentState; // Toggle the state

                        toggleableElements.forEach(function(element) {
                            element.style.display = currentState ? 'block' : 'none';
                        });
                        // Toggle the text content of the <a> element
                        toggleLink.innerHTML = currentState ? 'Ver Menos <i id="bla"class="fas fa-long-arrow-alt-up"></i>' :
                            'Ver Mais <i id="bla"class="fas fa-long-arrow-alt-down"></i>';


                    });
                </script>





            </div>
        </div>
    </div>
@endsection
