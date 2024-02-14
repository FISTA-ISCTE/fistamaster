<div>
    <h3 style="margin-top:2rem;">Users Registados nesta empresa: </h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <input type="email" wire:model="userEmail" placeholder="Digite o email do utilizador" class="form-control">
        <button wire:click="addUserToEmpresaByEmail" class="btn btn-primary mt-2">Adicionar à Empresa</button>

        <!-- Tabela de usuários, como antes -->
    </div>

</div>
