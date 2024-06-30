<template>
    <div>
        <loading
            :active.async="authLoading > 0"
            :can-cancel="loader.canCancel"
            :is-full-page="loader.fullScreen"
            :opacity="loader.opacity"
            color="blue">
            <template v-slot:default>
                <lottie-vue-player src="/common/loader.json"></lottie-vue-player>
            </template>
        </loading>
        <!--begin::Header-->
        <div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
            <!--begin::Header container-->
            <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                <!--begin::Header primary-->
                <div class="d-flex align-items-center justify-content-between flex-row-fluid" id="kt_app_header_wrapper">
                    <!--begin::Header logo-->
                    <div class="app-header-logo d-flex align-items-center">
                        <!--begin::Mobile toggle-->
                        <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px ms-n3 me-2 d-flex d-lg-none" id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-outline ki-abstract-14 fs-1"></i>
                        </div>
                        <!--end::Mobile toggle-->
                        <!--begin::Logo image-->
                        <a href="#" class="me-5 me-lg-9">
                            <img alt="Logo" src="/admin/assets/media/logos/demo51.svg" class="h-25px h-sm-30px" />
                        </a>
                        <!--end::Logo image-->
                        <!--begin::Section-->
                        <div class="d-none d-md-inline">
                            <div class="fw-bold fs-3 text-gray-900">{{ greetingMessage }}, <span v-if="isUserRetrieved">{{ user.name }}</span> <!-- Get the name logged in --></div>
                            <div class="fw-semibold text-gray-500">Manage all the tenants on Kistawi</div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Header logo-->
                    <!--begin::Menu wrapper-->
                    <div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
                        <!--begin::Menu holder-->
                        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-600 menu-state-gray-900 menu-arrow-gray-500 fw-semibold fw-semibold fs-6 align-items-stretch my-5 my-lg-0 px-2 px-lg-0" id="#kt_app_header_menu" data-kt-menu="true">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-250,0" class="menu-item" :class="{'here': $route.name === 'dashboard'}">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span><router-link class="menu-title" :to="{name: 'dashboard'}">Dashboard</router-link> </span>
                                    </span>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-400,0" class="menu-item" :class="{'here': $route.name === 'tenants.index'}">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span><router-link class="menu-title" :to="{name:'tenants.index'}">Tenants</router-link></span>
                                    </span>
                                    <!--end:Menu link-->

                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-400,0" class="menu-item" :class="{'here': $route.name === 'users'}">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span><router-link class="menu-title" :to="{name:'users'}">Users</router-link></span>
                                    </span>
                                    <!--end:Menu link-->

                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="-400,0" class="menu-item" :class="{'here': $route.name === 'users'}">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span><router-link class="menu-title" :to="{name:'users'}">Admin</router-link></span>
                                    </span>
                                    <!--end:Menu link-->

                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu holder-->
                    </div>
                    <!--end::Menu wrapper-->
                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0">
                        <!--begin::User menu-->
                        <div class="app-navbar-item me-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="btn btn-icon btn-icon-gray-600 border border-dashed border-gray-300 w-35px h-35px w-md-40px h-md-40px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <i class="ki-outline ki-user fs-3"></i>
                            </div>
                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img alt="Logo" src="/admin/assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
                                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="account/overview.html" class="menu-link px-5">My Profile</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="apps/projects/list.html" class="menu-link px-5">
                                        <span class="menu-text">My Projects</span>
                                        <span class="menu-badge">
													<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
												</span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-title">My Subscription</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/referrals.html" class="menu-link px-5">Referrals</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/billing.html" class="menu-link px-5">Billing</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/statements.html" class="menu-link px-5">Payments</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                                <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
														<i class="ki-outline ki-information-5 fs-5"></i>
													</span></a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content px-3">
                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                    <span class="form-check-label text-muted fs-7">Notifications</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="account/statements.html" class="menu-link px-5">My Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Mode
												<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
													<i class="ki-outline ki-night-day theme-light-show fs-2"></i>
													<i class="ki-outline ki-moon theme-dark-show fs-2"></i>
												</span></span>
                                    </a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-night-day fs-2"></i>
														</span>
                                                <span class="menu-title">Light</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-moon fs-2"></i>
														</span>
                                                <span class="menu-title">Dark</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-outline ki-screen fs-2"></i>
														</span>
                                                <span class="menu-title">System</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Language
												<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
												<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
                                    </a>
                                    <!--begin::Menu sub-->
                                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
													</span>English</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
													</span>Spanish</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
													</span>German</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
													</span>Japanese</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
													</span>French</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu sub-->
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5 my-1">
                                    <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header primary-->
            </div>
            <!--end::Header container-->
        </div>
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Wrapper container-->
            <div class="app-container container-fluid d-flex flex-grow-1">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
<!--                        <menu-toolbar></menu-toolbar>-->
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content">
                            <router-view></router-view>
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->
                    <!--begin::Footer-->
<!--                    <div id="kt_app_footer" class="app-footer d-flex flex-column flex-md-row flex-center flex-md-stack py-3">-->
<!--                        &lt;!&ndash;begin::Copyright&ndash;&gt;-->
<!--                        <div class="text-gray-900 order-2 order-md-1">-->
<!--                            <span class="text-muted fw-semibold me-1">2024&copy;</span>-->
<!--                            <a href="#" target="_blank" class="text-gray-800 text-hover-primary">Kistawi</a>-->
<!--                        </div>-->
<!--                        &lt;!&ndash;end::Copyright&ndash;&gt;-->
<!--                        &lt;!&ndash;begin::Menu&ndash;&gt;-->
<!--                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">-->
<!--                            <li class="menu-item">-->
<!--                                <a href="#" target="_blank" class="menu-link px-2">Support</a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                        &lt;!&ndash;end::Menu&ndash;&gt;-->
<!--                    </div>-->
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper container-->
        </div>
        <!--end::Wrapper-->
    </div>
</template>

<script>
import MenuToolbar from "../components/MenuToolbar.vue";
import {mapActions, mapState} from "vuex";

export default {
    name: "App",
    components: {MenuToolbar},
    data(){
        return {
            loader: {
                fullScreen: true,
                canCancel: false,
                opacity: 1,
            }
        }
    },
    created() {
        this.fetchUser()
    },
    mounted(){
    },
    computed: {
        ...mapState('auth', ['user', 'isUserRetrieved', 'authLoading']),
            isCurrentRoute(){
            return this.$route.name
        },
        greetingMessage(){
            const hour = new Date().getHours()
            console.log(hour)
            if (hour < 12) {
                return "Good Morning";
            } else if (hour < 18) {
                return "Good Afternoon";
            } else {
                return "Good Evening";
            }
        }
    },
    methods: {
        ...mapActions('auth', ['fetchUser'])
    }
}
</script>

<style scoped>

</style>
