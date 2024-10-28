
@extends('layouts.admin')

@section('content')

    <div class="card card-outline card-primary">
        <div class="card-body">
            <div class="container-fluid">
                <div id="msg"></div>
               <form id="product-form" action="{{ route('admin.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
                    <div class="form-group">
                        <label for="name">Nume</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">Parolă</label>
                        <input type="password" name="password" id="password" class="form-control" autocomplete="off">
                        <small><i>Lăsați acest câmp necompletat dacă nu doriți să schimbați parola.
</i></small>
                    </div>
                    <div class="form-group">
                        <button form="product-form" class="btn btn-sm btn-primary" >Actualizează</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function displayImg(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#cimg').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
         // Apelarea funcției displayImg atunci când se selectează o imagine
            $('#cimg_file').change(function () {
                displayImg(this);
            });
    </script>
@endpush

