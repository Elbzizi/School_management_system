<div class="content-wrapper">
    @section('listeEtudiant','active')
    @section('listeEtudiant','menu-open')
    <section class="content">
        <div class="row">

            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                            <h6 class="centred"><strong>Liste des Etudiant</strong></h6>
                            <form name="frm" wire:submit.prevent='filter'>
                                    @csrf
                                    <div style=" margin-bottom: 10px; width: 200px;">
                                        <input type="text" class="form-control"  placeholder="Rechercher"  wire:model="search">
                                    </div>
                                    <button class="btn btn-sm btn-info">Rechercher</button>
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
                                <form  wire:submit.prevent='create()'>
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
                                            <!-- Cycle select -->
                                            <div class="form-group">
                                                <label for="cycle">Cycle</label>
                                                <select id="cycle" class="form-control" wire:model.live="cycle" >
                                                    <option value="" selected>--Select--</option>
                                                    @foreach ($cycles as $cycle )
                                                    <option value="{{ $cycle->id }}">{{ $cycle->nom_cycle }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Niveau select -->
                                            <div class="form-group">
                                                <label for="niveau">Niveau</label>
                                                <select id="niveau" class="form-control" wire:model.live="niveau" >
                                                    <option value="" selected>choisir Niveau</option>
                                                    @foreach ($niveaux as $niv )
                                                    <option value="{{ $niv->id }}">{{ $niv->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Groupe select -->
                                            <div class="form-group">
                                                <label for="groupe">Groupe</label>
                                                <select id="groupe" class="form-control" wire:model.live="groupe" >
                                                    <option value="" selected>choisir Groupe</option>
                                                    @foreach ($groupes as $group )
                                                    <option value="{{ $group->id }}" >{{ $group->nom }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

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
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Photo input -->
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" id="photo" class="form-control" wire:model="photo" />
                                            </div>
                                        </div>
                                        <!-- Repeat similar structure for additional rows if needed -->
                                    </div>
                                    <button class="btn btn-primary btn-block"  >submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <div class="container " >

                <div class="card card-statistics h-100">
                  <div class="card-body">
                    <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-hover text-center">
                      <thead>
                          <tr>
                            <th>id</th>
                            <th >Nom</th>
                            <th>Prenom</th>
                            <th>date Naissance</th>
                            <th>Groupe</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($etudiants as $etudiant)
                            <tr>

                              <td style="width: 50px;">{{ $etudiant->id }}</td>
                              <td style="width: 120px;">{{ $etudiant->name}}</td>
                              <td style="width: 120px;">{{ $etudiant->prenom}}</td>
                              <td style="width: 140px;">{{ $etudiant->date_naissance}}</td>
                              <td style="width: 140px;">
                                @if ($etudiant->groupe)
                                {{ $etudiant->groupe->nom }}
                                @else
                                non affecter
                                @endif
                                </td>


                              <td style="width: 160px;">
                                <button class="btn btn-outline-danger ms-2 "
                                wire:click.prevent='delete({{ $etudiant->id }})'>
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <a href="/admin/profile/{{ $etudiant->id }}?type=etudiant"
                                            class="btn btn-outline-warning ms-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                                
                            </td>
                          </tr>

                        @endforeach
                        {{ $etudiants->links('pagination::bootstrap-5') }}

                      </tbody>
                   </table>
                  </div>
                  </div>
                </div>
              </div>
        </div>

    </section>
    <script>
        window.addEventListener('close-modal', event => {
            $('#etudiantmodal').modal('hide');
        });
    </script>
</div>
