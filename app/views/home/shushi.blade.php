@section('title')
Larabone
@endsection
@section('style')
{{ HTML::style('css/kendo.common.min.css',array('type' => 'text/css')) }}
{{ HTML::style('css/kendo.default.min.css',array('type' => 'text/css')) }}
{{ HTML::style('websushi/css/style.css',array('type' => 'text/css')) }}
<style type="text/css">
td{border:1px solid black;padding:3px;}
</style>
@endsection
@section('script')
{{ HTML::script('js/jquery.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/kendo/kendo.web.min.js',array('type' => 'text/javascript')) }}
{{ HTML::script('js/kendo/require.js',array('type' => 'text/javascript','data-main' => URL::to('js/kendo/main.js'))) }}
{{ HTML::script('websushi/js/sushi.js',array('type' => 'text/javascript')) }}
<script type="text/javascript">
$(document).ready(function() {
	
});
</script>
@endsection
@section('content')
    
        <div id="application"></div>

        <script type="text/x-kendo-template" id="layout-template">
            <div id="wrapper">
                <div id="header">
                    <h1 class="logo"><a href="#/"></a></h1>

                    <a id="cart-info" href="#">Shopping Cart<span><span data-bind="text: cart.contentsCount"></span> items</span></a>
                </div>

                <p data-bind="visible: cart.cleared"> Thank you for your order!</p>

                <div id="main-section">
                    <section id="pre-content"></section>
                    <section id="content"></section>
                </div>

                <div id="footer">
                    <span id="copyright">Copyright &#169; 2011 - 2013 Telerik Inc. All rights reserved.</span>
		    | <span>Learn more about Kendo SPA at <a href="http://docs.kendoui.com/getting-started/framework/spa/overview">docs.kendoui.com</a>.</span>
                </div>
            </div>
        </script>

        <script type="text/x-kendo-template" id="cart-preview-template">
            <div id="shop-info" data-bind="attr: { class: cartContentsClass }">

                <ul data-role="listview" data-bind="source: cart.contents" data-template="cart-item" id="shop-list"></ul>

                <div id="shopping-cart">
                    <h3>your<br/>shopping cart</h3>
                    <p class="total-price" data-bind="html: totalPrice"></p>
                    <a id="empty-cart" href="#" data-bind="click: emptyCart">empty cart</a><a id="checkout" href="#/checkout">checkout</a>
                </div>
            </div>
        </script>

        <script type="text/x-kendo-template" id="index-template">
            <ul data-role="listview" data-bind="source: items" data-template="item" id="main"></ul>
        </script>

        <script type="text/x-kendo-template" id="checkout-template">
			<div id="checkout-top-image"></div>

			<div id="details-checkout">
				<h1>Order Details</h1>
				<a href="#" class="close"></a>
				<table>
					<thead>
						<tr>
							<th>Item</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody data-role="listview" data-bind="source: cart.contents" data-template="large-cart-item">
					</tbody>
				</table>
				<p id="total-checkout"><em>total:</em><span data-bind="text: totalPrice"></span></p>
				<a class="cancel-order" href="#" data-bind="click: emptyCart">cancel order</a><button class="order-now" data-bind="click: proceed">order now!</button>
			</div>

			<div id="checkout-bottom-image"></div>
        </script>

        <script type="text/x-kendo-template" id="detail-template">

			<div id="details-top-image">
				<a class="close" href="#"></a>
			</div>

			<div id="details">
                <a data-bind="attr: {href: previousHref }" id="navigate-prev"></a><div
				id="detail-info"><img class="main-image"
				data-bind="attr: { src: imgUrl }" alt="Selected Product" title="Selected Product"/><div
				id="description">
						<h1 data-bind="text: current.name"></h1>
						<p data-bind="text: current.description"></p>
						<div id="details-total">
							<p id="price-quantity" data-bind="text: price"></p>
							<button class="buy" data-bind="click: addToCart">Add to cart</button>
						</div>
					</div>
				</div><div id="nutrition-info"><h2>Nutritional Information</h2>
						<dl>
						  <dt>Protein</dt>
							<dd data-bind="text: current.stats.protein"></dd>
						  <dt>Fat (total)</dt>
							<dd data-bind="text: current.stats.fat"></dd>
						  <dt>Carbohydrate</dt>
							<dd data-bind="text: current.stats.fat"></dd>
							  <dt>Energy (kJ)</dt>
							<dd data-bind="text: current.stats.energy"></dd>
						  <dt>Energy (kcal)</dt>
							<dd data-bind="text: kCal"></dd>
							  <dt>Sugar</dt>
							<dd data-bind="text: current.stats.sugar"></dd>
						</dl>
				</div><a data-bind="attr: { href: nextHref }" id="navigate-next"></a>
			</div>

            <div id="details-bottom-image"></div>
        </script>

        <script type="text/x-kendo-template" id="large-cart-item">
            <tr>
                <td> <div class="cart-image-wrapper"><img src="#= window.contentPath #/images/200/#= item.image #" /></div> <span class="product-name" data-bind="text: item.name"></span></td>
                <td><input type="text" data-role="numerictextbox" data-min="0" data-max="10" data-bind="value: quantity"></td>
                <td><p class="table-price" data-bind="text: itemPrice"><p></td>
            </tr>
        </script>

        <script type="text/x-kendo-template" id="cart-item">
            <li class="selected-products-list">
                <a data-bind="click: removeFromCart" class="view-selected-items"><img
                    width="100" height="100"
                    src="#= window.contentPath #/images/200/#= item.image #"  /></a>
                <span class="selected-image-price"><span data-bind="text: quantity"></span>x<span data-bind="text: itemPrice"></span></span>
            </li>
        </script>

        <script type="text/x-kendo-template" id="item">
            <li class="products">
                <a class="view-details" href="\#/menu/#: id #">
                    <img class="main-image" src="#= window.contentPath #/images/200/#= image #"  alt="#: name#" title="#: name #" />
                    <strong data-bind="text: name"></strong>
                    <span class="price"><span>$</span><span data-bind="text: price"></span></span>
                </a>

                <button class="add-to-cart" data-bind="click: addToCart">Add to cart</button>
            </li>
        </script>
    
@endsection