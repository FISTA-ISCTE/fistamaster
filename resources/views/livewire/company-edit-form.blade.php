
    <div class="container mt-5 emp-profile">
        <div class="row">
            <!-- Logo da empresa -->
            <div class="col-md-4">
                <div class="image-container position-relative">
                    <img src="{{ $image ?? 'https://via.placeholder.com/300x150' }}" alt="Logotipo da Empresa" class="img-fluid mb-2">
                    <label for="fileInput" id="changeImageLabel" style="display: none;" class="position-absolute" style="bottom: 10px; right: 10px;">
                        <i class="fas fa-pen" style="cursor: pointer;"></i>
                    </label>
                    <input type="file" name="file" id="fileInput" wire:model="image" style="display: none;">
                </div>
            </div>
            <!-- Detalhes da empresa -->
            <div class="col-md-8">
                <h2 class="mb-2">{{ $name }}</h2>
                <p wire:model="description" id="descText" class="mb-3">{{ $description }}</p>
                <textarea wire:model="description" id="descInput" class="form-control mb-3" style="display: none;"></textarea>

                <!-- Website -->
                <p id="webText" class="mb-1"><i class="fab fa-web mr-2"></i><a href="{{ $website }}" target="_blank" id="webLink">Website</a></p>
                <input type="text" wire:model="website" id="webInput" class="form-control mb-3" style="display: none;" placeholder="Link do Website">

                <!-- Instagram -->
                <p id="instaText" class="mb-1"><i class="fab fa-instagram mr-2"></i><a href="{{ $instagram }}" target="_blank" id="instaLink">Instagram</a></p>
                <input type="text" wire:model="instagram" id="instaInput" class="form-control mb-3" style="display: none;" placeholder="Link do Instagram">

                <!-- Facebook -->
                <p id="fbText" class="mb-1"><i class="fab fa-facebook-f mr-2"></i><a href="{{ $facebook }}" target="_blank" id="fbLink">Facebook</a></p>
                <input type="text" wire:model="facebook" id="fbInput" class="form-control mb-3" style="display: none;" placeholder="Link do Facebook">

                <!-- LinkedIn -->
                <p id="liText" class="mb-1"><i class="fab fa-linkedin-in mr-2"></i><a href="{{ $linkedin }}" target="_blank" id="liLink">LinkedIn</a></p>
                <input type="text" wire:model="linkedin" id="liInput" class="form-control mb-3" style="display: none;" placeholder="Link do LinkedIn">

                <!-- Outras Informações -->
                <p wire:model="other" id="otherInfoText" class="mb-3">{{ $other }}</p>
                <textarea wire:model="other" id="otherInfoInput" class="form-control mb-3" style="display: none;"></textarea>

                <button type="button" id="editBtn" class="btn btn-primary" wire:click="save">Editar</button>
            </div>
        </div>
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
