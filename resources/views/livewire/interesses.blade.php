<div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="container">
        <form wire:submit.prevent="submit" class="mt-4" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="file" class="form-label">CV:</label>
                        <input type="file" id="file" wire:model="file" class="form-control">
                        <div wire:loading wire:target="file">
                            A Carregar...
                        </div>
                        @if (Auth::user()->file)
                        <a  target="_blank" href="https:/fista.iscte-iul.pt/storage/{{Auth::user()->file}}"> <i class="fa fa-file-pdf"></i> </a> <!-- Substitua por seu ícone de PDF -->
                        @endif
                        @error('file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="year" class="form-label">Ano:</label>
                        <select id="year" wire:model="year" class="form-select">
                            <option value="">Selecione um Ano</option>
                            @foreach ($anos as $ano)
                                <option value="{{ $ano->id }}">{{ $ano->designacao }}</option>
                            @endforeach
                        </select>
                        @error('year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="course" class="form-label">Curso:</label>
                        <select id="course" wire:model="course" class="form-select">
                            <option value="">Selecione o Curso</option>
                            @foreach ($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->designacao }}</option>
                            @endforeach
                        </select>
                        @error('course')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="interest1" class="form-label">Área de Interesse 1:</label>
                        <input type="text" id="interest1" wire:model="interest1" class="form-control">
                        @error('interest1')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="interest2" class="form-label">Área de Interesse 2:</label>
                        <input type="text" id="interest2" wire:model="interest2" class="form-control">
                        @error('interest2')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Data de Nascimento:</label>
                        <input type="date" id="birthdate" wire:model="birthdate" class="form-control">
                        @error('birthdate')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" wire:model="email" disabled class="form-control">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo de Trabalho:</label>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input type="checkbox" value="1" wire:model="workType" class="form-check-input"
                                id="fullTime">
                            <label class="form-check-label" for="fullTime">Full time</label>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input type="checkbox" value="2" wire:model="workType" class="form-check-input"
                                id="summerInternship">
                            <label class="form-check-label" for="summerInternship">Estágio de Verão</label>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-check">
                            <input type="checkbox" value="3" wire:model="workType" class="form-check-input"
                                id="partTime">
                            <label class="form-check-label" for="partTime">Part time</label>
                        </div>
                    </div>
                    @error('workType')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="text-end" style="margin-bottom: 1.5rem;">
                <button class="btn btn-primary shadow"
                    style="font-weight:300;background-color: black !important;border:0px;border-radius:10px"
                    type="submit" wire:loading.attr="disabled">Guardar</button>
            </div>
        </form>
    </div>
</div>
