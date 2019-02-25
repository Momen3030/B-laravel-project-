@extends('userpages.master')
<br><br><br><br>
@section('content')

<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Sender</th>
            <th scope="col">Image</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
           @if(count($notes)>0)
           @foreach ($notes as $note)
    
          <tr>
          <th scope="row">{{$note->id}}</th>
          <td>{{$note->sender_name}}</td>
          <td><img src="{{asset("storage/users/$note->sender_img")}}" width="50px" height="50px"></td>
            <td>{{$note->created_at}}</td>

          </tr>
                         
          @endforeach 
          @endif 
        </tbody>
      </table>

    
      @endsection      