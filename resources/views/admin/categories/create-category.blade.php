@extends("layouts.admin")

@section("content")
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h4">Kategori Ekle</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ url("/admin/kategoriler") }}" method="POST">
                @csrf
                <div class="col-xl-4 col-md-6 mb-3">
                    <label for="name" class="form-label">Adı:</label>
                    <input type="text" name="name" id="name" class="form-control @error("name") is-invalid @enderror" value="{{ old("name") }}">
                    @error("name") <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Ekle</button>
                </div>
            </form>
        </div>
    </div>

@endsection