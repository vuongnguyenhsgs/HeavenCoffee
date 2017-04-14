@extends('layouts.admin')

@section('page-title','Danh mục đồ uống')

@section('page-content')
<script type="text/javascript">
        $('.selectbox').select2();
</script>

<div class="row">
    <div class="row col-lg-10 col-lg-offset-1">
        <form action="/Admin/drinks" method="GET">
        <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <label class="label-input">Loại đồ uống</label>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-9 col-xs-9">
                    <select class="selectbox form-control" id="cobCategory" name="cobCategory">
                        @if($categoryId == 0)
                        <option value="0" selected="selected">Tất cả</option>
                        @else
                        <option value="0">Tất cả</option>
                        @endif
                        @foreach($categories as $category)
                        @if($category->id = $categoryId)
                        <option value="{!!$category->id!!}" selected="selected">{!!$category->name!!}</option>
                        @else
                        <option value="{!!$category->id!!}">{!!$category->name!!}</option>
                        @endif  
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <label class="label-input">Tên đồ uống</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                    <input class="form-control" type="text" id="searchedName" name="searchedName" value=""/>
                </div>
            </div>
        </div>
        </div>
        <div class="row" style="margin-top: 20px">
            <div class="col-lg-4 col-lg-offset-7">
                <button type="button" class="btn btn-primary" id="btnAddNewDrink"><i class="fa fa-plus"></i><span> Thêm mới</span></button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i><span> Tìm kiếm</span></button>
            </div>
        </div>
        </form>
    </div>
</div>
        

<div class="row margin-top-30 col-lg-10 col-lg-offset-1">
    <div class="row" style="margin-top: 5px">
    <table class="table table-bordered">
        <thead>
            <td>STT</td>
            <td>Tên đồ uống</td>
            <td>Loại đồ uống</td>
            <td>Đơn giá</td>
            <td style="width: 100px">Tùy chọn</td>
        </thead>
        <tbody>
            <?php $i = ($drinks->currentPage()-1) * $drinks->perPage() + 1; ?>
            @foreach($drinks as $drink)
            <tr>
                <td style="text-align: center">{!!$i++!!}</td>
                <td>{!!$drink->name!!}</td>
                <td>{!!$drink->category_name!!}</td>
                <td style="text-align: center">{!!$drink->price!!}</td>
                <td style="padding-left: 0px 30px 0px 30px">
                    <i class="fa fa-pencil-square-o"></i>
                    <i class="fa fa-trash-o" style="margin-left: 20px"></i>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="row" style="text-align: center">
        {!!$drinks->links()!!}
    </div>
</div>
@endsection
