@if (5 > 10)
    <p> 5 is lower than 10</p>
@elseif(5 == 10)
    <p> 5 is indeed lower than 10</p>
@else 
    <h2>All conditions are wrong!</h2>
@endif


@unless (empty($name))
    <h2>Name is not empty</h2>
@endunless

{{-- @if (!empty($name))
    <h2>Name is not</h2>
@endif --}}

@empty(!$name)
    <h2>Name is empty</h2>
@endempty

@isset($name)
    <h2>Name has been set</h2>
@endisset