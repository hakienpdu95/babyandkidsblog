<footer id="footer" class=" mt-10">
    <div class="footer-main py-5">
        <div class="wraper mx-auto">
            <div class="grid grid-cols-12 gap-3 block-footer-grids">

                <div class="col-span-12 sm:col-span-4 footer-rows-col-1">
                    <h3 class="font-bold heading">Keep in touch</h3>
                    <p class="desc"> Connect with us on your favorite social network below! </p>
                    <div class="social">
                        <ul class="social_icons shape_square style_default size_medium color_text inline-block">
                            <li class="w-socials-item instagram inline-block px-2 px-2">
                                <a class="sc_instagram inline-flex w-8 h-8 items-center justify-center text-lg overflow-hidden" title="Instagram" href="#" target="_blank" rel="noopener, nofollow">
                                    <i class="text-[26px] leading-[1.5] fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="w-socials-item youtube inline-block px-2 px-2">
                                <a class="sc_youtube inline-flex w-8 h-8 items-center justify-center text-lg overflow-hidden" title="Youtube" href="#" target="_blank" rel="noopener, nofollow">
                                    <i class="text-[26px] leading-[1.5] fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li class="w-socials-item facebook inline-block px-2 px-2">
                                <a class="sc_facebook inline-flex w-8 h-8 items-center justify-center text-lg overflow-hidden" title="Facebook" href="#" target="_blank" rel="noopener, nofollow">
                                    <i class="text-[26px] leading-[1.5] fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="w-socials-item pinterest inline-block px-2 px-2">
                                <a class="sc_pinterest inline-flex w-8 h-8 items-center justify-center text-lg overflow-hidden" title="Pinterest" href="#" target="_blank" rel="noopener, nofollow">
                                    <i class="text-[26px] leading-[1.5] fa-brands fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-span-12 sm:col-span-4 footer-rows-col-2">
                    <div class="flex justify-center items-center overflow-hidden header-logo relative">
                        <a title="Logo" href="{{ home_url('/') }}" class="logo-link">
                            <img id="logo-img" alt="Logo" src="{{ asset('images/logo.png') }}" loading="lazy" class="img-fluid">
                        </a>
                        <div class="flex flex-col" style="margin-top:-3px">
                            <a class="logo" href="{{ home_url('/') }}">
                                <strong class="brand-name relative">
                                    <span class="br-1">BabyAndKids</span>
                                    <span class="br-2">Blog</span>
                                    <span class="br-3 absolute">.com</span>
                                </strong>
                            </a>
                            <div href="{{ home_url('/') }}" class="logo slg-actd absolute" style="bottom: -4px">
                                <span class="slogan-actd">The best kids activities...</span>
                            </div>
                        </div>                  
                    </div>
                </div>

                {!! sage_footer_column('footer_column_1') !!}

            </div>
        </div>        
    </div>
    <div class="footer-copyright py-[10px] bg-[#f1f9ff]">
        <div class="container mx-auto">
            <div class="text-center">
                <small class="font-medium text-zinc-600"> ©
                    <script>document.write(new Date().getFullYear()) </script> Baby and Kids Blog <span>. All rights reserved.</span>
                  </small>
            </div>
        </div>
    </div>
</footer>