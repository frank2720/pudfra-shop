@extends('admin.main')
@section('content')
<div id="addcategoryModal" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    {{__('Add Products Category')}}
                </h4>
            </div>
            <form action="{{route('categories.store')}}" method="POST" id="categoryform" class="form-horizontal">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cat">Category</label>
                        <input class="form-control" type="text" name="category" id="cat">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection