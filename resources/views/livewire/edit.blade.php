@if($check == true)

<div class="popup">
    <h1>TEXT GOES HERE</h1>
    <div class="popup">
        <div class="half first-half">
            <table>
                <tr>
                    <th>Type</th>
                    <th>Firename</th>
                    <th>Serial Number</th>
                    <th>Building</th>
                    <th>Floor</th>
                    <th>Room</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th> <!-- Add a new column for the action button -->
                </tr>
            </table>
        </div>
        <div class="half second-half">
            <table>
                @foreach($fire_list as $fire_fetch_list)
                <tr>
                    <td>{{ $fire_fetch_list['type']}}</td>
                    <td class="{{ empty($fire_fetch_list['firename']) ? 'empty' : '' }}">{{ $fire_fetch_list['firename'] ?: 'Empty' }}</td>
                    <td>{{ $fire_fetch_list['serial_number']}}</td>
                    <td>{{ $fire_fetch_list->firebuilding->building }}</td>
                    <td>{{ $fire_fetch_list->firefloor->floor }}</td>
                    <td>{{ $fire_fetch_list->fireroom->room }}</td>
                    <td>{{ $fire_fetch_list['description']}}</td>
                    <td>{{ $fire_fetch_list['status']}}</td>
                    <td> <!-- Add a new cell for the action button -->
                        <button wire:click="updateFire({{ $fire_fetch_list->id }})">EDIT</button>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div> 
</div>

@else
<livewire:rokoko :firename="$firename"/>
@endif








{{-- <style>
    .half {
    border: none; /* Just for visualization */
}

.first-half th{ 
    display: flex;
    flex-direction: row;
    background: transparent;
    color: blue;
    font-size: 15px;
    line-height: 1.5; 
    padding: 5px 10px; /* Adjust the padding to increase or decrease vertical spacing */
    border-right: 25px;
}



.second-half tr td{
    display: flex;
    flex-direction: row;
    background: none;
    color: blue;
    font-size: 15px;
    line-height: 1.5; 
    padding: 5px 10px; /* Adjust the padding to increase or decrease vertical spacing */
    border-right: 25px;
}
.popup {
    margin-top: 18px;
    display: flex;
    margin-left: 3%;
    flex-direction: row;
    background-color: none;
    background:none;

}
</style> --}}