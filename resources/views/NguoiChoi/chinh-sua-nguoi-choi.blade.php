@extends('master-page')
@section('page-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
               
                <form action="{{ route('xu-ly-chinh-sua-nguoi-choi', ['id' => $nguoiChoi->id]) }}" method="POST">
        
                    @csrf
                    <div class="form-group">
                        <label for="ten_dang_nhap">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap" value="{{ $nguoiChoi->ten_dang_nhap }}">
                    </div>
                    <div class="form-group">
                        <label for="mat_khau">Mật khẩu</label>
                        <input type="password" class="form-control" id="mat_khau" name="mat_khau">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"  value="{{ $nguoiChoi->email }}" >
                    </div>
                    <!-- START -->
                    <div class="form-group">
                        <label for="hinh_dai_dien">Hình đại diện</label><br />
                        <input type="file" id="hinh_dai_dien" name="hinh_dai_dien" value="{{ $nguoiChoi->hinh_dai_dien }}">
                    </div>
                    <!-- END -->
                    <div class="form-group">
                        <label for="diem_cao_nhat">Điểm cao nhất</label>
                    <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat" value="{{ $nguoiChoi->diem_cao_nhat }}" >
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cập Nhật</button>
                </form>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->
</div>
@endsection