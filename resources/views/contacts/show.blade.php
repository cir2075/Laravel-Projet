<x-app-layout>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h2 class="card-title mb-4 text-center">Détail du contact</h2>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item"><strong>Nom :</strong> {{ $contact->nom }}</li>
                        <li class="list-group-item"><strong>Prénom :</strong> {{ $contact->prenom }}</li>
                        <li class="list-group-item"><strong>Email :</strong> {{ $contact->email }}</li>
                        <li class="list-group-item"><strong>Téléphone :</strong> {{ $contact->telephone }}</li>
                        <li class="list-group-item"><strong>Adresse :</strong> {{ $contact->adresse }}</li>
                    </ul>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-warning"><i class="bi bi-pencil me-1"></i> Modifier</a>
                        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Retour</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bi bi-trash me-1"></i> Supprimer</button>
                    </div>
                    <!-- Modal de confirmation -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Confirmation de suppression</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                </div>
                                <div class="modal-body">
                                    Voulez-vous vraiment supprimer ce contact ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 