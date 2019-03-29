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
            @if (count($books) > config('setting.number_default'))
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>@lang('content.stt')</th>
                            <th>@lang('content.name_book')</th>
                            <th>@lang('content.author')</th>
                            <th>@lang('content.publication_date')</th>
                            <th>@lang('content.number_page')</th>
                            <th>@lang('content.category')</th>
                            <th>@lang('content.delete')</th>
                            <th>@lang('content.edit')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $stt++ }}</td>
                                <td>{{ $book->book_title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->publication_date }}</td>
                                <td>{{ $book->number_page }}</td>
                                <td>{{ $book->category_id }}</td>
                                <td class="center">
                                    <i class="fa fa-trash-o  fa-fw"></i>
                                    {!! Form::open(['route' => ['books.destroy', $book->id], 'method' => 'DELETE']) !!}
                                    {!! Form::submit( trans('content.delete')) !!}
                                    {!! Form::close() !!}
                                </td>
                                <td class="center">
                                    <i class="fa fa-pencil fa-fw"></i>
                                    {!! Form::open(['route' => ['books.edit', $book->id], 'method' => 'GET']) !!}
                                    {!! Form::submit( trans('content.edit')) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{ $books->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
