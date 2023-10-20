@extends('layouts.base')

@section('title', 'HomeArtwork')

@section('main')
<div class="row p-3">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <h5 class="text-success text-center text-uppercase">Artwork</h5>
        @if( Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="overflow-auto">
            <table class="table table-bordered table-success table-striped">
                <thead>
                    <tr class="text-center">
                        <th>STT</th>
                        <th>Tên nghệ sĩ</th>
                        <th>Mô tả</th>
                        <th>Thể loại</th>
                        <th>Link</th>
                        <th>Ảnh</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artworks as $artwork)
                    <tr>
                        <td>{{ $artwork->id}}</td>
                        <td>{{ $artwork->artist_name}}</td>
                        <td>{{ $artwork->description}}</td>
                        <td>{{ $artwork->art_type}}</td>
                        <td>{{ $artwork->media_link}}</td>
                        <td>{{ $artwork->cover_img}}</td>
                        <td>
                            <form action="{{route('artworks.destroy', $artwork->id)}}" method="post">
                                @csrf
                                <a href="{{route('artworks.edit', $artwork->id)}}" class="btn btn-success btn-sm"><img
                                        src="{{ asset('bootstrap_icons/pencil.svg') }}" alt=""></a>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('artworks.destroy', $artwork->id) }}" method="post"
                                onsubmit="return confirmDelete('{{ $artwork->id }}')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary btn-sm">
                                    <img src="{{ asset('bootstrap_icons/trash3.svg') }}" alt="">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('artworks.create') }}" class="btn btn-success btn-sm float-end mt-2">Thêm</a>
    </div>
    <div class="col-md-1"></div>
</div>
<script>
function confirmDelete(id) {
    if (confirm("Bạn có chắc chắn muốn xóa nghệ sĩ này không này không?")) {
        $.ajax({
            url: "{{ route('artworks.destroy', '') }}" + "/" + id,
            type: 'DELETE',
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function(data) {
                location.reload();
            },
            error: function(data) {
                alert('Có lỗi xảy ra trong quá trình xóa.');
            }
        });
    } else {
        return false;
    }
}
</script>
@endsection