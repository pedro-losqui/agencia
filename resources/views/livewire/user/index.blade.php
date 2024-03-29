<div>

    @include('livewire.user.create')
    
    @include('livewire.user.edit')

    <div class="row">
        <div class="col-xl-6">
            <div class="card-box">
                <h4 class="header-title mb-3">Lista de usuários</h4>

                <div class="table-responsive">
                    <table class="table table-borderless table-hover table-centered  table-nowrap m-0">

                        <thead class="thead-light">
                            <tr>
                                <th colspan="2">Perfil</th>
                                <th>Status</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $item)
                                <tr>
                                    <td style="width: 36px;">
                                        <img src="{{ Storage::url($item->image) }}" class="rounded-circle avatar-sm">
                                    </td>

                                    <td>
                                        <h5 class="m-0 font-weight-normal">{{ $item->name }}</h5>
                                        <p class="mb-0 text-muted"><small>{{ $item->email }}</small></p>
                                    </td>

                                    <td>
                                        @if ($item->status == "ativo")
                                            <span class="badge badge-light-success">{{ $item->status }}</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">{{ $item->status }}</span>
                                        @endif
                                    </td>

                                    <td>
                                        <button wire:click="edit({{ $item->id }})" class="btn btn-xs btn-light" data-toggle="modal" data-target="#con-close-modal-edit"><i class="mdi mdi-lead-pencil"></i></button>
                                        <button wire:click="destroy({{ $item->id }})" class="btn btn-xs btn-danger"><i class="mdi mdi-trash-can-outline"></i></button>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $users->links('layouts.pagination-admin') }}
            <hr>
        </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card-box">
                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Procurar...">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                <br>
                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal-create">
                    <span class="btn-label"><i class="mdi mdi-account-plus"></i></span>Adicionar
                </button>
            </div>
        </div>
    </div>
