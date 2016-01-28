@if(Session::has('message_create'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{!! Session::get('message_create') !!}</strong>
    </div>
@elseif(Session::has('message_update'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{!! Session::get('message_update') !!}</strong>
    </div>
@elseif(Session::has('message_delete'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>{!! Session::get('message_delete') !!}</strong>
    </div>
@endif
