<div class="content-wrapper">
    <section class="content" >
        <div class="row">
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
                                    <p class="">Nombre des Etudiant :
                                        {{ $etudiants->count() }}/{{ $groupe->capacite }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="">le Groupe {{ $groupe->nom }}</p>
                                    <p class=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-md">
                        <!-- Left Column Content -->
                        <div class="card" >
                            <div class="card-body">
                                <div class="col-md-11">

                                </div>
                                <table id="printTable" class="table text-center table-bordered table-striped">
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
                                            <td>{{ $etudiant->date_naissance }}</td>
                                            <td>
                                                <input type="checkbox" wire:model="selectedetudiants"
                                                    wire:change='selectOne({{ $etudiant->id }})'
                                                    value="{{ $etudiant->id }}">
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end mb-3">
                    <button class="btn btn-primary" onclick="printData()">Export to PDF</button>
                </div>
            </div>
        </div>
</div>
</section>


</div>
