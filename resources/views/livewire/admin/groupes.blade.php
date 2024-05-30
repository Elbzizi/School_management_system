<div class="content-wrapper">
    @section('groupes', 'active')
    @section('groupes', 'menu-open')

    <section class="content">
        @if ($notification)
            <div class="alert {{ $type_notification }}">
                <h6>{{ $notification }}</h6>
            </div>
        @endif

        <div class="container" style="margin-top: 5px;">
            <div class="card">
                <div class="card-header align-items-center">
                    <h6><strong>Liste des Groupes</strong></h6>
                    <form class="d-flex flex-row-reverse">
                        <button class="btn btn-primary" wire:click.prevent="checkgroupe()">Ajouter Groupe</button>
                        <div class="mr-2">
                            <select class="form-control" wire:model.live="prefix_Groupe_Number">
                                <option value="" selected>Niveau</option>
                                @for ($i = 1; $i <= 7; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mr-2">
                            <select class="form-control" wire:model.live="prefix_Niveau">
                                <option value="" selected>All</option>
                                @foreach ($niveaux as $niveau)
                                    <option value="{{ $niveau->id }}">{{ $niveau->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="m-auto" style="width: 95%; max-width: 100%;">
            @foreach ($cycles as $cycle)
                <div class="card">
                    <div class="card-header text-center bg-success fa-2x">
                        <marquee> {{ $cycle->nom_cycle }} </marquee>
                    </div>

                    <nav class="navbar navbar-expand-lg bg-body-tertiary">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    @foreach ($cycle->niveaux as $niveau)
                                        <li class="nav-item active">
                                            <a class="nav-link " aria-current="page" href="#"
                                                wire:click.prevent="selectNiveau({{ $niveau->id }})">{{ $niveau->nom }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>

                @if ($selectedNiveau && $selectedNiveau->cycle_id == $cycle->id)
                    <h4 class="text-center fa-2x" style="text-decoration-line: underline">{{ $selectedNiveau->nom }} :
                    </h4>
                    <div class="row">
                        @foreach ($groupes as $groupe)
                            <div class="col-sm-4 my-3 mb-sm-0">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>Groupe :</strong>{{ $groupe->nom }}</h5>
                                        <p class="card-text"><strong>Number Des Etudients
                                                :</strong>{{ $groupe->users->count() }}/{{ $groupe->capacite }}</p>
                                        <a href="/admin/groupe/{{ $groupe->id }}"
                                            class="btn btn-outline-warning ms-2">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="" class="btn btn-outline-primary ms-2 ">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-outline-danger ms-2 "
                                            wire:click="delete({{ $groupe->id }})">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </section>
</div>
