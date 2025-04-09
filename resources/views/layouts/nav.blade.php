<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
    <div class="container p-1">
        <a class="navbar-brand" href="{{ route('index') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"> <!-- Добавляем ms-auto для прижатия меню справа -->
                <li class="nav-item">
                    <a href="#" class="nav-link">{{ __('Link') }}</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">{{ __('Link') }}</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">{{ __('Link') }}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
