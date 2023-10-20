@extends('layouts.base')

@section('title', 'HomeArtwork_edit')

@section('main')
<div class="container">
    <div class="row">
        <h5 class="text-success text-center text-uppercase">Sửa</h5>
        <form action="{{route('artworks.update', $artwork->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Tên nghệ sĩ</label>
                    <input type="text" name="artist_name" class="form-control" value="{{$artwork->artist_name}}"
                        required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" class="form-control" required>{{$artwork->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Thể loại</label>
                    <select name="art_type" class="from-control">
                        <option value="hoihoa" {{$artwork->art_type == "hoi hoa" ? 'selected' : ''}}>hoi hoa</option>
                        <option value="amnhac" {{$artwork->art_type == "am nhac" ? 'selected' : ''}}>am nhac</option>
                        <option value="vanhoc" {{$artwork->art_type == "van hoc" ? 'selected' : ''}}>van hoc</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" name="media_link" class="form-control" value="{{$artwork->media_link}}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Ảnh</label>
                    <input type="file" name="cover_img" class="form-control" value="{{$artwork->cover_img}}" required>
                </div>
            </div>
            <div class="float-end">
                <button type="submit" class="btn btn-success btn-sm">Lưu</button>
                <a href="{{route('artworks.index')}}" class="btn btn-secondary btn-sm">Thoát</a>
            </div>
        </form>
    </div>
</div>
@endsection