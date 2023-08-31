<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full inline-block bg-red-500 hover:bg-red-400 p-2 rounded-md text-white mb-4 focus:ring-4 focus:ring-red-300 focus:border-red-800 focus:border-2 focus:outline-none']) }}>
    {{ $slot }}
</button>
