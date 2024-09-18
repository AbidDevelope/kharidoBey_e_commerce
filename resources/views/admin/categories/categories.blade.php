@extends('admin.layouts.master')
@section('content')
    <!-- Content wrapper scroll start -->
    <div class="content-wrapper-scroll">

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->
            <div class="row">
                <div class="col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Categories</div>
                            <div class="ml-auto">
                                <a href="{{ route('category') }}" class="btn btn-success">
                                    <i class="bi bi-plus"></i>Category
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table v-middle m-0">
                                    <thead>
                                        <tr>
                                            <th>Sr. No</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $index => $category)
                                                <tr>
                                                    <td>
                                                        {{ $index + 1 }}
                                                    </td>
                                                    <td>
                                                        <div class="media-box">
                                                            <img src="{{ asset('assets/admin/images/categories/fashion/fashion1.jpg') }}"
                                                                class="media-avatar" alt="categories" />
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-box">
                                                            <div class="media-box-body">
                                                                <div class="text-truncate">{{ $category->name }}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $category->slug }}</td>
                                                    <td>
                                                        @if ($category->status == 1)
                                                            <span class="badge shade-green min-70">Active
                                                            </span>
                                                        @else
                                                            <span class="badge shade-red min-70">Inactive
                                                            </span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <div class="actions">
                                                            <a href="{{ route('categories/edit', $category->id) }}" class="viewRow" data-bs-toggle="modal"
                                                                data-bs-target="#viewRow">
                                                                <i class="bi bi-pencil text-green"></i>
                                                            </a>
                                                            <a href="{{ route('categories/delete', $category->id ) }}" class="deleteRow">
                                                                <i class="bi bi-trash text-red"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                        <tr>
                                            <td class="text-center" colspan="6" >No Record Available</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end -->

        </div>
        <!-- Content wrapper end -->

    </div>
    <!-- Content wrapper scroll end -->
@endsection
