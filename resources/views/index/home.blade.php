<x-layout>
    <x-slot:title>Главная страница</x-slot:title>
    <main class="">
        <section class="w-full bg-[url('/public/images/bg.jpg')] h-[800px] bg-no-repeat bg-cover relative">
            <div class="absolute w-full h-full bg-black opacity-[0.6]"></div>
            <div class="w-[100%] px-[20px] 1171:px-[0] 320:w-[1171px] mx-auto flex items-center h-full sticky z-[1]">
                <h1 class="text-[36px] 400:text-[56px] 700:text-[96px] text-white font-neucha w-[100vw]">Производство и копчение мясных изделий</h1>                
            </div>
            <div class="w-[100vw] absolute bottom-[-300px] 500:bottom-[-150px] 600:bottom-[-90px] flex justify-center px-[20px] 900:mx-auto">
                <div class="bg-[#DC272C] w-full flex-wrap 600:flex-nowrap justify-center 600:justify-normal 900:w-[900px] 1171:w-auto flex gap-[45px] py-[45px] text-white px-[77px] text-center">
                    <x-home-component title="Качество и вкус" text="Мы гарантируем, что каждое мясное изделие, созданное нами, имеет высочайшие стандарты"/>
                    <x-home-component title="Широкий ассортимент" text="Мы предлагаем широкий выбор, чтобы удовлетворить самые взыскательные вкусы."/>
                    <x-home-component title="Уникальные рецепты" text="Мы создаем уникальные рецепты и внимательно следим за каждой деталью производства"/>  
                </div>
            </div>
        </section>
        <div id="catalog" class="w-[100%] px-[20px] 1171:px-[0] 1171:w-[1171px] mx-auto">
            <section class="pt-[400px] 500:pt-[200px]">
                <x-header-block h1="Ассортимент товаров" h3="Быстро и недорого"/>
                <div class="mt-[50px] flex flex-wrap justify-center 1171:justify-normal gap-[38px]">
                    <x-tovar
                     title="Вареная колбаса"
                     date="10.05.24"
                     description="Вареная колбаса - это классическое мясное изделие, которое получается путем приготовления мясной массы с добавлением специальных пряностей и специй, после чего она засыпается в оболочку и варится до готовности."
                     price="1200"
                     img="foto.jpg"
                     edit=""
                     delete=""   
                     />
                     <x-tovar
                     title="Вареная колбаса"
                     date="10.05.24"
                     description="Вареная колбаса - это классическое мясное изделие, которое получается путем приготовления мясной массы с добавлением специальных пряностей и специй, после чего она засыпается в оболочку и варится до готовности."
                     price="1200"
                     img="foto.jpg"   
                     edit=""
                     delete="" 
                     />
                     <x-tovar
                     title="Вареная колбаса"
                     date="10.05.24"
                     description="Вареная колбаса - это классическое мясное изделие, которое получается путем приготовления мясной массы с добавлением специальных пряностей и специй, после чего она засыпается в оболочку и варится до готовности."
                     price="1200"
                     img="foto.jpg" 
                     edit=""
                     delete=""   
                     />
                     <x-tovar
                     title="Вареная колбаса"
                     date="10.05.24"
                     description="Вареная колбаса - это классическое мясное изделие, которое получается путем приготовления мясной массы с добавлением специальных пряностей и специй, после чего она засыпается в оболочку и варится до готовности."
                     price="1200"
                     img="foto.jpg" 
                     edit=""
                     delete=""   
                     />
                     <x-tovar
                     title="Вареная колбаса"
                     date="10.05.24"
                     description="Вареная колбаса - это классическое мясное изделие, которое получается путем приготовления мясной массы с добавлением специальных пряностей и специй, после чего она засыпается в оболочку и варится до готовности."
                     price="1200"
                     img="foto.jpg"  
                     edit=""
                     delete=""  
                     />
                    </div>
            </section>            
        </div>
        <div id="contacts" class="bg-[#1C1D1F] py-[100px] mt-[100px]">
            <div class="w-[100%] px-[20px] 1171:px-[0] 1171:w-[1171px] mx-auto">
                <x-header-block h1="Контакты" h3="Как нас найти?" />
                <div class="flex items-center gap-[50px] py-[40px] px-[30px] bg-[#DC272C] justify-start 450:justify-center flex-wrap 750:flex-nowrap w-auto 750:w-[692px] mx-auto mt-[50px]">
                    <x-contacts-block h1="Позвоните нам" h2="+7 (986) 456-76-43" icon="icon.svg"/>    
                    <x-contacts-block h1="Напишите нам" h2="test@example.com" icon="icon2.svg"/>    
                    <x-contacts-block h1="Адрес" h2="г. Казань, ул. Емашева, д. 16" icon="icon3.svg"/>    
                </div>
                <div class="mx-auto w-full 1000:w-[1000px] mt-[50px]">
                    <div style="position:relative;overflow:hidden;">
                        <a href="https://yandex.ru/maps/43/kazan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Казань</a><a href="https://yandex.ru/maps/43/kazan/house/prospekt_yamasheva_16/YEAYdg5gQEIFQFtvfXRzdn5gZQ==/?ll=49.090972%2C55.827232&utm_medium=mapframe&utm_source=maps&z=17.05" style="color:#eee;font-size:12px;position:absolute;top:14px;">Проспект Ямашева, 16 — Яндекс Карты</a>
                        <iframe class="w-full" src="https://yandex.ru/map-widget/v1/?ll=49.090972%2C55.827232&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjI4Njg5NRJo0KDQvtGB0YHQuNGPLCDQoNC10YHQv9GD0LHQu9C40LrQsCDQotCw0YLQsNGA0YHRgtCw0L0sINCa0LDQt9Cw0L3RjCwg0L_RgNC-0YHQv9C10LrRgiDQr9C80LDRiNC10LLQsCwgMTYiCg0pXURCFRVPX0I%2C&z=17.05" height="500" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                    </div>
                </div>
            </div>
        </div>    
    </main>
</x-layout>
