<div class="content-wrapper">
    <section class="content">
          <!-- main body --> 
          <div class="row">   
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h6 style="float: left;"><strong>Liste des Cycles d'etudes</strong></h6>
                        <button class="btn btn-sm btn-success" style="float: right;"data-toggle="modal" data-target="#Addcycle">Ajouter Cycle</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div wire:ignore.self  class="modal fade " id="Addcycle" tabindex="-1" role="dialog" aria-labelledby="Ajouter Cycle d'etude" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                     
                      <h4 class="modal-title">Ajouter un nouveau Cycle d'etude !</h4>
                    </div>
                    <div class="modal-body">
                      <form wire:submit.prevent="store">
                        <div class="row container-fluid">
                          <div class="col-md-2 ms-auto">
                            <label for="nom" class="col-form-label">nom</label>
                          </div>
                          <div class="col-md-4 ms-auto">
                            <input type="text" id="nom" class="form-control"  wire:model='nom'>
                          </div>
                          <div class="col-md-2 ms-auto">
                            <label for="inputPassword6" class="col-form-label">description</label>
                          </div>
                          <div class="col-md-4 ms-auto">
                            <input type="text" id="description" class="form-control" wire:model='description'>
                          </div>
                        </div>    
                      </div>       
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
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
                          <th>Description</th>
                          <th>Create At</th>
                          <th>Update At</th>
                          <th >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($cycles as $cycle)
                          <tr>

                            <td style="width: 50px;">{{ $cycle->id }}</td>
                            <td style="width: 130px;">{{ $cycle->nom_cycle}}</td>
                            <td style="width: 160px;">{{ $cycle->description}}</td>
                            <td style="width: 100px;">{{ $cycle->created_at}}</td>
                            <td style="width: 100px;">{{ $cycle->updated_at}}</td>

                            
                            <td style="width: 200px;">
                              <a href="#" class="btn btn-sm btn-primary">Afficher</a> | 
                              <a href="#" class="btn btn-sm btn-success">Modifier</a> | 
                              <a wire:click.prevent='supprimer({{ $cycle->id }})' class="btn btn-sm btn-danger">Supprimer</a>
                          </td>
                        </tr>

                      @endforeach
                        
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                    
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
              $('#Addcycle').modal('hide');
          });
      </script>
      
</div>

