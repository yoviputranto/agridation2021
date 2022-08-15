@extends('user.layouts.app')
@section('title')
    Contoh Chained
@stop

@section('content')
<select id="mark" name="mark">
    <option value="">--</option>
    <option value="bmw">BMW</option>
    <option value="audi">Audi</option>
</select>
<select id="series" name="series">
    <option value="">--</option>
    <option value="series-3" data-chained="bmw">3 series</option>
    <option value="series-5" data-chained="bmw">5 series</option>
    <option value="series-6" data-chained="bmw" selected="selected">6 series</option>
    <option value="a3" data-chained="audi" selected="selected">A3</option>
    <option value="a4" data-chained="audi">A4</option>
    <option value="a5" data-chained="audi">A5</option>
</select>

@endsection