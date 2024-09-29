<nav 
    x-data="{ 
      open: false,
      line: 'h-1 w-6 my-0.5 rounded-full bg-black transition ease transform duration-300',
      navLinks: [
        {name: 'blog', href: '/blog'},
        {name: 'about', href: '/about'},
        {name: 'work', href: '/work'}
      ]
    }"
    x-resize="$width>767 ? open=false : null"
    @click.outside="open = false"
  >
    <div class="flex justify-between items-center border p-3">
      <div class="font-bold">Anthony</div>
      {{-- Hamburger --}}
      <button
        class="flex flex-col justify-center items-center cursor-pointer md:hidden"
        @click="open = !open"
      >
        <div :class="open ? `${line} rotate-45 translate-y-1` : line "></div>
        <div :class="open ? 'opacity-0' : line"></div>
        <div :class="open ? `${line} -rotate-45 -translate-y-1` : line "></div>
      </button>
      {{-- Main menu --}}
      <div class="md:flex gap-3 hidden">
        <template x-for="link in navLinks">
          <a :href="link.href" x-text="link.name" :key="link.name"></a>
        </template>
      </div>
    </div>
    {{-- Dropdown menu--}}
    <div 
      x-show="open"
      x-transition
      class="border"
    >
      <template x-for="link in navLinks">
        <div class="p-3">
          <a :href="link.href" x-text="link.name" :key="link.name"></a>
        </div>
      </template>
    </div>
  </nav>