@extends('layouts.app2')

@section('content')
    <!-- Adicione na seção <head> do seu arquivo HTML -->

    <div class="section page-banner-section" style="background-color: white;min-height:15rem;">
        <div class="container">
            <div class="page-banner" style="margin-top:5rem;">
                <div class="row text-left">
                    <h1 class="titl" style="color:black;">Workshops</h1>
                </div>
            </div>

            <div class="row">
                @foreach ($workshops as $workshop)
                    <div class="col-lg-4 col-md-6">
                        <!-- Botão para abrir o modal -->

                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a data-toggle="modal" data-target="#workshopModal{{ $workshop->id }}">
                                    <img src="{{ 'http://127.0.0.1:8000/storage/' . $workshop->image }}" alt=""
                                        style="width: 416px; height: 247px; object-fit: cover;">
                                </a>
                                <div class="top-meta">
                                    <span class="date"><span>@php
                                        $date = new DateTime($workshop->begin);
                                    echo $date->format('d'); @endphp  </span>
                                        @php
                                            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                            $date = new DateTime($workshop->begin);
                                        echo strftime('%b', $date->getTimestamp()); @endphp </span>
                                </div>
                            </div>

                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="fas fa-user"></i>{{ $workshop->company }}</span>
                                    <span><i class="fa fa-check-double"></i>
                                        @if ($workshop->spotsavailable != 0)
                                            {{ $workshop->spotsavailable }} Vagas
                                        @else
                                            ESGOTADO
                                        @endif
                                    </span>
                                    <span><i class="fa fa-clock"></i>
                                        @php
                                            $date = new DateTime($workshop->begin);
                                            echo $date->format('H') . 'h' . $date->format('i');
                                        @endphp</span>
                                </div>
                                <h3 class="title"><a data-toggle="modal"
                                        data-target="#workshopModal{{ $workshop->id }}">{{ $workshop->title }} </a>
                                </h3>
                                <div class="blog-btn">
                                    <a class="blog-btn-link" data-toggle="modal"
                                        data-target="#workshopModal{{ $workshop->id }}">
                                        @if ($workshop->spotsavailable != 0)
                                            Inscrever
                                        @else
                                            ESGOTADO
                                        @endif
                                        <i class="fas fa-long-arrow-alt-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="modal fade" id="workshopModal{{ $workshop->id }}" tabindex="-1" role="dialog"
        style="z-index: 1050 !important;">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $workshop->title }}</h5>
                    <div class="blog-meta" style="margin-left:4rem;">
                        <span><i class="fa fa-check-double"></i> {{ $workshop->spotsavailable }} Vagas</span>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('workshop-details', ['workshopId' => $workshop->id])
                </div>
            </div>
        </div>
    </div>
    <!-- Adicione antes de fechar a tag </body> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
