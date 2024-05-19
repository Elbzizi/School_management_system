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
                          <div class="card-header align-items-center">
                              <h6><strong>Liste des Groupes</strong></h6>
                              <form action="" class="d-flex flex-row-reverse">
                                  <button class="btn btn-primary" wire:click.prevent="checkgroupe()">Ajouter Groupe</button>
                                  <div class="mr-2">
                                      <select class="form-control" wire:model.live="prefix_Groupe_Number">
                                          <option value="" selected>Niveau</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
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
              </div>
          </div>

          <div class="m-auto" style="width: 95%; max-width: 100%;">
              <div class="card card-statistics h-100">
                  <div class="card-body">
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

                      @foreach ($cycles as $cycle)
                          <div class="card-header text-center bg-success fa-2x">
                              {{ $cycle->nom_cycle }}
                          </div>

                          <nav class="navbar navbar-expand-lg bg-body-tertiary">
                              <div class="container-fluid">
                                  <div class="collapse navbar-collapse" id="navbarNav">
                                      <ul class="navbar-nav">
                                          @foreach ($cycle->niveaux as $niveau)
                                              <li class="nav-item">
                                                  <a class="nav-link active" aria-current="page" href="#"
                                                     wire:click.prevent="selectNiveau({{ $niveau->id }})">{{ $niveau->nom }}</a>
                                              </li>
                                          @endforeach
                                      </ul>
                                  </div>
                              </div>
                          </nav>

                          @if ($selectedNiveau)
                              <div class="row">
                                  @foreach ($groupes as $groupe)
                                      <div class="col-sm-4 my-3 mb-sm-0">
                                          <div class="card">
                                              <div class="card-body">
                                                  <h5 class="card-title">{{ $groupe->nom }}</h5>
                                                  <p class="card-text"></p>
                                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          @endif
                      @endforeach
                  </div>
              </div>
          </div>
      </div>
  </section>
</div>
