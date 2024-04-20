<div class="content-wrapper">
    @section('listemployer','active')
    @section('open-gestion-employer','menu-open')
    <section class="content">
        <div class="row">   
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h6 style="float: left;"><strong>Liste des Employers</strong></h6>
                          <form name="frm" wire:submit.prevent='filter'>
                            @csrf
                            <select class="form-select " style="margin-left:10px;" wire:model='role' wire:change="filter">
                                <option value="all">Tout</option>                      
                                <option value="surveillant">surveillant</option>
                                <option value="enseignant">enseignant</option>
                            </select>
                          {{-- <button class="btn btn-sm btn-info">Rechercher</button> --}}
                          <a class="btn btn-sm btn-success" style="float: right;" >Ajouter Employer</a>
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
                    <table id="datatable" class="table table-bordered table-hover text-center">
                      <thead>
                          <tr>
                            <th >#</th>
                            <th >Nom</th>
                            <th>Prenom</th>
                            <th>Role</th>
                            <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($Employers as $Emp)
                            <tr>
  
                              <td style="width: 50px;">{{ $Emp->id }}</td>
                              <td style="width: 130px;">{{ $Emp->name}}</td>
                              <td style="width: 160px;">{{ $Emp->prenom}}</td>
                              <td style="width: 100px;">{{ $Emp->role}}</td>
  
                              
                              <td style="width: 200px;">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-warning" style="color: white;">Action</button>
                                  <button type="button" class="btn btn-warning dropdown-toggle" style="color: white;" data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                  </button>
                                  <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item " href="#">Afficher</a>
                                    <a class="dropdown-item" href="/admin/profile/{{ $Emp->id }}">Modifier</a>
                                    <a class="dropdown-item cursour-pointer"  href="#" wire:click.prevent='supprimer({{ $Emp->id }})'>supprimer</a>
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
    </section>
</div>
