@extends('layouts.app')

@section('content')

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.ckeditor').forEach((el) => {
            ClassicEditor.create(el).catch(error => {
                console.error(error);
            });
        });
    });
</script>

<div class="container">
    <!-- Header -->
    <div class="d-flex align-items-center mb-4" style="color: #322A7D;">
        <a href="{{ route('kriteria.detail') }}" style="text-decoration: none; color: #322A7D; margin-right: 16px;">&larr;</a>
        <h3 class="mb-0"><strong>{{ $kriteria->nama_kriteria }}</strong></h3>
    </div>

    <!-- Subkriteria Cards -->
    @foreach($subkriterias as $sub)
    <div class="card mb-4 shadow-sm" style="border: 1.5px solid #322A7D; border-radius: 12px;">
        <div class="card-header bg-transparent border-bottom" style="border-color: #322A7D;">
            <span class="px-4 py-2 rounded-pill text-white" style="background-color: #322A7D;">
                {{ $sub->nama_sub }}
            </span>
        </div>

        <div class="card-body p-4">
            <label class="form-label mb-3" style="color: #322A7D;"><strong>Deskripsi</strong></label>

            <div class="row mb-4">
                <!-- Textarea -->
                <div class="col-md-10 mb-3 mb-md-0">
                    <textarea class="form-control ckeditor" rows="6" placeholder="Tulis sesuatu..." style="border-color: #322A7D;"></textarea>
                </div>

                <!-- Upload -->
                <div class="col-md-2 d-flex align-items-start justify-content-center">
                    <button class="btn w-100 py-4" style="border-style: dashed; border-color: #322A7D; color: #322A7D; border-radius: 2px;">
                        + Upload
                    </button>
                </div>
            </div>



        </div>
        
    </div>
    @endforeach
    <!-- Tombol Aksi di Kanan Bawah -->
    <div class="d-flex justify-content-end mt-4 mb-5">
        <div class="text-end">
            <button class="btn btn-success px-4 me-2 mb-2">Save</button>
            <button class="btn btn-warning text-white px-4 me-2 mb-2">Edit</button>
            <button class="btn btn-danger px-4 me-2 mb-2">Cancel</button>
            <button class="btn btn-primary px-4 mb-2">Submit</button>
        </div>
</div>

</div>
@endsection
