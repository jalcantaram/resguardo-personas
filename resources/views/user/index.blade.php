@extends('layouts.app_fluid')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <form method="POST" class="col-4 d-flex justify-content-lg-between" action="">
                    @csrf
                    <input type="text" class="form-control" id="" name="" placeholder="Buscar por nombre">
                    <button type="submit" class="btn btn-primary ml-2">Q</button>
                </form>
                <div class="col-4">
                    <select class="form-control @error('dependence_id') is-invalid @enderror" id="dependence_id" name="dependence_id">
                        <option value="" disabled="" selected="">Selecciona un dependencia</option>
                        @foreach ($dependences as $dependence)
                        <option value="{{$dependence->id}}">{{$dependence->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <a href="{{ route('dashboard.user.create') }}">Nuevo usuario +</a>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-hover">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Carga</th>
                    <th scope="col">Dependencia</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                    <tr>
                        <th scope="row"><a href="{{ route('dashboard.user.show', $item)}}">{{$item->name}}</a></th>
                        <td>{{$item->email}}</td>
                        <td>{{$item->dependence->name}}</td>
                        <td>{{$item->phone}}@if($item->phone_extencion) - {{$item->phone_extencion}}@endif</td>
                        <td>{{$item->email}}</td>
                        <td><a href="{{ route('dashboard.user.edit', $item)}}">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
