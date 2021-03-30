{{-- 
    Comparing Multiple possible conditions 
    Multiple values that may require the same code
--}}

@switch($name)
    @case('Ali')
        <h2>Name is Ali!</h2>
        @break
    @case('Aliya')
        <h2>Name is Aliya !</h2>
        @break
    @case('John')
        <h2>Name is John!</h2>
        @break    
    @default
        <h2>No Match Found</h2>
        
@endswitch