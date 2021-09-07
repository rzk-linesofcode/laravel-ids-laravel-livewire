<div>
    <form wire:submit.prevent="update">
      <input type="hidden" name="" wire:model="contactId">
      <div class="container">
        <div class="row">
          <div class="col">
            <input wire:model="name" 
              type="text" name="" 
              id="" class="form-control 
              @error('name')
                is-invalid
              @enderror" 
              placeholder="Name...">
            
            @error('name')
              <span class="invalid-feedback">
                {{ $message }}
              </span>
            @enderror
          </div>
          <div class="col">
            <input wire:model="phone" 
              type="text" name="" 
              id="" class="form-control 
              @error('phone')
                is-invalid
              @enderror" 
              placeholder="Phone...">
              
              @error('phone')
                <span class="invalid-feedback">
                  {{ $message }}
                </span>
              @enderror
          </div>
        </div>
        <button class="btn btn-sm btn-primary my-3" type="submit">Update</button>
        {{-- <button class="btn btn-sm btn-primary my-3"  type="button" onclick="window.location='{{ URL::previous() }}'">Cancel</button> --}}
        <a class="btn btn-sm btn-primary my-3" href="{{ URL::previous() }}">Cancel</a>
      </div>    
    </form>
</div>
