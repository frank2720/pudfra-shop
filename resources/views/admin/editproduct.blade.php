<!-- Edit Modal HTML -->
@extends('admin.main')
@section('title')
    {{__('Product edit')}}
@endsection
@section('maintitle')
    {{__('Ecommerce')}}
@endsection
@section('pagetitle')
    {{__('Edit')}}
@endsection
@section('content')
<div class="card overflow-auto">
    <div class="card-body pb-0">
        <h5 class="card-title">Update Product details</h5>
        <style>
            .remove-image {
            display: none;
            position: absolute;
            top: -10px;
            right: -10px;
            border-radius: 10em;
            padding: 2px 6px 3px;
            text-decoration: none;
            font: 700 21px/20px sans-serif;
            background: #555;
            border: 3px solid #fff;
            color: #FFF;
            box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 2px 4px rgba(0,0,0,0.3);
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
            -webkit-transition: background 0.5s;
            transition: background 0.5s;
            }
            .remove-image:hover {
            background: #E54E4E;
            padding: 3px 7px 5px;
            top: -11px;
            right: -11px;
            }
            .remove-image:active {
            background: #E54E4E;
            top: -10px;
            right: -11px;
            }
            img {
            width: 200px;
            height: 300px;
            object-fit: contain;
            }
            .row {
            display: flex;
            }

            .column {
            flex: 20%;
            }
            .btn-update {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 80%;
            margin-left: 3px;
            }
            [data-title]{
                position: relative;
            }

            [data-title]:hover::before {
            content: attr(data-title);
            position: absolute;
            bottom: -26px;
            display: inline-block;
            padding: 3px 6px;
            border-radius: 2px;
            background: #000;
            color: #fff;
            font-size: 12px;
            font-family: sans-serif;
            white-space: nowrap;
            }
            [data-title]:hover::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 8px;
            display: inline-block;
            color: #fff;
            border: 8px solid transparent;	
            border-bottom: 8px solid #000;
            }
        </style>
        <div class="row my-3">
            @foreach ($images as $image)
            <div class="column">
                <img src="{{Storage::url($image->url??null)}}"  alt="product image">
                <a class="remove-image" href="{{route('admin.image.delete',['id'=>$image->id])}}" style="display: inline;" data-title="Delete image">&#215;</a>
            </div>
            @endforeach
        </div>
        <button class="btn btn-dark" data-title="Add more image" data-bs-toggle="modal" data-bs-target="#addImages"><i class="bx bx-folder-open"></i></button>
        <form id="product-form" action="{{route('admin.products.update',['id'=>$product->id])}}" method="POST">
            @csrf
            @method('patch')
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group my-3">
                            <label class="fw-bolder mb-2">{{__('Product Name')}}</label>
                            <input class="form-control" type="text" name="name" value="{{$product->name}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group my-3">
                            <label class="fw-bolder mb-2">Select Category</label>
                          <select class="form-select" value="{{$product->category->category}}" name="category">
                                <option disabled>{{__('Open to select Category')}}</option>
                                @foreach ($categories as $category)
                                    <option value={{$category->id}}>{{$category->category}}</option>
                                @endforeach
                          </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group my-3">
                            <label class="fw-bolder mb-2">{{__('Product Price')}}</label>
                            <input class="form-control" type="number" min="0" name="price" value="{{$product->price}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group my-3">
                            <label class="fw-bolder mb-2">{{__('Retail Price')}}</label>
                            <input class="form-control" type="number" min="0" name="retail_price" value="{{$product->retail_price}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group my-3">
                            <label class="fw-bolder mb-2">{{__('Description')}}</label>
                            <!-- Quill editor container -->
                            <div id="editor-container">{!! $product->description !!}</div>
                            <!-- Hidden textarea to store the Quill editor content -->
                            <textarea name="description" hidden id="quill-editor-area"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="my-5">
                            <input type="submit" class="btn btn-success btn-update" value="Update">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var quill = new Quill('#editor-container', {
                    theme: 'snow'
                });
        
                var quillEditor = document.getElementById('quill-editor-area');
                quill.on('text-change', function() {
                        quillEditor.value = quill.root.innerHTML;
                });
                quillEditor.addEventListener('input', function() {
                    quill.root.innerHTML = quillEditor.value;
                });
            });
        </script>
        
    </div>
</div>

<div class="modal fade" id="addImages" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog">
    <div class="modal-content">

        <form action="{{route('admin.add.images',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title">Add More Images</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="fw-bolder my-2" for="p_img">{{__('Images')}}</label>
                                <input type="file" id="p_img" name="img[]" class="form-control" multiple required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
                <input type="submit" class="btn btn-success" value="Add">
            </div>
        </form>
    </div>
    </div>
</div><!-- End moreImages Modal-->
@endsection
