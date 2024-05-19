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
                                    </table>
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
                <div class="d-flex justify-content-end mb-3">
                </div>
            </div>
        </div>

</div>
</section>




</div>
</div>



</body>

</html>
