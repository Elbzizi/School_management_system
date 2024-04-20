
<div class="content-wrapper" style="padding-top: 10px">
  <style>
    .disabled-link {
      color: gray; /* Change color to gray */
      pointer-events: none; /* Disable pointer events */
      cursor: not-allowed; /* Change cursor to not-allowed */
    }
  </style>
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
              
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <form class="form-horizontal" wire:submit.prevent='modifier({{ $id }})' >
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
                              <select wire:model="sexe" id="status" class="form-control">
                                    <option value="homme">homme</option>
                                    <option value="femme">femme</option>
                            </select>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="cin" class="col-form-label">CIN</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                                <input type="text" id="cin" class="form-control" wire:model='cin'>
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
                                {{-- <input type="text" id="role" class="form-control" wire:model='role'> --}}
                                <select wire:model="role" id="role" class="form-control">
                                  <option value="directeur">directeur</option>
                                  <option value="surveillant">surveillant</option>
                                  <option value="enseignant">enseignant</option>
                                  <option value="etudiant">Etudiant</option>
                          </select>
                            </div>
                            <div class="col-md-1 ms-auto">
                                <label for="statut" class="col-form-label">Statut</label>
                            </div>
                            <div class="col-md-5 ms-auto mb-3">
                              <select wire:model="statut" id="status" class="form-control">
                                      <option value="active">active</option>
                                      <option value="desactive">desactive</option>
                                      <option value="bloque">bloque</option>
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
                            <div class="col-md-7 ms-auto mb-3 d-flex justify-content-end">
                              @if (Auth::guard('admin')->user())
                              <button type="submit" class="btn btn-primary " >Modiffier</button>
                              @else
                              <a href="#" class="disabled-link">Modifier</a>
                              @endif
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
        </div>
      </section>
</div>