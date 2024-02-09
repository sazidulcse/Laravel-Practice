<address>
Name : Sazidul Rahman Emon 
<br>
Student: Satkhira Polytechnic Institute
<br>
Depertment: Computer Science & Engineering
<br>

@foreach( $roll as $num )
Roll:{{$num}}
@endforeach
</address>

<br>
<br>
<a href="{{url('/')}}" >Home</a>
<a href="{{url('/info')}}">contact</a>

<a href="{{url('/about')}}">About</a>
