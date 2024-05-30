<div class="content-wrapper">
    <section class="content&">
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center"><strong>Programme d'étude</strong></h3>
                                <h6><strong class="text-success">Cycle d'étude :</strong>
                                    {{ $user->groupe->niveau->cycle->nom_cycle }}</h6>
                                <h6><strong class="text-success">Group :</strong> {{ $user->groupe->nom }}</h6>
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
                                        <th>Coefficient</th>
                                        <th>Duree</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($user->groupe->matiers as $item)
                                        <tr>
                                            <td>{{ $item->nom_matier }}</td>
                                            <td>{{ $item->Coefficient }}</td>
                                            <td>{{ $item->duree }}</td>
                                        </tr>
                                    @endforeach



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
