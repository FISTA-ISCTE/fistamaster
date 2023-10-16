<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="text-center">
                                <a id="enviar-emails-btn" href="{{ route('enviar.emails') }}" class="btn btn-primary">Enviar E-mails</a>
                            </div>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    // Verifique se o botão foi clicado hoje
                                    var lastClicked = localStorage.getItem("lastClicked");
                                    var today = new Date().toDateString();

                                    if (lastClicked !== today) {
                                        // O botão não foi clicado hoje, permita o clique
                                        var enviarEmailsBtn = document.getElementById("enviar-emails-btn");
                                        enviarEmailsBtn.addEventListener("click", function() {
                                            // Bloqueie o botão após o clique
                                            enviarEmailsBtn.setAttribute("disabled", "disabled");

                                            // Marque a data de clique no localStorage
                                            localStorage.setItem("lastClicked", today);
                                        });
                                    } else {
                                        // O botão já foi clicado hoje, desabilite-o
                                        var enviarEmailsBtn = document.getElementById("enviar-emails-btn");
                                        enviarEmailsBtn.setAttribute("disabled", "disabled");
                                    }
                                });
                                </script>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
