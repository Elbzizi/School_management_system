<div class="content-wrapper">
    <section class="content&">
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <p class="" >Le cycle {{ $cycle->nom_cycle }}</p>
                                    <h5><strong> Liste des Etudiants</strong></h5>
                                    <p class="" > date d'aujourduit : {{ now()->format('Y-m-d') }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="" >Niveau {{ $niveau->nom }}</p>
                                    <p class="" >Nombre des Etudiant : {{ $etudiants->count() }}/{{ $groupe->capacite }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="" >le Groupe {{ $groupe->nom }}</p>
                                    <p class="" ></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container " >
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
                                        <th>id</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Date Naissance</th>
                                        <th>Selectionnez</th>
                                    </tr>
                                    @foreach ($etudiants as $etudiant)
                                        <tr>
                                            <td>{{ $etudiant->id }}</td>
                                            <td><a style="color: black;" wire:click=''
                                                    href='#'>{{ $etudiant->name }}</a></td>
                                            <td><a style="color: black;" wire:click=''
                                                    href='#'>{{ $etudiant->prenom }}</a></td>
                                            <td>{{ $etudiant->date_naissance}}</td>
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
                    {{-- @if (count($selectedetudiants)>0) --}}

                        <div class="col-md-5">

                            <div class="card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Absence</h6>
                                        <select class="" id="">
                                            <option value="select"></option>
                                        </select>
                                        {{ now()->format('d-M | H:i'); }}
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <a class="btn btn-sm btn-success" style=""
                                    wire:click='accepter()'>Accepters Tout </a> |
                                    <a class="btn btn-sm btn-danger" style="" wire:click='refuser()'>Refuser</a>
                                </div>
                            </div>

                        </div>
                    {{-- @endif --}}
                </div>
                {{-- <div class="card card-statistics h-100">
                  <div class="card-body">
                    <div class="table-responsive">
                    <table id="datatable" class="table table-bordered text-center">
                      <thead>
                          <tr>
                            <th>N °</th>
                            <th>Nom</th>
                            <th>Date NAissance</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($etudiants as $etudiant)
                          <tr>
                            <td>{{ $etudiant->id }}</td>
                            <td><a href="/admin/profile/{{ $etudiant->id }}?type=etudiant">{{ $etudiant->name }} {{ $etudiant->prenom }}</a></td>
                            <td>{{ $etudiant->date_naissance }}</td>
                          </tr>
                          @endforeach
                      </tbody>
                   </table>

                  </div>
                  </div>
                </div> --}}
            </div>
        </div>
        </div>
    </section>
</div>
