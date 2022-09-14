@extends('index')
@section('title', 'Страница регистрации')
@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{ route('register') }}" method="post" >
                    @if(session()->has('Success'))
                        <div class="alert alert-success">Операция регистрации успешно выполнена</div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Ваше имя</label>
                        <input type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               id="inputName"
                               name="name"
                               aria-describedby="invalidName">
                        @error('name')
                        <div id="invalidName" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваша почта</label>
                        <input type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               id="inputEmail"
                               name="email"
                               aria-describedby="invalidEmail">
                        @error('email')
                        <div id="invalidEmail" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputAge" class="form-label">Ваш возраст</label>
                        <input type="number"
                               min="0"
                               class="form-control @error('age') is-invalid @enderror"
                               id="inputAge"
                               name="age"
                               aria-describedby="invalidAge">
                        @error('age')
                        <div id="invalidAge" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputAddress" class="form-label">Ваш адрес</label>
                        <input type="text"
                               class="form-control @error('address') is-invalid @enderror"
                               id="inputAddress"
                               name="address"
                               aria-describedby="invalidAddress">
                        @error('address')
                        <div id="invalidAddress" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваш пароль</label>
                        <input type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="inputPassword"
                               name="password"
                               aria-describedby="invalidPassword">
                        @error('password')
                        <div id="invalidPassword" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label">Ваш пароль повторно</label>
                        <input type="password"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               id="inputPasswordConfirmation"
                               name="password_confirmation"
                               aria-describedby="invalidPasswordConfirmation">
                        @error('password_confirmation')
                        <div id="invalidPasswordConfirmation" class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
