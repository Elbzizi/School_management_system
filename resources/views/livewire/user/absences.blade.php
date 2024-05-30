<div class="content-wrapper">
    <section class="content&">
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h6 style="float: left;"><strong>les Absances</strong></h6>

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
                                        {{-- <th>select</th> --}}
                                        <th>Matire</th>
                                        <th>date Absence</th>
                                        <th>Justification </th>
                                        <th>Descripton</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absences as $item)
                                        <tr>
                                            {{-- <td> {{ $item->id }} </td> --}}
                                            <td> {{ $item->matier }} </td>
                                            <td> {{ $item->date_Absences }} </td>
                                            <td>{{ $item->justife ? 'justifié' : 'non justifié' }}</td>
                                            <td> {{ $item->description }} </td>
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
