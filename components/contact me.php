<div class="container mx-auto px-4">
    <div class="container mx-auto px-4">
        <br><br><br>
        <h1 class="text-5xl text-red-50"><b>Contact Me</b></h1>
        <br>
        <p class="text-red-50">Let's Build Something Great Together! 🚀
            Have a project idea, a question, or just want to say hello? Feel free to reach out! I'm always excited to collaborate on web development projects, discuss new technologies, or help bring your ideas to life. Drop me a message, and I'll get back to you as soon as possible!"
            Let me know if you want it to be more formal, casual, or specific to a particular type of work! 😊
        </p>

        <br><br>

        <!-- COPY CONTACT DETAILS CODE STARTS -->

        <div class="w-full  bg-white dark:bg-stone-950 border border-gray-200 dark:border-gray-700 shadow-sm rounded-lg p-5 relative">

            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Contact details</h2>

            <address class="bg-gray-50 dark:bg-stone-800 dark:border-gray-600 p-4 rounded-lg border border-gray-200 not-italic grid grid-cols-2">

                <!-- Copy Details Name & Email Code Starts -->

                <div class="space-y-2 text-gray-500 dark:text-gray-400 leading-loose hidden sm:block">
                    Name <br />
                    Email <br />
                </div>

                <div id="contact-details" class="space-y-2 text-gray-900 dark:text-white font-medium leading-loose">
                    Muhammad Ali Hamza <br />
                    heythisishamza@gmail.com <br />
                </div>

                <!-- Copy Details Name & Email Code Ends -->

                <!-- Copy To Clipboard Button Code Starts -->

                <button id="copy-btn" class="absolute end-2 top-2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center">
                    <span id="default-icon">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                            <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z" />
                        </svg>
                    </span>
                    <span id="success-icon" class="hidden">
                        <svg class="w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                    </span>
                </button>

                <div id="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg opacity-0 dark:bg-gray-700">
                    <span id="tooltip-message">Copy to clipboard</span>
                </div>

                <!-- Copy To Clipboard Button Code Ends -->

            </address>
        </div>

        <!-- COPY CONTACT DETAILS CODE ENDS -->

        <br><br><br>

        <!-- CONTACT FORM CODE STARTS -->

        <section class="bg-neutral-950">
            <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                    <div class="lg:col-span-2 lg:py-12">
                        <img src="img/new-logo.png" alt="">
                        <div class="mt-8"></div>
                    </div>

                    <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                        <h1 class="text-xl">Send Message</h1>
                        <br>
                        <form action="contact.php" method="POST" class="space-y-4">

                            <!-- Name Code Starts -->

                            <div>
                                <label class="sr-only" for="name">Name</label>
                                <input class="w-full border-gray-200 p-3 text-sm" placeholder="Name" type="text" id="name" name="name" required />
                            </div>

                            <!-- Name Code Ends -->

                            <!-- Email Code Starts -->

                            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div>
                                    <label class="sr-only" for="email">Email</label>
                                    <input class="w-full border-gray-200 p-3 text-sm" placeholder="Email address" type="email" id="email" name="email" required />
                                </div>
                            </div>

                            <!-- Email Code Ends -->

                            <!-- Message Code Starts -->

                            <div>
                                <label class="sr-only" for="message">Message</label>
                                <textarea class="w-full border-gray-200 p-3 text-sm" placeholder="Message" rows="8" id="message" name="message" required></textarea>
                            </div>

                            <!-- Message Code Ends -->

                            <!-- Send Message Button Code Starts -->

                            <div class="mt-4">
                                <button type="submit" class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                                    Send Message
                                </button>
                            </div>

                            <!-- Send Message Button Code Ends -->

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT FORM CODE ENDS -->

    </div>
</div>