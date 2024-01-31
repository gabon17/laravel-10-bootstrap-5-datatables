<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />

        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header">
                        Ajouter un Domaine
                    </div>
                    <div class="card-body">
                        <!-- Formulaire d'ajout de formateur -->
                        <form method="post" a>
                            @csrf


                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom du Domaine :</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description du domaine:</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>

                            
                            </div>

                           

                            <button type="submit" class="btn btn-primary">Ajouter le Domaine</button>
                        </form>
                        <!-- Fin du formulaire d'ajout de formateur -->
                    </div>
                </div>
            </div>
        </div>

        <x-app.footer />
    </main>
</x-app-layout>
