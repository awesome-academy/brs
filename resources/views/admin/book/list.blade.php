@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@lang('content.book')
                    <small>@lang('content.list')</small>
                </h1>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>@lang('content.name_book')</th>
                        <th>@lang('content.author')</th>
                        <th>@lang('content.date')</th>
                        <th>@lang('content.category')</th>
                        <th>@lang('content.delete')</th>
                        <th>@lang('content.edit')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd gradeX" align="center">
                        <td>1</td>
                        <td>Áo Thun Nana</td>
                        <td>200.000 VNĐ</td>
                        <td>3 Minutes Age</td>
                        <td>Hiện</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> @lang('content.delete')</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#"> @lang('content.edit')</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
