<div class="flex grow">

    <?= $forms->asideI("sidebar","flex-col fixed z-20 hidden lg:flex items-stretch shrink-0 w-(--layout-has-sidebar)") ?>

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
                        
                    </div>
                </div>
            </div>  
        </div>

        <div class="flex flex-center justify-between shrink-0 ps-4 pe-3.5 mb-3.5" id="sidebar_footer">
            <!-- Footer -->
            <p>Footer</p>
        </div>

    <?= $forms->asideF() ?>

    <div class="flex flex-col grow kt-scrollable-y-auto lg:[--kt-scrollbar-width:auto] pt-5">
        <main class="grow" role="content">

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
                    <div >

                    </div>

                </div>
            </div>

        </main>
    </div>

</div>


<script src="<?= BASE_URL ?>/static/js/aside.js"></script>