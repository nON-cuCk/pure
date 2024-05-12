<style>
    .floor-content {
        display: inline-block;
        padding: 20px;
        position: relative;
    }

    /* Other styles... */

    .FCRH,
    .RA,
    .LRA,
    .LBS,
    .IAO,
    .ITO,
    .ITO-DS,
    .LSR,
    .OOTL,
    .RPS,
    .LS,
    .GSS {
        position: absolute;
        cursor: pointer;
        display: flex;
        gap: 10px;
    }

    /* Rest of the styles... */

    .popup {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        z-index: 1;
    }

    .popup:after {
        content: "";
        position: absolute;
        top: -10px;
        left: 50%;
        margin-left: -5px;
        border-width: 10px;
        border-style: solid;
        border-color: transparent transparent #f9f9f9 transparent;
    }

    .eye-icon:hover + .popup {
        display: block;
    }
    .eye-icon {
    padding: 10px; /* Adjust the padding size as needed */
}

.popup {
    /* Other styles... */
    padding: 5px; /* Adjust the padding size as needed */
}

</style>

<div class="scroll-container">
    <div id="second-floor" class="floor-content">
        <img src="{{ asset('assets/img/CasSecondFloor.png') }}" alt="SecondFloor" width="1000px" height="300px">
        <span class="FCRH"><i class="fas fa-eye eye-icon"></i><span class="popup">Success</span></span>
        <span class="FCRH"><i class="fas fa-edit edit-icon"></i><span class="popup">Success</span></span>
        <!-- Rest of the spans... -->
        <h1>SECOND FLOOR</h1>
    </div>
</div>
