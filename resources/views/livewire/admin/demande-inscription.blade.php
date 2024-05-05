<div class="content-wrapper">
    @section('demandes', 'active')
    @section('demandes', 'menu-open')
    <section class="content">
        <div class="row">
            @if (Session::has('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
            @endif
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h6 style="float: left;"><strong>Liste des demandes</strong></h6>
                          <form name="frm" wire:submit.prevent='filter'>
                            @csrf
                            <a class="btn btn-sm btn-success" style="float: right;"data-toggle="modal" data-target="#etudiantmodal" >Ajouter Etudiant</a>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div wire:ignore.self class="modal fade" role="dialog" tabindex="-1" id="etudiantmodal" aria-labelledby="Gestion Etudiant" aria-hidden="true">
                    <div class="modal-dialog cmw modal-dialog-scrollable d-flex justify-content-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">cree le compte</h5>
                                <button type="button" class="btn-close btn btn-outline-secondary" data-dismiss="modal" aria-label="Close">Fermer</button>
                            </div>
                            <div class="modal-body p-4">
                                <form wire:submit.prevent='create()'>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Name input -->
                                            <div class="form-group">
                                                <label for="name">Nom</label>
                                                <input type="text" id="name" class="form-control" wire:model.live='name' />
                                                @error('name')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>

                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Prenom input -->
                                            <div class="form-group">
                                                <label for="prenom">Prenom</label>
                                                <input type="text" id="prenom" class="form-control" wire:model.live="prenom" />
                                                @error('prenom')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>

                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Sexe select -->
                                            <div class="form-group">
                                                <label for="sexe">Sexe</label>
                                                <select id="sexe" class="form-control" wire:model.live="sexe">
                                                    <option value="homme">Homme</option>
                                                    <option value="femme">Femme</option>
                                                </select>
                                                @error('sexe')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Date de naissance -->
                                            <div class="form-group">
                                                <label for="dateNaissance">Date de naissance</label>
                                                <input type="date" id="dateNaissance" class="form-control" wire:model.live="dateNaissance" />
                                                @error('dateNaissance')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- CIN input -->
                                            <div class="form-group">
                                                <label for="cin">CIN</label>
                                                <input type="text" id="cin" class="form-control" wire:model.live="cin" />
                                                @error('cin')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Adress input -->
                                            <div class="form-group">
                                                <label for="adress">Adress</label>
                                                <input type="text" id="adress" class="form-control" wire:model.live="adress" />
                                                @error('adress')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Class select -->
                                            <div class="form-group">
                                                <label for="class">Class</label>
                                                <select id="class" class="form-control" wire:model="class" disabled>
                                                    <option value="class1">Class 1</option>
                                                    <option value="class2">Class 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Parent input -->
                                            <div class="form-group">
                                                <label for="parent">Parent</label>
                                                <input type="text" id="parent" class="form-control" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Email input -->
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" wire:model.live="email" />
                                                @error('email')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Tel input -->
                                            <div class="form-group">
                                                <label for="tel">Télephone</label>
                                                <input type="tel" id="tel" class="form-control" wire:model.live="tel" />
                                                @error('tel')
                                                <p class="error" role="alert">
                                                    {{ $message }}
                                                </p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Photo input -->
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" id="photo" class="form-control" wire:model="photo" disabled />
                                            </div>
                                        </div>
                                        <!-- Repeat similar structure for additional rows if needed -->
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" >submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <form class="container " style="margin-top: 7px;">
                <div class="row">
                    <div class="col-md">
                        <!-- Left Column Content -->
                        <div class="card">
                            <div class="card-body">
                                <h5 style="float: left;"><strong>Demandes des Inscription</strong></h5>
                                <div class="col-md-11">
                                    <div class="form-check " style="float: right">
                                        <label class="form-check-label" for="selectAll">Select All </label> |
                                        <input class="" type="checkbox" wire:model="selectAll" id="selectAll">
                                    </div>
                                </div>
                                <table class="table text-center">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Date inscription</th>
                                        <th>Selectionnez</th>
                                    </tr>
                                    @foreach ($desactiveEtudiants as $etudiant)
                                        <tr>
                                            <td><a style="color: black;" wire:click='showEtudiant({{ $etudiant->id }})'
                                                    href='#'>{{ $etudiant->name }}</a></td>
                                            <td><a style="color: black;" wire:click='showEtudiant({{ $etudiant->id }})'
                                                    href='#'>{{ $etudiant->prenom }}</a></td>
                                            <td>{{ $etudiant->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <input type="checkbox" wire:model="selectedetudiants" wire:change='selectOne({{ $etudiant->id }})'
                                                    value="{{ $etudiant->id }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>

                    {{-- dd({{ $selectedetudiants }}) --}}
                    @if ($selectedetudiants->count() > 0 || $showEtudiantDetails || $selectAll)
                    <div class="col-md-5">
                        <!-- Right Column Content  -->

                        <div class="card">
                            <div class="dropdown-divider"></div>
                            <div class="card">
                                <div class="card-body">
                                    @if ($showEtudiantDetails)
                                        <h5 class="card-title">Date Inscription
                                            :{{ $showEtudiantDetails->created_at->format('Y-m-d') }}</h5>
                                    @endif
                                </div>
                                <div class="card-body">
                                    @if ($showEtudiantDetails)
                                        <p class="card-text">Nom: {{ $showEtudiantDetails->name }}</p>
                                        <p class="card-text">Prenom: {{ $showEtudiantDetails->prenom }}</p>
                                        <p class="card-text">etat de compte: {{ $showEtudiantDetails->statut }}</p>
                                        <!-- Add other student details here -->
                                    @endif
                                </div>
                            </div>

                            <div class="card-body">
                                @if ($selectedetudiants->count() > 0 )
                                <a class="btn btn-sm btn-success" style=""
                                wire:click='accepter()'>Accepters Tout </a> |
                                <a class="btn btn-sm btn-danger" style="" wire:click='refuser()'>Refuser</a>

                                @else
                                <a class="btn btn-sm btn-success" style=""
                                wire:click='accepter({{ $showEtudiantDetails->id }})'>Accepter</a> |
                                <a class="btn btn-sm btn-danger" style="" wire:click='refuser()'>Refuser</a>

                                @endif

                            </div>
                        </div>


                    </div>
                    @endif
                </div>
            </form>
        </div>
        <script>
            window.addEventListener('close-modal', event => {
                $('#etudiantmodal').modal('hide');
            });
        </script>
    </section>
</div>
