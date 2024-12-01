@if ($message = Session::get('success'))
    <div style="padding: 15px; color:white; background-color:rgb(36, 88, 36)">
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = Session::get('danger'))
    <div style="padding: 15px; color:white; background-color:rgb(136, 43, 43)">
        <p>{{ $message }}</p>
    </div>
@endif