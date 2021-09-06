<div>
    <form wire:submit.prevent="store">
      <div class="flex flex-row grid-cols-2">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
          <div class="grid grid-cols-1">
            <input wire:model="name" type="text" name="" id="" class="form-control" placeholder="Name...">
          </div>
          <div class="grid grid-cols-1">
            <input wire:model="phone" type="text" name="" id="" class="form-control" placeholder="Phone...">
          </div>
        </div>
      </div>

      <div class="flex flex-row grid-cols-2">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mb-5 mx-7">
          <div class="grid grid-cols-1">
            <button type="submit" class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">Submit</button>
          </div>
        </div>
      </div>
    </form>
</div>
