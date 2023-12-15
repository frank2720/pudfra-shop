<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Pudfra</title>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <script src="{{asset('assets/js/script.js')}}"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
        <div class="flex items-center">
            <img src="{{asset('images/pudfralogo.svg')}}" alt="Logo" class="h-8" />
        </div>
        <ul class="font-montserrat items-center hidden md:flex">
            <li class="mx-3 ">
              <a class="growing-underline" href="howitworks">
                How it works
              </a>
            </li>
            <li class="growing-underline mx-3">
              <a href="features">Features</a>
            </li>
            <li class="growing-underline mx-3">
              <a href="pricing">Pricing</a>
            </li>
          </ul>
          <div class="font-montserrat hidden md:block">
            <button class="mr-6">Login</button>
            <button class="py-2 px-4 text-white bg-black rounded-3xl">
              Signup
            </button>
          </div>
          <div id="showMenu" class="md:hidden">
            <img src="{{asset('assets/images/logos/Menu.svg')}}" alt="Menu icon" />
          </div>
    </nav>
    <div id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
        <div id="hideMenu" class="flex justify-end">
            <img src="{{asset('assets/images/logos/Cross.svg')}}" alt="" class="h-16 w-16" />
        </div>
          <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
            <li class="my-6">
              <a href="howitworks">How it works</a>
            </li>
            <li class="my-6">
              <a href="features">Features</a>
            </li>
            <li class="my-6">
              <a href="pricing">Pricing</a>
            </li>
          </ul> 
    </div>
     <!-- Hero -->
  <section
  class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
  <div class="md:flex-1 md:mr-10">
    <h1 class="font-pt-serif text-4xl font-bold mb-7">
        Welcome to Pudfra's 
      <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
        Ecommerce development hub!
      </span>
    </h1>
    <p class="font-pt-serif font-normal mb-7">
        Step into the realm of online innovation and seamless shopping experiences. 
        As a Junior Laravel Developer, I'm excited to invite you to our digital marketplace where every line of code contributes 
        to a smoother, more delightful e-commerce journey.
    </p>
    <div class="font-montserrat">
      <button class="bg-black px-6 py-4 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2">
        Call to action
      </button>
      <button class="px-6 py-4 border-2 border-black border-solid rounded-lg">
        Secondary action
      </button>
    </div>
  </div>
  <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
    <div class="relative">
      <img src="{{asset('assets/images/Highlight1.svg')}}" alt="" class="absolute -top-16 -left-10" />
    </div>
    <img src= "{{asset('assets/images/MacBook Pro.png')}}" alt="Macbook" />
    <div class="relative">
      <img src="{{asset('assets/images/Highlight2.svg')}}" alt="" class="absolute -bottom-10 -right-6" />
    </div>
  </div>
</section>

<!-- How it works -->
<section class="bg-black text-white sectionSize">
  <div>
    <h2 class="secondaryTitle bg-underline2 bg-100%">How it works</h2>
  </div>
  <div class="flex flex-col md:flex-row">
    <div class="flex-1 mx-8 flex flex-col items-center my-4">
      <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
        1
      </div>
      <h3 class="font-montserrat font-medium text-xl mb-2">Eat</h3>
      <p class="text-center font-montserrat">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      </p>
    </div>
    <div class="flex-1 mx-8 flex flex-col items-center my-4">
      <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
        2
      </div>
      <h3 class="font-montserrat font-medium text-xl mb-2">Sleep</h3>
      <p class="text-center font-montserrat">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      </p>
    </div>
    <div class="flex-1 mx-8 flex flex-col items-center my-4">
      <div class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
        3
      </div>
      <h3 class="font-montserrat font-medium text-xl mb-2">Rave</h3>
      <p class="text-center font-montserrat">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      </p>
    </div>
  </div>
</section>

<!-- Features -->
<section class="sectionSize bg-secondary">
  <div>
    <h2 class="secondaryTitle bg-underline3 bg-100%">Features</h2>
  </div>
  <div class="md:grid md:grid-cols-2 md:grid-rows-2">

    <div class="flex items-start font-montserrat my-6 mr-10">
      <img src="{{asset('assets/images/logos/Heart.svg')}}" alt='' class="h-7 mr-4" />
      <div>
        <h3 class="font-semibold text-2xl">Feature #1</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Quisquam voluptate praesentium tenetur earum repellendus! Dicta
          culpa consequuntur saepe quibusdam labore, est ex ducimus
          tempore, quos illum officiis, pariatur ea placeat.
        </p>
      </div>
    </div>

    <div class="flex items-start font-montserrat my-6 mr-10">
      <img src="{{asset('assets/images/logos/Heart.svg')}}" alt='' class="h-7 mr-4" />
      <div>
        <h3 class="font-semibold text-2xl">Feature #2</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Quisquam voluptate praesentium tenetur earum repellendus! Dicta
          culpa consequuntur saepe quibusdam labore, est ex ducimus
          tempore, quos illum officiis, pariatur ea placeat.
        </p>
      </div>
    </div>

    <div class="flex items-start font-montserrat my-6 mr-10">
      <img src="{{asset('assets/images/logos/Heart.svg')}}" alt='' class="h-7 mr-4" />
      <div>
        <h3 class="font-semibold text-2xl">Feature #3</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Quisquam voluptate praesentium tenetur earum repellendus! Dicta
          culpa consequuntur saepe quibusdam labore, est ex ducimus
          tempore, quos illum officiis, pariatur ea placeat.
        </p>
      </div>
    </div>

    <div class="flex items-start font-montserrat my-6 mr-10">
      <img src="{{asset('assets/images/logos/Heart.svg')}}" alt='' class="h-7 mr-4" />
      <div>
        <h3 class="font-semibold text-2xl">Feature #4</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Quisquam voluptate praesentium tenetur earum repellendus! Dicta
          culpa consequuntur saepe quibusdam labore, est ex ducimus
          tempore, quos illum officiis, pariatur ea placeat.
        </p>
      </div>
    </div>

  </div>
