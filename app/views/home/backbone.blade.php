@section('title')
Larabone
@endsection
@section('style')
<style type="text/css">
td{border:1px solid black;padding:3px;}
</style>
@endsection
@section('script')
{{ HTML::script('js/underscore.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/backbone.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/utils.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/larabone.js',array('type' => 'text/javascript')) }}
@endsection
@section('content')
<div id="apps"></div>
@endsection