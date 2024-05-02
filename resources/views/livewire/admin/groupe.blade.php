<div class="content-wrapper">
    <section class="content&">
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <p class="" >le Groupe .....</p>
                                    <h5><strong> Liste des Etudiants</strong></h5>
                                    <p class="" > date d'aujourduit : {{ now()->format('Y-m-d') }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="" >Niveau ....</p>
                                    <p class="" >Nombre des Etudiant : .....</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="" >Cycle ....</p>
                                    <p class="" ></p>
                                </div>
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
                            <th colspan="10">select</th>
                            <th >Nom</th>
                            <th>Prenom</th>
                            <th>date Naissance</th>
                            <th>Role</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
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
