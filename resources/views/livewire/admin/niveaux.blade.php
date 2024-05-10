<div class="content-wrapper">
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
                            <div class="card-header">
                                <h6 style="float: left;"><strong>Liste des Groupes </strong></h6>
                                <form class="d-flex flex-row-reverse form">
                                    <button class="btn btn-primary" wire:click.prevent='checkgroupe()'>Ajouter Groupe</button>
                                    <div class="mr-2">
                                        <select class="form-control" wire:model.live='groupeNumero' >
                                            <option value=null selected>--Choissir le Groupe Numero--</option>
                                            <option value="1" >1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
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

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th>Niveau</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($groupes as $groupe)
                                <tr>
                                    <td> <a href="/admin/groupe/{{ $groupe->id }}">{{$groupe->nom}}</a></td>
                                    <td>{{$groupe->description}}</td>
                                    <td>{{$groupe->niveau->nom}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <button class="btn btn-danger btn-sm" wire:click="delete({{$groupe->id}})">
                                            <i class="fa fa-trash"></i>
                                        </button>
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
</div>


                  {{-- </div>
                  </div>
                </div>
              </div>
        </div>
        </div>
    </section>
</div> --}}

