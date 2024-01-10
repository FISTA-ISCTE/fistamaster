<div>
    @if (session()->has('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit.prevent="sendEmail">
        <input type="text" wire:model="email" style="margin-bottom:1.5rem; margin-left:2rem"
            placeholder="Emails separados por ponto e vírgula">
        <!-- Campo Select -->
        <select wire:model="select" style="margin-bottom:1.5rem; margin-left:2rem">
            <option value="">Escolha um Plano:</option>
            <option value="silver">Silver</option>
            <option value="gold">Gold</option>
            <option value="premium">Premium</option>
            <option value="diamnond">Diamond</option>
            <!-- Adicione mais opções conforme necessário -->
        </select>
        <input type="text" wire:model="subject" style="margin-bottom:1.5rem; margin-left:2rem" placeholder="Assunto">
        <textarea wire:model="text" style="margin-left:2rem" placeholder="Mensagem"></textarea>
        <p style="margin-bottom:1.5rem; margin-left:2rem;font-size:0.8rem;">Cria aqui o email: <a
                href="https://htmled.it/">CLICA AQUI</a></p>
        <button type="button" class="btn" style="margin-left:2rem;margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);" data-toggle="modal" data-target="#exampleModal">
            Enviar Email
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Envio de Emails</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Confirmar envio de emails.
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="editBtn" class="btn"
                            style="margin-left:2rem;margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Enviar
                            Email</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>
