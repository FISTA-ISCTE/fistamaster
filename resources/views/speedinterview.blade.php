@extends('layouts.app2')

@section('content')
    <!-- Adicione na seção <head> do seu arquivo HTML -->

    <div class="section page-banner-section" style="background-color: white;min-height:15rem;">
        <div class="container">
            <div class="page-banner" style="margin-top:5rem;">
                <div class="row text-left">
                    <h1 class="titl" style="color:black;">Speed Interviews</h1>
                </div>
            </div>

            <div class="row">

                @foreach ($speedinterview as $speedinterviews)
                    <div class="col-lg-4 col-md-6">
                        <!-- Botão para abrir o modal -->

                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a data-toggle="modal" data-target="#workshopModal{{ $speedinterviews->id }}">
                                    <img src="{{ 'https://fista.iscte-iul.pt/' . $speedinterviews->imagem }}" alt=""
                                        style="width: 416px; height: 247px; object-fit: cover;">
                                </a>

                            </div>

                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span>
                                        @if ($speedinterviews->lugares_disponiveis != 0)

                                        @else
                                            ESGOTADO
                                        @endif
                                    </span>
                                    <span><i class="fa fa-clock"></i>
                                        @php
                                            $date = new DateTime($speedinterviews->begin);
                                            echo $date->format('H') . 'h' . $date->format('i');
                                        @endphp</span>
                                </div>
                                <h3 class="title"><a data-toggle="modal"
                                        data-target="#workshopModal{{ $speedinterviews->id }}">{{ $speedinterviews->nome }}
                                    </a>
                                </h3>
                                <div class="blog-btn">
                                    <a class="blog-btn-link" data-toggle="modal"
                                        data-target="#workshopModal{{ $speedinterviews->id }}">
                                        @if ($speedinterviews->lugares_disponiveis != 0)
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
                    <div class="modal fade" id="workshopModal{{ $speedinterviews->id }}" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-xl shadow" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{ $speedinterviews->nome }}</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="single-blog-post single-blog">
                                        <style>
                                            .modal {
                                                z-index: 1200;
                                            }
                                        </style>
                                        <div class="blog-image" style="justify-content: center;display: flex;">
                                            <img src="{{ 'https://fista.iscte-iul.pt/' . $speedinterviews->imagem }}"
                                                alt="" style="width: 857px; height: 447px; object-fit: cover;">
                                            <div class="top-meta">
                                                <span class="date"><span>
                                                        @php
                                                            $date = new DateTime($speedinterviews->begin);
                                                            echo $date->format('d');
                                                        @endphp </span>
                                                    @php
                                                        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                                                        $date = new DateTime($speedinterviews->begin);
                                                        echo strftime('%b', $date->getTimestamp());
                                                    @endphp</span>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            @auth
                                                @livewire('speed-in-form', ['siId' => $speedinterviews->id])
                                            @else

                                                <a href="/login?redirect=/workshops" style="width: 50% ;margin-top:3rem; margin-left:5rem;" class="btn btn-primary">Faça o login para
                                                    se inscrever</a>
                                            @endauth

                                        </div>

                                        <div class="blog-content" style="margin-top: 2rem !important;">
                                            <h3 class="title">{{ $speedinterviews->nome }} </h3>
                                            <p class="text">{!! $speedinterviews->descricao !!}</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <style>
        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            /* Ajuste este valor conforme necessário para estar acima da navbar */
            overflow: hidden;
            /* Impede o overflow no nível do modal */

        }

        .modal-backdrop.show {
            opacity: 0.5;
            /* Ajuste a transparência conforme necessário */
            background-color: #000;
            /* Cor de fundo cinza */
        }


        .modal-dialog {
            margin: 7rem auto;
            /* 5rem no topo para compensar a navbar */
            height: calc(100% - 5rem);
            border: 0px;
            /* Altura total menos a altura da navbar */
        }

        .modal-content {
            height: 100%;
            /* Altura total do diálogo modal */
            display: flex;
            flex-direction: column;
            /* Permite flexibilidade no conteúdo do modal */
        }

        .modal-header,
        .modal-footer {
            border: 0px;
            /* Mantenha o cabeçalho e o rodapé do modal fixos */
        }

        .modal-body {
            overflow-y: auto;
            /* Adiciona rolagem apenas ao corpo do modal se o conteúdo for muito grande */
            flex-grow: 1;
            /* Permite que o corpo do modal expanda conforme necessário */
        }
    </style>

    <!-- Adicione antes de fechar a tag </body> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
