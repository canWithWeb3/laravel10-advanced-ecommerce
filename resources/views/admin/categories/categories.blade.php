@extends("layouts.admin")

@section("content")
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h4">Kategoriler</h1>
        <a href="{{ url("/admin/kategoriler/ekle") }}" class="btn btn-success"><i class="fas fa-plus"></i> Ekle</a>
    </div>

    <div class="table-responsive">
        <table class="datatable table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Adı</th>
                    <th class="th-buttons-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url("/admin/kategoriler/".$category->id."/guncelle") }}" class="btn btn-warning btn-sm">Güncelle</a>
                            <button type="button" data-src="{{ url("/admin/kategoriler/".$category->id) }}" class="delete-btn btn btn-danger btn-sm">Kaldır</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection