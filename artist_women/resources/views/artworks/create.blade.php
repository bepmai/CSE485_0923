@extends('layouts.base')

@section('title', 'HomeArtwork_create')

@section('main')
<div class="container">
    <div class="row">
        <h5 class="text-success text-center text-uppercase">Thêm</h5>
        <form action="{{route('artworks.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Tên nghệ sĩ</label>
                    <input type="text" name="artist_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mô tả</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Thể loại</label>
                    <select name="art_type" class="from-control">
                        <option value="hoihoa">hoi hoa</option>
                        <option value="amnhac">am nhac</option>
                        <option value="vanhoc">van hoc</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Link</label>
                    <input type="text" name="media_link" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ảnh</label>
                    <input type="file" name="cover_img" class="form-control">
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