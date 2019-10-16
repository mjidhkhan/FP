 <div class="col-sm-12">
        @if(session()->get('success'))
            <div class="alert alert-success">
           <strong>{{ session()->get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif
</div>
