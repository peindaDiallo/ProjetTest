<div id="deleteConfirmationModel" class="modal">
    <div class="modal-background --jb-modal-close">
    <div class="modal-card">
        <header class="modal-card-head">
            <p class="modal-card-title">{{ $message }}</p>
        </header>
        <form id="delete-frm" class="modal-card-body" action="" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="button small green --jb-modal" >{{ $confirm }}</button>

            <button type="button" class="button small red --jb-modal" onClick="dismissModel()">{{ $cancel }}</button>
        </form>
    </div>
</div>
</div>
