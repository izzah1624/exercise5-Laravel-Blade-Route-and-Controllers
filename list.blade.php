@extends('app')
@section('title', 'list of collection')
@section('content')
 <h1>The collection of E-Books</h1>

 <ul>
 @foreach($list as $lists)
 <li>{{ $lists }} </li>
 @endforeach
 </ul>
<BR> </BR>
 <p> TO MORE CLEAR REFERENCES ! </p>  

 <p> 1) Title : Pride and Prejudice    </p>  
 <p>ISBN 13: 9780061964367   </p>   
 <p> Book category : Romantic </p>   
 <p>no of pages : 567 </p>
 <br>

 <p>2) Title : Physics for Men: The Science Behind Being a Guy</p>
 <p>     ISBN 13: 9781440512797  </p>        
 <p>    Book category : Textbook </p>  
 <p>    No of page : 1000</p>

@endsection 