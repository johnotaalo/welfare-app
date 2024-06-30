<template>
    <div>
        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <!--begin::Heading-->
            <h3 class="fw-bold my-2">Tenants
                <span class="fs-6 text-gray-500 fw-semibold ms-1">Active</span></h3> <!-- Change to total number of clients -->
            <!--end::Heading-->
            <!--begin::Actions-->
            <div class="d-flex flex-wrap my-2">
                <div class="me-4">
                    <!--begin::Select-->
                    <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm form-select-solid w-125px">
                        <option value="Active" selected="selected">Active Tenants</option>
                        <option value="Approved">Inactive Tenants</option>
                        <option value="All Tenants">All Tenants</option>
                    </select>
                    <!--end::Select-->
                </div>
                <router-link :to="{name: 'tenants.create'}" class="btn btn-primary btn-sm">New Tenant</router-link>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar-->
        <!-- Begin the pages -->
        <!--begin::Row-->
        <div class="row g-6 g-xl-9" v-if="tenants.data.length > 0">
            <tenant-card :tenant="tenant" v-for="tenant in tenants.data" :key="tenant.name"></tenant-card>
        </div>
    </div>
</template>

<script>
import TenantCard from "./components/TenantCard.vue";

export default {
    name: "TenantIndex",
    components: {TenantCard},
    data(){
        return {
            tenants: {
                data: []
            }
        }
    },
    mounted(){
        axios.get("/api/tenants")
            .then(res => {
                this.tenants = res.data
            })
    }
}
</script>
<style scoped>

</style>
