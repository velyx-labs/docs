<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'name',
    'variant' => null,
    'class' => '',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'name',
    'variant' => null,
    'class' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>
<?php
    $base = dirname(__DIR__, 1) . '/vendor/afatmustafa/blade-hugeicons/resources/svg';

    $path = $variant
        ? $base . '/' . $variant . '/' . $name . '.svg'
        : $base . '/' . $name . '.svg';
?>

<?php if(file_exists($path)): ?>
    <?php echo preg_replace(
        '/<svg\b([^>]*)>/',
        '<svg$1 class="' . $class . '">',
        file_get_contents($path),
        1
    ); ?>

<?php endif; ?><?php /**PATH /home/jiordiviera/workspace/oss/velar/docs/source/_components/icon.blade.php ENDPATH**/ ?>