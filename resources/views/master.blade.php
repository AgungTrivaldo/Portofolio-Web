<html>
<head>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<nav class="fixed w-full z-50 top-0 bg-orange-400 rounded-b-xl ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" /> -->
        <span class="text-white self-center text-2xl font-bold">Agung</span>
        <span class="text-white self-center text-2xl font-bold ">Trivaldo</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" onclick="addCard()" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border 0 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#skill" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Skills</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="#contact" class="block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-black md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main id="mainContent">
  <!-- Layout -->
  <div class="place-items-center max-w-screen-xl mx-auto p-4 flex justify-evenly">
    <!-- About Menu -->
    <!-- paragraph 1 -->
    <div align="justify" class="w-1/2 p-10">
      <div>
        <img src="{{ asset('image/Foto.JPG') }}" class="scale-75 rounded-full " alt="">
      </div>
    </div>
    <!-- paragraph 2 -->
    <div align="justify" class="w-1/2 p-10">
      <div class="font-bold text-4xl">
        About me
      </div>
      <br>
      <div class="font-semibold">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error soluta modi expedita minus ipsa. Iste fugit distinctio saepe quos voluptates, aliquam officia fugiat unde assumenda ratione ducimus amet voluptas animi.
        At laudantium vel doloremque saepe ducimus amet minus reiciendis veritatis, eum odio numquam reprehenderit id hic similique ipsum, aut quam explicabo eos architecto! Reprehenderit magnam animi error est dolorum aperiam.
        Minima officiis, nobis adipisci doloribus sed nostrum perspiciatis, corporis asperiores deserunt quis mollitia laboriosam enim recusandae corrupti nemo molestiae nam debitis tempore placeat? Distinctio aliquid corrupti voluptas facere, quasi commodi!
        Eaque ipsam consequatur quod quibusdam consectetur corporis architecto, maiores perferendis explicabo officia nesciunt. Molestias possimus vel iste a incidunt ut odio sapiente voluptas modi maiores! Unde quo rerum iure quae.
      </div>
    </div>
  </div>
  <!-- Skill -->
  <div class="bg-orange-400 mt-10" id="skill">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-white font-bold text-4xl flex flex-wrap items-center justify-center p-10">
            My Skill
        </div>
        <!-- Card Container -->
        <div id="cardContainer" class="grid grid-cols-1 md:grid-cols-3 gap-8 p-10">
          <!-- Loop through the skill cards and display each one -->
          @isset($skillCards)
          @foreach($skillCards as $skillCard)
              <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                  <img class="rounded-t-lg" src="{{ asset('images/' . $skillCard->image) }}" alt="Skill Card Image">
                  <div class="p-5">
                      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $skillCard->title }}</h5>
                      <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $skillCard->description }}</p>
                  </div>
              </div>
          @endforeach
      @endisset
      </div>
    </div>
    </div>
      {{-- !Contact --}}
        <div class="bg-white" id="contact">
          <div class="max-w-screen-xl mx-auto">
            <div class="text-black font-bold text-4xl flex flex-wrap items-center justify-center mt-10 p-10">
                Contact Me
            </div>
          </div>
        </div>
        <section class=" dark:bg-slate-800" id="contact">
          <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
              <div class="flex items-stretch justify-center">
                  <div class="grid md:grid-cols-2">
                      <div class="h-full pr-6">
                          <p class="mt-3 mb-12 text-lg text-gray-600 dark:text-slate-400">
                            Feel free to contact me if you're seeking guidance navigating the silent currents of partnership or exploring the shores of marriage through our unique projects. Just like chocolate arrows leading the way and tincidunt acting as poison, I'll be here to assist you.  
                          </p>
                          <ul class="mb-6 md:mb-0">
                              <li class="flex">
                                  <div class="flex h-10 w-10 items-center justify-center rounded bg-orange-300 text-gray-50">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="h-6 w-6">
                                          <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                          <path
                                              d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                          </path>
                                      </svg>
                                  </div>
                                  <div class="ml-4 mb-4">
                                      <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Our Address
                                      </h3>
                                      <p class="text-gray-600 dark:text-slate-400">North Yankton</p>
                                      <p class="text-gray-600 dark:text-slate-400">Los Santos, EEUU</p>
                                  </div>
                              </li>
                              <li class="flex">
                                  <div class="flex h-10 w-10 items-center justify-center rounded bg-orange-300 text-gray-50">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="h-6 w-6">
                                          <path
                                              d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                          </path>
                                          <path d="M15 7a2 2 0 0 1 2 2"></path>
                                          <path d="M15 3a6 6 0 0 1 6 6"></path>
                                      </svg>
                                  </div>
                                  <div class="ml-4 mb-4">
                                      <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Contact
                                      </h3>
                                      <p class="text-gray-600 dark:text-slate-400">Mobile: +1 (123) 456-7890</p>
                                      <p class="text-gray-600 dark:text-slate-400">Mail: agungtrivaldo@gmail.com</p>
                                  </div>
                              </li>
                              <li class="flex">
                                  <div class="flex h-10 w-10 items-center justify-center rounded bg-orange-300 text-gray-50">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="h-6 w-6">
                                          <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                          <path d="M12 7v5l3 3"></path>
                                      </svg>
                                  </div>
                                  <div class="ml-4 mb-4">
                                      <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Working
                                          hours</h3>
                                      <p class="text-gray-600 dark:text-slate-400">Every Day 24/7</p>
                                      <p class="text-gray-600 dark:text-slate-400">unless the apocalypse and the dajal has arrived</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                          <h2 class="mb-4 text-2xl font-bold dark:text-white">Ready to Get Started?</h2>
                          <form id="contactForm">
                              <div class="mb-6">
                                  <div class="mx-0 mb-1 sm:mb-4">
                                      <div class="mx-0 mb-1 sm:mb-4">
                                          <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label><input type="text" id="name" autocomplete="given-name" placeholder="Your name" class="mb-2 w-full rounded-md border border-orange-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="name">
                                      </div>
                                      <div class="mx-0 mb-1 sm:mb-4">
                                          <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label><input type="email" id="email" autocomplete="email" placeholder="Your email address" class="mb-2 w-full rounded-md border border-orange-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="email">
                                      </div>
                                  </div>
                                  <div class="mx-0 mb-1 sm:mb-4">
                                      <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label><textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..." class="mb-2 w-full rounded-md border border-orange-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                                  </div>
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="w-full bg-orange-400 hover:bg-orange-300 text-white px-6 py-3 font-xl rounded-md sm:mb-0">Send Message</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </section>
</main>



<footer class="bg-white dark:bg-gray-900">
  <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Yanto™</a>. All Rights Reserved.
        </span>
        <div class="flex mt-4 sm:justify-center sm:mt-0">
            <a href="https://www.linkedin.com/in/agung-trivaldo-saputra-b96082282/" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                      <path fill-rule="evenodd" d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" clip-rule="evenodd"/>
                  </svg>
                <span class="sr-only">Linkedin page</span>
            </a>
            <a href="https://www.instagram.com/agungtrivaldo" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                  </svg>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="https://twitter.com/Yantowibows" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                  <path fill-rule="evenodd" d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" clip-rule="evenodd"/>
              </svg>
                <span class="sr-only">Twitter page</span>
            </a>
            <a href="https://github.com/AgungTrivaldo?tab=repositories" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" clip-rule="evenodd"/>
                </svg>
                <span class="sr-only">GitHub account</span>
            </a>
        </div>
    </div>
  </div>
</footer>




</body>
</html>
