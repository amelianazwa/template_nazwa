@extends('layouts.backend')
@section('content')

<div class="col-12 col-xl-12">
    <div class="card">
    <label for="input13" class="form-label">Full Name</label>
    <div class="position-relative input-icon">
        <input type="text" class="form-control" @error('name') is-invalid @enderror id="input13"
            placeholder="Full Name" name="name" value="{{ $user->name }}" required
            autocomplete="name" autofocus id="inputUsername">
        <span class="position-absolute top-50 translate-middle-y"><i
                class="material-icons-outlined fs-5">person_outline</i></span>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>



<div class="col-md-12">
    <label for="inputEmailAddress" class="form-label">Email Address</label>
    <input type="text" class="form-control" @error('email') is-invalid @enderror id="input13"
            placeholder="email" name="email" value="{{ $user->email }}" required
            autocomplete="email" autofocus id="inputemail">


        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

                            <div class="col-md-12">
                                <label for="input19" class="form-label">Is Admin ?</label>
                                <select id="input19" class="form-select">
                                    <option selected="">Choose...</option>
                                    <option value="0" {{ $user->is_admin == 0 ? 'selected' : ''}}>NO</option>
                                    <option value="1" {{ $user->is_admin ? 'selected' : ''}}>Yes</option>
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
                            </div>
                        </form>
                    </div>
                </div>
  </div>

</div>
@endsection
