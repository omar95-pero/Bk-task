<!-- BASIC MODAL -->
<form id="Form" action="{{ route('schools.update',$school->id) }}" method="POST" >
    @method('put')
    @csrf

    <div class="form-group">
        <label for="recipient-name" class="col-form-label">School Name</label>
        <input type="text" name="name" class="form-control" id="recipient-name" value="{{$school->name}}">
    </div>
</form>

