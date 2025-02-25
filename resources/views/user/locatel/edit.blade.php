@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Editar usuario
    </div>
    <div class="card-body">
        <form method="POST" class="" action="{{ route('dashboard.user.update', $user) }}">
            @method('PUT')
            @csrf
            <div class="pb-3">
                <div class="form-row">
                    <div class="form-group required col-md-4">
                        <label for="name">Nombre(s):</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}" placeholder="Nombre(s)">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group required col-md-4">
                        <label for="last_name_1">Primer apellido:</label>
                        <input type="text" class="form-control @error('last_name_1') is-invalid @enderror" id="last_name_1" name="last_name_1" value="{{ $user->last_name_1 }}" placeholder="Primer apellido">
                        @error('last_name_1')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="last_name_2">Segundo apellido:</label>
                        <input type="text" class="form-control @error('last_name_2') is-invalid @enderror" id="last_name_2" name="last_name_2" value="{{ $user->last_name_2 }}" placeholder="Segundo apellido">
                        @error('last_name_2')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group required col-md-4">
                        <label for="position">Cargo:</label>
                        <input type="text" class="form-control @error('position') is-invalid @enderror" id="position" name="position" value="{{ $user->position }}" placeholder="Cargo">
                        @error('position')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group required col-md-4">
                        <label for="phone">Teléfono</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $user->phone }}" placeholder="Teléfono">
                        @error('phone')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phone_extension">Extensión:</label>
                        <input type="text" class="form-control @error('phone_extension') is-invalid @enderror" id="phone_extension" name="phone_extension" value="{{ $user->phone_extension }}" placeholder="Extensión">
                        @error('phone_extension')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group required required col-md-4">
                        <label for="dependence_id">Dependencia</label>
                        <select class="form-control @error('dependence_id') is-invalid @enderror" id="dependence_id" name="dependence_id">
                            @if($user->dependence)<option value="{{$user->dependence->id}}" selected="">{{$user->dependence->name}}</option>@endif
                            @foreach ($dependences as $dependence)
                            <option value="{{$dependence->id}}">{{$dependence->name}}</option>
                            @endforeach
                        </select>
                        @error('dependence_id')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    {{--<div class="form-group col-md-4">
                        <label for="ascription">Área de adscripción</label>
                        
                        @error('ascription')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>--}}
                </div>
            </div>
            <div class="border-top py-3">
                <div class="form-row">
                    <div class="form-group required col-md-4">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}" placeholder="Correo electrónico">
                        @error('email')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    {{--<div class="form-group col-md-4">
                        <label for="name">Nombre de usuario:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Nombre">
                        @error('name')
                            <div class="invalid-feedback active" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>--}}
                </div>
            <button type="submit" class="btn btn-primary">Actualizar usuario</button>
        </form>
    </div>
</div>
@endsection
