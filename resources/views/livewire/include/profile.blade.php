<div class="content-wrapper" style="padding-top: 10px">
    <style>
        .disabled-link {
            color: gray;
            /* Change color to gray */
            pointer-events: none;
            /* Disable pointer events */
            cursor: not-allowed;
            /* Change cursor to not-allowed */
        }
    </style>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">

                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <form class="form-horizontal" wire:submit.prevent='modifier({{ $id }})'>
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" 
                                    src="{{ asset($photo) }}"
                                        alt="User profile picture">
                                </div>
                                <p class="text-muted text-center cursur-pointer"><a href="#"><label
                                            for="photo">edit photo</label></a></p>
                                <input type="file" placeholder="Photo" id="photo" wire:model.live='photo'
                                    name="photo" style="position: absolute; left: -9999px; opacity: 0;">


                                <h3 class="profile-username text-center">{{ $prenom . ' ' . $name }}</h3>

                                <p class="text-muted text-center">{{ $role }}</p>

                                <ul class="list-group list-group-unbordered mb-10">

                                    <li class="list-group-item">
                                        @if ($groupeName)
                                            <b>le Groupe </b> <a class="float-right"
                                                href="/admin/groupe/{{ $groupeID }}">{{ $groupeName }}</a>
                                        @endif
                                    </li>
                                </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>

                <div class="col-md-9">
                    <div class="card mt-10">

                        <div class="card-body">

                            <div class="tab-pane" id="settings">
                                <div class="row container-fluid">
                                    <div class="col-md-1 ms-auto">
                                        <label for="nom" class="col-form-label">Name</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        <input type="text" id="nom" class="form-control"
                                            wire:model.live='name'>
                                    </div>
                                    <div class="col-md-1 ms-auto">
                                        <label for="prenom" class="col-form-label">Prenom</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        <input type="text" id="prenom" class="form-control"
                                            wire:model.live='prenom'>
                                    </div>
                                    <div class="col-md-1 ms-auto">
                                        <label for="sexe" class="col-form-label">Sexe</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        <select wire:model.live="sexe" id="status" class="form-control">
                                            <option value="homme">homme</option>
                                            <option value="femme">femme</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 ms-auto">
                                        <label for="cin" class="col-form-label">CIN</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        <input type="text" id="cin" class="form-control" wire:model.live='cin'>
                                    </div>
                                    <div class="col-md-1 ms-auto">
                                        <label for="adress" class="col-form-label">Address</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        <input type="text" id="adress" class="form-control"
                                            wire:model.live='adress'>
                                    </div>
                                    <div class="col-md-1 ms-auto">
                                        <label for="role" class="col-form-label">Role</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        {{-- <input type="text" id="role" class="form-control" wire:model.live='role'> --}}
                                        <select wire:model.live="role" id="role" class="form-control">
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
                                        <select wire:model.live="statut" id="status" class="form-control">
                                            <option value="active">active</option>
                                            <option value="desactive">desactive</option>
                                            <option value="bloque">bloque</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 ms-auto">
                                        <label for="tel" class="col-form-label">Telephone</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        <input type="text" id="tel" class="form-control"
                                            wire:model.live='tel'>
                                    </div>
                                    <div class="col-md-1 ms-auto">
                                        <label for="email" class="col-form-label">Email</label>
                                    </div>
                                    <div class="col-md-5 ms-auto mb-3">
                                        <input type="email" id="email" class="form-control"
                                            wire:model.live='email'>
                                    </div>
                                    

                                    <div class="col-md-7 ms-auto mb-3 d-flex justify-content-end">
                                        @if (Auth::guard('admin')->user())
                                            <button type="submit" class="btn btn-primary ">Modiffier</button>
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

            </div>
            @if ($role === 'enseignant')
                <div class="col-md-12">
                    <div class="card mt-10">

                        <div class="card-body">

                            <div class="tab-pane" id="settings">
                                <div class="row container-fluid">
                                    <div class="col-md-2 ms-auto">
                                        <label for="nom" class="col-form-label">un {{ $role }} de
                                            :</label>
                                        <p>Matiers : </p>

                                        @foreach ($info->groupes as $groupe)
                                        <p>{{ $groupe->nom }}
<<<<<<< HEAD
                                            @foreach ($groupe->matiers as $matier)
                                                {{ $matier->nom_matier }}
                                            @endforeach

=======
>>>>>>> b657c9b96ed12f65e6d7b05f791b40265a781d62
                                            <button class="btn btn-danger" wire:click="deletegroupe({{ $groupe->id }})">Delete</button>
                                        </p>

                                        @endforeach
                                    </div>
                                    <div class="col-md-4 ms-auto mb-3">

                                    </div>

                                    <div class="col-md-6 ms-auto mb-3 d-flex justify-content-end">
                                        @if (Auth::guard('admin')->user())
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
            @endif


        </div>

</div>
</div>
</section>
</div>
