@extends('layouts.app')

@section('content')


<div id="app">hhh</div>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>-->
<script>
$(function () {
const settings = {
	async: true,
	crossDomain: true,
	url: 'https://rest-countries10.p.rapidapi.com/country/japan',
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '61a635900bmshb0c147b7bcd9251p1969c1jsn1fd32e2a6ad9',
		'X-RapidAPI-Host': 'rest-countries10.p.rapidapi.com'
	}
};

$.ajax(settings).done(function (response) {
	console.log(response);
	$('#app').html(response);
});
});
</script>
@endsection