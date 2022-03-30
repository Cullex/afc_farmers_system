<template>
    <div class="row">
        <div class="col-lg-10">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <i class="mdi mdi-account-multiple widget-icon"></i>
                    </div>
                    <router-link to="/dashboard/addIndividual" class="side-nav-link"  active-class="text-primary">
                        <i class="uil-comment-alt-verify"></i>
                        <span>Add Individual Record</span>
                    </router-link>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->

        <div class="col-lg-10">
            <div class="card widget-flat">
                <div class="card-body" >
                    <div class="float-right">
                        <i class="mdi mdi-home widget-icon"></i>
                    </div>
                    <router-link to="/dashboard/addCompany" class="side-nav-link"  active-class="text-primary">
                        <i class="uil-home-alt"></i>
                        <span>Add Company Record</span>
                    </router-link>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
        <div class="col-lg-10">
            <div class="min-h-165px card cta-box bg-primary text-white">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <h3 class="m-0 font-weight-normal cta-box-title"><b>
                                 </b> <br> AFC Farmers Registration Database</h3>
                            <p class="mt-2">Records Management Made Easy<br></p>
                        </div>
                        <img class="ml-3" src="/assets/images/email-campaign.svg" width="120" alt="Generic placeholder image">
                    </div>
                </div>
                <!-- end card-body -->
            </div>
        </div>
    </div> <!-- end row -->
</template>
<script>
export default {
};
</script>


