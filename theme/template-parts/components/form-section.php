<div class="max-w-[700px] mx-3 lg:mx-auto p-3 lg:p-14 rounded-lg shadow-lg bg-white mt-40 mb-11" id="form">
    <div class="style-group flex flex-nowrap flex-row gap-0 justify-center items-center mt-[-135px] mb-9 lg:mb-0">
        <div class="grafismo bg-coopers-green h-6 w-40"></div>
        <img class="relative right-24 max-w-32 lg:max-w-auto" src="<?php echo get_template_directory_uri()?>/img/form-top.png" alt="">
    </div>

    <div class="flex flex-row gap-6 mb-10">
        <img src="<?php echo get_template_directory_uri()?>/img/icon-mail.png" width="60" height="60" alt="" srcset="">
        <h3 class="text-2xl max-w-40">GET IN <strong>TOUCH</strong></h3>
    </div>

    <form class="form-group contact-form mb-4">
        <div class="mb-4">
            <label class="block text-[#06152B] text-sm font-bold mb-2" for="name">
                Your Name
            </label>
            <input class="shadow appearance-none border border-[#06152B] rounded w-full py-4 pl-3 pr-3 text-[#06152B] leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Type your name here...">
        </div>
        <div class="mb-4 flex flex-col lg:flex-row gap-5">
            <div class="form-group w-full lg:w-1/2">
                <label class="block text-[#06152B] text-sm font-bold mb-2" for="email">
                    Email*
                </label>
                <input class="shadow appearance-none border border-[#06152B] rounded w-full py-4 pl-3 pr-3 text-[#06152B] leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="example@example.com" required>
            </div>

            <div class="form-group w-full lg:w-1/2">
                <label class="block text-[#06152B] text-sm font-bold mb-2" for="telephone">
                    Telephone*
                </label>
                <input class="shadow appearance-none border border-[#06152B] rounded w-full py-4 pl-3 pr-3 text-[#06152B] leading-tight focus:outline-none focus:shadow-outline" id="telephone" type="tel" placeholder="( ) ____-____" required>
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-[#06152B] text-sm font-bold mb-2" for="message">
                Message*
            </label>
            <textarea class="shadow appearance-none border border-[#06152B] rounded w-full py-4 pl-3 pr-3 text-[#06152B] leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="Type what you want to say to us" rows="4" required></textarea>
        </div>
        <div class="flex items-center justify-center">
            <button class="w-full bg-coopers-green hover:bg-green-700 text-white font-bold py-4 px-4 rounded shadow-lg focus:outline-none focus:shadow-outline" type="submit">
                SEND NOW
            </button>
        </div>

        <div class="msg-success text-coopers-green hidden mt-2 font-semibold"></div>
        <!-- <div class="msg-error text-coopers-green hidden"></div> -->
    </form>

</div>