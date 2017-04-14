@extends('layouts.admin')

@section('page-title','Thêm mới đồ uống')

@section('page-content')

<div class="row">
    <input type="hidden" id="csrf-token" value="{!! csrf_token() !!}">
    <div class="row col-lg-10 col-lg-offset-1">
        <div class="row row-input">
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <label class="label-input">Loại đồ uống</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <select class="selectbox form-control" id="cobCategory" name="cobCategory">
                            @foreach($categories as $category)
                            <option value="{!!$category->id!!}">{!!$category->name!!}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <label class="label-input">Tên đồ uống</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input class="form-control" type="text" id="txtDrinkName" name="txtDrinkName"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-input">
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <label class="label-input">Đơn giá</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <input class="form-control" type="text" id="txtPrice" name="txtPrice"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-input">
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <label class="label-input">Mô tả</label>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <textarea class="form-control" rows="10" cols="80" id="txtDescription" name="txtDescription">
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                Ảnh 1<input type="file" name="image1" id="image1">
                Ảnh 2<input type="file" name="image2" id="image2">
                Ảnh 3<input type="file" name="image3" id="image3">
                Ảnh 4<input type="file" name="image4" id="image4">
            </div>
        </div>
        <div id="errorArea" style="text-align: center">
            <label id="addDrinkMessage" class="alert-danger"></label>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-lg-4 col-lg-offset-8">
                <button type="button" class="btn btn-primary" id="btnSaveDrink"><i class="fa fa-floppy-o"></i><span> Lưu</span></button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        CKEDITOR.replace('txtDescription');
</script>
@endsection