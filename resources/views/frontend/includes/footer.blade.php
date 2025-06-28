<style>
  body {
    margin: 0;
    padding-bottom: 3.5rem; /* Give space for fixed footer */
  }

  .custom-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: black;
    text-align: center;
    color: white;
    height: 2.5rem;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    border-top: 1px solid #d1d5db;
    font-size: 0.875rem;
    z-index: 40;
  }

  .custom-footer-text {
    font-size: 1.125rem;
  }
</style>

<footer class="custom-footer">
  <p class="custom-footer-text">
    © 2025 The Bright Studios. All Rights Reserved.
  </p>
</footer>


<!-- <style>
.custom-footer {
  position: sticky;
  bottom: 0;
  width: 100%;
  background-color: black;
  text-align: center;
  color: white;
  height: 2.5rem;         /* h-10 ≈ 40px */
  padding-top: 0.75rem;   /* py-3 ≈ 12px */
  padding-bottom: 0.75rem;
  border-top: 1px solid #d1d5db; /* border-gray-300 */
  font-size: 0.875rem;    /* text-sm ≈ 14px */
  z-index: 40;
}

.custom-footer-text {
  font-size: 1.125rem;    /* text-lg ≈ 18px */
}
</style>

<footer class="custom-footer">
  <p class="custom-footer-text">
    © 2025 The Bright Studios. All Rights Reserved.
  </p>
</footer> -->

<!-- <footer class="bg-black p-4 dark:bg-gray-800 sm:p-5">
    <div class="mx-auto max-w-screen-xl text-center">
        <a class="flex items-center justify-center text-2xl font-semibold text-gray-900 dark:text-white" href="/">
            <img class="h-10" src="{{ asset("img/firstkick-logo.png") }}" alt="{{ app_name() }} Logo" />
        </a>

        <p class="mx-auto my-6 text-gray-500 dark:text-gray-400 sm:w-1/2">
            {!! setting("meta_description") !!}
        </p>
        <ul class="mb-6 flex flex-wrap items-center justify-center text-gray-900 dark:text-white">
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="#">@lang("About")</a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="{{ route("privacy") }}" wire:navigate.hover>
                    @lang("Privacy")
                </a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="{{ route("terms") }}" wire:navigate.hover>
                    @lang("Terms")
                </a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="#">@lang("FAQs")</a>
            </li>
            <li>
                <a class="mx-2 hover:underline md:mx-3" href="#">@lang("Contact")</a>
            </li>
        </ul>

        <x-frontend.social.all-social-url />

        <x-frontend.footer-license license="cc-by-sa" />

        <x-frontend.footer-credit />
    </div>
</footer> -->
