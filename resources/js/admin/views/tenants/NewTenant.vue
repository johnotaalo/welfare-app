<template>
    <div>
        <!--begin::Toolbar-->
        <div class="d-flex flex-wrap flex-stack mb-6">
            <!--begin::Heading-->
            <h3 class="fw-bold my-2">New Tenant</h3>
            <!--end::Heading-->
        </div>
        <!--end::Toolbar-->

        <div class="d-flex flex-column container">
            <div class="justify-content-center">
                <FormulateForm>
                    <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Target Title</span>
                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify a target name for future usage and reference" data-bs-original-title="Specify a target name for future usage and reference" data-kt-initialized="1">
										<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i>
									</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title">
                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div></div>
                </FormulateForm>
            </div>
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
