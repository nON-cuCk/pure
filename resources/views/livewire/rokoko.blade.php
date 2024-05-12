<div class="ramen" width="70%">
    
<div>
   <h1>WELCOME TO EDIT</h1>


            <form wire:submit.prevent="update" enctype="multipart/form-data">
                                    <div class="form-group local-forms">
                                        <label>Name</label>
                                        <input class="form-control" type="text" wire:model="firename"/>
                                    </div>
                              <button wire:click="update({{ $fire->id }})">Update</button>
            </form>
</div>

</div>