<form class="form-inline" action="{{url('cart')}}" method="post">
	@csrf
	<input type="hidden" name="product_id" value="{{ $product->id }}">
	<button type="submit" class="btn btn-warning"><i class="fa fa plus">Add to cart</i></button>
</form>