@if (session()->has('success'))
<div class="alert alert-success alert-dismissible" id="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="close">x</button>
    <strong class="text-success">{{session()->get('success')}}</strong>
</div>
    
@endif