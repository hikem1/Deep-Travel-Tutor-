<div id="myModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content bg-black border-dark text-light">
            <div class="modal-header border-dark">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-dark">
                <p><?= $modalTextContent; ?></p><span id="user-id"></span>
            </div>
            <div class="modal-footer border-dark">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <a id="confirm-btn" class="btn btn-success" >Confirmer</a>
            </div>
        </div>
    </div>
</div>
