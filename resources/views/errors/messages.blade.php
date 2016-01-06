
    @if (count($errors) > 0)
    <div class="alert alert-danger fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @foreach ($errors->all() as $error)
        <div>{{$error}}</div>
        @endforeach
    </div>
    @endif
    
    @if (session('message'))
    <div class="alert alert-info fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ session('message') }}
    </div>
    @endif
    
    @if (session('error'))
    <div class="alert alert-danger fade in alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{ session('error') }}
    </div>
    @endif
