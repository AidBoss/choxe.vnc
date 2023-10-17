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
                        <h4 class="m-0">Thêm sản phẩm mới</h4>
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
                                <form method="POST" action="">
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
                                            <input value="{{old('ten') ?? $dataDetail->ten}}" name="ten" type="text" class="form-control" id="inputEmail4"
                                                placeholder="name">
                                            @error('ten')
                                                <span class="error">{{ $errors->first('ten') }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Giá xe</label>
                                            <input name="gia" value="{{old('gia') ?? $dataDetail->gia}}" type="text" class="form-control"
                                                id="inputPassword4"placeholder="Giá">
                                            @error('gia')
                                                <span class="error">{{ $errors->first('gia') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Mô tả</label>
                                            <input name="mota" value="{{old('mota') ?? $dataDetail->mota}}" type="text" class="form-control" id="inputAddress"
                                                placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Ảnh xe</label>
                                            <div class="custom-file">
                                                <input name="list_anh" value="{{old('mota') ?? $dataDetail->list_anh}}"  type="file" class="custom-file-input"
                                                    id="inputGroupFile02">
                                                <label class="custom-file-label" for="inputGroupFile02">Chọn ảnh</label>
                                                @error('list_anh')
                                                    <span class="error">{{ $errors->first('list_anh') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputAddress2">Hãng xe</label>
                                            <select value="{{old('hang') ?? $dataDetail->hang}}"  name="hang" id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="Volvo">Volvo</option>
                                                <option value="Abarth">Abarth</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Audi">Audi</option>
                                                <option value="Toyota">Toyota</option>
                                                <option value="Tesla">Tesla</option>
                                                <option value="Zenos">Zenos</option>
                                            </select>
                                            @error('hang')
                                                <span class="error">{{ $errors->first('hang') }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">Dòng Xe</label>
                                            <input value="{{old('dongxe') ?? $dataDetail->hang}}" name="dongxe" type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">Xuất xứ</label>
                                            <input value="{{old('xuatxu') ?? $dataDetail->hang}}" name="xuatxu" type="text" class="form-control" id="inputZip">
                                            @error('xuatxu')
                                                <span class="error">{{ $errors->first('xuatxu') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Năm sản xuất</label>
                                            <input name="namsx" value="{{old('namsx') ?? $dataDetail->hang}}" type="date" class="form-control" id="inputZip">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Số km đã đi</label>
                                            <input name="kmdadi" value="{{old('kmdadi') ?? $dataDetail->hang}}" type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Số Chỗ</label>
                                            <input name="socho" value="{{old('socho') ?? $dataDetail->hang}}" type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Loại Nhiên liệu</label>
                                            <select value="{{old('nhienlieu') ?? $dataDetail->hang}}" name="nhienlieu" id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="xang">Xăng</option>
                                                <option value="dien">Điện</option>
                                                <option value="dau">dầu</option>
                                                <option value="hybrid">hybrid</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Hộp Số</label>
                                            <select value="{{old('hopso') ?? $dataDetail->hang}}" name="hopso" id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="tự động">Tự Động</option>
                                                <option value="Số Sàn">Số Sàn</option>
                                                <option value="Bán Tự Động">Bán Tự Động</option>
                                                <option value="Hybrid">hybrid</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Tên chủ xe</label>
                                            <input  value="{{old('chuxe') ?? $dataDetail->chuxe}}" name="chuxe" type="text" class="form-control" id="inputZip">
                                            @error('chuxe')
                                                <span class="error">{{ $errors->first('chuxe') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Số điện thoại liên hệ</label>
                                            <input value="{{old('sochuxe') ?? $dataDetail->chuxe}}" name="sochuxe" type="text" class="form-control" id="inputZip">
                                            @error('sochuxe')
                                                <span class="error">{{ $errors->first('sochuxe') }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Tỉnh Thành</label>
                                            <input  value="{{old('diachi') ?? $dataDetail->diachi}}" name="diachi" type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <button name="submit" type="submit" class="btn btn-success">Thêm Sản Phẩm</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
