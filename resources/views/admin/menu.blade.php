<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.index') ? 'text-bg-secondary' : '' }}"
        href="{{ route('admin.index') }}"><strong>Админка
            главная</strong></a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.createNews') ? 'text-bg-secondary' : '' }}"
        href="{{ route('admin.createNews') }}"><strong>Добавить новость</strong></a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.download.json') ? 'text-bg-secondary' : '' }}"
        href="{{ route('admin.download.json') }}"><strong>Скачать новости</strong></a>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('admin.download.image') ? 'text-bg-secondary' : '' }}"
        href="{{ route('admin.download.image') }}"><strong>Скачать картинку</strong></a>
</li>
