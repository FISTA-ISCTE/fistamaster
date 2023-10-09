@extends('layouts.app2')

@section('content')
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61afe6a2c82c976b71c0487d/1fmbhprba';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
<style>

    .container > label, .container > input, .container > span {
        display: inline-block;
        vertical-align: middle; /* This will vertically align the items in the center */
        margin-right: 10px; /* This will give a little space between the elements */
    }

</style>
<script type="text/javascript">
    function checkedOn(element) {

        // Select all checkboxes by class
        var checkboxesList = document.getElementsByClassName("checkoption");
        for (var i = 0; i < checkboxesList.length; i++) {
            checkboxesList.item(i).checked = false; // Uncheck all checkboxes
        }

        element.checked = true; // Checked clicked checkbox
    }
</script>


    <!-- Page Banner Start -->

    <!-- Contact Start -->
    <div class="section techwix-contact-section techwix-contact-section-02 techwix-contact-section-03 section-padding-02">
        <div class="container">
            <!-- Contact Wrap Start -->
            <div class="contact-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <div class="contact-form-wrap">
                                <div class="heading-wrap text-center">
                                    <h3 class="title">Registo da empresa no evento</h3>
                                    <span class="sub-title">@if (strcmp($_GET['type'], 'premium') == 0) Premium @elseif (strcmp($_GET['type'], 'gold') == 0) Gold @elseif (strcmp($_GET['type'], 'silver') == 0) Silver @endif</span>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger rounded shadow-sm">
                                        <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i> Ops! Algo deu errado...</h4>
                                        <p>Por favor, corrija os seguintes erros e tente novamente:</p>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li><i class="fas fa-times-circle"></i> {{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form id="join_form"  method="POST" action="{{ route('registarEmpresasite') }}" accept-charset="UTF-8"enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select name="company_plan" class="form-control mb-1" id="company-plan" >
                                                <option value="none" disabled selected>Escolha</option>
                                                <option value="premium" @if (strcmp($_GET['type'], 'premium') == 0) selected @endif>Premium</option>
                                                <option value="gold" @if (strcmp($_GET['type'], 'gold') == 0) selected @endif>Gold</option>
                                                <option value="silver" @if (strcmp($_GET['type'], 'silver') == 0) selected @endif>Silver</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="text" name="company_name" id="company_name"  autocomplete="company_name" autofocus placeholder="Nome da empresa" value="{{ old('first_name') }}">
                                                @error('company_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-form">
                                                <label for="avatar" class="form-label">Upload de Logotipo (PNG, JPG ou JPEG)</label>
                                                <input type="file" onchange="ValidateSingleInput(this);" class="form-control" name="avatar" id="avatar" >
                                                @error('avatar')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <textarea type="text" placeholder="Descrição (máx 250 caracteres)" rows="3" maxlength="250" id="company_desc" name="company_desc"></textarea>
                                                <span id="charCount">0 caracteres</span>
                                                @error('company_desc')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <script>
                                               $(document).ready(function() {
                                                    $('#company_desc').on('input', function() {
                                                        var chars = $(this).val().length; // Conta os caracteres
                                                        $('#charCount').text(chars + ' caracteres');
                                                    });
                                                });
                                            </script>
                                            <!-- Single Form End -->
                                        </div>

                                        <div class="single-form">
                                            <h4>Pessoa de contacto</h4>
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="text" placeholder="Nome" name="contact_name" id="contact_name" placeholder="Nome" >
                                                @error('contact_name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input type="text" placeholder="Contacto telefónico direto" name="contact_number" id="contact_number" >
                                                @error('contact_number')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-sm-12">
                                            <!-- Single Form Start -->

                                            <div class="single-form">
                                                <input type="email" placeholder="Endereço de email" name="contact_email" id="contact_email" >
                                                @error('company_email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Single Form End -->
                                        </div>
                                        <div id="form_extras">
                                            <div class="single-form">
                                                <h4>Extras:</h4>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <h4>Almoços Extra</h4>
                                                    <select class="form-control mb-1" type="text" name="almoco_number">
                                                        <option value="0" selected>0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <label class="container" style="padding-left: 0rem !important;">
                                                        <label id="cvtext"><span style="display: inline; color: black">Currículos dos estudantes</span></label>
                                                        <input type="checkbox" value=1 name="cvs">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <label class="container" style="padding-left: 0rem !important;">
                                                    <label id="workshoptext"><span style="display: inline; color: black">Workshop ou Speed Interview</span> </label>
                                                    <input type="checkbox" value=1 name="workshop" id="workshopCheckbox">
                                                    <span class="checkmark"></span>
                                                    <div class="workshopselector" style="display:none; width: 100%;">
                                                        <select class="custom-select" type="text" name="workshop_option">
                                                            <option value="null" selected disabled>Selecionar Modelo</option>
                                                            <option value="ws_presencial">Workshop Presencial</option>
                                                            <option value="si">Speed Interviews</option>
                                                        </select>
                                                    </div>
                                                </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <label class="workshopextra container" style="display:none;padding-left: 0rem !important;">
                                                        <label id="workshopextratext"><span style="display: inline; color: black">Workshop Presencial</span> </label>
                                                        <input type="checkbox" value=1 name="workshopextra">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <label class="siextra container" style="display:none;padding-left: 0rem !important;">
                                                        <label id="siextratext"><span style="display: inline; color: black">Speed Interview</span> </label>
                                                        <input type="checkbox" value=1 name="siextra">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <label class="itst container" style="padding-left: 0rem !important;">
                                                        <label id="itspeedtalkstext"><span style="display: inline; color: black">IT Speed Talks</span> </label>
                                                        <input type="checkbox" value=1 name="itspeedtalks">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <label class="container" style="padding-left: 0rem !important;">
                                                        <label id="backofficetext"><span style="display: inline; color: black">Back Office</span> </label>
                                                        <input type="checkbox" value=1 name="backoffice">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="single-form">
                                                    <label class="cocktaildiv container" style="padding-left: 0rem !important;">
                                                        <label id="cocktailtext"><span style="display: inline; color: black">Pequeno-Almoço com Alunos</span> </label>
                                                        <input type="checkbox" value=1 name="cocktail">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 style="margin-top:3%">Dias:</h4>
                                        <div class="alert alert-warning" style="width: 63%;font-size:1rem;" role="alert">
                                            Não se esqueça de selecionar o dia em que a empresa irá participar!
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="single-form" id="attending">
                                                <label class="container" style="padding-left: 0rem !important;">
                                                    <label id="day1text"><span style="display: inline; color: black">28 de Fevereiro</span> </label>
                                                    <input type="checkbox" class="checkoption" value="28" name="day1" onclick="checkedOn(this);">
                                                    <span id="checkday1" class="checkmark"></span>
                                                </label>
                                                <label class="container" style="padding-left: 0rem !important;">
                                                    <label id="day2text"><span style="display: inline; color: black">29 de Fevereiro</span> </label>
                                                    <input type="checkbox" class="checkoption" value="29" name="day2" onclick="checkedOn(this);">
                                                    <span id="checkday2" class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div style="clear: both"></div>
                                        <div class="col">
                                            <p id="price-simulation">
                                                <small>Simulação:</small>
                                                0€
                                                <small>+ IVA</small>
                                            </p>
                                        </div>

                                        <input type="hidden" id="idUnico" name="price_simulation">

                                        <div class="col-sm-12">
                                            <!--  Single Form Start -->
                                            <div class="form-btn">
                                                <p style="font-size: 11px; line-height: 15px;">Ao registar, aceita as nossas condições. Veja como recolhemos,
                                                    usamos e partilhamos a sua informação na nossa <a href="https://fista.iscte-iul.pt/politica-privacidade"
                                                    style="color:black !important;font-size: 11px; line-height: 15px;">Política de Privacidade</a>.</p>
                                                <button class="btn" type="submit">Seguinte</button>
                                            </div>
                                            <!--  Single Form End -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                </div>
            </div>
            <!-- Contact Wrap End -->
        </div>
    </div>
    <!-- Contact End -->


<?php
use App\Models\Empresa;

$day1silver = Empresa::where('plano', 'silver')
    ->where('dia1', '28')
    ->count();
$day2silver = Empresa::where('plano', 'silver')
    ->where('dia2', '29')
    ->count();
$day1gold = Empresa::where('plano', 'gold')
    ->where('dia1', '28')
    ->count();
$day2gold = Empresa::where('plano', 'gold')
    ->where('dia2', '29')
    ->count();
$day1premium = Empresa::where('plano', 'premium')
    ->where('dia1', '28')
    ->count();
$day2premium = Empresa::where('plano', 'premium')
    ->where('dia2', '29')
    ->count();
?>

<script>
    $(document)

    $('input[name="workshop"]').change(function() {
        if ($(this).is(':checked')) {
            $('.workshopselector').css("display", "block");
            console.log('workshop checked')
        } else {
            $('.workshopselector').css("display", "none");
            console.log('workshop not checked')
        }
    });

    var modaldade = 'none';
    if ($('#join_form select[name="company_plan"]').val() != 'none')
        calcSim(true);
    $('#join_form select[name="company_plan"], #join_form #form_extras input[type="checkbox"]').change(function() {
        calcSim(true);
    });
    $('#join_form select[name="almoco_number"]').change(function() {
        calcSim(true);
    });
    $('#join_form #attending input[type="checkbox"]').change(function() {
        calcSim(false);
    });

    $('#join_form select[name="workshop_option"]').change(function() {
        if(modaldade == "premium"){
            opcao = $('#join_form select[name="workshop_option"]').val();
            $extras = $('#form_extras');
            if(opcao == "ws_presencial"){
                $extras.find('input[name="workshopextra"]').prop({
                    checked: false,
                });
                $('.siextra').css('display','block');
                $('.workshopextra').css('display','none');
            }else{
                $extras.find('input[name="siextra"]').prop({
                    checked: false,
                });
                $('.siextra').css('display','none');
                $('.workshopextra').css('display','block');
            }
            calcSim(true);
        }
    });


    function calcSim(clear) {
        selected = $('#join_form select[name="company_plan"]').val();
        $extras = $('#form_extras');
        price = 0;
        if (selected != 'none')
            $('#join_form select[name="company_plan"] option[value="none"]').remove();

        if (modaldade != selected) {
            if (clear) {
                $extras.find('input[name="cvs"], input[name="lunch"]').prop({
                    checked: false,
                    disabled: false

                });
                $extras.find('input[name="workshop"]').prop({
                    checked: false,
                    disabled: false
                });
                $extras.find('input[name="itspeedtalks"]').prop({
                    checked: false,
                    disabled: false
                });
                $extras.find('input[name="backoffice"]').prop({
                    checked: false,
                    disabled: false
                });
                $extras.find('input[name="workshopextra"]').prop({
                    checked: false,
                    disabled: false
                });
                $extras.find('input[name="siextra"]').prop({
                    checked: false,
                    disabled: false
                });
                $('.workshopselector').css("display", "none");
            }
            modaldade = selected;
        }


        //Desativar silver para dia 28 se tiver excedido o limite (5)
        var day1silver = {{ $day1silver }}
        if (selected == 'silver') {
            if (day1silver >= 6) {
                $('#join_form #attending input[name="day1"]').attr({
                    disabled: true,
                    checked: false
                });
                $('#checkday1').css('display', 'none');
                document.getElementById('day1text').innerHTML =
                    '<strike>28 de fevereiro</strike> <b><font color="red">Esgotado!</font></b>';
            } else {
                $('#join_form #attending input[name="day1"]').attr({
                    disabled: false
                });
                document.getElementById('day1text').innerHTML = '28 de fevereiro';
            }

        }
        //Desativar silver para dia 29 se tiver excedido o limite (6)
        var day2silver = {{ $day2silver }}
        if (selected == 'silver') {
            if (day2silver >= 6) {
                $('#join_form #attending input[name="day2"]').attr({
                    disabled: true,
                    checked: false
                });
                $('#checkday2').css('display', 'none');
                document.getElementById('day2text').innerHTML =
                    '<strike>29 de fevereiro</strike> <b><font color="red">Esgotado!</font></b>';
            } else {
                $('#join_form #attending input[name="day2"]').attr({
                    disabled: false
                });
                document.getElementById('day2text').innerHTML = '29 de fevereiro';
            }
        }

        //Desativar gold para dia 28 se tiver excedido o limite (34)
        var day1gold = {{ $day1gold }}
        if (selected == 'gold') {
            if (day1gold >= 34) {
                $('#join_form #attending input[name="day1"]').attr({
                    disabled: true,
                    checked: false
                });
                $('#checkday1').css('display', 'none');
                document.getElementById('day1text').innerHTML =
                    '<strike>28 de fevereiro</strike> <b><font color="red">Esgotado!</font></b>';
            } else {
                $('#join_form #attending input[name="day1"]').attr({
                    disabled: false
                });
                document.getElementById('day1text').innerHTML = '28 de fevereiro';
            }
        }

        //Desativar gold para dia 29 se tiver excedido o limite (34)
        var day2gold = {{ $day2gold }}
        if (selected == 'gold') {
            if (day2gold >= 34) {
                $('#join_form #attending input[name="day2"]').attr({
                    disabled: true,
                    checked: false
                });
                $('#checkday2').css('display', 'none');
                document.getElementById('day2text').innerHTML =
                    '<strike>29 de fevereiro</strike> <b><font color="red">Esgotado!</font></b>';
            } else {
                $('#join_form #attending input[name="day2"]').attr({
                    disabled: false
                });
                document.getElementById('day2text').innerHTML = '29 de fevereiro';
            }
        }

        //Desativar premium para dia 28 se tiver excedido o limite (10)
        var day1premium = {{ $day1premium }}

        if (selected == 'premium') {
            if (day1premium >= 10) {
                $('#join_form #attending input[name="day1"]').attr({
                    disabled: true,
                    checked: false
                });
                $('#checkday1').css('display', 'none');
                document.getElementById('day1text').innerHTML =
                    '<strike>28 de fevereiro</strike> <b><font color="red">Esgotado!</font></b>';
            } else {
                $('#join_form #attending input[name="day1"]').attr({
                    disabled: false
                });
                document.getElementById('day1text').innerHTML = '28 de fevereiro';
            }
        }

        //Desativar premium para dia 29 se tiver excedido o limite (9)
        var day2premium = {{ $day2premium }}
        if (selected == 'premium') {
            if (day2premium >= 9) {
                $('#join_form #attending input[name="day2"]').attr({
                    disabled: true,
                    checked: false
                });
                $('#checkday2').css('display', 'none');
                document.getElementById('day2text').innerHTML =
                    '<strike>29 de fevereiro</strike> <b><font color="red">Esgotado!</font></b>';
            } else {
                $('#join_form #attending input[name="day2"]').attr({
                    disabled: false
                });
                document.getElementById('day2text').innerHTML = '29 de fevereiro';
            }
        }

        //Desativar silver para dia 14
        /*if (selected == 'silver') {
            $('#join_form #attending input[name="day14"]').attr({disabled: true, checked: false});
            document.getElementById('day14text').innerHTML = 'February 14 <b><font color="red">Sold Out!</font></b> <h6>*If you want to come both days, send an email to <a href="mailto:fista@iscte-iul.pt">fista@iscte-iul.pt</a>.</h6>';
        } else {
            $('#join_form #attending input[name="day14"]').attr({disabled: false});
            document.getElementById('day14text').innerHTML = 'February 14';
        }*/

        //Desativar premium para todos
        //$('#join_form #attending input[name="day27"]').attr({disabled: true, checked: false});
        //$('#join_form #attending input[name="day28"]').attr({checked: true});

        //Desativar speed talk para silver
        /*if (selected == 'silver' || selected == 'bronze' || selected == 'gold') {
            $('#join_form #attending input[name="itst"]').attr({
                disabled: true,
                checked: false
            });
            document.getElementById('itsttext').innerHTML = 'IT Speed Talks <b><font color="red">Sold Out!</font></b>';
        } else {
            $('#join_form #attending input[name="itst"]').attr({
                disabled: false
            });
            document.getElementById('itsttext').innerHTML = 'IT Speed Talks';
        }*/

        checkedcount = $('#join_form #attending input[type="checkbox"]:checked').length;
        /*if(checkedcount==0){
            $('#join_form #attending input[name="day27"]')[0].checked = true;
            checkedcount=1;
        }*/

        switch (selected) {
            case 'premium':
                price = 1100;
                $extras.find(
                        'input[name="cvs"], input[name="workshop"],input[name="backoffice"],input[name="itspeedtalks"]'
                    )
                    .prop({
                        checked: true,
                        disabled: true
                    });
                $('.cocktaildiv').css('display', 'block');
                $('.itst').css('display', 'block');
                $('.workshopselector').css("display", "block");
                if (checkedcount == 2) {
                    price *= 2;
                    console.log(price);

                }
                //Compensar preço dos extras
                price -= 750;
                break;
            case 'gold':
                price = 700;
                $extras.find('input[name="cvs"]').prop({
                    checked: true,
                    disabled: false
                });
                /*$extras.find('input[name="itst"]').prop({
                    checked: false,
                    disabled: true
                }); //IT Speed Talk Sold Out*/
                $('.cocktaildiv').css('display', 'none');
                $('.itst').css('display', 'block');
                $('.workshopextra').css('display', 'none');
                $('.siextra').css('display', 'none');

                if (checkedcount == 2) {
                    price *= 2;
                }

                //Compensar preço dos extras
                price -= 300;
                //price -= 300;   SPEED TALK SOLD OUT
                break;
            case 'silver':
                price = 400;
                /*$extras.find('input[name="itst"]').prop({
                    checked: false,
                    disabled: true
                }); //IT Speed Talk Sold Out*/
                $('.itst').css('display', 'none');
                $('.cocktaildiv').css('display', 'none');
                $('.workshopextra').css('display', 'none');
                $('.siextra').css('display', 'none');
                if (checkedcount == 2) {
                    price *= 2;
                }
                break;
            case 'architecture':
                price = 100;
                $extras.find('input[name="cvs"]').prop({
                    checked: true,
                    disabled: true
                });
                $('.workshopextra').css('display', 'none');
                $('.siextra').css('display', 'none');
                if (checkedcount == 2) {
                    price *= 2;

                }
                //Compensar preço dos extras
                price -= 300;
                break;
        }


        if ($extras.find('input[name="cvs"]')[0].checked)
            price += 300;

        if ($extras.find('input[name="workshop"]')[0].checked)
            price += 200;

        if ($extras.find('input[name="itspeedtalks"]')[0].checked)
            price += 150;

        if ($extras.find('input[name="backoffice"]')[0].checked)
            price += 100;

        if ($extras.find('input[name="cocktail"]')[0].checked)
            price += 200;

        console.log($extras.find('input[name="workshopextra"]')[0].checked);
        console.log($extras.find('input[name="siextra"]')[0].checked);

        if($extras.find('input[name="workshopextra"]')[0].checked || $extras.find('input[name="siextra"]')[0].checked)
            price += 200;

        if (parseInt($extras.find('select[name="almoco_number"]').val()) != 0) {
            almoco_price = parseInt($extras.find('select[name="almoco_number"]').val()) * 15;
        } else {
            almoco_price = parseInt($extras.find('select[name="almoco_number"]').val());
        }

        if (checkedcount == 0) {
            price = 0;
            almoco_price = 0;
        }


        /*if(selected=='premium' && $('#join_form #attending input[name="day27"]')[0].checked){
             $('#join_form #attending input[name="day27"]')[0].checked = false;
            $('#join_form #attending input[name="day28"]')[0].checked = true;
        }*/

        document.getElementById("idUnico").value = price + almoco_price;
        $('#price-simulation').html("<small>Simulação:</small> " + (price + almoco_price) + "€ <small>+ IVA</small>");
    }

    var _validFileExtensions = [".jpg", ".jpeg", ".png"];

    function ValidateSingleInput(oInput) {
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length)
                        .toLowerCase() ==
                        sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Desculpe, o ficheiro do tipo " + sFileName.substr(sFileName.length - sCurExtension.length,
                            sCurExtension.length).toLowerCase() +
                        " não é válido, os únicos ficheiros permitidos são do tipo: " + _validFileExtensions.join(
                            ", ")
                    );
                    oInput.value = "";
                    return false;
                }
            }
        }
        return true;
    }

    function beforeSubmit(form) {

        if ($('#join_form #attending input[type="checkbox"]:checked').length == 0) {
            alert('You have to select at least a day to attend!');
            return false;
        }
        if ($('#join_form select[name="company_plan"] option[value="none"]:checked').length != 0) {
            alert('You have to select a plan!');
            return false;
        }
        if ($('select[name="almoco_number"]').val() == "null") {
            alert('You have to select a Workshop or Speed Interview!');
            return false;
        }
        if ($('select[name="workshop_option"]').val() == "null") {
            alert('You have to select a Workshop or Speed Interview Model!');
            return false;
        }
        if (!validateEmail($('input[name="contact_email"]').val())) {
            alert('The e-mail is incorrect!');
            return false;
        }
        return true;
    }

    function validateEmail(email) {
        var re =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
</script>

@endsection
