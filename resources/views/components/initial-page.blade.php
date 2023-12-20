<!-- component -->
<x-guest-layout>
    <!-- ===== Header Start ===== -->
    <header class="g s r vd ya cj" :class="{ 'hh sm _k dj bl ll' : stickyMenu }" @scroll.window="stickyMenu = (window.pageYOffset > 20) ? true : false">
        <div class="bb ze ki xn 2xl:ud-px-0 oo wf yf i">
            <div class="vd to/4 tc wf yf">
                <a href="index.html">
                    <x-logo-page-inicial class="mr-24"/>
                </a>

                <!-- Hamburger Toggle BTN -->
                <button class="po rc" @click="navigationOpen = !navigationOpen">
                    <span class="rc i pf re pd">
                        <span class="du-block h q vd yc">
                            <span class="rc i r s eh um tg te rd eb ml jl dl" :class="{ 'ue el': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl fl" :class="{ 'ue qr': !navigationOpen }"></span>
                            <span class="rc i r s eh um tg te rd eb ml jl gl" :class="{ 'ue hl': !navigationOpen }"></span>
                        </span>
                        <span class="du-block h q vd yc lf">
                            <span class="rc eh um tg ml jl el h na r ve yc" :class="{ 'sd dl': !navigationOpen }"></span>
                            <span class="rc eh um tg ml jl qr h s pa vd rd" :class="{ 'sd rr': !navigationOpen }"></span>
                        </span>
                    </span>
                </button>
                <!-- Hamburger Toggle BTN -->
            </div>

            <div class="vd wo/4 sd qo f ho oo wf yf" :class="{ 'd hh rm sr td ud qg ug jc yh': navigationOpen }">
                <nav>
                    <ul class="tc _o sf yo cg ep">
                        <li>
                            <a href="index.html" class="xl" :class="{ '': page === 'home' }">Home</a>
                        </li>
                        <li><a href="index.html#features" class="xl">Features</a></li>
                        <li class="c i" x-data="{ dropdown: false }">
                            <a href="#" class="xl tc wf yf bg" @click.prevent="dropdown = !dropdown" :class="{ 'mk': page === 'blog-grid' || page === 'blog-single' || page === 'signin' || page === 'signup' || page === '404' }">
                                Pages

                                <svg :class="{ 'wh': dropdown }" class="th mm we fd pf" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>
                            </a>

                            <!-- Dropdown Start -->
                            <ul class="a" :class="{ 'tc': dropdown }">
                                <li>
                                    <a href="blog-grid.html" class="xl" :class="{ 'mk': page === 'blog-grid' }">Blog Grid</a>
                                </li>
                                <li>
                                    <a href="blog-single.html" class="xl" :class="{ 'mk': page === 'blog-single' }">Blog Single</a>
                                </li>
                                <li>
                                    <a href="signin.html" class="xl" :class="{ 'mk': page === 'signin' }">Sign In</a>
                                </li>
                                <li>
                                    <a href="signup.html" class="xl" :class="{ 'mk': page === 'signup' }">Sign Up</a>
                                </li>
                                <li>
                                    <a href="404.html" class="xl" :class="{ 'mk': page === '404' }">404</a>
                                </li>
                            </ul>
                            <!-- Dropdown End -->
                        </li>
                        <li><a href="index.html#support" id="botaoSuporte" class="xl">Suporte</a></li>
                    </ul>
                </nav>

                <div class="tc wf ig pb no">
                    <div class="pc h io pa ra" :class="navigationOpen ? '!-ud-visible' : 'd'">
                        <label class="rc ab i">
                            <input type="checkbox" :value="darkMode" @change="darkMode = !darkMode" class="pf vd yc uk h r za ab" />
                            <!-- Icon Sun -->
                            <svg :class="{ 'xl' : page === 'home', 'xh' : page === 'home' && stickyMenu }" class="th om" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0908 18.6363C10.3549 18.6363 8.69 17.9467 7.46249 16.7192C6.23497 15.4916 5.54537 13.8268 5.54537 12.0908C5.54537 10.3549 6.23497 8.69 7.46249 7.46249C8.69 6.23497 10.3549 5.54537 12.0908 5.54537C13.8268 5.54537 15.4916 6.23497 16.7192 7.46249C17.9467 8.69 18.6363 10.3549 18.6363 12.0908C18.6363 13.8268 17.9467 15.4916 16.7192 16.7192C15.4916 17.9467 13.8268 18.6363 12.0908 18.6363ZM12.0908 16.4545C13.2481 16.4545 14.358 15.9947 15.1764 15.1764C15.9947 14.358 16.4545 13.2481 16.4545 12.0908C16.4545 10.9335 15.9947 9.8236 15.1764 9.00526C14.358 8.18692 13.2481 7.72718 12.0908 7.72718C10.9335 7.72718 9.8236 8.18692 9.00526 9.00526C8.18692 9.8236 7.72718 10.9335 7.72718 12.0908C7.72718 13.2481 8.18692 14.358 9.00526 15.1764C9.8236 15.9947 10.9335 16.4545 12.0908 16.4545ZM10.9999 0.0908203H13.1817V3.36355H10.9999V0.0908203ZM10.9999 20.8181H13.1817V24.0908H10.9999V20.8181ZM2.83446 4.377L4.377 2.83446L6.69082 5.14828L5.14828 6.69082L2.83446 4.37809V4.377ZM17.4908 19.0334L19.0334 17.4908L21.3472 19.8046L19.8046 21.3472L17.4908 19.0334ZM19.8046 2.83337L21.3472 4.377L19.0334 6.69082L17.4908 5.14828L19.8046 2.83446V2.83337ZM5.14828 17.4908L6.69082 19.0334L4.377 21.3472L2.83446 19.8046L5.14828 17.4908ZM24.0908 10.9999V13.1817H20.8181V10.9999H24.0908ZM3.36355 10.9999V13.1817H0.0908203V10.9999H3.36355Z" fill="" />
                            </svg>
                            <!-- Icon Sun -->
                            <img class="xc nm" src="images/icon-moon.svg" alt="Moon" />
                        </label>
                    </div>

                    <a href="{{route('login')}}" :class="{ 'xl' : page === 'home', 'ok' : page === 'home xl' && stickyMenu }" >Entrar</a>
                    <a href="{{route('register')}}" :class="{ 'hh/[0.15] text-black' : page === 'home', 'sh' : page === 'home bg-verde_logo ' && stickyMenu }" class="bg-verde_logo gh dk rg tc wf xf _l gi hi">Registrar</a>
                </div>
            </div>
        </div>
    </header>

    <!-- ===== Header End ===== -->

    <main>
        <!-- ===== Hero Start ===== -->
        <section class="gj do ir hj sp jr i pg">
            <!-- Hero Images -->

            <!-- Hero Content -->
            <div class="bb ze ki xn 2xl:ud-px-0">
                <div class="tc _o">
                    <div class="animate_left jn/2">
                        <h1 class="fk vj zp or kk wm wb">
                            Transforme sua pousada, desperte tranquilidade na gestão hoteleira.
                        </h1>
                        <p class="fq">
                            Desperte uma gestão hoteleira tranquila e transformadora, elevando o patamar da sua pousada para um novo nível de excelência, onde preocupações se dissipam e a experiência do hóspede é aprimorada em todos os detalhes.
                        </p>

                        <div class="tc tf yo zf mb">
                            <a href="#" class="ek jk lk gh gi hi rg ml il vc _d _l bg-verde_logo">Comece agora</a>

                            <span class="tc sf">
                                <a href="#" class="inline-block ek xj kk wm">
                                    Ligue para nós (33) 99876-5432
                                </a>
                                <span class="inline-block">Para qualquer dúvida ou preocupação</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Hero End ===== -->

        <!-- ===== Small Features Start ===== -->
        <section id="features">
            <div class="bb ze ki yn 2xl:ud-px-12.5">
                <div class="tc uf zo xf ap zf bp mq">
                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg mh ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M160 24c0-13.3 10.7-24 24-24H296c13.3 0 24 10.7 24 24s-10.7 24-24 24H280L384 192H500.4c7.7 0 15.3 1.4 22.5 4.1L625 234.4c9 3.4 15 12 15 21.6s-6 18.2-15 21.6L522.9 315.9c-7.2 2.7-14.8 4.1-22.5 4.1H384L280 464h16c13.3 0 24 10.7 24 24s-10.7 24-24 24H184c-13.3 0-24-10.7-24-24s10.7-24 24-24h8V320H160l-54.6 54.6c-6 6-14.1 9.4-22.6 9.4H64c-17.7 0-32-14.3-32-32V288c-17.7 0-32-14.3-32-32s14.3-32 32-32V160c0-17.7 14.3-32 32-32H82.7c8.5 0 16.6 3.4 22.6 9.4L160 192h32V48h-8c-13.3 0-24-10.7-24-24zM80 240c-8.8 0-16 7.2-16 16s7.2 16 16 16h64c8.8 0 16-7.2 16-16s-7.2-16-16-16H80z"/></svg>
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">SISTEMA AGIL</h4>
                            <p>Evolução constante, eficiência em movimento.</p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg nh">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="40" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M384 32H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H398.4c-5.2 25.8-22.9 47.1-46.4 57.3V448H512c17.7 0 32 14.3 32 32s-14.3 32-32 32H320 128c-17.7 0-32-14.3-32-32s14.3-32 32-32H288V153.3c-23.5-10.3-41.2-31.6-46.4-57.3H128c-17.7 0-32-14.3-32-32s14.3-32 32-32H256c14.6-19.4 37.8-32 64-32s49.4 12.6 64 32zm55.6 288H584.4L512 195.8 439.6 320zM512 416c-62.9 0-115.2-34-126-78.9c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C627.2 382 574.9 416 512 416zM126.8 195.8L54.4 320H199.3L126.8 195.8zM.9 337.1c-2.6-11 1-22.3 6.7-32.1l95.2-163.2c5-8.6 14.2-13.8 24.1-13.8s19.1 5.3 24.1 13.8l95.2 163.2c5.7 9.8 9.3 21.1 6.7 32.1C242 382 189.7 416 126.8 416S11.7 382 .9 337.1z"/></svg>
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">LEVE E COMPLETO</h4>
                            <p>O equilíbrio perfeito em um clique.</p>
                        </div>
                    </div>

                    <!-- Small Features Item -->
                    <div class="animate_top kn to/3 tc cg oq">
                        <div class="tc wf xf cf ae cd rg oh">
                            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                        </div>
                        <div>
                            <h4 class="ek yj go kk wm xb">CONFIAVEL</h4>
                            <p>Sua segurança é a nossa prioridade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Small Features End ===== -->

        <!-- ===== About Start ===== -->

        <!-- ===== About End ===== -->

        <!-- ===== Team Start ===== -->
        <div>
            <br><br><br><br><br><br><br><br><br><br>
        </div>
        <!-- ===== Team End ===== -->

        <!-- ===== Services Start ===== -->
        <section class="lj tp kr">
            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Oferecemos o Serviço Da Melhor Qualidade Para Você`, sectionTitleText: `Comprometidos com a Excelência: Nossa Promessa de Fornecer o Serviço de Melhor Qualidade Exclusivamente para Você.`}">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="bb ze ki xn yq mb en">
                <div class="wc qf pn xo ng">
                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="images/icon-04.svg" alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Criado para Hospedagens</h4>
                        <p>
                        Desenvolvido com qualidade superior, nosso serviço é a escolha ideal para atender às suas necessidades.
                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="images/icon-05.svg" alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Design de alta qualidade</h4>
                        <p>
                        Design distinto e de alta qualidade, onde cada detalhe reflete excelência e inovação para destacar sua singularidade.
                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="images/icon-06.svg" alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Todas as seções essenciais</h4>
                        <p>
                        Explore todas as seções essenciais, onde cada elemento é cuidadosamente elaborado para uma experiência completa e envolvente.
                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="images/icon-07.svg" alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Velocidade otimizada</h4>
                        <p>
                        Potencialize sua jornada online com velocidade otimizada. Desfrute de uma experiência rápida, eficiente e sem complicações em todos os momentos.
                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="images/icon-05.svg" alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Totalmente personalizável</h4>
                        <p>
                        Liberte sua criatividade! Oferecemos uma experiência totalmente personalizável, colocando o controle total nas suas mãos para moldar cada detalhe conforme suas preferências e necessidades.
                        </p>
                    </div>

                    <!-- Service Item -->
                    <div class="animate_top sg oi pi zq ml il am cn _m">
                        <img src="images/icon-06.svg" alt="Icon" />
                        <h4 class="ek zj kk wm nb _b">Atualizações regulares</h4>
                        <p>
                        Atualizações regulares garantem que sua experiência seja sempre a melhor. Mantemo-nos em constante evolução, oferecendo novidades e melhorias contínuas para superar suas expectativas.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Services End ===== -->

        <!-- ===== Pricing Table Start ===== -->
        <section x-data="setup()" class="i pg fh rm ji gp uq">
            <!-- Bg Shapes -->


            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Oferecemos ótimos preços premium acessíveis.`, sectionTitleText: `Comprometemo-nos a oferecer produtos de alta qualidade a preços acessíveis, proporcionando uma experiência premium ao alcance de todos os clientes.`}">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <!-- Pricing switcher -->
            <div class="tc wf xf jb og">
                <span class="ek kk wm">Assinatura Mensal</span>
                <button class="i rg gm" x-cloak @click="billPlan == 'monthly' ? billPlan = 'annually' : billPlan = 'monthly'">
                    <div class="bg-verde_logo fe id bl gh rg xk outline-none"></div>
                    <div class="h vc wf xf ge jd cl jl ml mf hh rg yk ea fa" :class="{ 'ff': billPlan == 'monthly', 'gf': billPlan == 'annually' }"></div>
                </button>
                <span class="ek kk wm">Assinatura Anual</span>
            </div>

            <!-- Pricing Table -->
            <div class="bb ze i va ki xn yq bc">
                <div class="wc qf pn xo jg">
                    <template x-for="(plan, i) in plans" x-key="i">
                        <!-- Pricing Item -->
                        <div class="animate_top rj sg hh sm vk xm hi nj oj">
                            <h4 x-text="plan.name" class="wj kk wm fb"></h4>

                            <div class="tc wf xf kg cc">
                                <h2 :class="plan.name == 'Basic' ? 'text-green-500' : ''" x-text="`R$${billPlan == 'monthly' ? plan.price.monthly : plan.price.annually}`" class="fk _j kk wm"></h2>
                                <span x-text="billPlan == 'monthly' ? '/por mês' : '/por ano'" class="sc ak kk wm"></span>
                            </div>

                            <p class="ur dc">Não é necessário cartão de crédito</p>

                            <!-- Button -->
                            <a href="#" class="ek rg lk ml il gi _l ri bg-verde_logo" :class="plan.name == 'Growth Plan' ? 'gh sl' : ''">
                                Experimentar gratuitamente
                            </a>

                            <!-- Features -->
                            <ul class="tc sf bg ob fb">
                                <template x-for="(feature, i) in plan.features" x-key="i">
                                    <li x-text="feature"></li>
                                </template>
                            </ul>

                            <p class="kk wm">Teste gratuito de 7 dias</p>
                        </div>
                    </template>
                </div>
            </div>
        </section>
        <!-- ===== Pricing Table End ===== -->

        <!-- ===== Projects Start ===== -->
        <br><br><br><br><br><br>
        <!-- ===== Projects End ===== -->

        <!-- ===== Testimonials Start ===== -->
        
        <!-- ===== Clients End ===== -->

        <!-- ===== Blog Start ===== -->
        
        <!-- ===== Blog End ===== -->

        <!-- ===== Contact Start ===== -->
        <section id="support" class="i pg fh rm ji gp uq">
            <!-- Bg Shapes -->
            <img src="images/shape-06.svg" alt="Shape" class="h aa y" />
            <img src="images/shape-03.svg" alt="Shape" class="h ca u" />
            <img src="images/shape-07.svg" alt="Shape" class="h w da ee" />
            <img src="images/shape-12.svg" alt="Shape" class="h p s" />
            <img src="images/shape-13.svg" alt="Shape" class="h r q" />

            <!-- Section Title Start -->
            <div x-data="{ sectionTitle: `Contate com Nosso Suporte`, sectionTitleText: `Estamos aqui para ajudar! Contate nosso suporte e receba assistência dedicada, proporcionando soluções rápidas e eficazes para todas as suas necessidades.`}">
                <div class="animate_top bb ze rj ki xn vq">
                    <h2 x-text="sectionTitle" class="fk vj pr kk wm on/5 gq/2 bb _b"></h2>
                    <p class="bb on/5 wo/5 hq" x-text="sectionTitleText"></p>
                </div>
            </div>
            <!-- Section Title End -->

            <div class="i va bb ye ki xn wq jb mo">
                <div class="tc uf sn tf rn un zf xl:gap-10">
                    <div class="animate_top w-full mn/5 to/3 vk sg hh sm yh rq i pg">
                        <!-- Bg Shapes -->
                        <img src="images/shape-03.svg" alt="Shape" class="h la x wd" />
                        <img src="images/shape-06.svg" alt="Shape" class="h la ma ne kf" />

                        <div class="fb">
                            <h4 class="wj kk wm cc">Endereço de email</h4>
                            <p><a href="#">suporte@group.com.br</a></p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">Localização do escritório</h4>
                            <p>Governador Valadares, Minas Gerais, Brasil.</p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">Número de telefone</h4>
                            <p><a href="#">(33) 99876-5432</a></p>
                        </div>
                        <div class="fb">
                            <h4 class="wj kk wm cc">X/Twitter</h4>
                            <p><a href="#">@grouphoteis</a></p>
                        </div>

                        <span class="rc nd rh tm lc fb"></span>

                        <div>
                            <h4 class="wj kk wm qb">Redes sociais</h4>
                            <ul class="tc wf fg">
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.83366 11.3752H9.12533L10.042 7.7085H6.83366V5.87516C6.83366 4.931 6.83366 4.04183 8.667 4.04183H10.042V0.96183C9.74316 0.922413 8.61475 0.833496 7.42308 0.833496C4.93433 0.833496 3.16699 2.35241 3.16699 5.14183V7.7085H0.416992V11.3752H3.16699V19.1668H6.83366V11.3752Z" fill="" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.3153 2.18484C18.6155 2.4944 17.8733 2.6977 17.1134 2.78801C17.9144 2.30899 18.5138 1.55511 18.8001 0.666844C18.0484 1.11418 17.2244 1.42768 16.3654 1.59726C15.7885 0.979958 15.0238 0.57056 14.1901 0.432713C13.3565 0.294866 12.5007 0.436294 11.7558 0.835009C11.0108 1.23372 10.4185 1.86739 10.0708 2.63749C9.72313 3.40759 9.63963 4.27098 9.83327 5.09343C8.30896 5.01703 6.81775 4.62091 5.45645 3.93079C4.09516 3.24067 2.89423 2.27197 1.93161 1.08759C1.59088 1.67284 1.41182 2.33814 1.41278 3.01534C1.41278 4.34451 2.08928 5.51876 3.11778 6.20626C2.50912 6.1871 1.91386 6.02273 1.38161 5.72685V5.77451C1.38179 6.65974 1.68811 7.51766 2.24864 8.20282C2.80916 8.88797 3.58938 9.3582 4.45703 9.53376C3.89201 9.68688 3.29956 9.70945 2.72453 9.59976C2.96915 10.3617 3.44595 11.0281 4.08815 11.5056C4.73035 11.9831 5.50581 12.2478 6.30594 12.2627C5.51072 12.8872 4.60019 13.3489 3.62642 13.6213C2.65264 13.8938 1.63473 13.9716 0.630859 13.8503C2.38325 14.9773 4.4232 15.5756 6.50669 15.5737C13.5586 15.5737 17.415 9.73176 17.415 4.66535C17.415 4.50035 17.4104 4.33351 17.4031 4.17035C18.1537 3.62783 18.8016 2.95578 19.3162 2.18576L19.3153 2.18484Z" fill="" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.36198 2.58327C4.36174 3.0695 4.16835 3.53572 3.82436 3.87937C3.48037 4.22301 3.01396 4.41593 2.52773 4.41569C2.0415 4.41545 1.57528 4.22206 1.23164 3.87807C0.887991 3.53408 0.69507 3.06767 0.695313 2.58144C0.695556 2.09521 0.888943 1.62899 1.23293 1.28535C1.57692 0.941701 2.04333 0.748781 2.52956 0.749024C3.01579 0.749267 3.48201 0.942654 3.82566 1.28664C4.1693 1.63063 4.36222 2.09704 4.36198 2.58327ZM4.41698 5.77327H0.750313V17.2499H4.41698V5.77327ZM10.2103 5.77327H6.56198V17.2499H10.1736V11.2274C10.1736 7.87244 14.5461 7.56077 14.5461 11.2274V17.2499H18.167V9.98077C18.167 4.32494 11.6953 4.53577 10.1736 7.31327L10.2103 5.77327Z" fill="" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="c tc wf xf ie ld rg ml il tl">
                                        <svg class="th lm ml il" width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M6.82308 0.904297C7.40883 0.904297 7.95058 0.95013 8.44558 1.0858C8.89476 1.16834 9.32351 1.33772 9.70783 1.58446C10.069 1.81088 10.3394 2.12896 10.5191 2.53688C10.6997 2.9448 10.7895 3.44438 10.7895 3.98796C10.7895 4.62321 10.6547 5.1668 10.3394 5.57471C10.069 5.98355 9.61799 6.34563 9.07716 6.61788C9.84349 6.84521 10.4292 7.25313 10.7895 7.79672C11.1507 8.34122 11.3762 9.02138 11.3762 9.7923C11.3762 10.4275 11.2405 10.9711 11.015 11.4249C10.7895 11.8786 10.4292 12.2865 10.0232 12.5588C9.58205 12.8506 9.09443 13.0651 8.58124 13.1931C8.04041 13.3297 7.49958 13.4205 6.95874 13.4205H0.916992V0.904297H6.82308ZM6.46191 5.98263C6.95783 5.98263 7.36391 5.84696 7.67924 5.62055C7.99458 5.39413 8.13024 4.9853 8.13024 4.48663C8.13024 4.21438 8.08441 3.94213 7.99458 3.76155C7.90474 3.58005 7.76908 3.44346 7.58941 3.3078C7.40883 3.21705 7.22824 3.1263 7.00274 3.08138C6.77724 3.03555 6.55266 3.03555 6.28133 3.03555H3.66699V5.98355H6.46283L6.46191 5.98263ZM6.59758 11.3341C6.86799 11.3341 7.13841 11.2883 7.36391 11.2434C7.59159 11.2001 7.80692 11.1071 7.99458 10.9711C8.17826 10.8384 8.33193 10.6685 8.44558 10.4725C8.53541 10.246 8.62616 9.9738 8.62616 9.65663C8.62616 9.02138 8.44558 8.56763 8.08533 8.25046C7.72416 7.97822 7.22824 7.84255 6.64249 7.84255H3.66699V11.335H6.59758V11.3341ZM15.2986 11.2883C15.6588 11.6513 16.1997 11.8328 16.9211 11.8328C17.417 11.8328 17.868 11.6971 18.2282 11.4707C18.5894 11.1985 18.8149 10.9262 18.9047 10.654H21.1139C20.7527 11.742 20.2119 12.513 19.4914 13.0116C18.7691 13.4654 17.9129 13.7376 16.8762 13.7376C16.2128 13.7396 15.5551 13.6165 14.9374 13.3746C14.3816 13.1661 13.886 12.8235 13.4946 12.3773C13.0759 11.9598 12.7665 11.4457 12.5935 10.8804C12.368 10.291 12.2772 9.65663 12.2772 8.93063C12.2772 8.25047 12.368 7.61613 12.5935 7.0258C12.8103 6.45755 13.1311 5.93468 13.5395 5.48396C13.9456 5.07605 14.4415 4.71396 14.9823 4.48663C15.5843 4.24469 16.2274 4.12143 16.8762 4.12363C17.6425 4.12363 18.319 4.26021 18.9047 4.57738C19.4914 4.89455 19.9415 5.25755 20.3027 5.80205C20.6711 6.32503 20.9456 6.90819 21.1139 7.52538C21.2037 8.15972 21.2487 8.79497 21.2037 9.52005H14.667C14.667 10.246 14.9374 10.9262 15.2986 11.2892V11.2883ZM18.1384 6.52713C17.8231 6.20996 17.3272 6.02846 16.7405 6.02846C16.3353 6.02846 16.0191 6.11922 15.7487 6.25488C15.4782 6.39147 15.2986 6.57297 15.118 6.75447C14.952 6.92978 14.8422 7.15067 14.8027 7.3888C14.7568 7.61613 14.7119 7.79672 14.7119 7.97822H18.7691C18.6792 7.29805 18.4537 6.84522 18.1384 6.52713ZM14.1711 1.76596H19.2201V2.99063H14.172V1.76596H14.1711Z" fill="" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="animate_top w-full nn/5 vo/3 vk sg hh sm yh tq">
                        <form action="https://formbold.com/s/unique_form_id" method="POST">
                            <div class="tc sf yo ap zf ep qb">
                                <div class="vd to/2">
                                    <label class="rc ac" for="fullname">Nome completo</label>
                                    <input type="text" name="fullname" id="fullname" placeholder="Devi Santos" class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>

                                <div class="vd to/2">
                                    <label class="rc ac" for="email">Endereço de email</label>
                                    <input type="email" name="email" id="email" placeholder="exemplo@exemplo.com" class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>
                            </div>

                            <div class="tc sf yo ap zf ep qb">
                                <div class="vd to/2">
                                    <label class="rc ac" for="phone">Número de telefone</label>
                                    <input type="text" name="phone" id="phone" placeholder="(33) 99836-6638" class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>

                                <div class="vd to/2">
                                    <label class="rc ac" for="subject">Assunto</label>
                                    <input type="text" for="subject" id="subject" placeholder="Digite seu assunto" class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 xi mi" />
                                </div>
                            </div>

                            <div class="fb">
                                <label class="rc ac" for="message">Mensagem</label>
                                <textarea placeholder="Escreva Aqui Sua Mensagem" rows="4" name="message" id="message" class="vd ph sg zk xm _g ch pm hm dm dn em pl/50 ci"></textarea>
                            </div>

                            <div class="tc xf">
                                <button class="vc rg lk gh ml il hi gi _l">
                                Enviar mensagem
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ===== Contact End ===== -->

        <!-- ===== CTA Start ===== -->
        <section class="i pg gh ji">
            <!-- Bg Shape -->
            <img class="h p q" src="images/shape-16.svg" alt="Bg Shape" />

            <div class="bb ye i z-10 ki xn dr">
                <div class="tc uf sn tn un gg">
                    <div class="animate_left to/2">
                        <h2 class="fk vj zp pr lk ac">
                            Join with 5000+ Startups Growing with Base.
                        </h2>
                        <p class="lk">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                            quis nibh lorem. Duis sed odio lorem. In a efficitur leo. Ut
                            venenatis rhoncus.
                        </p>
                    </div>
                    <div class="animate_right bf">
                        <a href="#" class="vc ek kk hh rg ol il cm gi hi">
                            Get Started Now
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CTA End ===== -->
    </main>
    <!-- ===== Footer Start ===== -->
    <footer>
        <div class="bb ze ki xn 2xl:ud-px-0">
            <!-- Footer Top -->
            <div class="ji gp">
                <div class="tc uf ap gg fp">
                    <div class="animate_top zd/2 to/4">
                        <a href="index.html">
                            <img src="images/logo-light.svg" alt="Logo" class="om" />
                            <img src="images/logo-dark.svg" alt="Logo" class="xc nm" />
                        </a>

                        <p class="lc fb">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>

                        <ul class="tc wf cg">
                            <li>
                                <a href="#">
                                    <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_1499)">
                                            <path d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z" fill="" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_1499">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_1502)">
                                            <path d="M22.162 5.65593C21.3985 5.99362 20.589 6.2154 19.76 6.31393C20.6337 5.79136 21.2877 4.96894 21.6 3.99993C20.78 4.48793 19.881 4.82993 18.944 5.01493C18.3146 4.34151 17.4803 3.89489 16.5709 3.74451C15.6615 3.59413 14.7279 3.74842 13.9153 4.18338C13.1026 4.61834 12.4564 5.30961 12.0771 6.14972C11.6978 6.98983 11.6067 7.93171 11.818 8.82893C10.1551 8.74558 8.52832 8.31345 7.04328 7.56059C5.55823 6.80773 4.24812 5.75098 3.19799 4.45893C2.82628 5.09738 2.63095 5.82315 2.63199 6.56193C2.63199 8.01193 3.36999 9.29293 4.49199 10.0429C3.828 10.022 3.17862 9.84271 2.59799 9.51993V9.57193C2.59819 10.5376 2.93236 11.4735 3.54384 12.221C4.15532 12.9684 5.00647 13.4814 5.95299 13.6729C5.33661 13.84 4.6903 13.8646 4.06299 13.7449C4.32986 14.5762 4.85 15.3031 5.55058 15.824C6.25117 16.345 7.09712 16.6337 7.96999 16.6499C7.10247 17.3313 6.10917 17.8349 5.04687 18.1321C3.98458 18.4293 2.87412 18.5142 1.77899 18.3819C3.69069 19.6114 5.91609 20.2641 8.18899 20.2619C15.882 20.2619 20.089 13.8889 20.089 8.36193C20.089 8.18193 20.084 7.99993 20.076 7.82193C20.8949 7.2301 21.6016 6.49695 22.163 5.65693L22.162 5.65593Z" fill="" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_1502">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_1505)">
                                            <path d="M6.94 5.00002C6.93974 5.53046 6.72877 6.03906 6.35351 6.41394C5.97825 6.78883 5.46944 6.99929 4.939 6.99902C4.40857 6.99876 3.89997 6.78779 3.52508 6.41253C3.1502 6.03727 2.93974 5.52846 2.94 4.99802C2.94027 4.46759 3.15124 3.95899 3.5265 3.5841C3.90176 3.20922 4.41057 2.99876 4.941 2.99902C5.47144 2.99929 5.98004 3.21026 6.35492 3.58552C6.72981 3.96078 6.94027 4.46959 6.94 5.00002ZM7 8.48002H3V21H7V8.48002ZM13.32 8.48002H9.34V21H13.28V14.43C13.28 10.77 18.05 10.43 18.05 14.43V21H22V13.07C22 6.90002 14.94 7.13002 13.28 10.16L13.32 8.48002Z" fill="" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_1505">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg class="vh ul cl il" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_48_1508)">
                                            <path d="M7.443 5.3501C8.082 5.3501 8.673 5.4001 9.213 5.5481C9.70301 5.63814 10.1708 5.82293 10.59 6.0921C10.984 6.3391 11.279 6.6861 11.475 7.1311C11.672 7.5761 11.77 8.1211 11.77 8.7141C11.77 9.4071 11.623 10.0001 11.279 10.4451C10.984 10.8911 10.492 11.2861 9.902 11.5831C10.738 11.8311 11.377 12.2761 11.77 12.8691C12.164 13.4631 12.41 14.2051 12.41 15.0461C12.41 15.7391 12.262 16.3321 12.016 16.8271C11.77 17.3221 11.377 17.7671 10.934 18.0641C10.4528 18.3825 9.92084 18.6165 9.361 18.7561C8.771 18.9051 8.181 19.0041 7.591 19.0041H1V5.3501H7.443ZM7.049 10.8901C7.59 10.8901 8.033 10.7421 8.377 10.4951C8.721 10.2481 8.869 9.8021 8.869 9.2581C8.869 8.9611 8.819 8.6641 8.721 8.4671C8.623 8.2691 8.475 8.1201 8.279 7.9721C8.082 7.8731 7.885 7.7741 7.639 7.7251C7.393 7.6751 7.148 7.6751 6.852 7.6751H4V10.8911H7.05L7.049 10.8901ZM7.197 16.7281C7.492 16.7281 7.787 16.6781 8.033 16.6291C8.28138 16.5819 8.51628 16.4805 8.721 16.3321C8.92139 16.1873 9.08903 16.002 9.213 15.7881C9.311 15.5411 9.41 15.2441 9.41 14.8981C9.41 14.2051 9.213 13.7101 8.82 13.3641C8.426 13.0671 7.885 12.9191 7.246 12.9191H4V16.7291H7.197V16.7281ZM16.689 16.6781C17.082 17.0741 17.672 17.2721 18.459 17.2721C19 17.2721 19.492 17.1241 19.885 16.8771C20.279 16.5801 20.525 16.2831 20.623 15.9861H23.033C22.639 17.1731 22.049 18.0141 21.263 18.5581C20.475 19.0531 19.541 19.3501 18.41 19.3501C17.6864 19.3523 16.9688 19.2179 16.295 18.9541C15.6887 18.7266 15.148 18.3529 14.721 17.8661C14.2643 17.4107 13.9267 16.8498 13.738 16.2331C13.492 15.5901 13.393 14.8981 13.393 14.1061C13.393 13.3641 13.492 12.6721 13.738 12.0281C13.9745 11.4082 14.3245 10.8378 14.77 10.3461C15.213 9.9011 15.754 9.5061 16.344 9.2581C17.0007 8.99416 17.7022 8.85969 18.41 8.8621C19.246 8.8621 19.984 9.0111 20.623 9.3571C21.263 9.7031 21.754 10.0991 22.148 10.6931C22.5499 11.2636 22.8494 11.8998 23.033 12.5731C23.131 13.2651 23.18 13.9581 23.131 14.7491H16C16 15.5411 16.295 16.2831 16.689 16.6791V16.6781ZM19.787 11.4841C19.443 11.1381 18.902 10.9401 18.262 10.9401C17.82 10.9401 17.475 11.0391 17.18 11.1871C16.885 11.3361 16.689 11.5341 16.492 11.7321C16.311 11.9234 16.1912 12.1643 16.148 12.4241C16.098 12.6721 16.049 12.8691 16.049 13.0671H20.475C20.377 12.3251 20.131 11.8311 19.787 11.4841V11.4841ZM15.459 6.2901H20.967V7.6261H15.46V6.2901H15.459Z" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_48_1508">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="vd ro tc sf rn un gg vn">
                        <div class="animate_top">
                            <h4 class="kk wm tj ec">Quick Links</h4>

                            <ul>
                                <li><a href="#" class="sc xl vb">Home</a></li>
                                <li><a href="#" class="sc xl vb">Product</a></li>
                                <li>
                                    <a href="#" class="sc xl vb">
                                        Careers
                                        <span class="sc ek uj lk nh rg zi _i nc">Hiring</span>
                                    </a>
                                </li>
                                <li><a href="#" class="sc xl vb">Pricing</a></li>
                            </ul>
                        </div>

                        <div class="animate_top">
                            <h4 class="kk wm tj ec">Services</h4>

                            <ul>
                                <li><a href="#" class="sc xl vb">Web Development</a></li>
                                <li><a href="#" class="sc xl vb">Graphics Design</a></li>
                                <li><a href="#" class="sc xl vb">Digital Marketing</a></li>
                                <li><a href="#" class="sc xl vb">Ui/Ux Design</a></li>
                            </ul>
                        </div>

                        <div class="animate_top">
                            <h4 class="kk wm tj ec">Support</h4>

                            <ul>
                                <li><a href="#" class="sc xl vb">Company</a></li>
                                <li><a href="#" class="sc xl vb">Press media</a></li>
                                <li><a href="#" class="sc xl vb">Our Blog</a></li>
                                <li><a href="#" class="sc xl vb">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="animate_top">
                            <h4 class="kk wm tj ec">Newsletter</h4>
                            <p class="ac qe">Subscribe to receive future updates</p>

                            <form action="https://formbold.com/s/unique_form_id" method="POST">
                                <div class="i">
                                    <input type="text" placeholder="Email address" class="vd sm _g ch pm vk xm rg gm dm dn gi mi" />

                                    <button class="h q fi">
                                        <svg class="th vm ul" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_48_1487)">
                                                <path d="M3.1175 1.17318L18.5025 9.63484C18.5678 9.67081 18.6223 9.72365 18.6602 9.78786C18.6982 9.85206 18.7182 9.92527 18.7182 9.99984C18.7182 10.0744 18.6982 10.1476 18.6602 10.2118C18.6223 10.276 18.5678 10.3289 18.5025 10.3648L3.1175 18.8265C3.05406 18.8614 2.98262 18.8792 2.91023 18.8781C2.83783 18.8769 2.76698 18.857 2.70465 18.8201C2.64232 18.7833 2.59066 18.7308 2.55478 18.6679C2.51889 18.6051 2.50001 18.5339 2.5 18.4615V1.53818C2.50001 1.46577 2.51889 1.39462 2.55478 1.33174C2.59066 1.26885 2.64232 1.2164 2.70465 1.17956C2.76698 1.14272 2.83783 1.12275 2.91023 1.12163C2.98262 1.12051 3.05406 1.13828 3.1175 1.17318ZM4.16667 10.8332V16.3473L15.7083 9.99984L4.16667 3.65234V9.16651H8.33333V10.8332H4.16667Z" fill="" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_48_1487">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Top -->

            <!-- Footer Bottom -->
            <div class="bh ch pm tc uf sf yo wf xf ap cg fp bj">
                <div class="animate_top">
                    <ul class="tc wf gg">
                        <li><a href="#" class="xl">English</a></li>
                        <li><a href="#" class="xl">Privacy Policy</a></li>
                        <li><a href="#" class="xl">Support</a></li>
                    </ul>
                </div>

                <div class="animate_top">
                    <p>&copy; 2025 Base. All rights reserved</p>
                </div>
            </div>
            <!-- Footer Bottom -->
        </div>
    </footer>

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button class="xc wf xf ie ld vg sr gh tr g sa ta _a" @click="window.scrollTo({top: 0, behavior: 'smooth'})" @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false" :class="{ 'uc' : scrollTop }">
        <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
        </svg>
    </button>

    <!-- ====== Back To Top End ===== -->

    <script>
        //  Pricing Table
        const setup = () => {
            return {
                isNavOpen: false,

                billPlan: "monthly",

                plans: [{
                        name: "Plano Basico",
                        price: {
                            monthly: 59,
                            annually: 59 * 12 - 199,
                        },
                        features: [
                            "400 GB Storaget",
                            "Unlimited Photos & Videos",
                            "Exclusive Support",
                        ],
                    },
                    {
                        name: "Plano Padrão",
                        price: {
                            monthly: 119,
                            annually: 119 * 12 - 100,
                        },
                        features: [
                            "400 GB Storaget",
                            "Unlimited Photos & Videos",
                            "Exclusive Support",
                        ],
                    },
                    {
                        name: "Plano Premium",
                        price: {
                            monthly: 199,
                            annually: 199 * 12 - 100,
                        },
                        features: [
                            "400 GB Storaget",
                            "Unlimited Photos & Videos",
                            "Exclusive Support",
                        ],
                    },
                ],
            };
        };
    </script>
    <script defer src="bundle.js"></script>

    


</x-guest-layout>
