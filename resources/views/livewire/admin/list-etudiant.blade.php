<div class="content-wrapper">
    @section('listetudiant','active')
    @section('open-gestion-etudiant','menu-open')
    <section class="content">
        <div class="row">
            {{-- @if(session()->has('successMessage'))
                {{ dd($successMessage) }}
            @endif --}}
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h6 style="float: left;"><strong>Liste des Etudiant</strong></h6>
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
                  <div wire:ignore.self class="modal fade"  role="dialog" tabindex="-1" id="etudiantmodal" aria-labelledby="Gestion Etudiant" aria-hidden="true">
                    <div class="modal-dialog d-flex justify-content-center">
                        <div class="modal-content w-100">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Sign up</h5>
                                <button type="button" class="btn-close btn btn-outline-secondary" data-dismiss="modal" aria-label="Close">Fermer</button>
                            </div>
                            <div class="modal-body p-4">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Name input -->
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" id="name" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Prenom input -->
                                            <div class="form-group">
                                                <label for="prenom">Prenom</label>
                                                <input type="text" id="prenom" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Sexe select -->
                                            <div class="form-group">
                                                <label for="sexe">Sexe</label>
                                                <select id="sexe" class="form-control">
                                                    <option value="homme">Homme</option>
                                                    <option value="femme">Femme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Date de naissance -->
                                            <div class="form-group">
                                                <label for="dateNissance">Date de naissance</label>
                                                <input type="date" id="dateNissance" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- CIN input -->
                                            <div class="form-group">
                                                <label for="cin">CIN</label>
                                                <input type="text" id="cin" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Adress input -->
                                            <div class="form-group">
                                                <label for="adress">Adress</label>
                                                <input type="text" id="adress" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Class select -->
                                            <div class="form-group">
                                                <label for="class">Class</label>
                                                <select id="class" class="form-control">
                                                    <option value="class1">Class 1</option>
                                                    <option value="class2">Class 2</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Parent input -->
                                            <div class="form-group">
                                                <label for="parent">Parent</label>
                                                <input type="text" id="parent" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Email input -->
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" id="email" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Tel input -->
                                            <div class="form-group">
                                                <label for="tel">Tel</label>
                                                <input type="tel" id="tel" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Photo input -->
                                            <div class="form-group">
                                                <label for="photo">Photo</label>
                                                <input type="file" id="photo" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                                </form>
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
                            <th>Choisie</th>
                            <th >Nom</th>
                            <th>Prenom</th>
                            <th>date Naissance</th>
                            <th>Niveau</th>
                            <th>Class</th>
                            <th>Role</th>
                            <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($etudiants as $etudiant)
                            <tr>

                              <td style="width: 40px;"><input type="checkbox" name="{{ $etudiant->id }}" id="{{ $etudiant->id }}"></td>
                              <td style="width: 120px;">{{ $etudiant->name}}</td>
                              <td style="width: 120px;">{{ $etudiant->prenom}}</td>
                              <td style="width: 140px;">{{ $etudiant->date_naissance}}</td>
                              <td style="width: 140px;">non niveau affecter</td>
                              <td style="width: 140px;">non classe affecter</td>
                              <td style="width: 100px;">{{ $etudiant->role}}</td>


                              <td style="width: 160px;">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-warning" style="color: white;">Action</button>
                                  <button type="button" class="btn btn-warning dropdown-toggle" style="color: white;" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="/admin/profile/{{ $etudiant->id }}?type=etudiant">Afficher</a>
                                    <a class="dropdown-item cursour-pointer"  href="#" wire:click.prevent='delete({{ $etudiant->id }})'>supprimer</a>
                                  </div>
                                </div>
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
</div>
