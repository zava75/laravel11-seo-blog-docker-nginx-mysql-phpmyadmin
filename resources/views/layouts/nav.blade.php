<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
    <div class="container">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!-- Home -->
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">{{ __('Home') }}</a>
                </li>

                <!-- Blog dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Blog') }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                        @foreach ($categories as $category)
                            @if ($category->children->isNotEmpty())
                                <li class="dropdown-submenu position-relative">
                                    <a class="dropdown-item dropdown-toggle" href="{{ route('category.show', ['category' => $category->slug]) }}">
                                        {{ $category->name }}
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach ($category->children as $child)
                                            <li>
                                                <a class="dropdown-item" href="{{ route('category.show', ['category' => $category->slug, 'child' => $child->slug]) }}">
                                                    {{ $child->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.show', ['category' => $category->slug]) }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a href="#" class="nav-link">{{ __('About') }}</a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a href="#" class="nav-link">{{ __('Contact') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
