<x-header data="This is the first page for the component"/>
<h1> The Page Chasfat Projects made for its users {{20+70}}++</h1>

@for($i=0;$i<10;$i++)
<h4> {{$i}} </h4>
@endfor

@foreach($users as $user)
<h1> {{$user}}</h1>
@endforeach

@include('inner')
@csrf

<script>
    var data=@json($users);
    console.warn(data);
    </script>