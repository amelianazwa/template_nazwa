@extends('layouts.backend')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Add User</h5>
                        <form class="row g-3" method="POST" >
                            <div class="col-md-12">
                                <label for="input13" class="form-label">Full Name</label>
                                <div class="position-relative input-icon">
                                    <input type="text" class="form-control" id="input13" placeholder="Full Name">
                                    <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                <input type="email" class="form-control" @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    id="inputEmailAddress" placeholder="example@user.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input type="password" class="form-control border-end-0"
                                            id="inputChoosePassword" @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password"
                                            placeholder="Enter Password">


                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password-confirm"
                                            class= "col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-12">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                            <div class="col-md-12">
                                <label for="input19" class="form-label">Is Admin ?</label>
                                <select id="input19" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option value="0">NO</option>
                                    <option  value="1">YES</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="input24">
                                    <label class="form-check-label" for="input24">Check me out</label>
                                </div>
                            </div>
                           <div class="row">
                            <label class="col-smk-3 col-form-label"></label>
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-grd-primary px-4">Tambah</button>
                                <a href="{{ route('user.index') }}" class="btn btn-grd-royal px-4">Kembali</a>
                            </div>
                           </div>
                            </div>
                        </form>
                    </div>
                </div>
  </div>

@endsection
