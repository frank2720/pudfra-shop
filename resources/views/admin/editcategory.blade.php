<!-- Edit Modal HTML -->
@extends('admin.main')
@section('title')
    {{__('Category edit')}}
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

        <form action="{{route('admin.category.update',['id'=>$category->id])}}" method="POST">
            @csrf
            @method('patch')
            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group my-3">
                            <label class="fw-bolder mb-2">{{__('Category Name')}}</label>
                            <input class="form-control" type="text" name="name" value="{{$category->category}}">
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
    </div>
</div>
@endsection
