<button {{ $attributes->merge(['type' => 'submit', 'class' => 'duration-200 block shadow h-full text-bone-50 px-4 py-2 leading-loose text-center font-semibold bg-bone-600 hover:bg-gray-50 hover:text-bone-600 rounded-xl']) }}>
    {{ $slot }}
</button>
