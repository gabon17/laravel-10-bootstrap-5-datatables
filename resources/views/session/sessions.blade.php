<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />

        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header">
                        Ajouter une session
                    </div>
                    <div class="card-body">
                        <!-- Formulaire d'ajout de session -->
                        <form method="post" >
                            @csrf
        
                            <div class="mb-3">
                                <label for="nom_session" class="form-label">Nom de la session</label>
                                <input type="text" class="form-control" id="nom_session" name="nom_session" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="description" class="form-label">Description de la session</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="sujet_formation" class="form-label">Sujet de formation</label>
                                <select class="form-select" id="sujet_formation" name="sujet_formation" required>
                                    <option value="1">Sujet 1</option>
                                    <option value="2">Sujet 2</option>
                                    <option value="3">Sujet 3</option>
                                    <!-- Add more options as needed -->
                                </select>
                            </div>

        
                            <div class="mb-3">
                                <label for="date_debut" class="form-label">Date de début</label>
                                <input type="date" class="form-control" id="date_debut" name="date_debut" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="date_fin" class="form-label">Date de fin</label>
                                <input type="date" class="form-control" id="date_fin" name="date_fin" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="lieu" class="form-label">Etablissement de la session</label>
                                <input type="text" class="form-control" id="lieu" name="lieu" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="annee" class="form-label">Année de la session</label>
                                <input type="text" class="form-control" id="annee" name="annee" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="nombre_jours" class="form-label">Nombre de jours</label>
                                <input type="number" class="form-control" id="nombre_jours" name="nombre_jours" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="nombre_participants" class="form-label">Nombre de participants</label>
                                <input type="number" class="form-control" id="nombre_participants" name="nombre_participants" required>
                            </div>
        
                            <div class="mb-3">
                                <label for="format_session" class="form-label">Format de la session</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="presentiel" name="format_session" value="presentiel" required>
                                    <label class="form-check-label" for="presentiel">Présentiel</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="en_ligne" name="format_session" value="en_ligne" required>
                                    <label class="form-check-label" for="en_ligne">En ligne</label>
                                </div>
                            </div>
        
                            <div class="mb-3">
                                <label for="type_formation" class="form-label">Type de formation</label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="interne" name="type_formation" value="interne" required>
                                    <label class="form-check-label" for="interne">Interne</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="externe" name="type_formation" value="externe" required>
                                    <label class="form-check-label" for="externe">Externe</label>
                                </div>
                            </div>
        
                            <button type="submit" class="btn btn-primary">Ajouter la session</button>
                        </form>
                        <!-- Fin du formulaire d'ajout de session -->
                    </div>
                </div>
            </div>
        </div>
        

        <x-app.footer />
    </main>
</x-app-layout>

