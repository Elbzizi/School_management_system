<div class="content-wrapper">
    <section class="content&">
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center"><strong>Programme d'étude</strong></h3>
                                <h6><strong>Cycle d'étude :</strong> {{ $user->groupe->niveau->cycle->nom_cycle }}</h6>
                                <h6><strong>Group :</strong> {{ $user->groupe->nom }}</h6>
                            </div>
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
                                        <th>Matire</th>
                                        <th>Duree</th>
                                        <th>Profe</th>
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
