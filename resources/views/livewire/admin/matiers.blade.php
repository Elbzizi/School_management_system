<div class="content-wrapper">
    @section('matier','active')
    @section('matier','menu-open')
    <section class="content">
        <div class="row">
            <div class="container" style="margin-top: 5px;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="height: 310px;">
                            <div class="card-header">
                                <form action="" class="form" wire:submit='create()'>
                                    <h6 style="float: left;" ><strong>Ajouter Une Nouvelle Matier :</strong></h6>
                                    <input type="text" wire:model='matier' class="form-control" placeholder="Nom de matier">
                                    <hr>
                                    <input type="number" wire:model='coeff' class="form-control" placeholder="Coefficient">
                                    <hr>
                                    <input type="text" wire:model='duree' class="form-control" placeholder="duree">
                                    <hr>
                                    <input type="submit" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="card" >
                            <div class="card-header"    >
                                    {{-- <label for="">Affecter matier pour un Groupe</label> --}}
                                    <hr>
                                    <select name="" id="" class="form-control" wire:model='matier_id'>
                                        <option value="">--Choisir une matier--</option>
                                        @foreach ($matiers as $matier)

                                        <option value="{{ $matier->id }}">{{ $matier->nom_matier }}</option>

                                        @endforeach

                                    </select>
                                    <hr>
                                    <select name="" id="" class="form-control" wire:model='admin_id'>
                                        <option value="">--Choisir un enseignant--</option>

                                        @foreach ($enseignants as $enseignant )

                                        <option value="{{ $enseignant->id }}">{{ $enseignant->prenom }} {{ $enseignant->name }}</option>

                                        @endforeach
                                    </select>
                                    <hr>
                                    <select name="" id="" class="form-control" wire:model='groupe_id'>
                                        <option value="">--Choisir un Groupe--</option>

                                        @foreach ($groupes as $groupe )

                                        <option value="{{ $groupe->id }}">{{ $groupe->nom }}</option>

                                        @endforeach
                                    </select>
                                    <hr>
                                    <button type="submit" class="btn btn-success" wire:click='affecter()'>submit</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container " >

                <div class="card card-statistics h-100">
                  <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Enseignant</th>
                                    <th>Nom Matière</th>
                                    <th>Groupes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $displayedCombinations = []; @endphp
                                @foreach ($pivots as $admin)
                                    @foreach ($admin->matiers as $matier)
                                        @php
                                            $combination = $admin->id . '-' . $matier->id;
                                            $groupes = implode('  ,  ', $matier->groupes->pluck('nom')->toArray());
                                        @endphp
                                        @if (!in_array($combination, $displayedCombinations))
                                            <tr>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $matier->nom_matier }}</td>
                                                <td>
                                                    @php
                                                        $groupeNames = explode(',', $groupes);
                                                    @endphp
                                                @foreach ($groupeNames as $groupeName)
                                                    @php
                                                        $groupe = App\Models\Groupe::where('nom', trim($groupeName))->first();
                                                        $groupeId = $groupe ? $groupe->id : null;
                                                    @endphp
                                                    <a href="/admin/groupe/{{ $groupeId }}">{{ trim($groupeName) }}</a>
                                                    @unless ($loop->last)
                                                        ,
                                                    @endunless
                                                @endforeach
                                                </td>
                                            </tr>
                                            @php $displayedCombinations[] = $combination; @endphp
                                        @endif
                                    @endforeach
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
