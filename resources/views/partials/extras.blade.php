<div class="extras-wrapper">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 row-gap-4">
            <x-extras-card>
                <x-slot:extras_logo>{{ Vite::asset("resources/img/buy-comics-digital-comics.png") }}</x-slot>
                <x-slot:extras_text>DIGITAL COMICS</x-slot>
            </x-extras-card>
            <x-extras-card>
                <x-slot:extras_logo>{{ Vite::asset("resources/img/buy-comics-merchandise.png") }}</x-slot>
                <x-slot:extras_text>DC MERCHANDISE</x-slot>
            </x-extras-card>
            <x-extras-card>
                <x-slot:extras_logo>{{ Vite::asset("resources/img/buy-comics-subscriptions.png") }}</x-slot>
                <x-slot:extras_text>SUBSCRIPTION</x-slot>
            </x-extras-card>
            <x-extras-card>
                <x-slot:extras_logo>{{ Vite::asset("resources/img/buy-comics-shop-locator.png") }}</x-slot>
                <x-slot:extras_text>COMIC SHOP LOCATOR</x-slot>
            </x-extras-card>
            <x-extras-card>
                <x-slot:extras_logo>{{ Vite::asset("resources/img/buy-dc-power-visa.svg") }}</x-slot>
                <x-slot:extras_text>DC POWER VISA</x-slot>
            </x-extras-card>
        </div>
    </div>
</div>