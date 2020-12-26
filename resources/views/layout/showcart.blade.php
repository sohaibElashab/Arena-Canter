<div class="search-flyoveray"></div>
        <div class="cart-flyout">
            <div class="cart-flyout-inner">
                <a class="btn-close-cart" href="#">
                    <i class="fa fa-times"></i>
                </a>
                <div class="cart-flyout__content">
                  <div class="cart-flyout__heading">Shopping Cart</div>
                  <div class="widget_shopping_cart_content">
                      <ul class="product_list_widget">
                      @foreach(Cart::content() as $item)
                        @if($item->options->type == 'shopping')
                          <li>
                              <div class="thumb">
                                  <img src="/images/imgSHOPPING/products/{{$item->PictureShopping($item->id)}}" alt="product">
                              </div>
                              <div class="content">
                                  <h6><a href="{{ route('shopping.show',$item->id)}}">{{$item->name}}</a></h6>
                                  <div class="quntity">{{$item->qty}} × ${{$item->price}}</div>
                                  <form action="{{route('cart.destroy',$item->rowId)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-btn">×</button>
                                  </form>
                              </div>
                          </li> 
                        @endif
                      @endforeach 
                      </ul>
                  </div>
                  <div class="cart-flyout__heading">Food Cart</div>
                    <div class="widget_shopping_cart_content">
                        <ul class="product_list_widget">
                        @foreach(Cart::content() as $item)
                        @if($item->options->type == 'food')
                          <li>
                              <div class="thumb">
                                  <img src="../images/imagesFOOD/{{$item->PictureFood($item->id)}}" alt="product">
                              </div>
                              <div class="content">
                                  <h6><a href="{{ route('food.show',$item->id)}}">{{$item->name}}</a></h6>
                                  <div class="quntity">{{$item->qty}} × ${{$item->price}}</div>
                                  <form action="{{route('cart.destroy',$item->rowId)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-btn">×</button>
                                  </form>
                              </div>
                          </li> 
                        @endif
                      @endforeach 
                        </ul>
                    </div>
                    <div class="cart-flyout__heading">Entertainment Cart</div>
                    <div class="widget_shopping_cart_content">
                        <ul class="product_list_widget">
                        @foreach(Cart::content() as $item)
                        @if($item->options->type == 'ent')
                          <li>
                              <div class="thumb">
                                  <img src="../images/imgENT/{{$item->PictureEnt($item->id)}}" alt="product">
                              </div>
                              <div class="content">
                                  <h6><a href="{{ route('ent.show',$item->id)}}">{{$item->name}}</a></h6>
                                  <div class="quntity">{{$item->qty}} × ${{$item->price}}</div>
                                  <form action="{{route('cart.destroy',$item->rowId)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="remove-btn">×</button>
                                  </form>
                              </div>
                          </li> 
                        @endif
                      @endforeach 
                        </ul>
                    </div>
                    <p class="minicart__total">Subtotal: <span class="price">${{Cart::subtotal()}}</span></p>
                    @if(Cart::count() > 0 )
                    <div class="cart__btn">
                        <a href="/cart_page">View cart</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>