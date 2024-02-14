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
                                    <div class="row" style="display:flex; align-items:center;">
                                        <div class="round-container" >

                                            <a style="background:#ffffff; display: flex; justify-content: center; align-items: center; height: 100%;" href="blog-details.html"><img style="width:100px;"
                                                src="https://fista.iscte-iul.pt/storage/users/empresas/10001706634128.png"
                                                alt=""></a>
                                        </div>
                                        <h1 style="font-size:30px; padding-left:15px;">Delloite</h1>
                                        
                                    </div>
                                    <div class="single-blog-post single-blog">
                                        <div class="blog-image">
                                            <a href="blog-details.html"><img
                                                    src="https://fista.iscte-iul.pt/storage/users/empresas/10001706634128.png"
                                                    alt=""></a>
                                            <div class="top-meta">
                                                <span class="date"><span>08</span>Aug</span>
                                            </div>
                                        </div>
                                        <div class="blog-content">
                                            
                                            <div class="blog-meta">
                                                <div class="row">

                                                    <span class="col tag" style="font-size:15px"><i class="far fa-bookmark"></i> Diamond</span>
                                                    <span class="col align-self-end tag team-social text-right" >
                                                        <a href="https://www.linkedin.com/in/" alt="https://www.linkedin.com/in/"class="icon-link"><i class="fab fa-linkedin" style="font-size:18px"></i></a>
                                                        <a href="https://www.linkedin.com/in/" class="icon-link"><i class="fab fas fa-globe" style="font-size:18px"></i></a>                                                        
                                                    </span>
                                                </div>
                                            </div>
                                            <h3 class="title"><a href="blog-details.html">How to become a
                                                    successful businessman </a></h3>
                                            <p class="text">Accelerate innovation with world-class tech teams
                                                We’ll match you to an entire remote team of incredible freelance
                                                talent for all your software development needs.</p>

                                            <p id="collapseExample" class="collapse text" aria-labelledby="collapse1" >Accelerate innovation with world-class tech teams
                                                We’ll match you to an entire remote team of incredible freelance
                                                talent for all your software development needs!!!!

                                            </p>
                                            <div class="blog-btn">
                                                <a class="blog-btn-link" onclick="toggleIconAndText()" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" href="#">Read Full <i
                                                        class="fas fa-long-arrow-alt-down"></i></a>
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
                        </div>
                    </div>
                    <!-- Blog Standard Wrap End -->
                </div>
            </div>
            <!-- Blog Standard End -->
        </div>
    </div>


    <script>
        const imageContainer = document.getQueryElements('imageContainer');
        const image = document.getElementById('image');
        const canvas = document.getElementById('canvas');
        const context = canvas.getContext('2d');

        // Set the canvas size to match the image
        canvas.width = image.width;
        canvas.height = image.height;

        // Draw the image onto the canvas
        context.drawImage(image, 0, 0, image.width, image.height);

        // Function to get the color of a pixel at specified coordinates
        function getPixelColor(x, y) {
            const imageData = context.getImageData(x, y, 1, 1);
            const pixel = imageData.data;

            const color = `rgb(${pixel[0]}, ${pixel[1]}, ${pixel[2]})`;
            return color;
        }

        // Example: Get the color of a pixel at coordinates (10, 10)
        const pixelColor = getPixelColor(10, 10);
        console.log('Pixel Color:', pixelColor);

        // Set the background color of the container to the color of the pixel at (10, 10)
        imageContainer.style.backgroundColor = pixelColor;

        <script>
        function toggleIconAndText(button) {
            const icon = button.querySelector('.i');
            const buttonText = document.querySelector('.blog-btn-link');

            if (icon.classList.contains('fa-long-arrow-alt-down')) {
            icon.classList.remove('fa-long-arrow-alt-down');
            icon.classList.add('fa-long-arrow-alt-up');
            buttonText.textContent = 'Read Less';
            } else {
            icon.classList.remove('fa-long-arrow-alt-up');
            icon.classList.add('fa-long-arrow-alt-down');
            buttonText.textContent = 'Read Full';
            }
        }
</script>

    </script>


</x-app-layout>
