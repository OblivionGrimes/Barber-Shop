<div class="flex grow">

    <?= $forms->asideI("sidebar","flex-col fixed z-20 hidden lg:flex items-stretch shrink-0 w-(--layout-has-sidebar) bg-grey-2") ?>

        <div class="flex flex-col gap-2.5" id="sidebar_header">
            <!-- Header -->
            <p>Header</p>
        </div>

        <div class="flex items-stretch grow shrink-0 justify-center my-5" id="sidebar_menu">
            <!-- Menu -->
            <div class="kt-scrollable-y-auto grow">
                <div class="mb-5">
                    <h3 class="text-sm text-muted-foreground uppercase ps-5 inline-block mb-3">Menu</h3>
                    <div class="kt-menu flex flex-col w-full gap-1.5 px-3.5" data-kt-menu="true" data-kt-menu-accordion-expand-all="false">
                        
                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-1 px-2.5" href="<?= BASE_URL ?>d/manage/home">
                                <span class="rounded-md flex items-center justify-center size-7 bg-coal-black kt-menu-link-hover:border-none me-2">
                                    <img alt="" class="size-3.5" src="/metronic/tailwind/dist/assets/media/brand-logos/x-dark.svg">
                                </span>
                                <span class="kt-menu-title text-sm text-secondary-foreground kt-menu-item-here:text-mono kt-menu-item-active:text-mono kt-menu-link-hover:text-mono">
                                    Dashboard
                                </span>
                            </a>
                        </div>

                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-1 px-2.5" href="#">
                                <span class="rounded-md flex items-center justify-center size-7 bg-coal-black kt-menu-link-hover:border-none me-2">
                                    <img alt="" class="size-3.5" src="/metronic/tailwind/dist/assets/media/brand-logos/x-dark.svg">
                                </span>
                                <span class="kt-menu-title text-sm text-secondary-foreground kt-menu-item-here:text-mono kt-menu-item-active:text-mono kt-menu-link-hover:text-mono">
                                    Barbearias
                                </span>
                            </a>
                        </div>

                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-1 px-2.5" href="#">
                                <span class="rounded-md flex items-center justify-center size-7 bg-coal-black kt-menu-link-hover:border-none me-2">
                                    <img alt="" class="size-3.5" src="/metronic/tailwind/dist/assets/media/brand-logos/x-dark.svg">
                                </span>
                                <span class="kt-menu-title text-sm text-secondary-foreground kt-menu-item-here:text-mono kt-menu-item-active:text-mono kt-menu-link-hover:text-mono">
                                    Agendamentos
                                </span>
                            </a>
                        </div>
                    </div> <!-- Fim das div's items -->
                </div> <!-- Fim do menu principal -->

                <div>
                    <h3 class="text-sm text-muted-foreground uppercase ps-5 inline-block mb-3">
                    Outline
                    </h3>
                    <div class="kt-menu flex flex-col w-full gap-1.5 px-3.5" data-kt-menu="true" data-kt-menu-accordion-expand-all="true" id="sidebar_secondary_menu">
                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-1 px-2.5" href="#">
                                <span class="rounded-md flex items-center justify-center size-7 bg-coal-black kt-menu-link-hover:border-none me-2">
                                    <img alt="" class="size-3.5" src="/metronic/tailwind/dist/assets/media/brand-logos/x-dark.svg">
                                </span>
                                <span class="kt-menu-title text-sm text-secondary-foreground kt-menu-item-here:text-mono kt-menu-item-active:text-mono kt-menu-link-hover:text-mono">
                                    @keenthemes
                                </span>
                            </a>
                        </div>
                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-1 px-2.5" href="#">
                                <span class="rounded-md flex items-center justify-center size-7 bg-coal-black kt-menu-link-hover:border-none me-2">
                                    <img alt="" class="size-3.5" src="/metronic/tailwind/dist/assets/media/brand-logos/slack.svg">
                                </span>
                                <span class="kt-menu-title text-sm text-secondary-foreground kt-menu-item-here:text-mono kt-menu-item-active:text-mono kt-menu-link-hover:text-mono">
                                    @keenthemes_hub
                                </span>
                            </a>
                        </div>
                        <div class="kt-menu-item">
                            <a class="kt-menu-link py-1 px-2.5" href="#">
                                <span class="rounded-md flex items-center justify-center size-7 bg-coal-black kt-menu-link-hover:border-none me-2">
                                    <img alt="" class="size-3.5" src="/metronic/tailwind/dist/assets/media/brand-logos/figma.svg">
                                </span>
                                <span class="kt-menu-title text-sm text-secondary-foreground kt-menu-item-here:text-mono kt-menu-item-active:text-mono kt-menu-link-hover:text-mono">
                                    metronic
                                </span>
                            </a>
                        </div>
                    </div>
                </div> <!-- Fim do menu secundário (outline) -->

            </div>  
        </div>

        <div class="flex flex-center justify-between shrink-0 ps-4 pe-3.5 mb-3.5" id="sidebar_footer">
            <!-- Footer -->
            <div class="flex items-center justify-between w-full">
                <p class="text-sm text-gray-600">Footer</p>
                
                <a href="<?= BASE_URL ?>logout" class="kt-btn kt-btn-sm kt-btn-light">
                Sair
                </a>
            </div>
        </div>

    <?= $forms->asideF() ?>

    <div class="flex flex-col grow kt-scrollable-y-auto lg:rounded-l-xl bg-grey border border-input shadow-lg lg:[--kt-scrollbar-width:auto] pt-5">
        <main class="grow " role="content">

            <div class="pb-5">
                <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3">
                    <div class="flex flex-col flex-wrap gap-1">
                        <h1 class="font-medium text-lg text-mono">Dashboard</h1>
                    </div>
                </div>
            </div>

            <div class="kt-container-fixed">
                <div class="flex flex-col items-stretch gap-7">
                    <div class="flex items-center gap-3 w-full">

                        <div class="kt-input w-full">
                            <i class="ki-filled ki-magnifier"></i>
                            <input placeholder="" type="text" value="Nike">
                            <span class="kt-badge kt-badge-outline -me-1.5">
                                ⌘ K
                            </span>
                        </div>

                        <button class="kt-dropdown-toggle kt-btn kt-btn-primary" data-kt-drawer-toggle="#drawers_shop_filter">
                            <i class="ki-filled ki-filter">
                            </i>
                            Filter
                        </button>

                    </div>

                    <!-- DIV do conteúdo da lista (BASE https://keenthemes.com/metronic/tailwind/demo10/store-client/product-details) -->
                    <div > <!-- Mexer nessa div futuramente (ou apagar) -->

                        <div class="grid grid-cols-1 gap-5"> <!-- Adicionar todos os card de empresas aqui -->
                            <div class="kt-card">
                                <div class="kt-card-content flex items-center flex-wrap justify-between p-4 gap-6">
                                    <!-- Lado esquerdo -->
                                    <div class="flex items-center gap-4">

                                        <div class="flex items-center justify-center bg-accent/50 h-[70px] w-[90px] rounded-lg">
                                            <img 
                                            alt="Produto"
                                            class="h-[70px] object-contain"
                                            src="/metronic/tailwind/dist/assets/media/store/client/600x600/11.png"
                                            >
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <span class="text-sm font-semibold text-mono leading-5">
                                            Cloud Shift Lightweight Runner Pro Edition
                                            </span>

                                            <div class="flex items-center flex-wrap gap-3">

                                            <span class="kt-badge kt-badge-warning kt-badge-sm rounded-full gap-1">
                                                <i class="ki-solid ki-star text-white -mt-0.5"></i>
                                                5.0
                                            </span>

                                            <span class="text-xs text-secondary-foreground uppercase">
                                                SKU:
                                                <span class="font-medium text-foreground">
                                                SH-001-BLK-42
                                                </span>
                                            </span>

                                            <span class="text-xs text-secondary-foreground">
                                                Marca:
                                                <span class="font-medium text-foreground">
                                                Nike
                                                </span>
                                            </span>

                                            <span class="text-xs text-secondary-foreground">
                                                Categoria:
                                                <span class="font-medium text-foreground">
                                                Sneakers
                                                </span>
                                            </span>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Lado direito -->
                                    <div class="flex items-center gap-3">

                                        <span class="text-sm font-semibold text-mono">
                                            R$ 99,00
                                        </span>

                                        <button class="kt-btn kt-btn-outline shrink-0">
                                            <i class="ki-filled ki-handcart"></i>
                                            Adicionar
                                        </button>

                                    </div>

                                </div>
                            </div> <!-- Fim do card do produto -->

                        </div>

                    </div>

                </div>
            </div>

        </main>
    </div>

</div>


<script src="<?= BASE_URL ?>/static/js/aside.js"></script>