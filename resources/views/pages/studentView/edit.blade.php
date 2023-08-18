<form action="{{ route('studentView.update',$student->id) }}" method="post" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-lg-12">
        <div class="form-group mt-3">
            <input class="form-control" type="text" name="name" value="{{ $student->name }}" placeholder="Enter Student Name" required>
        </div>
        <div class="form-group mt-3">
            <input class="form-control" type="text" name="stu_id" value="{{ $student->stu_id }}" placeholder="Enter Student ID" required>
        </div>
        <div class="form-group mt-3">
            <input class="form-control" type="number" name="age" value="{{ $student->age }}" placeholder="Enter Student age" required>

        </div>
        <div class="form-group mt-3 offset-4">
            <img src="{{ config('images.access_path') }}/{{ $student->images->name }}"
            alt="" width="100px" height="60px" >
        </div>
        {{-- <div class="form-group mt-3">
            <label  class="form-label">Upload Student Image</label>
            <input class="form-control" name="images" type="file"
                required accept="image/jpg, image/jpeg, image/png">
        </div> --}}
    </div>
    <div class="col-lg-4 offset-4 mt-3">
        <button type="submit" class="btn btn-info text-body">Update</button>
    </div>
</div>

</div>
</form>
