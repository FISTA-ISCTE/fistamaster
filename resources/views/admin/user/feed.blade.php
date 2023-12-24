<x-app-layout>
    <x-slot name="header">
        <div style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
                {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}!</span>
            </h1>
        </div>
    </x-slot>
    <div class="card">
        <div class="container" style="margin-left:1rem;margin-right:1rem;">
            <div class="section blog-standard-section section-padding-02" style="margin-top:3rem; margin-bottom:3rem;">
                <div class="container">
                    <!-- Blog Standard Wrap Start -->
                    <div class="blog-standard-wrap">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8">
                                <!-- Blog Post Wrap Start -->
                                <div class="blog-post-wrap">
                                    <!-- Single Blog Start -->
                                    <div class="single-blog-post single-blog">
                                        <div class="blog-image">
                                            <a href="blog-details.html"><img
                                                    src="https://fista.iscte-iul.pt/storage/users/empresas/341699030911.png"
                                                    alt=""></a>
                                            <div class="top-meta">
                                                <span class="date"><span>08</span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <span class="tag"><i class="far fa-bookmark"></i> Diamond</span>
                                                <span><i class="fas fa-user"></i> <button
                                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                        <img class="h-8 w-8 rounded-full object-cover"
                                                            src="{{ Auth::user()->profile_photo_url }}"
                                                            alt="{{ Auth::user()->name }}" />
                                                    </button></span>

                                            </div>
                                            <h3 class="title"><a href="blog-details.html">How to become a
                                                    successful businessman </a></h3>
                                            <p class="text">Accelerate innovation with world-class tech teams
                                                We’ll match you to an entire remote team of incredible freelance
                                                talent for all your software development needs.</p>
                                            <div class="blog-btn">
                                                <a class="blog-btn-link" href="blog-details.html">Read Full <i
                                                        class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Blog End -->
                                    <!-- Single Blog Start -->
                                    <div class="single-blog-post single-blog">
                                        <div class="blog-image">
                                            <a href="blog-details.html"><img
                                                    src="https://fista.iscte-iul.pt/storage/users/empresas/341699030911.png"
                                                    alt=""></a>
                                            <div class="top-meta">
                                                <span class="date"><span>08</span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <span class="tag"><i class="far fa-bookmark"></i> Technology /
                                                    Business</span>
                                                <span><i class="fas fa-user"></i> <a href="#">Andrew
                                                        Paker</a></span>
                                                <span><i class="far fa-comments"></i> 0 Comments</span>
                                            </div>
                                            <h3 class="title"><a href="blog-details.html">Who Needs Extract Value
                                                    From Data?</a></h3>
                                            <p class="text">Accelerate innovation with world-class tech teams
                                                We’ll match you to an entire remote team of incredible freelance
                                                talent for all your software development needs.</p>
                                            <div class="blog-btn">
                                                <a class="blog-btn-link" href="blog-details.html">Read Full <i
                                                        class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Blog End -->
                                    <!-- Single Blog Start -->
                                    <div class="single-blog-post single-blog">
                                        <div class="blog-image">
                                            <a href="blog-details.html"><img
                                                    src="https://fista.iscte-iul.pt/storage/users/empresas/341699030911.png"
                                                    alt=""></a>
                                            <div class="top-meta">
                                                <span class="date"><span>08</span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-meta">
                                                <span class="tag"><i class="far fa-bookmark"></i> Technology /
                                                    Business</span>
                                                <span><i class="fas fa-user"></i> <a href="#">Andrew
                                                        Paker</a></span>
                                                <span><i class="far fa-comments"></i> 0 Comments</span>
                                            </div>
                                            <h3 class="title"><a href="blog-details.html">Back up your database,
                                                    store in a safe</a></h3>
                                            <p class="text">Accelerate innovation with world-class tech teams
                                                We’ll match you to an entire remote team of incredible freelance
                                                talent for all your software development needs.</p>
                                            <div class="blog-btn">
                                                <a class="blog-btn-link" href="blog-details.html">Read Full <i
                                                        class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Blog End -->
                                    <!-- Page Pagination Start -->
                                    <div class="techwix-pagination">
                                        <ul class="pagination justify-content-center">
                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                            <li><a href="blog-standard.html">1</a></li>
                                            <li><a class="active" href="blog-standard.html">2</a></li>
                                            <li><a href="blog-standard.html">3</a></li>
                                            <li><span>...</span></li>
                                            <li><a href="blog-standard.html"><i class="fa fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Page Pagination End -->
                                </div>
                                <!-- Blog Post Wrap Ed -->
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <!-- Blog Sidebar Start -->
                                <div class="blog-sidebar">
                                    <!-- Sidebar Widget Start -->
                                    <div class="sidebar-widget sidebar-widget-1">
                                        <!-- Widget Search Form Start -->
                                        <form class="search-form" action="#">
                                            <input type="text" placeholder="Write your keyword...">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                        <!-- Widget Search Form End -->
                                    </div>
                                    <!-- Sidebar Widget End -->

                                    <!-- Sidebar Widget Start -->
                                    <div class="sidebar-widget">
                                        <!-- Widget Title Start -->
                                        <div class="widget-title">
                                            <h3 class="title">Popular Posts</h3>
                                        </div>
                                        <!-- Widget Title End -->
                                        <!-- Widget Recent Post Start -->
                                        <div class="recent-posts">
                                            <ul>
                                                <li>
                                                    <a class="post-link" href="blog-details.html">
                                                        <div class="post-thumb">
                                                            <img src="assets/images/blog/r-post1.jpg" alt="">
                                                        </div>
                                                        <div class="post-text">
                                                            <h4 class="title">How Wireless Technology is Changing
                                                                Business</h4>
                                                            <span class="post-meta"><i
                                                                    class="far fa-calendar-alt"></i>
                                                                May 15,
                                                                2020</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="post-link" href="blog-details.html">
                                                        <div class="post-thumb">
                                                            <img src="assets/images/blog/r-post2.jpg" alt="">
                                                        </div>
                                                        <div class="post-text">
                                                            <h4 class="title">How Wireless Technology is Changing
                                                                Business</h4>
                                                            <span class="post-meta"><i
                                                                    class="far fa-calendar-alt"></i>
                                                                May 15,
                                                                2020</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="post-link" href="blog-details.html">
                                                        <div class="post-thumb">
                                                            <img src="assets/images/blog/r-post3.jpg" alt="">
                                                        </div>
                                                        <div class="post-text">
                                                            <h4 class="title">How Wireless Technology is Changing
                                                                Business</h4>
                                                            <span class="post-meta"><i
                                                                    class="far fa-calendar-alt"></i>
                                                                May 15,
                                                                2020</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Widget Recent Post End -->
                                    </div>

                                    <!-- Sidebar Widget Start -->
                                    <div class="sidebar-widget">
                                        <!-- Widget Title Start -->
                                        <div class="widget-title">
                                            <h3 class="title">Categories</h3>
                                        </div>
                                        <!-- Widget Title End -->
                                        <!-- Widget Category Start -->
                                        <ul class="category">
                                            <li class="cate-item"><a href="blog.html"><i class="flaticon-next"></i>
                                                    Technology <span class="post-count">3</span></a></li>
                                            <li class="cate-item"><a href="blog.html"><i class="flaticon-next"></i>
                                                    Innovation <span class="post-count">5</span></a></li>
                                            <li class="cate-item"><a href="blog.html"><i class="flaticon-next"></i>
                                                    Learning <span class="post-count">3</span></a></li>
                                            <li class="cate-item"><a href="blog.html"><i class="flaticon-next"></i>
                                                    Information <span class="post-count">3</span></a></li>
                                        </ul>
                                        <!-- Widget Category End -->
                                    </div>
                                    <!-- Sidebar Widget End -->
                                </div>
                                <!-- Blog Sidebar End -->
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
