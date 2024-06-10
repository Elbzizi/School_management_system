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
                                    <p class="">le Groupe {{ $groupName }}</p>
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


                                <br>
                                {{-- <div class="col-md-11">

                                </div> --}}
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Date Naissance</th>
                                                <th>Selectionnez</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($etudiants as $etudiant)
                                            <tr wire:key="etudiant-{{ $etudiant->id }}">
                                                <td>{{ $etudiant->id }}</td>
                                                    <td><a style="color: black;" wire:click=''
                                                            href='#'>{{ $etudiant->name }}</a></td>
                                                    <td><a style="color: black;" wire:click=''
                                                            href='#'>{{ $etudiant->prenom }}</a></td>
                                                    <td>{{ $etudiant->date_naissance }}</td>
                                                    <td>
                                                        <a href="/admin/profile/{{ $etudiant->id }}?type=etudiant" class="btn btn-primary">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Date Naissance</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end mb-3">
                </div>
            </div>
        </div>



    @livewireScripts



</div>
</section>




</div>
</div>


</body>

</html>
