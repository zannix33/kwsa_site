@props([
    'image' => null,
    'model' => null,
])
<picture>
    <source media="(min-width: 750px)" srcset="{{ $model->image($image, 'desktop') }}">
    <source media="(min-width: 650)" srcset="{{ $model->image($image, 'tablet') }}">
    <source media="(min-width: 465px)" srcset="{{ $model->image($image, 'mobile') }}">
    <img
        {{ $attributes }}
        src="{{ $model->image($image, 'desktop') }}"
        alt="{{ $model->imageAltText($image) }}"
    >
</picture>
