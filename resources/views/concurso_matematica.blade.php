@extends('layouts.app2')


@section('content')
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 col-md-12 text-center">

                <h1 style="font-size:55px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de Matemática e Programação
                </h1>
            </div>
        </div>
        <!-- <h1 style="font-size:60px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Concurso de ideias</h1> -->

    </div>
    <section style="background-color:white;width:100%;">
        <div style="padding-top:0px;padding-bottom:140px;background-color:white">
            <div class="container">
                <div class="row" style="margin:0">
                    <div class="col-lg-7 col-md-12">
                        <div class="cont">
                            <!--<button onclick="window.location.href ='https://fista.iscte-iul.pt/storage/settings/November2020/Enunciado%20%20Concurso%20de%20Ideias%202021.pdf'" class="btn-fista" style="margin-bottom:10px;display: block;margin-left: auto;margin-right: auto">Conhece o enunciado!</button>-->
                            <div>
                                <p style="margin-top:20px;font-size: 23px;text-align:center;padding: 0 2% 0 2%">Gostas de trabalhar em equipa, matemática e programação? O Fista tem um desafio para ti! 
                                                                                    Este ano inscreve-te no concurso de matemática e habilita-te a ganhar 75 euros! Este concurso é para todos e ganha o 
                                                                                    mais rápido, achas que tens o que é preciso para ser o primeiro a concluir os desafios que temos para ti? Inscreve-te 
                                                                                    com os teus amigos! Consulta aqui o regulamento em breve!!</p>
                                
                            </div>
                            

                                <!--<p>
                                                                        <a class="projeto" target="_blank" href="https://arquivo.pt/noFrame/replay/20220729095253/https://fista.iscte-iul.pt/img/concurso-ideias/Regulamento.pdf"><button class="btn-fista" style="display:block;margin-left:auto;margin-right:auto;margin-top:5%">Regulamento</button></a>
                                                                    </p>-->
                        </div>
                        
                        <!-- VER QUAL DELES FICA MELHOR -->
                        
                        
                            <div class="d-flex flex-wrap justify-content-around" style="margin: 20px 0 20px">
                                

                                    <p style="font-size:1.2rem; margin-top:20px;" data-aos-delay="900" class="aos-init aos-animate"><i class="flaticon-calendar" style="color: #1ec4bd; font-size:1.2rem"></i> 29 Fevereiro</p>
                              

                                    <p style="font-size:1.2rem; margin-top:20px;" data-aos-delay="900" class="aos-init aos-animate"><i class="fa fa-regular fa-clock" style="color: #1ec4bd; font-size:1.2rem"></i> 10h00 - 12h00</p>
                               

                                    <p style="font-size:1.2rem; margin-top:20px;" data-aos-delay="900" class="aos-init aos-animate"><i class="flaticon-pin" style="color: #1ec4bd; font-size:1.2rem"></i> Sala D1.14</p>
                               
                            
                            

                            </div>
                       
                        <div class="row justy-content-between">
                            <div class="d-flex flex-wrap justify-content-around">
                                <div class="pt-4 ">
                                    <a class="btn"
                                        href="">Regulamento</a>
                                </div>
                                <div class="pt-4 pb-4 pt-md-4 ">

                                    <a id="openRegistarEquipa" class="btn" href="#">Registar Equipa</a>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-lg-5 col-md-12">
                        <img src="https://fista.iscte-iul.pt/2023/public/img/concursomatematica.png"
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
                                <form method="POST" action="/resgistar-concurso-matematica">
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
                                                        <option value="Campus Iscte-Sintra">Campus Iscte-Sintra</option>
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
                                                        <option value="Campus Iscte-Sintra">Campus Iscte-Sintra</option>
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
                                                        <option value="Campus Iscte-Sintra">Campus Iscte-Sintra</option>
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
@endsection
