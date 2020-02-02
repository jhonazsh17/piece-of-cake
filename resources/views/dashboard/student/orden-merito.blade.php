@extends('layouts.base-home')

@section('css')
<style type="text/css">
    .animal-container{
    }
</style>

@endsection

@section('content')

<table>



</table>

@endsection

@section('scripts')
<script type="text/javascript">
    var students = {{$promedios}};
    console.log($students);
</script>
@endsection