<div class="content-wrapper">
    @section('groupes', 'active')
    @section('groupes', 'menu-open')
    <section class="content">
        @if ($notification)
        <div class="alert {{ $type_notification }}">
            <h6>{{ $notification }}</h6>
        </div>
        @endif
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header  align-items-center">
                                <h6 ><strong>Liste des Groupes</strong></h6>

                                <form action="" class="d-flex d-flex flex-row-reverse">
                                    <button class="btn btn-primary" wire:click.prevent='checkgroupe()'>Ajouter Groupe</button>
                                    <div class="mr-2">
                                        <select class="form-control" wire:model.live='prefix_Groupe_Number' >
                                            <option value='' selected>Niveau</option>
                                            <option value="1" >1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                    <div class="mr-2">
                                        <select class="form-control" wire:model.live='prefix_Niveau' >
                                            <option value='' selected>All</option>
                                            @foreach ($niveaux as $niveau)
                                            <option value="{{ $niveau->id }}">{{ $niveau->nom }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-auto" style="width: 90%;">

                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="table-responsive">
                            <style>
                                .button-container {
                                    /* max-width: 300px; */
                                    /* width: 20px; */
                                }

                                .button-container .btn {
                                    display: inline-block;
                                    width: 165px;
                                    margin-bottom: 3px;

                                }
                            </style>
                            <table id="datatable" class="table table-hover text-center">
                                @foreach ($cycles as $cycle)

                                    <thead>
                                        <tr>
                                            <td colspan="6" style="background-color:#28a745 ;color:white; font-weight:500;">
                                                {{ $cycle->nom_cycle }}</td>
                                        </tr>
                                        <tr>
                                            @foreach ($cycle->niveaux as $niveau)

                                                    <td @if ($cycle->nom_cycle == 'secondaire collégial' || $cycle->nom_cycle == 'secondaire qualifiant') colspan="2" @endif>{{ $niveau->nom }}</td>

                                            @endforeach
                                        </tr>
                                        <tr>
                                            @foreach ($cycle->niveaux as $niveau)
                                                <td class="button-container" @if ($cycle->nom_cycle === 'secondaire collégial' || $cycle->nom_cycle === 'secondaire qualifiant') colspan="2" @endif >
                                                    @foreach ($niveau->groupes as $groupe)
                                                        <a href="groupe/{{ $groupe->id }}" class="btn btn-outline-primary">{{ $groupe->nom }}</a>
                                                    @endforeach
                                                </td>
                                            @endforeach

                                        </tr>
                                       
                                    </thead>
                                @endforeach
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
