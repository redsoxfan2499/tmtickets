<div
    x-data="{ color: '#efefef' }"
    x-init="
        picker = new Picker($refs.button);
        picker.onDone = rawColor => {
            color = rawColor.hex;
            $dispatch('input', color)
        }
    "
    wire:ignore
    {{ $attributes }}
>

{{--    <span x-text="color" class="mx-2 p-3 rounded" :style="`background: ${color}`"></span>--}}

    <button
        x-ref="button"
        class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Change Color
    </button>
</div>
