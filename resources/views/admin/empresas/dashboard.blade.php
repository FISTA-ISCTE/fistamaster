<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
    <style>
        .emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
.company-description {
    color: #818182;
    margin-top: 2%;
    margin-bottom: 2%;
}

.image-container {
    width: 300px;
    height: 150px;
    overflow: hidden;
    border-radius: 5px;
}

.image-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

#changeImageLabel {
    bottom: 10px;
    right: 10px;
}

    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="margin-top:3rem;margin-bottom:3rem;; position: relative;">
                    <!--<div class="overlay" style="margin:0.6rem;">
                        <span class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
                            {{ __('⚠ Progresso') }} <a href=""><span style="font-size: 0.60rem;">ver mais</span></a>
                        </span>
                    </div>

                    <div class="progress" style="background-color:#e1e1e1;">
                        <div class="progress-bar" role="progressbar" style="width: 25%;background-color:#21386e;color:white;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span style="padding-left: 2rem;">25%</span></div>
                    </div>-->
                </div>
                <div class="container mt-5 emp-profile">
                    <form id="companyProfile" method="post">
                        <div class="row">
                            <!-- Logo da empresa -->
                            <div class="col-md-4">
                                <div class="image-container position-relative">
                                    <img src="{{ asset("storage/" . $company->avatar) }}" alt="Logotipo da Empresa" style="width: 300px; height: 150px;" class="img-fluid mb-2">
                                    <label for="fileInput" id="changeImageLabel" style="display: none;" class="position-absolute" style="bottom: 10px; right: 10px;">
                                        <i class="fas fa-pen" style="cursor: pointer;"></i>
                                    </label>
                                    <input type="file" name="file" id="fileInput" style="display: none;" onchange="previewImage(event)">
                                </div>
                            </div>

                            <!-- Detalhes da empresa -->
                            <div class="col-md-8">
                                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">{{ $company->nome_empresa }}</h2>
                                <p id="descText" class="mb-3">{{ $company->description }}</p>
                                <textarea id="descInput" class="form-control mb-3" style="display: none;">Texto Descritivo da Empresa. Breve descrição sobre a atividade da empresa.</textarea>

                                <div class="row">
                                    <div class="col-md-6">
                                        <p id="webText" class="mb-1"><i class="fab fa-instagram mr-2"></i><a href="#" target="_blank" id="webLink">Website</a></p>
                                        <input type="text" id="webInput" class="form-control mb-3" style="display: none;" placeholder="Link do Website">

                                        <p id="instaText" class="mb-1"><i class="fab fa-instagram mr-2"></i><a href="#" target="_blank" id="instaLink">Instagram</a></p>
                                        <input type="text" id="instaInput" class="form-control mb-3" style="display: none;" placeholder="Link do Instagram">
                                    </div>
                                    <div class="col-md-6">
                                        <p id="fbText" class="mb-1"><i class="fab fa-facebook-f mr-2"></i><a href="#" target="_blank" id="fbLink">Facebook</a></p>
                                        <input type="text" id="fbInput" class="form-control mb-3" style="display: none;" placeholder="Link do Facebook">

                                        <p id="liText" class="mb-1"><i class="fab fa-linkedin-in mr-2"></i><a href="#" target="_blank" id="liLink">LinkedIn</a></p>
                                        <input type="text" id="liInput" class="form-control mb-3" style="display: none;" placeholder="Link do LinkedIn">
                                    </div>
                                </div>

                                <p id="otherInfoText" class="mb-3">Outras informações sobre a empresa...</p>
                                <textarea id="otherInfoInput" class="form-control mb-3" style="display: none;">Outras informações sobre a empresa...</textarea>

                                <button type="button" id="editBtn" class="btn btn-primary" onclick="toggleEdit()">Editar</button>
                            </div>
                        </div>
                    </form>
                </div>

<script>
    function toggleEdit() {
    let isEditing = document.getElementById("editBtn").innerText === "Editar";

    // Toggle description
    document.getElementById("descText").style.display = isEditing ? "none" : "block";
    document.getElementById("descInput").style.display = isEditing ? "block" : "none";

    // Toggle website
    document.getElementById("webText").style.display = isEditing ? "none" : "block";
    document.getElementById("webInput").style.display = isEditing ? "block" : "none";

    // Toggle Instagram
    document.getElementById("instaText").style.display = isEditing ? "none" : "block";
    document.getElementById("instaInput").style.display = isEditing ? "block" : "none";

    // Toggle Facebook
    document.getElementById("fbText").style.display = isEditing ? "none" : "block";
    document.getElementById("fbInput").style.display = isEditing ? "block" : "none";

    // Toggle LinkedIn
    document.getElementById("liText").style.display = isEditing ? "none" : "block";
    document.getElementById("liInput").style.display = isEditing ? "block" : "none";

    // Toggle other information
    document.getElementById("otherInfoText").style.display = isEditing ? "none" : "block";
    document.getElementById("otherInfoInput").style.display = isEditing ? "block" : "none";

    // Toggle change image button
    document.getElementById("changeImageLabel").style.display = isEditing ? "block" : "none";

    // Toggle the edit button text
    document.getElementById("editBtn").innerText = isEditing ? "Salvar" : "Editar";
}

function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.querySelector('.img-fluid');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

</script>

            </div>
        </div>
    </div>
</x-app-layout>
