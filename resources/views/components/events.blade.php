<section class="bg-white dark:bg-gray-900">
    <div class=" grid max-w-screen-xl px-6 py-8 mx-auto  lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-3">
            <h1 class='text-3xl font-bold'>{{ $label }}</h1>
            <a href='' type="button" class="text-blue-500 hover:bg-blue-500 hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-md uppercase font-bold px-5 py-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              Tout voir
              <svg aria-hidden="true" class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="lg:mt-0 lg:col-span-9 lg:flex">
            <div class='grid sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-8'>
                <x-event-card/>
                <x-event-card/>
                <x-event-card/>
                <x-event-card/>
                <x-event-card/>
                <x-event-card/>
                <x-event-card/>
                <x-event-card/>
            </div>
        </div>
    </div>
</section>
