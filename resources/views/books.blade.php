<!DOCTYPE html>
<html>
<head>
	<title>books</title>
</head>
<body>

@if(Session::has('message'))
<p class="well"> {{Session::get('message')}} </p>
@endif

<form action="{{$is_edit ? route('books.update', $gid) : route('books.store')}}" method="post">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="text" name="name" value="{{$is_edit ? $fetch_record->name : null}}">
	<input type="text" name="description" value="{{ $is_edit ? $fetch_record->description : null}}" >
	<input type="submit" name="btns" value="submit">
</form>
<form action="{{$is_edit ? route('books.delete', $gid) : null }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="btndelete" value="delete"> 
</form>
<table>
	<tr><td>name</td>
		<td>description</td></tr>
		


@foreach($books as $book)
		<tr>
			<td><a href="{{route('books.edit',$book->id)}}">{{$book->name}}</a></td>
			<td>{{$book->description}}</td>

		</tr>
@endforeach
</table>

</body>
</html>