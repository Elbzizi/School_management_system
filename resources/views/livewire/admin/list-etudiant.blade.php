<div class="content-wrapper">
    @section('listeEtudiant','active')
    @section('listeEtudiant','menu-open')
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
                                    {{-- <a class="btn btn-sm btn-success" style="float: right;"data-toggle="modal" data-target="#etudiantmodal" >Ajouter Etudiant</a> --}}
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
