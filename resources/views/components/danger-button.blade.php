<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block bg-danger text-light']) }}>
    {{ $slot }}
</button>
