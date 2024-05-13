<div class="content-wrapper">
    <section class="content&">
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
                        <div class="card">
                            <div class="card-body">
                                <h5 style="float: left;"><strong>Demandes des Inscription</strong></h5>
                                <div class="col-md-11">

                                </div>
                                <div class="card-body">
                                    {{-- <table id="exampleroupe" class="table text-center table-striped"> --}}
                                    {{-- <table id="example2" class="table table-bordered table-hover">
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
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>id</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Date Naissance</th>
                                                <th>Selectionnez</th>
                                            </tr>
                                        </tfoot>
                                    </table> --}}



                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th>Engine version</th>
                                                    <th>CSS grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 4.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td> 4</td>
                                                    <td>X</td>
                                                </tr>
                                                <tr>
                                                    <td>Trident</td>
                                                    <td>Internet
                                                        Explorer 5.0
                                                    </td>
                                                    <td>Win 95+</td>
                                                    <td>5</td>
                                                    <td>C</td>
                                                </tr>
                                                
                                              
                                            
                                                <tr>
                                                    <td>Gecko</td>
                                                    <td>Mozilla 1.8</td>
                                                    <td>Win 98+ / OSX.1+</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Gecko</td>
                                                    <td>Seamonkey 1.1</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Gecko</td>
                                                    <td>Epiphany 2.20</td>
                                                    <td>Gnome</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Webkit</td>
                                                    <td>Safari 1.2</td>
                                                    <td>OSX.3</td>
                                                    <td>125.5</td>
                                                    <td>A</td>
                                                </tr>
                                          
                                                <tr>
                                                    <td>Presto</td>
                                                    <td>Nokia N800</td>
                                                    <td>N800</td>
                                                    <td>-</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Presto</td>
                                                    <td>Nintendo DS browser</td>
                                                    <td>Nintendo DS</td>
                                                    <td>8.5</td>
                                                    <td>C/A<sup>1</sup></td>
                                                </tr>
                                                <tr>
                                                    <td>KHTML</td>
                                                    <td>Konqureror 3.1</td>
                                                    <td>KDE 3.1</td>
                                                    <td>3.1</td>
                                                    <td>C</td>
                                                </tr>
                                                <tr>
                                                    <td>KHTML</td>
                                                    <td>Konqureror 3.3</td>
                                                    <td>KDE 3.3</td>
                                                    <td>3.3</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>KHTML</td>
                                                    <td>Konqureror 3.5</td>
                                                    <td>KDE 3.5</td>
                                                    <td>3.5</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 4.5</td>
                                                    <td>Mac OS 8-9</td>
                                                    <td>-</td>
                                                    <td>X</td>
                                                </tr>
                                              
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th>Engine version</th>
                                                    <th>CSS grade</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>



                                    {{-- ==================================== --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- @if (count($selectedetudiants) > 0) --}}

                    {{-- <div class="col-md-5">

                            <div class="card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Absence</h6>
                                        <select class="" id="">
                                            <option value="select"></option>
                                        </select>
                                        {{ now()->format('d-M | H:i') ;}}
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

                        </div> --}}
                    {{-- @endif --}}
                </div>

            </div>
        </div>
</div>
</section>
{{-- <script>
    $(function() {
        $("#exampleroupe").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#exampleroupe_wrapper .col-md-6:eq(0)');
        $('#exampleroupe').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script> --}}
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
>
</div>
