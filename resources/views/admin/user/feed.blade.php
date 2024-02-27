<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
                {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}!</span>
            </h1>
        </div>
    </x-slot>

    <style>
    .round-container {
        width: 70px; /* Set maximum width */
        height: 70px; /* Set your desired height */
        max-width: 100%; /* Ensure it doesn't exceed the maximum width */
        border-radius: 50%; /* Make it round */
        overflow: hidden; /* Ensure content doesn't overflow */
        background: #FFFFFF;
        position: relative;
        box-sizing: border-box;
        border: 2px solid transparent;
        /* background: linear-gradient(to right, #ff6600, #33ccff); */
        background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);
        border-image-slice: 1;
    }

    .icon-link i {
    transition: transform 0.3s ease;
    }

    .icon-link:hover i {
        transform: scale(1.2);
    }
    </style>
    <div class="card">
        <div class="container">
            <div class="section blog-standard-section section-padding-02" style="margin-top:3rem; margin-bottom:3rem;">
                <div class="container">
                    <!-- Blog Standard Wrap Start -->
                    <div class="blog-standard-wrap">
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-8">
                                <!-- Blog Post Wrap Start -->
                                @foreach($feeds as $feed)
                                    <div class="blog-post-wrap" style="padding:0px 0px 100px;">
                                        <!-- Single Blog Start -->
                                        <div class="row" style="display:flex; align-items:center;">
                                            <div class="round-container" >

                                                <a style="background:#ffffff; display: flex; justify-content: center; align-items: center; height: 100%;" href="blog-details.html"><img style="width:100px;"
                                                    src="../storage/{{$feed->empresa->avatar}}"
                                                    alt=""></a>
                                            </div>
                                            <h1 style="font-size:30px; padding-left:15px;">{{$feed->empresa->nome_empresa}}</h1>

                                        </div>
                                        <div class="single-blog-post single-blog" style="margin-top:30px">
                                            <div class="blog-image">
                                                <a href="blog-details.html"><img
                                                        src="../storage/{{$feed->avatar1}}"
                                                        alt=""></a>
                                                <div class="top-meta">
                                                    <span class="date"><span>{{ date('d', $feed->created_at->timestamp) }}</span>{{ date('M', $feed->created_at->timestamp) }}</span>
                                                </div>
                                            </div>
                                            <div class="blog-content" style="background-color: rgba(255, 255, 255, 0.8);border-radius:10px;padding: 15px 35px 0px;margin-top:-35px;box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.20);">

                                                <div class="blog-meta">
                                                    <div class="row">

                                                        <span class="col tag" style="font-size:15px"><i class="far fa-bookmark"></i> {{$feed->empresa->plano}}</span>
                                                        <span class="col align-self-end tag team-social text-right" style="margin-right:0px;">
                                                            <a href="{{$feed->empresa->linkedin}}" alt=""class="icon-link"><i class="fab fa-linkedin" style="font-size:18px"></i></a>
                                                            <a href="{{$feed->empresa->website}}" class="icon-link"><i class="fab fas fa-globe" style="font-size:18px"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="#0">{{$feed->titulo}}</a></h3>
                                                <p class="text">{{$feed->descricao}}</p>


                                                <!-- <div class="blog-btn">
                                                    <a class="blog-btn-link" onclick="toggleIconAndText()" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="#">Read Full <i
                                                            class="fas fa-long-arrow-alt-down"></i></a>
                                                </div> -->
                                            </div>
                                        </div>
                                        <!-- Single Blog End -->

                                        <!-- Page Pagination Start -->
                                        <!-- <div class="techwix-pagination">
                                            <ul class="pagination justify-content-center">
                                                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                <li><a href="blog-standard.html">1</a></li>
                                                <li><a class="active" href="blog-standard.html">2</a></li>
                                                <li><a href="blog-standard.html">3</a></li>
                                                <li><span>...</span></li>
                                                <li><a href="blog-standard.html"><i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div> -->
                                        <!-- Page Pagination End -->
                                    </div>

                                @endforeach
                                <!-- Blog Post Wrap Ed -->
                            </div>
                        </div>
                    </div>
                    <!-- Blog Standard Wrap End -->
                </div>
            </div>
            <!-- Blog Standard End -->
        </div>
    </div>





</x-app-layout>
