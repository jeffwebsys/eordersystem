{{-- <form wire:submit.prevent="saveContact">
    <input type="text" wire:model.debounce.500ms="name">
    @error('name') <span class="error">{{ $message }}</span> @enderror

    <input type="text" wire:model.debounce.500ms="email">
    @error('email') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Contact</button>
</form> --}}


{{-- test --}}
<div class="col-md-12">
    <div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">General</h3>
    
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
    <i class="fas fa-minus"></i></button>
    </div>
    </div>
    <div class="card-body">
       

    
    
    {{-- <div class="form-group"> --}}
    {{-- <label for="image">Profile Image</label>
    <input type="file" class="form-control-file" id="image" name="image">
     --}}
    {{-- @error('image')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div> --}}
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        Success
    </div>
    @endif
    <form wire:submit.prevent="submit">
    <div class="form-group">
    <label for="fullname">Full Name</label>
    <input type="text" wire:model.debounce.500ms="fullname" class="form-control" rows="4">
    @error('fullname')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="position">Position</label>
    <input type="text" wire:model.debounce.500ms="position" class="form-control" rows="4">
    @error('position')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    
    <div class="form-group">
    <label for="education">Education</label>
    <input type="text" wire:model.debounce.500ms="education" class="form-control" rows="4">
    @error('education')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="form-group">
    <label for="location">Location</label>
    <input type="text" wire:model.debounce.500ms="location" class="form-control" rows="4">
    @error('location')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="form-group">
    <label for="skills">Skills</label>
    <input type="text" wire:model.debounce.500ms="skills" class="form-control" rows="4">
    @error('skills')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    <div class="form-group">
    <label for="notes">Notes</label>
    <input type="text" wire:model.debounce.500ms="notes" class="form-control" rows="4">
    @error('notes')
    <small class="text-danger">{{ $message }}</small>
    @enderror
    </div>
    
    
    <button type="submit" class="btn btn-info">Submit</button>
    </div>
    
    <!-- /.card-body -->
    
    </div>
    <!-- /.card -->
    
    </form>
    
    
    
    </div>