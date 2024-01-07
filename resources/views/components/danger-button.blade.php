<button {{ $attributes->merge(['type' => 'submit', 'class' => 'duration-200 block shadow h-full text-red-50 px-4 py-2 leading-loose text-center font-semibold bg-red-600 hover:bg-gray-50 hover:text-red-600 rounded-xl']) }}>
    {{ $slot }}
</button>
