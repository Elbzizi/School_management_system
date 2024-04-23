<div class="content-wrapper">
    @section('demandesInscription','active')
    @section('open-gestion-etudiant','menu-open')
    <section class="content">
        <div class="row">   

            <form class="container " style="margin-top: 7px;">     
                <div class="row">
                    <div class="col-md-7">
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
                                        <th>Name</th>
                                        <th>Prenom</th>
                                        <th>Date inscription</th>
                                        <th>Selectionnez</th>
                                    </tr>
                                    @foreach ($desactiveEtudiants as $etudiant)
                                        <tr>
                                            <td><a href="/admin/profile/{{ $etudiant->id }}?type=etudiant">{{ $etudiant->name }}</a></td>
                                            <td><a href="">{{ $etudiant->prenom }}</a></td>
                                            <td>{{ $etudiant->date_naissance }}</td>
                                            <td>
                                                <input type="checkbox" wire:model="selectedetudiants" value="{{ $etudiant->id }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- Right Column Content -->
                        <div class="card">
                            <div class="card-body">
                                <a class="btn btn-sm btn-success" style="" wire:click='accepter()' >Accepter</a> | 
                                <a class="btn btn-sm btn-danger" style="" wire:click='refuser()' >Refuser</a>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
</div>

