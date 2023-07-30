@extends('layouts.exercise')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Form') }}</div>

                <div class="card-body text-center">
                    <button id="btn-open-form" type="button" class="btn btn-primary text-center">
                        {{ __('Abrir Formulario') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-exercise" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form method="POST" action="{{ route('save-project') }}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Formulario del ejercicio (Proyecto)</h5>
                    <button type="button" class="close close-form" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('título') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('email') is-invalid @enderror" name="title" value="{{ old('title') }}" required >
                                <input id="order" type="hidden" name="order" value="{{ $orderNumber }}" >

                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <textarea id="description"  class="form-control @error('username') is-invalid @enderror" name="description" required ></textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">{{ __('enviar') }}</button>
                    <button type="button" class="btn btn-secondary close-form">Cerrar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
