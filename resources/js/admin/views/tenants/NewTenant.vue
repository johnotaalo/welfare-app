<template>
    <div>
        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <!--begin::Heading-->
            <h3 class="fw-bold my-2">New Tenant</h3>
            <!--end::Heading-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Stepper-->
        <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
            <!--begin::Nav-->
            <div class="stepper-nav justify-content-center py-2">
                <!--begin::Step 1-->
                <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Campaign Details</h3>
                </div>
                <!--end::Step 1-->
                <!--begin::Step 2-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Creative Uploads</h3>
                </div>
                <!--end::Step 2-->
                <!--begin::Step 3-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Audiences</h3>
                </div>
                <!--end::Step 3-->
                <!--begin::Step 4-->
                <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Budget Estimates</h3>
                </div>
                <!--end::Step 4-->
                <!--begin::Step 5-->
                <div class="stepper-item" data-kt-stepper-element="nav">
                    <h3 class="stepper-title">Completed</h3>
                </div>
                <!--end::Step 5-->
            </div>
            <!--end::Nav-->

        </div>
    </div>
</template>

<script>
export default {
    name: "NewTenant"
}
</script>

<style scoped>

</style>
