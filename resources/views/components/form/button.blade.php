<div>
    <button {{
        $attributes->merge([
            'type' => 'button',
            'class' => 'btn btn-'.$color
        ])
    }}>
        {{ $slot }}
    </button>
</div>
