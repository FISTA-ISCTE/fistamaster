<div>
    <div class="single-blog-post single-blog">

        <div class="blog-image" style="justify-content: center;display: flex;">
            <img src="{{ 'http://127.0.0.1:8000/storage/' . $workshop->image }}" alt=""
                style="width: 857px; height: 447px; object-fit: cover;">
            <div class="top-meta">
                <span class="date"><span>
                        @php
                            $date = new DateTime($workshop->begin);
                            echo $date->format('d');
                        @endphp </span>
                    @php
                        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                        $date = new DateTime($workshop->begin);
                        echo strftime('%b', $date->getTimestamp());
                    @endphp</span>
            </div>
        </div>
        <div class="row" >
            @livewire('workshop-inscricao', ['workshopId' => $workshop->id])
        </div>

        <div class="blog-content" style="margin-top: 2rem !important;">
            <h3 class="title">{{ $workshop->title }} </h3>
            <p class="text">{{ $workshop->description }}</p>
            <h2 class="title" style="font-size: 1.3rem">Requisitos.:</h2>
            <p class="text">{!! $workshop->requirements !!}</p>
        </div>
    </div>
    <!-- Outros detalhes do workshop -->
</div>
