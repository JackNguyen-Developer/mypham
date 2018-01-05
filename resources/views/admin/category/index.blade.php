@extends('layouts.master-auth')

@section('title')

    <title>Category</title>

@endsection

@section('content')
    <div class="content-wrapper">
    <div class="container">
        <section class="content-header">

            <ol class="breadcrumb">

                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="/profiles">Brand</a></li>
                <li class="active">Index</li>

            </ol>

        </section>
        <div class="content">

            <div class="panel panel-default">
                <div class="panel-heading">Category</div>
                <div class="panel-body">
                    <a href="{{ url('/admin/category/create') }}" class="btn btn-success btn-sm" title="Add New category">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>

                    <form method="GET" action="{{ url('/admin/category') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>#</th><th>Title</th><th>Slug</th><th>Note</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $item)
                                <tr>
                                    <td>{{ $loop->iteration or $item->id }}</td>
                                    <td>{{ $item->title }}</td><td>{{ $item->slug }}</td><td>{{ $item->note }}</td>
                                    <td>
                                        <a href="{{ url('/admin/category/' . $item->id) }}" title="View category"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                        <a href="{{ url('/admin/category/' . $item->id . '/edit') }}" title="Edit category"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/admin/category' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-xs" title="Delete category" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $category->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
