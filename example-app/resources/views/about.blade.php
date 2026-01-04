<h1>About page</h1>
{{4+4}}
<br><br>

{{"Hello world"}}
<br><br>
{{" <h1>Hello world</h1> "}}

<br><br>
{!! "<h1>How are you</h1>"!!}
<br><br>
{{-- {{!!"<script>alert('sakiul kawsar')</script>"!!}} --}}
<br><br>
{{!!"<script>('how are you'</script></script>"!!}}

<br><br>
{{-- this is the first page for about our company --}}
@php
    $users = ["rohim", "korim", "khalek", "masud"];
    $name = "jihad";
  @endphp  

<ul>
    @foreach ($users as $user )
    @if ($loop->first)
       <li style="color:red">{{ $user }}</li>  
     @elseif ($loop->last)
       <li style="color:green">{{ $user }}</li>
       
   @else()
   <li>{{ $user }}</li>
   
       @endif  
    @endforeach
    </ul>
   



