<div>
    <form wire:submit.prevent="store">
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
        <button class="btn btn-sm btn-primary my-3" type="submit">Create</button>
      </div>    
    </form>
</div>
