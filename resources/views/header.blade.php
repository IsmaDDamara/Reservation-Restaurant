    <!-- ***** Header Area Start ***** -->
    <base href="/public">
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li>
                                
                            <li class="scroll-to-section">
                                @auth
                                <a href="{{url('/showCart', Auth::user()->id)}}" style="color: red">
                                    Cart[{{$count}}] 
                                </a>
                                @endauth

                                
                                @guest
                                <a>
                                    Cart[0]
                                </a>
                                
                                @endguest
                            </li>
                            <li>    
                              @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                          @auth
                                                <li>
                                                      <x-app-layout>

                                                      </x-app-layout>
                                                </li>
                                          @else
                                                <li>
                                                      <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                                                </li>

                                                @if (Route::has('register'))
                                                      <li>
                                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                      </li>
                                                @endif
                                          @endauth
                                    </div>
                              @endif
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span></span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->