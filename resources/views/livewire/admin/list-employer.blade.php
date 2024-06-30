<div class="content-wrapper">
    @section('listemployer', 'active')
    @section('open-gestion-employer', 'menu-open')
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
                                    <select class="form-select " style="margin-left:10px;" wire:model='role'
                                        wire:change="filter">
                                        <option value="all">Tout</option>
                                        <option value="surveillant">surveillant</option>
                                        <option value="enseignant">enseignant</option>
                                    </select>
                                    {{-- <button class="btn btn-sm btn-info">Rechercher</button> --}}
                                    <a class="btn btn-sm btn-success" style="float: right;"data-toggle="modal"
                                        data-target="#employermodal">Ajouter Employer</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div wire:ignore.self class="modal fade" role="dialog" tabindex="-1" id="employermodal"
                    aria-labelledby="Gestion Employers" aria-hidden="true">
                    <div class="modal-dialog cmw modal-dialog-scrollable d-flex justify-content-center">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel2">Creation de compte Pour employer </h5>
                                <button type="button" class="btn-close btn btn-outline-secondary" data-dismiss="modal"
                                    aria-label="Close">Fermer</button>
                            </div>
                            <div>
                                <button data-toggle="modal" data-target="#addEmployerModal">Add Employer</button>

                                <!-- Add Employer Modal -->
                                <div wire:ignore.self class="modal fade" id="addEmployerModal" tabindex="-1"
                                    role="dialog" aria-labelledby="addEmployerModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addEmployerModalLabel">Add Employer</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form wire:submit.prevent='addEmployer'>
                                                    <div class="row">
                                                        <!-- Input fields as defined earlier -->
                                                        <!-- Name, Prenom, Sexe, Date de naissance, CIN, Adress, Email, Tel, Photo, Role -->
                                                    </div>
                                                    <button class="btn btn-primary btn-block">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Employers Table -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Prenom</th>
                                            <th>Sexe</th>
                                            <th>Date de Naissance</th>
                                            <th>CIN</th>
                                            <th>Adress</th>
                                            <th>Email</th>
                                            <th>Tel</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($employers as $employer)
                                            <tr>
                                                <td>{{ $employer->name }}</td>
                                                <td>{{ $employer->prenom }}</td>
                                                <td>{{ $employer->sexe }}</td>
                                                <td>{{ $employer->dateNaissance }}</td>
                                                <td>{{ $employer->cin }}</td>
                                                <td>{{ $employer->adress }}</td>
                                                <td>{{ $employer->email }}</td>
                                                <td>{{ $employer->tel }}</td>
                                                <td>{{ $employer->role }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <script>
                                document.addEventListener('livewire:load', function() {
                                    Livewire.on('closeModal', () => {
                                        $('#addEmployerModal').modal('hide');
                                    });
                                });
                            </script>


                        </div>
                    </div>
                </div>
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
                                        <th>Prenom</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Employers as $Emp)
                                        <tr>

                                            <td style="width: 50px;">{{ $Emp->id }}</td>
                                            <td style="width: 130px;">{{ $Emp->name }}</td>
                                            <td style="width: 160px;">{{ $Emp->prenom }}</td>
                                            <td style="width: 100px;">{{ $Emp->role }}</td>


                                            <td style="width: 200px;">
                                                <button class="btn btn-outline-danger ms-2 "
                                                    wire:click.prevent='supprimer({{ $Emp->id }})'>
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a href="/admin/profile/{{ $Emp->id }}"
                                                    class="btn btn-outline-warning ms-2">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a>

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
    <script>
        window.addEventListener('close-modal', event => {
            $('#employermodal').modal('hide');
        });
    </script>

</div>
