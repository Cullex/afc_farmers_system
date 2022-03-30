<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
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
                        <th>Surname</th>
                        <th>National ID</th>
                        <th>Province</th>
                        <th>District</th>
                        <th />
                        <th />
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="record in records" :key="record.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ record.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ record.name }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ record.surname }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ record.NationalId}}</span
                  >
                        </td>
                        <td>
                            <span class=""> {{ record.province }}</span>
                        </td>
                        <td>
                  <span class="text-primary font-weight-bolder">
                     {{ record.district }}</span
                  >
                        </td>
                        <td>
                            <router-link
                                :to="`/dashboard/viewIndividual/${record.id}`"
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
    </div>

</template>
<script>
export default {
    data() {
        return {
            records: [],
            auth: window.user,
        };
    },
    methods:{
            totalHectrage(){

            }
    },
    mounted() {
        //return records from DB
        window.axios.get("/allIndividuals").then((response) =>
            (this.records = response.data.body.records.data));
    },
};
</script>

