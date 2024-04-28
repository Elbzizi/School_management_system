<div class="content-wrapper">
    @section('demandesInscription', 'active')
    @section('open-gestion-etudiant', 'menu-open')
    <section class="content">
        <div class="row">

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
                                            <td>{{ $etudiant->date_naissance }}</td>
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

    </section>
</div>
