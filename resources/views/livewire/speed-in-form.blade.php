<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="form-group">
            <label for="pdfFile">Cv (.pdf)</label>
            <input type="file" class="form-control" wire:model="pdfFile">

            @error('pdfFile')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="ano">Ano</label>
            <select class="form-control" wire:model="ano">
                <option value="">Selecione o Ano</option>
                @foreach ($this->anos as $ano)
                    <option value="{{ $ano['id'] }}">{{ $ano['nome'] }}</option>
                @endforeach
            </select>
            @error('ano')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="curso">Curso</label>
            <select class="form-control" wire:model="curso">
                <option value="">Selecione o Curso</option>
                @foreach ($this->cursos as $curso)
                    <option value="{{ $curso['id'] }}">{{ $curso['nome'] }}</option>
                @endforeach
            </select>
            @error('curso')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
