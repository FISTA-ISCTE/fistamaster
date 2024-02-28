<div class="col-lg-11 col-md-12" style="width:90%;margin-bottom:30px;">
    {{-- Care about people's approval and you will be their prisoner. --}}

    @if ($currentUser)
        <div class="row" style="margin: 20px 0 20px;">
            <div class="col-md-4">
                <p style="font-size:1.2rem; margin-top:20px;"  class="aos-init aos-animate"><strong>Nome:</strong> {{$currentUser->name}}</p>

            </div>
            <div class="col-4  d-flex justify-content-around">
                <button id="notvalid" wire:click="cvChecked('bad')" class="btn btn-notvalid" ><i class="fa fa-times" aria-hidden="true"></i></button>
                <button id="valid" wire:click="cvChecked('good')" class="btn btn-valid" href="#"><i class="fa fa-check" aria-hidden="true"></i></button>


            </div>
        </div>
        <div>

            <embed src="{{$currentUser->file}}" type="application/pdf" width="100%" height="950px" />


        </div>
    @else
        <p style="font-size:1.2rem; margin-top:20px;" data-aos-delay="900" class="aos-init aos-animate">Não existem mais currículos para verificar!</p>
    @endif
</div>
