<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />

        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header">
                        Ajouter un Formateur
                    </div>
                    <div class="card-body">
                        <!-- Formulaire d'ajout de formateur -->
                        <form method="post" a>
                            @csrf

                            <div class="mb-3">
                                <label for="type_formateur" class="form-label">Type de Formateur :</label>
                                <select name="type_formateur" id="type_formateur" class="form-select" required>
                                    <option value="interne">Interne</option>
                                    <option value="externe">Externe</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom du Formateur :</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom du Formateur :</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required>
                            </div>

                            <div id="champs_interne" style="display: none;">
                                <div class="mb-3">
                                    <label for="code" class="form-label">Matricule du Formateur (Interne) :</label>
                                    <input type="text" class="form-control" id="code" name="code">
                                </div>
                            </div>

                            <div id="champs_externe" style="display: none;">
                                <div class="mb-3">
                                    <label for="numero_cin" class="form-label">Numéro de CIN du Formateur (Externe) :</label>
                                    <input type="text" class="form-control" id="numero_cin" name="numero_cin">
                                </div>
                            </div>

                            <script>
                                document.getElementById('type_formateur').addEventListener('change', function () {
                                    var typeFormateur = this.value;
                                    document.getElementById('champs_interne').style.display = (typeFormateur === 'interne') ? 'block' : 'none';
                                    document.getElementById('champs_externe').style.display = (typeFormateur === 'externe') ? 'block' : 'none';
                                });
                            </script>

                            <button type="submit" class="btn btn-primary">Ajouter le Formateur</button>
                        </form>
                        <!-- Fin du formulaire d'ajout de formateur -->
                    </div>
                </div>
            </div>
        </div>

        <x-app.footer />
    </main>
</x-app-layout>
