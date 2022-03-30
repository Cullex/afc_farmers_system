<template>
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-5">
                <div class="min-h-135px card cta-box bg-primary text-white">
                    <div class="card-body">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <h3 class="m-0 font-weight-normal cta-box-title">Welcome back , <b> {{ user.name }}
                                     </b> <br> AFC Farmers Registration Database</h3>
                                <p class="mt-2">Records Management Made Easy<br></p>
                            </div>
                            <img class="ml-3" src="/assets/images/email-campaign.svg" width="120" alt="Generic placeholder image">
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
            </div>




            <div class="col-lg-7">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <router-link to="/dashboard/addIndividual" class="card">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center px-3 py-1">
                                            <div class="flex-fill">
                                                <h5 class="my-2 py-1  text-center">Add Record</h5>
                                            </div>
                                            <div class="">
                                                <i class="font-28   uil-comment-alt-plus text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </router-link>
                            </div>
                            <div class="col-md-6">
                                <router-link to="/dashboard/attachCrop" class="card">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center px-3 py-1">
                                            <div class="flex-fill">
                                                <h5 class="my-2 py-1 text-center">Attach Crop/Season</h5>
                                            </div>
                                            <div class="">
                                                <i class="font-28   uil-trees  text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </router-link>
                            </div>
                            <div class="col-md-6 ">
                                <router-link to="/dashboard/systemReports" class="card">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center px-3 py-1">
                                            <div class="flex-fill">
                                                <h5 class="my-2 py-1 text-center">System Reports </h5>
                                            </div>
                                            <div class="">
                                                <i class="font-28   uil-rss  text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </router-link>
                            </div>
                            <div class="col-md-6">
                                <router-link to="/dashboard/accessUsers" class="card">
                                    <div class="card-body py-0">
                                        <div class="d-flex align-items-center px-3 py-1">
                                            <div class="flex-fill">
                                                <h5 class="my-2 py-1 text-center">Roles Management </h5>
                                            </div>
                                            <div class="">
                                                <i class="font-28   uil-book-reader  text-primary"></i>
                                            </div>
                                        </div>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                    </div>
            </div>

<!--            <div class="col-lg-12">
                <div style="height: 560px; overflow-y: auto" class="card" >
                    <div class="">
                        <div style="float: right">
                            <input type="text" v-model="keywords">
                            <ul v-if="results.length > 0">
                                <li v-for="result in results" :key="result.id" v-text="result.name"></li>
                            </ul>
                            <a v-if="" target="_blank" href="/downloadIndividualRecords" class="btn btn-warning">Download List(Excel)</a>
                        </div>
                        <h6 class="text-muted px-3 py-2 text-uppercase">Individual Records List</h6>
                    </div>
                    <div class="table-responsive font-12">
                        <table class="table table-centered">
                            <thead class="thead-light">
                            <tr>
                                <th />
                                <th />
                                <th>#</th>
                                <th>Name</th>
                                <th>National ID</th>
                                <th>Province</th>
                                <th>District</th>
                                <th />
                                <th />
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="individualRecord in individualRecords" :key="individualRecord.id">
                                <td />
                                <td class="text-primary"></td>
                                <td>
                                    {{ individualRecord.id }}
                                </td>
                                <td class="font-weight-bolder">
                                    {{ individualRecord.name }}
                                </td>

                                <td>
                  <span class="badge badge-light p-2">
                    {{ individualRecord.NationalId}}</span
                  >
                                </td>
                                <td>
                                    <span class=""> {{ individualRecord.province }}</span>
                                </td>
                                <td>
                  <span class="text-primary font-weight-bolder">
                     {{ individualRecord.district }}</span
                  >
                                </td>
                                <td>
                                    <router-link
                                        :to="`/dashboard/viewIndividual/${individualRecord.id}`"
                                        class="action-icon text-muted"
                                    >
                                        <i class="mdi mdi-eye mdi-24px" />
                                    </router-link>
                                </td>
                                <td />
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>-->

            <page-index url="/getIndividualRecords" prefix="records" name="Saved Records">
                <template slot="actions">
                    <a v-if="" target="_blank" href="/downloadIndividualRecords" class="btn btn-warning">Download List(Excel)</a>
                </template>
                <template slot-scope="data" slot="filters">

                </template>
                <template slot="sort-fields">
                    <option value="created_at">Created</option>
                    <option value="updated_at">Updated</option>
                </template>
                <template slot="table-header">
                    <th></th>
                    <th>Name</th>
                    <th>National ID</th>
                    <th>Province</th>
                    <th>District</th>
                    <th></th>
                    <th class="text-center"></th>
                </template>
                <template slot="table-row" slot-scope="data">
                    <td>
                        <span class="text-primary">#{{ data.row.id }}</span>
                    </td>
                    <td>{{ data.row.name }}</td>
                    <td>{{ data.row.NationalId }}</td>
                    <td>{{ data.row.province }}</td>
                    <td>{{ data.row.district }}</td>
                    <td>
                        <router-link :to="`/dashboard/viewIndividual/${data.row.id}`" class="action-icon text-primary">
                            <i class="mdi mdi-eye mdi-24px"/>
                        </router-link>
                    </td>
                </template>
            </page-index>
        </div>
    </div>
</template>
<script>
import PageIndex from "../core/page-index";
    export default {
        name: "dashboard",
        components : {PageIndex},
        data (){
            return {
                user: window.user,
            }
        },
    }
</script>
