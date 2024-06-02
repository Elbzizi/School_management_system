<div class="content-wrapper">
    @section('listemployer','active')
    @section('open-gestion-employer','menu-open')
    <section class="content">
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h6 style="float: left;"><strong>Liste des Employers</strong></h6>
                          <form name="frm" wire:submit.prevent='filter'>
                            @csrf
                            <select class="form-select " style="margin-left:10px;" wire:model='role' wire:change="filter">
                                <option value="all">Tout</option>
                                <option value="surveillant">surveillant</option>
                                <option value="enseignant">enseignant</option>
                            </select>
                          {{-- <button class="btn btn-sm btn-info">Rechercher</button> --}}
                          <a class="btn btn-sm btn-success" style="float: right;"data-toggle="modal" data-target="#employermodal" >Ajouter Employer</a>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div wire:ignore.self class="modal fade" role="dialog" tabindex="-1" id="employermodal" aria-labelledby="Gestion Employers" aria-hidden="true">
                    <div class="modal-dialog cmw modal-dialog-scrollable d-flex justify-content-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Creation de compte Pour employer </h5>
                                <button type="button" class="btn-close btn btn-outline-secondary" data-dismiss="modal" aria-label="Close">Fermer</button>
                            </div>
                            <div class="modal-body p-4">
                                <form  wire:submit.prevent='addEmployer()'>
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
                                            <!-- Parent input -->
                                            <div class="form-group">
                                                <label for="parent">Matier</label>
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
                                                <input type="file" id="photo" class="form-control" wire:model="photo" disabled />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="radio-inputs">
                                                    <label class="radio">
                                                        <input type="radio" name="role" value="surveillant" checked=""  wire:model.live='inputrole'>
                                                        <span class="name">Surveillant</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="role" value="directeur" wire:model.live='inputrole' >
                                                        <span class="name">Directeur</span>
                                                    </label>

                                                    <label class="radio">
                                                        <input type="radio" name="role" value="enseignant" wire:model.live='inputrole'>
                                                        <span class="name">Enseignant</span>
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="role" value="enseignant" wire:model.live='inputrole'>
                                                        <span class="name">Enseignant</span>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
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
                            <th >#</th>
                            <th >Nom</th>
                            <th>Prenom</th>
                            <th>Role</th>
                            <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($Employers as $Emp)
                            <tr>

                              <td style="width: 50px;">{{ $Emp->id }}</td>
                              <td style="width: 130px;">{{ $Emp->name}}</td>
                              <td style="width: 160px;">{{ $Emp->prenom}}</td>
                              <td style="width: 100px;">{{ $Emp->role}}</td>


                              <td style="width: 200px;">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-warning" style="color: white;">Action</button>
                                  <button type="button" class="btn btn-warning dropdown-toggle" style="color: white;" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="/admin/profile/{{ $Emp->id }}">Afficher</a>
                                    <a class="dropdown-item cursour-pointer"  href="#" wire:click.prevent='supprimer({{ $Emp->id }})'>supprimer</a>
                                  </div>
                                </div>
                            </td>
                          </tr>

                        @endforeach

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
            $('#employermodal').modal('hide');
        });
    </script>

</div>
