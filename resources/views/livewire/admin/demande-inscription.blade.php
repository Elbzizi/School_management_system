

        <div class="row">
            {{-- @if (Session::has('success'))
            <div class="alert alert-success">
                <p>{{ session('success') }}</p>
            </div>
            @endif --}}
        <div class="container" style="margin-top: 5px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <h6 style="float: left;"><strong>Liste des demandes</strong></h6>
                          <form name="frm" wire:submit.prevent='filter'>
                            @csrf
                            <a class="btn btn-sm btn-success" style="float: right;"data-toggle="modal" data-target="#etudiantmodal" >Ajouter Etudiant</a>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
            window.addEventListener('close-modal', event => {
                $('#etudiantmodal').modal('hide');
            });
        </script>


