@extends('business.layouts.app')
@section('content')
<div class="cart-main-area wish-list ptb-100 ptb-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-remove">Remove</th>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($wishList as $item)
                                <tr>
                                    <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                    <td class="product-thumbnail">
                                       <a href="#"><img src="img/products/22.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{ $item->name }}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