</section>

<!-- Pricing -->
<section class="sectionSize bg-secondary py-0">
  <div>
    <h2 class="secondaryTitle bg-underline4 mb-0 bg-100%">Pricing</h2>
  </div>
  <div class="flex w-full flex-col md:flex-row">

    <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
      <h3 class="font-pt-serif font-normal text-2xl mb-4">
        The Good
      </h3>
      <div class="font-montserrat font-bold text-2xl mb-4">
        $25
        <span class="font-normal text-base"> / month</span>
      </div>

      <div class="flex">
        <img src="{{asset('assets/images/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #1</p>
      </div>
      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #2</p>
      </div>
      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #3</p>
      </div>

      <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
        Choose plan
      </button>
    </div>

    <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-12'>
      <h3 class="font-pt-serif font-normal text-2xl mb-4">
        The Bad
      </h3>
      <div class="font-montserrat font-bold text-2xl mb-4">
        $40
        <span class="font-normal text-base"> / month</span>
      </div>

      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #1</p>
      </div>
      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #2</p>
      </div>
      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #3</p>
      </div>

      <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
        Choose plan
      </button>
    </div>

    <div class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
      <h3 class="font-pt-serif font-normal text-2xl mb-4">
        The Ugly
      </h3>
      <div class="font-montserrat font-bold text-2xl mb-4">
        $50
        <span class="font-normal text-base"> / month</span>
      </div>

      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #1</p>
      </div>
      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #2</p>
      </div>
      <div class="flex">
        <img src="{{asset('dist/assets/logos/CheckedBox.svg')}}" alt="" class="mr-1" />
        <p>Benefit #3</p>
      </div>

      <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
        Choose plan
      </button>
    </div>

  </div>
</section>

<!-- FAQ  -->
<section class="sectionSize items-start pt-8 md:pt-36 bg-black text-white">
  <div>
    <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
      FAQ
    </h2>
  </div>

  <div toggleElement class="w-full py-4">
    <div class="flex justify-between items-center">
      <div question class="font-montserrat font-medium mr-auto">
        Where can I get this HTML template?
      </div>
      <img src="{{asset('dist/assets/logos/CaretRight.svg')}}"  alt="" class="transform transition-transform" />
    </div>
    <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
      You can download it on Gumroad.com
    </div>
  </div>
  <hr class="w-full bg-white" />

  <div toggleElement class="w-full py-4">
    <div class="flex justify-between items-center">
      <div question class="font-montserrat font-medium mr-auto">
        Is this HTML template free?
      </div>
      <img src="{{asset('dist/assets/logos/CaretRight.svg')}}" alt="" class="transform transition-transform" />
    </div>
    <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
      Yes! For you it is free.
    </div>
  </div>
  <hr class="w-full bg-white" />

  <div toggleElement class="w-full py-4">
    <div class="flex justify-between items-center">
      <div question class="font-montserrat font-medium mr-auto">
        Am I awesome?
      </div>
      <img src="{{asset('dist/assets/logos/CaretRight.svg')}}" alt="" class="transform transition-transform" />
    </div>
    <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
      Yes! No doubt about it.
    </div>
  </div>
  <hr class="w-full bg-white" />

</section>

<!-- Footer -->
<section class="bg-black sectionSize">
  <div class="mb-4">
    <img src="{{asset('images/pudfralogo.svg')}}" alt="Logo" class="h-4" />
  </div>
  <div class="flex mb-8">
    <a href="#">
      <img src="{{asset('assets/images/logos/Facebook.svg')}}" alt="Facebook logo" class="mx-4" />
    </a>
    <a href="#">
      <img src="{{asset('assets/images/logos/Youtube.svg')}}" alt="Youtube logo" class="mx-4" />
    </a>
    <a href="#">
      <img src="{{asset('assets/images/logos/Instagram.svg')}}" alt="Instagram logo" class="mx-4" />
    </a>
    <a href="#">
      <img src="{{asset('assets/images/logos/Twitter.svg')}}" alt="Twitter logo" class="mx-4" />
    </a>
  </div>
  <div class="text-white font-montserrat text-sm">
    © 2021 STARTUP. All rights reserved
  </div>
</section>
</body>
</html>