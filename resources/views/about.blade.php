{{-- 
   For Loop 
   Foreach Loop 
   For else Loop 
   While Loop 
--}}
{{-- FOR LOOP  3 Param
    1-initialization which is used to initialize the counter variable
    2-condition - evaluation if this is true the loop will continue & False loop ends
    3-update loop counter with the new value --}}
@for ($i = 0; $i <= 10; $i++)
    <h2>The number is {{ $i }}</h2>  
@endfor
        {{-- $names -- the entire param we want to loop through --}}
        {{-- we have keyboars as coz we dont want to print out entire array but specific element --}}

@foreach ($names as $name)
    <h2>The name is {{ $name }}</h2>
@endforeach

@forelse ($names as $name)
    <h2>The name is {{ $name }}</h2>
@empty
    <h2>THere are no names</h2>
@endforelse