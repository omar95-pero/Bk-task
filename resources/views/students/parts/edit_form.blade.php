                    <form id="Form" action="{{ route('students.update',$student->id) }}" method="POST" >
                       @method('put')
                        @csrf

                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Student Name</label>
                            <input type="text" name="name" class="form-control" id="recipient-name" value="{{ $student->name }}">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">School Id</label>
                             <select name="school_id" class="form-select" aria-label="Default select example">
                                 <option label="Select Country" disabled selected>Select School</option>
                                 @foreach ($schools as $school)
                                   <option value="{{ $school->id }}" @if ($school->id == $student->school_id)
                                       {{ 'selected' }}
                                   @endif>{{ $school->name }}</option>
                                 @endforeach

                            </select>
                        </div>
                    </form>