@section('title')
Larakendo
@endsection
@section('style')
{{ HTML::style('css/kendo.common.min.css',array('type' => 'text/css')) }}
{{ HTML::style('css/kendo.default.min.css',array('type' => 'text/css')) }}
<style type="text/css">
    div{border:1px dashed black;}
</style>
@endsection
@section('script')
{{ HTML::script('js/jquery.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/kendo.mobile.min.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/kendo.js',array('type' => 'text/javascript')) }}
<script type="text/javascript">
$(document).ready(function() {
	
});
window.Login=function(){alert("hi")}
</script>
@endsection
@section('content')
<div id="app">
<h4>Application:</h4>
</div>

<div id="baselayout">
    <h4>Base Layout:</h4>
    <div id="app_content">
        <h4>Application content:</h4>
    </div>
</div>




<div id="userlistview" data-role="view">
    <button data-bind="click: delete" data-role="button">Click</button>
    <h4>User List:</h4>
    <ul data-role="listview" data-model="userModel" data-source="users" data-template="usertemplate"></ul>
</div>

<div id="userview" data-role="view">
    <h4>User:</h4>
    <strong data-bind="text: current.user_name"></strong>
    <button data-bind="click: delete" data-role="button">Delete</button>
</div>

<script type="text/x-kendo-template" id="usertemplate">
    <li class="user">
        <a class="view-details" href="\#/user/#: id #">
            <strong>#:user_name#</strong>
        </a>
    </li>
</script>

@endsection