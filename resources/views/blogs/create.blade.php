@extends('layouts.admin')
@section('content')
<div class="page-header">
    <div class="page-header-content d-lg-flex container">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Blogs - <span class="fw-normal"> @if($data) Edit {{$data->title}} @else Add New @endif</span>
            </h4>
            <a href="#page_header" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse"> <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i> </a>
        </div>

        <div class="collapse d-lg-block my-lg-auto ms-lg-auto" id="page_header">
            <div class="hstack gap-3 mb-3 mb-lg-0">
                <a href="{{route('blogs.index')}}" class="btn btn-light"> <i class="ph-arrow-left me-2"></i> Back to Blogs </a>
            </div>
        </div>
    </div>
</div>
<div class="content container pt-0">
    <form method="post" @if($data) action="{{route('blogs.update', $data->id)}}" @else action="{{route('blogs.store')}}" @endif id="uf" enctype="multipart/form-data" >
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label">Title: <span class="text-danger">*</span></label>
                    <input type="text" name="title" @if($data) value="{{$data->title}}" @else value="{{old('title')}}" @endif class="form-control form-control-lg" required>
                </div>
                @if($data)
                    <div class="mb-3">
                        <label class="form-label">Slug: <span class="text-danger">*</span></label>
                        <input type="text" name="slug" value="{{$data->slug}}" class="form-control " required>
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Full Description: <span class="text-danger">*</span></label>
                    <textarea class="ckeditor form-control" name="desc" >@if($data) {{$data->desc}} @else {{old('desc')}} @endif</textarea>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Meta Title:</label>
                            <input type="text" name="meta_title" @if($data) value="{{$data->meta_title}}" @else value="{{old('meta_title')}}" @endif class="form-control " >
                        </div>
                    </div>
    
                    <div class="col-md-12">
                        <label class="form-label">Meta Description:</label>
                        <textarea name="meta_desc" class="form-control " > @if($data) {{$data->meta_desc}} @else {{old('meta_desc')}} @endif</textarea>
                    </div>
    
                    <div class="col-md-12">
                        <label class="form-label">Meta Keys:</label>
                        <input type="text" name="meta_keys" data-role="tagsinput" class="form-control tagsinput-typeahead form-control" value="{{ old('meta_keys', $data->meta_keys ?? '') }}" placeholder="Type and hit Enter">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border mt-4 mb-4">
                    <div class="card-header">
                        <h6 class="mb-0">Publish</h6>
                    </div>
                    <div class="card-body">
                        <table class="publish-date-table">
                            <tbody>
                                <tr>
                                    <td>Publish Date</td>
                                    <td>:</td>
                                    <td>
                                        <div class="input-group" id="er6">
                                            <span class="input-group-text">
                                                <i class="ph-calendar-check"></i>
                                            </span>
                                            <input type="date" name="created_at" @if($data) value="{{\Carbon\Carbon::parse($data->created_at)->toDateString()}}" @else value="{{\Carbon\Carbon::parse(old('created_at',null))->toDateString()}}" @endif class="form-control" placeholder="16/05/2024" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Active</td>
                                    <td>:</td>
                                    <td>
                                        <select name="status" class="form-select" required>
                                            <option value="1" {{ old('status', $data->status ?? '') == '1' ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ old('status', $data->status ?? '') == '0' ? 'selected' : '' }}>Draft</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="author" @if($data) value="{{$data->author}}" @else value="{{old('author',null)}}" @endif class="form-control" placeholder="Author" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success btn-lg d-block">Save <i class="ph ph-arrow-right ms-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card border mt-4 mb-4">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Cover Image:</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                            <div class="form-text">Recommended Size: 500x300</div>
                            @if($data) @if(!is_null($data->image))
                                <img src="{{asset('storage/blogs/small/'.$data->image)}}" alt="" class="img-fluid border p-1" width="40%" >
                                <a href="javascript:void(0)" onclick="event.preventDefault();  if(confirm('Are you sure to delete this cover image ?') == true)  document.getElementById('deleteBlogImageForm').submit();" class="btn btn-flat-primary btn-icon"><i class="ph ph-trash" title="Delete Cover Image"></i></a>
                            @endif @endif
                        </div>
                    </div>
                </div>
                <div class="card border mt-4 mb-4">
                    <div class="card-header">
                        <h6 class="mb-0">Categories</h6>
                    </div>
                    <div class="card-body">
                        <div id="er7">
                        @foreach ($categories as $c)
                            <div class="form-check mb-2">
                                <input type="checkbox" name="categories[]" value="{{$c->id}}" class="form-check-input" id="cc{{$c->id}}" @if(old('categories')) {{ in_array($c->id, old('categories')) ? 'checked' : '' }} @elseif($data && $data->brackets()->where('brackets.id', $c->id)->exists()) checked @endif >
                                <label class="form-check-label" for="cc_ls_c">{{$c->name}}</label>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @csrf
        @if($data)
            @method('PUT')
        @endif
    </form>
    @if($data)
        @if(!is_null($data->image))
            <form id="deleteBlogImageForm" action="{{ route('deleteBlogImage', $data->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        @endif
    @endif
</div>
<script>
    $("#uf").validate({
        ignore: "",
        rules: {
            title: { required: true },
            created_at: { required: true },
            author: { required: true },
            desc: { required: true },
            status: { required: true },
            "categories[]": { required: true }
            @if($data)
            ,slug: { required: true }
            @else
            ,image: { required: true }
            @endif
        },
        messages: {
            title: "Please enter the title",
            created_at: "Please enter the publish date",
            author: "Please add an author",
            desc: "Please add blog description",
            status: "Please select the active status",
            "categories[]": "Please select at least one category",
            @if(!$data)
                image: "Please upload a cover image"
            @endif
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == 'created_at') {
                error.insertAfter($("#er6"));
            } else if (element.attr("name") == 'categories[]') {
                error.insertAfter($("#er7"));
            }else {
                error.insertAfter(element);
            }
        },
        highlight: function(element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
        }
    });
</script>
@endsection