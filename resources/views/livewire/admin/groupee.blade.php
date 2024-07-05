<div class="content-wrapper">
    <section class="content">
        <div class="container" style="margin-top: 5px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <p class="">Le cycle {{ $cycle->nom_cycle }}</p>
                                <h5><strong> Liste des Etudiants</strong></h5>
                                <p class=""> date d'aujourduit : {{ now()->format('Y-m-d') }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="">Niveau {{ $niveau->nom }}</p>
                                <p class="">Nombre des Etudiant : {{ $etudiants->count() }}/{{ $groupe->capacite }}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="">le Groupe {{ $groupName }}</p>
                                <p class=""></p>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <form wire:submit.prevent="submit">
                                <div class="form-group">
                                    <label for="etudiant">Etudiant</label>
                                    <select wire:model.live="selectedEtudiant" class="form-control">
                                        <option value="" selected>Select Etudiant</option>
                                        @foreach ($etudiants as $etudiant)
                                            <option value="{{ $etudiant->id }}">{{ $etudiant->name }} {{ $etudiant->prenom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="matierId">Matière</label>
                                    <select wire:model="Matier" class="form-control">
                                        <option value="">Select Matière</option>

                                        @if($matieres)
                                        @foreach ($matieres as $matier)
                                            <option value="{{ $matier->nom_matier }}">{{ $matier->nom_matier }}</option>
                                        @endforeach
                                        @else
                                        <option value="">no matier assigned</option>

                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="justification">Justification</label>
                                    <select wire:model="justification" class="form-control">
                                        <option value="1" >justifier</option>
                                        <option value="0">non justifier</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" wire:model="date" class="form-control" id="date">
                                </div>
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </form>
                            <table id="example1" class="table table-bordered table-striped mt-4">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Date Naissance</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($etudiants as $etudiant)
                                        <tr wire:key="etudiant-{{ $etudiant->id }}">
                                            <td>{{ $etudiant->id }}</td>
                                            <td>{{ $etudiant->name }}</td>
                                            <td>{{ $etudiant->prenom }}</td>
                                            <td>{{ $etudiant->date_naissance }}</td>
                                            {{-- <td>
                                                <button wire:click="retire({{ $etudiant->id }})" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>id</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Date Naissance</th>
                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Modal -->
        <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to remove this student from the group?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" wire:click="deleteStudent" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

@push('scripts')
<script>
    window.addEventListener('openDeleteModal', event => {
        $('#deleteModal').modal('show');
    });

    window.addEventListener('closeDeleteModal', event => {
        $('#deleteModal').modal('hide');
    });

    window.addEventListener('absenceAdded', event => {
        location.reload();
    });
</script>
@endpush

