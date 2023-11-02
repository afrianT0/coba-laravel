<!-- resources/views/components/category-badge.blade.php -->
@php
    $bgClass = 'text-bg-primary';
    
    if ($category->slug === 'web-design') {
        $bgClass = 'text-bg-warning';
    } elseif ($category->slug === 'programming') {
        $bgClass = 'text-bg-success';
    } elseif ($category->slug === 'personal') {
        $bgClass = 'text-bg-primary';
    }
@endphp

<a href="/posts?category={{ $category->slug }}"
    class="text-decoration-none badge rounded-pill {{ $bgClass }} p-2">{{ $category->name }}</a>
