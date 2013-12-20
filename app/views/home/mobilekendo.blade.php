@section('title')
Larakendo
@endsection
@section('style')
{{ HTML::style('css/kendo.common.min.css',array('type' => 'text/css')) }}
{{ HTML::style('css/kendo.default.min.css',array('type' => 'text/css')) }}
<style type="text/css">
</style>
@endsection
@section('script')
{{ HTML::script('js/jquery.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/kendo.web.min.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/mobilekendo.js',array('type' => 'text/javascript')) }}
<script type="text/javascript">
$(document).ready(function() {
	
});
window.Login=function(){alert("hi")}
</script>
@endsection
@section('content')

<div data-role="layout" data-id="overview-layout">
</div>

<div data-role="view" data-layout="overview-layout" id="overview-gallery" data-title="Photo Gallery">
    <div id="scrollview-container">
        <div data-role="scrollview">
            <div class="photo photo1">1</div>

            <div class="photo photo2">2</div>

            <div class="photo photo3">3</div>

            <div class="photo photo4">4</div>

            <div class="photo photo5">5</div>

            <div class="photo photo6">6</div>

            <div class="photo photo7">7</div>

            <div class="photo photo8">8</div>

            <div class="photo photo9">9</div>

            <div class="photo photo10">10</div>
        </div>
    </div>
</div>

<div data-role="view" id="userlistview">
    <button data-bind="click: delete" data-role="button">Click</button>
    <h4>User List:</h4>
    <ul data-role="listview" data-model="userModel" data-source="users" data-template="usertemplate"></ul>
</div>

<div data-role="view" id="userview">
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