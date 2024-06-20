<x-layout>
    <x-slot:title>Главная страница</x-slot:title>
    <main class="">
        <section class="w-full bg-[url('/public/images/bg.jpg')] h-[800px] bg-no-repeat bg-cover relative">
            <div class="absolute w-full h-full bg-black opacity-[0.6]"></div>
            <div class="container sticky z-[1] h-full px-[20px] w-[100%] 1171:px-[0] flex items-center">
                <h1 class="text-[36px] 400:text-[56px] 700:text-[96px] text-white font-neucha w-[100vw] leading-[120%]">Производство и копчение мясных изделий</h1>
            </div>
            <div class="w-full absolute bottom-[-300px] 500:bottom-[-150px] 600:bottom-[-90px] flex justify-center px-[20px] 900:mx-auto">
                <div class="bg-[#DC272C] w-full flex-wrap 600:flex-nowrap justify-center 600:justify-normal 900:w-[900px] 1171:w-auto flex gap-[45px] py-[45px] text-white px-[77px] text-center">
                    <x-home-component title="Качество и вкус" text="Мы гарантируем, что каждое мясное изделие, созданное нами, имеет высочайшие стандарты"/>
                    <x-home-component title="Широкий ассортимент" text="Мы предлагаем широкий выбор, чтобы удовлетворить самые взыскательные вкусы."/>
                    <x-home-component title="Уникальные рецепты" text="Мы создаем уникальные рецепты и внимательно следим за каждой деталью производства"/>
                </div>
            </div>
        </section>
        <div id="catalog" class="w-full px-[20px] 1171:px-[0] 1171:w-[1171px] mx-auto">
            <section class="pt-[400px] 500:pt-[200px]">
                <x-header-block h1="Ассортимент товаров" h3="Быстро и недорого"/>
                <div class="mt-[50px] flex flex-wrap justify-center 1171:justify-normal gap-[38px]">
                    @forelse($products as $product)
                        <x-tovar
                            :id="$product->id"
                            :title="$product->name"
                            :date="$product->developed_date"
                            :description="$product->description"
                            :price="$product->price"
                            :img="$product->getImageUrlAttribute()"
                            :in_stock="$product->in_stock"
                        />
                    @empty
                        <p class="text-red-500 font-lg text-center w-full">К сожалению ассортимент в данный момент пуст :(</p>
                    @endforelse
                </div>
            </section>
        </div>
        <div id="about" class="bg-[#1C1D1F] py-[100px] mt-[100px]">
            <div class="w-[100%] px-[20px] 1171:px-[0] 1171:w-[1171px] mx-auto">
                <x-header-block h1="О нас" h3="Кто мы такие и чем мы занимаемся?" />
                <div class="flex flex-wrap items-center justify-between gap-[30px] mt-[50px]">
                    <div class="flex flex-col gap-[30px] w-full md:w-[55%] text-white">
                        <div class="flex flex-col gap-[15px]">
                            <h2 class="text-3xl">Краткая информация</h2>
                            <p class="text-lg">Мы — команда страстных профессионалов, посвятивших свою жизнь созданию непревзойденных мясных деликатесов. Наше производство основывается на богатых традициях и современных технологиях, что позволяет нам добиваться идеального вкуса и качества в каждом продукте. Наша миссия — приносить радость и наслаждение каждому клиенту, предлагая широкий ассортимент копченых мясных изделий, которые станут украшением любого стола.</p>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <h2 class="text-3xl">Наша история</h2>
                            <p class="text-lg">Наша история началась с небольшой семейной мануфактуры, где с любовью и заботой готовили копченые мясные деликатесы по старинным рецептам. Со временем мы выросли в более крупное производство, сохранив при этом теплую атмосферу и семейные традиции.</p>
                        </div>
                        <div class="flex flex-col gap-[15px]">
                            <h2 class="text-3xl">Почему выбирают нас</h2>
                            <p class="text-lg">Наши клиенты ценят нас за непревзойденный вкус, высокое качество и надежность. Мы всегда стремимся к совершенству и готовы удивлять вас новыми вкусовыми решениями. Приглашаем вас окунуться в мир настоящих мясных деликатесов и насладиться богатым ассортиментом продукции, созданной с любовью и заботой. Спасибо за то, что выбираете нас! Мы рады служить вам и делаем все возможное, чтобы оправдать ваше доверие.</p>
                        </div>
                    </div>
                    <div class="h-[700px] w-full md:w-[40%]">
                        <img class="h-full w-full object-cover" src="{{ asset('/images/about.avif') }}" alt="Картинка">
                    </div>
                </div>
            </div>
        </div>
        <div id="contacts" class="bg-[#1C1D1F] py-[100px]">
            <div class="w-[100%] px-[20px] 1171:px-[0] mx-auto">
                <x-header-block h1="Контакты" h3="Как нас найти?" />
                <div class="flex items-center gap-[50px] py-[40px] px-[30px] bg-[#DC272C] justify-start 450:justify-center flex-wrap 750:flex-nowrap w-auto mx-auto mt-[50px]">
                    <x-contacts-block h1="Позвоните нам" h2="+7 (986) 456-76-43" icon="icon.svg"/>
                    <x-contacts-block h1="Напишите нам" h2="myasnayadolina@mail.ru" icon="icon2.svg"/>
                    <x-contacts-block h1="Адрес" h2="пгт. Балтаси, ул. Мазгарова, д. 15" icon="icon3.svg"/>
                </div>
                <div class="mx-auto w-full 1000:w-[1000px] mt-[50px]">
                    <div class="w-full" style="position:relative;overflow:hidden;">
                        <a href="https://yandex.ru/maps/43/kazan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Казань</a><a href="https://yandex.ru/maps/43/kazan/house/prospekt_yamasheva_16/YEAYdg5gQEIFQFtvfXRzdn5gZQ==/?ll=49.090972%2C55.827232&utm_medium=mapframe&utm_source=maps&z=17.05" style="color:#eee;font-size:12px;position:absolute;top:14px;">Проспект Ямашева, 16 — Яндекс Карты</a>
                        <div class="w-full" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/11119/republic-of-tatarstan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Республика Татарстан</a><a href="https://yandex.ru/maps/11119/republic-of-tatarstan/house/ulitsa_mazgarova_15/YUkYdANkSkcPQFtsfX9yeHxrZw==/?ll=50.244328%2C56.339083&utm_medium=mapframe&utm_source=maps&z=17" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Мазгарова, 15 на карте Республики Татарстан — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=50.244328%2C56.339083&mode=whatshere&whatshere%5Bpoint%5D=50.244328%2C56.339083&whatshere%5Bzoom%5D=17&z=17" height="500" width="100%" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>
