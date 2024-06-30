<template>
    <div class="col-md-6 col-xl-4" >
        <!--begin::Card-->
        <router-link :to="{name: 'tenants.view', params: {id: tenant.id}}" class="card border-hover-primary">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-9">
                <!--begin::Card Title-->
                <div class="card-title m-0">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px w-50px bg-light">
                        <!--                                <img src="admin/assets/media/networking.png" alt="image" class="p-3" />-->
                        <div class="symbol symbol-35px" data-bs-toggle="tooltip" :title="tenant.name">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">{{ tenant.name | getFirstLetter }}</span>
                        </div>
                    </div>
                    <!--end::Avatar-->
                </div>
                <!--end::Car Title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <span  :class="['badge fw-bold me-auto px-4 py-3', {'badge-light-success': tenant.plan === 'free'}]">{{ tenant.plan | toTitleCase }}</span>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end:: Card header-->
            <!--begin:: Card body-->
            <div class="card-body p-9">
                <!--begin::Name-->
                <div class="fs-3 fw-bold text-gray-900">{{ tenant.name }}</div>
                <!--end::Name-->
                <!--begin::Description-->
                <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7">{{ tenant.description | fillNull }}</p>
                <!--end::Description-->
                <!--begin::Info-->
                <div class="d-flex flex-wrap mb-5">
                    <!--begin::Due-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">{{ tenant.created_at | moment("MMMM DD, YYYY") }}</div>
                        <div class="fw-semibold text-gray-500">Date Created</div>
                    </div>
                    <!--end::Due-->
                    <!--begin::Budget-->
                    <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                        <div class="fs-6 text-gray-800 fw-bold">KSH0.00</div>
                        <div class="fw-semibold text-gray-500">Total Amount Collected</div>
                    </div>
                    <!--end::Budget-->
                </div>
                <!--end::Info-->

            </div>
            <!--end:: Card body-->
        </router-link>
        <!--end::Card-->
    </div>
</template>

<script>
export default {
    name: "TenantCard",
    props: {
        tenant: {type: Object, default: () => {}}
    }
}
</script>

<style scoped>

</style>
