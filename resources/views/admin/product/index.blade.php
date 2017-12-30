@extends('layouts.master-auth')

@section('title')

    <title>Products</title>

@endsection

@section('content')
    <div class="content-wrapper">
    <div class="container">
        {{--<div class="row">--}}
            {{--@include('admin.sidebar')--}}

            <section class="content">
                <div class="panel panel-default">
                    <div class="panel-heading">Product</div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/product/create') }}" class="btn btn-success btn-sm" title="Add New product">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/product') }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                        <th>#</th><th>Name</th><th>Slug</th><th>Info</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($product as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->slug }}</td><td>{{ $item->info }}</td>
                                        <td>
                                            <a href="{{ url('/admin/product/' . $item->id) }}" title="View product"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/product/' . $item->id . '/edit') }}" title="Edit product"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $product->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </section>
        {{--</div>--}}
    </div>
    </div>
@endsection
