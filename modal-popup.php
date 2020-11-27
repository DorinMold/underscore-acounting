<div class="modal fade" id="modal-popup">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4> Error message </h4>
                </div>
                <div class="modal-body">
                    <?php if($contact) echo "Your Name or your E-mail are not present. Please fill them in" ?>
                    <?php if($review) echo "Your Rating, Name or Your Message are not present. Please fill them in" ?>
                </div>
                <div class="modal-footer">
                   <button class="btn btn-warning" data-dismiss="modal"> Close </button>
                </div>
            </div>  
        </div>  
    </div>
</div>