<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-app.navbar />

        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header">
                        Ajouter un Sujet de Formation
                    </div>
                    <div class="card-body">
                        <form method="POST" >
                            @csrf

                            <div class="mb-3">
                                <label for="domaine_id" class="form-label">Domaine de Formation:</label>
                                <input type="text" class="form-control" id="domaine_id" name="domaine_id" required>
                            </div>

                            <div class="mb-3">
                                <label for="sujet" class="form-label">Sujet de Formation:</label>
                                <input type="text" class="form-control" id="sujet" name="sujet" required>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label>
                                <textarea class="form-control" id="description" name="description" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="formateur_id" class="form-label">Formateur:</label>
                                <input type="text" class="form-control" id="formateur_id" name="formateur_id" required>
                            </div>

                           

                            <button type="submit" class="btn btn-primary">Ajouter le Sujet de Formation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <x-app.footer />
    </main>
</x-app-layout>
