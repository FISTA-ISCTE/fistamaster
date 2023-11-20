@extends('layouts.app2')


@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-6 col-md-12 text-center">

                <h1 style="font-size:60px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de ideias</h1>
            </div>
        </div>
        <!-- <h1 style="font-size:60px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de ideias</h1> -->

    </div>
    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:140px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <div class="col-lg-6 col-md-12">
                        <div class="cont">
                            <!--<button onclick="window.location.href ='https://fista.iscte-iul.pt/storage/settings/November2020/Enunciado%20%20Concurso%20de%20Ideias%202021.pdf'" class="btn-fista" style="margin-bottom:10px;display: block;margin-left: auto;margin-right: auto">Conhece o enunciado!</button>-->
                            <div>
                                <p style="margin-top:20px;font-size: 23px;text-align:center;padding: 0 2% 0 2%">Todos os
                                    anos, o FISTA permite-te dar largas à imaginação e desenvolver uma ideia! Forma um grupo
                                    constituído por no máximo 3 pessoas e participa no concurso de Ideias!</p>
                                <!--<p style="margin-top:20px;font-size: 23px;text-align:center;padding-right: 20px;width:80%">Consulta aqui o regulamento em breve!</p>-->
                                <!-- Descomentar quando sair o regulamento, e comentar o p acima-->
                                <p style="margin-top:20px;font-size: 22px;text-align:center;padding:0 2% 0 2%">Este ano o
                                    tema é <b>"Tecnologias Inovadoras que sirvam de auxílio ao ensino e trabalho à distância"</b>,
                                    para ficares a saber mais sobre o funcionamento do concurso consulta o regulamento.</p>
                                <p style="margin-top:20px;font-size: 18px;padding:0 2% 0 2%; color:black"> Sponser:</p>

                                <img style="height: 3rem;" src="img/logos/GlobalLogo_NTTDATA_Black.png" alt="">

                                <!--<p>
                                                    <a class="projeto" target="_blank" href="https://arquivo.pt/noFrame/replay/20220729095253/https://fista.iscte-iul.pt/img/concurso-ideias/Regulamento.pdf"><button class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:5%">Regulamento</button></a>
                                                </p>-->
                            </div>
                        </div>
                        <!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
                        <!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->


                        <!-- VER QUAL DELES FICA MELHOR -->
                        <div class="row justy-content-between">
                            <div class="d-flex flex-wrap justify-content-around">
                                <div class="pt-4 ">
                                    <a class="btn" href="/brevemente">Regulamento</a>
                                </div>
                                <div class="pt-4 pb-4 pt-md-4 ">

                                    <a id="openRegistarEquipa" class="btn" href="#">Registar Equipa</a>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6 col-md-12">
                        <img src="https://arquivo.pt/noFrame/replay/20220729095301im_/https://fista.iscte-iul.pt/img/concurso-ideias/img_ideia.png"
                            style="display:block;margin-top:20px;margin-left:auto;margin-right:auto">
                    </div>
                </div>



            </div>
        </div>



        <!-- Signup Modal -->
        <div class="modal" tabindex="-1" role="dialog" id="RegistarEquipa">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- Modal content goes here -->
                    <!-- Signup form goes here -->
                    <!-- Example form: -->
                    <div class="section login-register-section ">
                        <!-- Login & Register Wrapper Start -->
                        <div class="login-register-wrap">
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="modal-header"
                                    style="display:block; border:none;padding-top:0px; padding-bottomphp artisan ser:0px">
                                    <div class="row section-title align-items-center justify-content-between">
                                        <div class="col-6">
                                            <h2 class="title">Inscrição</h2>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="button" class="close-btn" data-bs-dismiss="modal"
                                                style="width: 27px;height: 27px; border: none; border-radius: 50%; background: linear-gradient(195deg, rgb(0, 196, 204) 0%, rgb(0, 141, 132) 100%);"
                                                onmouseover="this.style.background='#000000'"
                                                onmouseout="this.style.background='linear-gradient(195deg, #00c4cc 0%, #008d84 100%)'"><i
                                                    class="flaticon-close" style="outline:none;color:white;"
                                                    aria-hidden="true"></i></button>
                                            <!-- <button type="button" class="close-btn" data-bs-dismiss="modal" style="width:25px;background:linear-gradient(-140deg, #c3f8fd 0%, #00c4cc 100%);border-radius: 50%;border:none" ><i class="flaticon-close" style="outline:none;color:white;" aria-hidden="true"></i></button> -->
                                        </div>


                                    </div>
                                </div>
                                <!-- Section Title End -->
                                <form method="POST" action="/resgistar-concurso-ideias">
                                    @csrf
                                    <div class="modal-body" style="overflow-y: auto; max-height: 400px; margin: 30px 0px;">
                                        <div class="login-register-form">

                                            <div style="padding-bottom:30px">
                                                <h5>Grupo <span style="color:red">*</span></h5>
                                                <div class="single-form">
                                                    <input type="text"
                                                        style="font-weight: 400 !important;font-size:initial !important;"
                                                        name="nome_grupo" required="" class="form-control"
                                                        placeholder="Nome do Grupo">
                                                </div>
                                                <h5>Elemento 1 <span style="color:red">*</span></h5>
                                                <div class="single-form">
                                                    <input type="text"
                                                        style="font-weight: 400 !important;font-size:initial !important;"
                                                        name="nome1" required="" class="form-control"
                                                        placeholder="Nome">
                                                </div>
                                                <div class="single-form">
                                                    <input type="text"
                                                        style="font-weight: 400 !important;font-size:initial !important;"
                                                        name="email1" required="" class="form-control"
                                                        placeholder="Email">
                                                </div>
                                                <div class="single-form custom-select-wrapper">
                                                    <select name="curso1" class="form-control custom-select"
                                                        id="id_curso" required="">
                                                        <option disabled="" class="form-control" style=""
                                                            selected="" value=""> Selecionar Curso</option>
                                                        <option value="LEI">Engenharia Informática</option>
                                                        <option value="LIGE">Informática e Gestão de Empresas</option>
                                                        <option value="LETI">Eng. de Telecomunicações e Informática
                                                        </option>
                                                        <option value="LCD">Ciência de Dados</option>
                                                        <option value="Arquiteura">Arquitetura</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="padding-bottom:30px">
                                                <h5>Elemento 2 <span style="color:red">*</span></h5>
                                                <div class="single-form">
                                                    <input type="text"
                                                        style="font-weight: 400 !important;font-size:initial !important;"
                                                        name="nome2" required="" class="form-control"
                                                        placeholder="Nome">
                                                </div>
                                                <div class="single-form">
                                                    <input type="text"
                                                        style="font-weight: 400 !important;font-size:initial !important;"
                                                        name="email2" required="" class="form-control"
                                                        placeholder="Email ">
                                                </div>
                                                <div class="single-form custom-select-wrapper">
                                                    <select name="curso2" class="form-control custom-select"
                                                        id="id_curso" required="">
                                                        <option disabled="" class="form-control" style=""
                                                            selected="" value=""> Selecionar Curso</option>
                                                        <option value="LEI">Engenharia Informática</option>
                                                        <option value="LIGE">Informática e Gestão de Empresas</option>
                                                        <option value="LETI">Eng. de Telecomunicações e Informática
                                                        </option>
                                                        <option value="LCD">Ciência de Dados</option>
                                                        <option value="Arquitetura">Arquitetura</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div style="padding-bottom:30px">
                                                <h5>Elemento 3</h5>
                                                <div class="single-form">
                                                    <input type="text"
                                                        style="font-weight: 400 !important;font-size:initial !important;text-transform: lowercase;"
                                                        name="nome3" class="form-control" placeholder="Nome">
                                                </div>
                                                <div class="single-form">
                                                    <input type="text"
                                                        style="font-weight: 400 !important;font-size:initial !important;text-transform: lowercase;"
                                                        name="email3" class="form-control" placeholder="Email ">
                                                </div>
                                                <div class="single-form custom-select-wrapper">
                                                    <select name="curso3" class="form-control custom-select"
                                                        id="id_curso">
                                                        <option disabled="" class="form-control" style=""
                                                            selected="" value=""> Selecionar Curso</option>
                                                        <option value="LEI">Engenharia Informática</option>
                                                        <option value="LIGE">Informática e Gestão de Empresas</option>
                                                        <option value="LETI">Eng. de Telecomunicações e Informática
                                                        </option>
                                                        <option value="LCD">Ciência de Dados</option>
                                                        <option value="Arquitetura">Arquitetura</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center" style="border:none;padding:0px">
                                        <div class="form-btn">
                                            <button type="submit" class="btn">Inscrever Equipa</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Login & Register Box End -->
                        </div>
                        <!-- Login & Register Wrapper End -->
                    </div>
                </div>
            </div>
        </div>





        <!-- Your custom scripts -->
        <script>
            $(document).ready(function() {
                $('#openRegistarEquipa').click(function() {
                    $('#RegistarEquipa').modal('show');
                });
            });
        </script>


        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

        <!-- Include Bootstrap JS and Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    </section>




    <!-- 2021 -->

    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:70px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <h1 class="titulo" style="color:black;font-weight: bold">Edição de 2021<span
                            style="font-weight:bold"> Projeto Vencedor</span></h1>

                    <div class="col-lg-5 col-md-12 " style="d-flex align-items-center">
                        <div class="cont">
                            <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/ci_venc_2021.png"
                                width="80%" style="display:block;margin:auto; ">
                        </div>
                        <!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
                        <!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->

                    </div>


                    <div class="col-lg-6 col-md-12 d-flex flex-column" style="text-align:left;padding: 0 2% 0 2%">
                        <p style="margin-top:20px;font-size: 16px;">O projecto vencedor da edição de 2021 do Concurso de
                            Ideias foi Iscte Virtual,<span style="font-weight:bold"> uma solução do tema "Desenvolvimento
                                de Atividades Interativas dentro do ISCTE". </span></p>
                        <h3 class="mt-2" style="color: black; ">Grupo:</h3>
                        <ul style="list-style-type: disc; margin-left: 1.5em;">
                            <li style=" color:black; font-size:15px">João Antão (Engenharia de Telecomunicações e
                                Informática)</li>
                            <li style="color:black; font-size:15px">Bernardo Gameiro (Informática e Gestão de Empresas)
                            </li>
                        </ul>

                        <div class="mt-4 d-flex justify-content-center">

                            <a class="btn"
                                href="https://arquivo.pt/noFrame/replay/20220729100851/https://fista.iscte-iul.pt/img/concurso-ideias/file/ci_venc_2021_presentation.pdf">Conhecer
                                o Projeto</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>

    <!-- 2020 -->
    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:70px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <h1 class="titulo" style="color:black;font-weight: bold">Edição de 2020<span
                            style="font-weight:bold"> Projeto Vencedor</span></h1>

                    <div class="col-lg-5 col-md-12 order-md-1 order-2 d-flex align-items-center">

                        <div class="cont">
                            <img src="https://arquivo.pt//noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/Imagem1.jpg"
                                width="80%" style="display:block;margin:auto; ">
                        </div>
                        <!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
                        <!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->

                    </div>


                    <div class="col-lg-6 col-md-12 d-flex flex-column " style="text-align:left;">

                        <p style="margin-top:20px;font-size: 16px;">O projecto vencedor da edição de 2020 do Concurso de
                            Ideias foi,<span style="font-weight:bold"> uma solução de mesa de estudo inteligente. </span>
                        </p>
                        <h3 class="mt-2" style="color: black; ">Grupo:</h3>
                        <ul style="list-style-type: disc; margin-left: 1.5em;">
                            <li style="color:black; font-size:1p5x">Ben-hur Fidalgo (Informática e Gestão de Empresas)</li>
                            <li style="color:black; font-size:15px">João Costa (Informática e Gestão de Empresas) </li>
                        </ul>

                        <div class="mt-4 d-flex justify-content-center">

                            <a class="btn"
                                href="https://arquivo.pt/noFrame/replay/20220729095253/https://fista.iscte-iul.pt/img/concurso-ideias/file/ci_venc_2020_presentation.pptx.pdf">Conhecer
                                o Projeto</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>




    <!-- 2019 -->

    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:70px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <h1 class="titulo" style="color:black;font-weight: bold">Edição de 2019<span
                            style="font-weight:bold"> Projeto Vencedor</span></h1>

                    <div class="col-lg-5 col-md-12 " style="d-flex align-items-center">
                        <div class="cont">
                            <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/ci_venc_2019.png"
                                width="90%" style="display:block;margin:auto; ">
                        </div>
                        <!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
                        <!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->

                    </div>


                    <div class="col-lg-6 col-md-12 d-flex flex-column" style="text-align:left;padding: 0 2% 0 2%">
                        <p style="margin-top:20px;font-size: 16px;">O projecto vencedor da edição de 2019 do Concurso de
                            Ideias foi o<span style="font-weight:bold"> iTrash, uma solução de ecoponto inteligente.</span>
                        </p>
                        <h3 class="mt-2" style="color: black; ">Grupo:</h3>
                        <ul style="list-style-type: disc; margin-left: 1.5em;">
                            <li style=" color:black; font-size:15px">António Lima (Informática e Gestão de Empresas)</li>
                            <li style="color:black; font-size:15px">Tomás Mendes (Informática e Gestão de Empresas) </li>
                        </ul>

                        <div class="mt-4 d-flex justify-content-center">

                            <a class="btn"
                                href="https://arquivo.pt/noFrame/replay/20220729095253/https://fista.iscte-iul.pt/img/concurso-ideias/file/ci_venc_2019_presentation.pdf">Conhecer
                                o Projeto</a>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>


    <!-- 2017 -->

    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:70px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <h1 class="titulo" style="color:black;font-weight: bold">Edição de 2017<span
                            style="font-weight:bold"> Projeto Vencedor</span></h1>

                    <div class="col-lg-5 col-md-12 order-md-1 order-2 d-flex align-items-center">

                        <div class="cont">
                            <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/ci_venc_2017.png"
                                width="90%" style="display:block;margin:auto; ">
                        </div>
                        <!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
                        <!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->

                    </div>


                    <div class="col-lg-6 col-md-12 d-flex flex-column " style="text-align:left;">

                        <p style="margin-top:20px;font-size: 16px;">Na edição de 2017 do Concurso de Ideias foi proposta a
                            criação de <span style="font-weight:bold">um Ponto de Acesso Inteligente para recolha e
                                apresentação de informações.</span> O projecto vencedor foi o INFUS!</p>
                        <h3 class="mt-2" style="color: black; ">Grupo:</h3>
                        <ul style="list-style-type: disc; margin-left: 1.5em;">
                            <li style="color:black; font-size:15px">Luísa Almeida (Arquitetura)</li>
                            <li style="color:black; font-size:15px">Eduardo Gonçalves (Eng. de Telecomunicações e
                                Informática)</li>
                        </ul>

                        <div class="mt-4 d-flex justify-content-center">

                            <a class="btn"
                                href="https://arquivo.pt/noFrame/replay/20220729095253/https://fista.iscte-iul.pt/img/concurso-ideias/file/ci_venc_2017_presentation.pdf">Conhecer
                                o Projeto</a>
                        </div>

                    </div>
                </div>

                <div class="row pt-4" style="margin:0">
                    <h1 class="pb-2" style="font-weight:400;font-size:30px;color:#666666;">Inauguração</h1>
                    <div class="col-12 col-md-6">
                        <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/premier1_2017.jpeg"
                            width="100%" style="display:block;margin:auto">
                    </div>

                    <div class="col-12 col-md-6">
                        <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/premier2_2017.jpeg"
                            width="57%" style="display:block;margin:auto">
                    </div>


                </div>



            </div>
        </div>
    </section>


    <!-- 2016 -->


    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:70px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <h1 class="titulo" style="color:black;font-weight: bold">Edição de 2016<span
                            style="font-weight:bold"> Projeto Vencedor</span></h1>

                    <div class="col-lg-5 col-md-12 " style="d-flex align-items-center">
                        <div class="cont">
                            <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/ci_venc_2016.png"
                                width="90%" style="display:block;margin:auto; ">
                        </div>
                        <!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
                        <!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->

                    </div>


                    <div class="col-lg-6 col-md-12 d-flex flex-column" style="text-align:left;padding: 0 2% 0 2%">
                        <p style="margin-top:20px;font-size: 16px;">O projecto vencedor da edição de 2016 do Concurso de
                            Ideias foi o Verticallis,<span style="font-weight:bold"> uma solução de jardim vertical
                                inteligente.</span></p>
                        <h3 class="mt-2" style="color: black; ">Grupo:</h3>
                        <ul style="list-style-type: disc; margin-left: 1.5em;">
                            <li style=" color:black; font-size:15px">João Pedro Duarte Monge (Eng. de Telecomunicações e
                                Informática)</li>
                            <li style="color:black; font-size:15px">João Duarte Batalha Parcelas (Arquitetura)</li>
                            <li style="color:black; font-size:15px">André Marques (Arquitetura)</li>
                            <li style="color:black; font-size:15px">Fernando Simões (Arquitetura)</li>
                        </ul>

                        <div class="mt-4 d-flex justify-content-center">

                            <a class="btn"
                                href="https://arquivo.pt/noFrame/replay/20220729095253/https://fista.iscte-iul.pt/img/concurso-ideias/file/ci_venc_2019_presentation.pdf">Conhecer
                                o Projeto</a>
                        </div>

                    </div>
                </div>
                <div class="row pt-4" style="margin:0">
                    <h1 class="pb-2" style="font-weight:400;font-size:30px;color:#666666;">Inauguração</h1>
                    <div class="col-12 col-md-6">
                        <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/flyer_2016.png"
                            id="imagemflyer" width="70%" style="display:block;margin:auto;">
                    </div>

                    <div class="col-12 col-md-6">
                        <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/premier1_2016.jpg"
                            width="73%" style="display:block;margin:auto; margin-bottom:10px;">
                        <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/premier2_2016.jpg"
                            id="imagem2016" width="73%" style="display:block;margin:auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 2015 -->

    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:70px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <h1 class="titulo" style="color:black;font-weight: bold">Edição de 2015<span
                            style="font-weight:bold"> Projeto Vencedor</span></h1>

                    <div class="col-lg-5 col-md-12 order-md-1 order-2 d-flex align-items-center">

                        <div class="cont">
                            <img src="https://arquivo.pt/noFrame/replay/20220729095253im_/https://fista.iscte-iul.pt/img/concurso-ideias/ci_venc_2015.jpg"
                                width="90%" style="display:block;margin:auto; ">
                        </div>
                        <!--<p style="text-align: center;font-size: 50px;font-weight: bold;margin-top:20px">EM BREVE<hr/></p>-->
                        <!--<p style="margin-top:20px;font-size: 22px;">Com mais uma edição do FISTA vem mais uma edição do Concurso de Ideias! Este ano apresentamos-te o tema, para ficares a saber mais sobre o funcionamento do concurso consulta o <a href="https://fista.iscte-iul.pt/storage/settings/November2020/regulamento21.pdf" style="color:black !important;font-size: 22px !important;font-weight: bold !important;">regulamento </a>.</p>-->

                    </div>


                    <div class="col-lg-6 col-md-12 d-flex flex-column " style="text-align:left;">

                        <p style="margin-top:20px;font-size: 16px;">O projecto Smartbench é a proposta vencedora da edição
                            de 2015 do Concurso de Ideias. Foi desenvolvido pelos alunos do Departamento de Arquitetura e
                            Urbanismo e do Departamento de Ciências e Tecnologias de Informação com o apoio do IT-IUL e
                            VFABLAB. A inauguração teve lugar no dia 16 de Dezembro de 2015. Parabéns aos nossos alunos por
                            terem concretizado este projeto!</p>
                        <h3 class="mt-2" style="color: black; ">Grupo:</h3>
                        <ul style="list-style-type: disc; margin-left: 1.5em;">
                            <li style="color:black; font-size:15px">Pedro Romano (Eng. de Telecomunicações e Informática)
                            </li>
                            <li style="color:black; font-size:15px">André Glória (Eng. de Telecomunicações e Informática)
                            </li>
                            <li style="color:black; font-size:15px">Daniela Rosa (Arquitetura)</li>
                            <li style="color:black; font-size:15px">João Ribeiro (Arquitetura)</li>
                        </ul>

                        <div class="mt-4 d-flex justify-content-center">

                            <a class="btn"
                                href="https://arquivo.pt/noFrame/replay/20220729095253/https://fista.iscte-iul.pt/img/concurso-ideias/file/ci_venc_2015_presentation.pdf">Conhecer
                                o Projeto</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        option,
        select {
            border: 1px solid #ebebeb;
            box-shadow: none !important;
            color: #415674 !important;
            border-radius: 4px;
            background-color: #ffffff;
            margin-bottom: 0 !important;
            padding: 10px 25px !important;
            max-width: 100% !important;
            width: 100% !important;
            font-size: 13px !important;
            line-height: 30px !important;
            font-weight: 600 !important;
            transition: all 0.3s linear !important;
        }

        .custom-select-wrapper {
            position: relative;
        }

        /* Arrow container */
        .custom-select-wrapper::after {
            content: '\25BC';
            /* Unicode character for down arrow */
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            pointer-events: none;
        }
    </style>
@endsection
