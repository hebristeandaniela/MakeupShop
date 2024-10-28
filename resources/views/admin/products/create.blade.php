@extends('layouts.admin')

@section('content')
<div class="card card-outline card-info">
    <div class="card-header">
        <h3 class="card-title">Creează un produs nou</h3>
    </div>
    <div class="card-body">
        <form id="product-form" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id" class="control-label">Categoria</label>
                <select name="category_id" id="category_id" class="custom-select select2" required>
                    <option value=""></option>
                    @foreach($categories as $category)
                        <option value="{{ $category->CATEGID }}">{{ $category->CATEGORIES }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name" class="control-label">Numele produsului</label>
                <input type="text" name="name" id="name" class="form-control rounded-0" required>
            </div>
            <div class="form-group">
                <label for="specs" class="control-label">Specs</label>
                <textarea name="specs" id="specs" cols="30" rows="2" class="form-control form no-resize summernote"></textarea>
            </div>
            <div class="form-group">
                <label for="description" class="control-label">Descriere</label>
                <input name="description" id="description" class="custom-select select2">
                    
            </div>
            <div class="form-group">
                <label for="price" class="control-label">Preț</label>
                <input name="price" id="price" class="custom-select select2">
            
            </div>
            <div class="form-group">
                <label for="sale_price" class="control-label">Preț redus</label>
                <input name="sale_price" id="sale_price" class="custom-select select2">
            
            </div>
            <div class="form-group">
                <label for="img" class="control-label">Imagini</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="img[]" multiple accept=".png,.jpg,.jpeg" onchange="displayImg(this, $(this))">
                    <label class="custom-file-label" for="customFile">Alege fișier</label>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button class="btn btn-flat btn-primary" form="product-form">Salvează</button>
        <a class="btn btn-flat btn-default" href="{{ route('admin.products.index') }}">Ieșire</a>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        function displayImg(input, _this) {
            var fnames = [];
            Object.keys(input.files).map(k => {
                fnames.push(input.files[k].name);
            });
            _this.siblings('.custom-file-label').html(fnames.join(", "));
        }

        $(document).ready(function() {
            $('.select2').select2({ placeholder: "Please Select here", width: "relative" });

            $('.summernote').summernote({
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ol', 'ul', 'paragraph']],
                    ['table', ['table']],
                    ['view', ['undo', 'redo', 'codeview', 'help']]
                ]
            });

            $('#product-form').submit(function(e) {
                e.preventDefault();
                var form = $(this);
                $('.err-msg').remove();
                start_loader();

                $.ajax({
                    url: form.attr('action'),
                    data: new FormData(form[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    method: 'POST',
                    dataType: 'json',
                    error: function(err) {
                        console.log(err);
                        alert_toast("An error occurred", 'error');
                        end_loader();
                    },
                    success: function(resp) {
                        if (resp.status === 'success') {
                            window.location.href = '{{ route('admin.products.index') }}';
                        } else if (resp.status === 'failed' && resp.msg) {
                            var el = $('<div>').addClass("alert alert-danger err-msg").text(resp.msg);
                            form.prepend(el);
                            el.show('slow');
                            $("html, body").animate({ scrollTop: form.closest('.card').offset().top }, "fast");
                            if (resp.id) {
                                $('[name="id"]').val(resp.id);
                            }
                            end_loader();
                        } else {
                            alert_toast("An error occurred", 'error');
                            end_loader();
                        }
                    }
                });
            });
        });
    </script>
@endpush
