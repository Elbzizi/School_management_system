
<div class="content-wrapper" style="padding-top: 10px">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <form class="form-horizontal" wire:submit.prevent='modifier' >

                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ asset($photo) }}"
                         alt="User profile picture">
                  </div>
                  <p class="text-muted text-center cursur-pointer"><a href="#"><label for="photo">edit photo</label></a></p>
                  <input type="file" placeholder="Photo" id="photo" wire:model='photo' name="photo" style="position: absolute; left: -9999px; opacity: 0;">

  
                  <h3 class="profile-username text-center">{{ $prenom ." ". $name }}</h3>
  
                  <p class="text-muted text-center">{{ $role }}</p>
  
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b>Crée le </b> <a class="float-right">{{ $created_at }}</a>
                    </li>
                    <li class="list-group-item">
                      <b>Modifier le</b> <a class="float-right">{{ $updated_at }}</a>
                    </li>
                    <li class="list-group-item">
                      <b></b> <a class="float-right"></a>
                    </li>
                  </ul>
  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
            </div>
            <div class="col-md-8" >
              <div class="card mt-10" >

                <div class="card-body">
  
                    <div class="tab-pane" id="settings">
                        <div class="row container-fluid">
                            <div class="col-md-1 ms-auto">
                                <label for="nom" class="col-form-label">Name</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="nom" class="form-control" wire:model='name'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="prenom" class="col-form-label">Prenom</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="prenom" class="form-control" wire:model='prenom'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="sexe" class="col-form-label">Sexe</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="sexe" class="form-control" wire:model='sexe'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="cin" class="col-form-label">CIN</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="cin" class="form-control" wire:model='cin'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="photo" class="col-form-label">Photo</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="photo" class="form-control" wire:model='photo'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="adress" class="col-form-label">Address</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="adress" class="form-control" wire:model='adress'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="role" class="col-form-label">Role</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="role" class="form-control" wire:model='role'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="statut" class="col-form-label">Statut</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                {{-- <input type="text" id="statut" class="form-control" wire:model='statut'> --}}
                                <select wire:model="statut" id="status" class="form-control">
                                  @foreach($allstatuts as $s)
                                      <option value="{{ $s }}">{{ $s }}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="tel" class="col-form-label">Telephone</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="tel" class="form-control" wire:model='tel'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="email" class="col-form-label">Email</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="email" id="email" class="form-control" wire:model='email'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="created_at" class="col-form-label">Created</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="created_at" class="form-control" wire:model='created_at'>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="updated_at" class="col-form-label">Updated</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="updated_at" class="form-control" wire:model='updated_at'>
                            </div>
                            <div class="col-md-7 ms-auto mb-3 d-flex justify-content-end">
                            
                              <button type="submit" class="btn btn-primary " >Modiffier</button>
                            </div>
                        </div>
                    </form>                    
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
</div>