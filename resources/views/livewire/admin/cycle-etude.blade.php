<div class="content-wrapper">
    @section('cycle', 'active')
    @section('open-gestion-scolaire', 'menu-open')
    <section class="content">
        <!-- main body -->
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 style="float: left;"><strong>Liste des Cycles d'etudes</strong></h6>
                                <a class="btn btn-sm btn-success" style="float: right;"data-toggle="modal"
                                    data-target="#cyclemodal" wire:click.prevent='ajouterModal'>Ajouter Cycle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- model --}}
            <div wire:ignore.self class="modal fade " id="cyclemodal" tabindex="-1" role="dialog"
                aria-labelledby="Gestion Cycles" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                @if ($isAdd)
                                    Ajouter un nouveau Cycle d'etude !
                                @else
                                    Modifier le Cycle d'etude
                                @endif
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form wire:submit.prevent="store">
                                <div class="row container-fluid">
                                    <div class="col-md-2 ms-auto">
                                        <label for="nom" class="col-form-label">nom</label>
                                    </div>
                                    <div class="col-md-4 ms-auto">
                                        <select wire:model="nom" class="form-control">
                                            <option value="" selected>
                                                Choisir le nom du cycle
                                            </option>
                                            <option value="Primaire">
                                                Primaire
                                            </option>
                                            <option value="collegial">
                                                secondaire collégial
                                            </option>
                                            <option value="qualifiant">
                                                secondaire qualifiant
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-2 ms-auto">
                                        <label for="inputPassword6" class="col-form-label">description</label>
                                    </div>
                                    <div class="col-md-4 ms-auto">
                                        <input type="text" id="description" class="form-control"
                                            wire:model='description'>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">
                                @if ($isAdd)
                                    Ajouter
                                @else
                                    Save changes
                                @endif
                            </button>
                        </div>
                        </form>
                    </div>
                    <!-- /.modal -->
                </div>
                <!-- /.modal-dialog -->
            </div>

            <div class="container ">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Create At</th>
                                        <th>Update At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cycles as $cycle)
                                        <tr>

                                            <td style="width: 50px;">{{ $cycle->id }}</td>
                                            <td style="width: 130px;">{{ $cycle->nom_cycle }}</td>
                                            <td style="width: 160px;">{{ $cycle->description }}</td>
                                            <td style="width: 100px;">{{ $cycle->created_at }}</td>
                                            <td style="width: 100px;">{{ $cycle->updated_at }}</td>


                                            <td style="width: 200px;">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success">Action</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle"
                                                        data-toggle="dropdown">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <a class="dropdown-item" href="#">Afficher</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#cyclemodal"
                                                            wire:click.prevent='modifierModal({{ $cycle->id }})'>Modifier</a>
                                                        <a class="dropdown-item" href="#"
                                                            wire:click.prevent='supprimer({{ $cycle->id }})'>supprimer</a>
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
</div>



</section>
<script>
    window.addEventListener('close-modal', event => {
        $('#cyclemodal').modal('hide');
    });
</script>

</div>
