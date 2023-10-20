@extends('admin.form.newFormAdmin')
@section('title')
    {{ $title }}
@endsection
@section('body_new')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">Chỉnh sửa sản phẩm</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add New Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-header border-0">
                            </div>
                            <div class="card-body ">
                                <form method="POST" action="{{route('editProductsPost')}}" enctype="multipart/form-data">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            Dữ liệu nhập không hợp lệ.
                                        </div>
                                    @endif
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Tên Xe</label>
                                            <input value="{{old('ten')?? $dataDetail->ten}}" name="ten" type="text" class="form-control" id="inputEmail4"
                                                placeholder="name">
                                            @error('ten')
                                                <span class="error">{{ $errors->first('ten') }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Giá xe</label>
                                            <input value="{{old('gia')?? $dataDetail->gia}}" name="gia" type="text" class="form-control"
                                                id="inputPassword4"placeholder="Giá">
                                            @error('gia')
                                                <span class="error">{{ $errors->first('gia') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Mô tả</label>
                                            <input value="{{old('mota')?? $dataDetail->mota}}" name="mota" type="text" class="form-control" id="inputAddress"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Ảnh xe</label>
                                            <div class="custom-file">
                                                <input  name="anh" type="file" class="custom-file-input"
                                                    id="inputGroupFile02">
                                                <label class="custom-file-label" for="inputGroupFile02">Chọn ảnh</label>
                                                @error('anh')
                                                    <span class="error">{{ $errors->first('anh') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Hãng xe</label>
                                            <select name="category_id" id="inputState" class="form-control">
                                                <option selected value="0">Choose...</option>
                                                    @if(!empty($allCategory))
                                                        @foreach($allCategory as $item)
                                                            <option value="{{$item->id}}">{{$item->hang}}</option>
                                                        @endforeach
                                                    @endif
                                            </select>
                                            @error('category_id')
                                                <span class="error">{{ $errors->first('category_id') }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">Xuất xứ</label>
                                            <input value="{{old('xuatxu')?? $dataDetail->xuatxu}}" name="xuatxu" type="text" class="form-control" id="inputZip">
                                            @error('xuatxu')
                                                <span class="error">{{ $errors->first('xuatxu') }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Năm sản xuất</label>
                                            <input value="{{old('namsx')?? $dataDetail->namsx}}" name="namsx" type="month" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Số km đã đi</label>
                                            <input value="{{old('kmdadi')?? $dataDetail->kmdadi}}" name="kmdadi" type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Số Chỗ</label>
                                            <input value="{{old('socho')?? $dataDetail->socho}}" name="socho" type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Loại Nhiên liệu</label>
                                            <select name="nhienlieu" id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="Xăng">Xăng</option>
                                                <option value="Điện">Điện</option>
                                                <option value="Dầu">dầu</option>
                                                <option value="Hybrid">hybrid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Hộp Số</label>
                                            <select name="hopso" id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="tự động">Tự Động</option>
                                                <option value="Số Sàn">Số Sàn</option>
                                                <option value="Bán Tự Động">Bán Tự Động</option>
                                                <option value="Hybrid">hybrid</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Tên chủ xe</label>
                                            <input value="{{old('chuxe')?? $dataDetail->chuxe}}" name="chuxe" type="text" class="form-control" id="inputZip">
                                            @error('chuxe')
                                                <span class="error">{{ $errors->first('chuxe') }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Số điện thoại liên hệ</label>
                                            <input value="{{old('sochuxe')?? $dataDetail->sochuxe}}" name="sochuxe" type="text" class="form-control" id="inputZip">
                                            @error('sochuxe')
                                                <span class="error">{{ $errors->first('sochuxe') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Tỉnh Thành</label>
                                            <input value="{{old('diachi')?? $dataDetail->diachi}}" name="diachi" type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <button name="submit" type="submit" class="btn btn-success">Thêm Sản Phẩm</button>
                                    <a href="{{route('showListProducts')}}" class="btn btn-warning">Trở lại</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
