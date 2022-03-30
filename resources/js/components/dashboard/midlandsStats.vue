<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Midlands Hectrage</label>
                        <input type="text" v-model="midlandsTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Midlands Province Figures</h6>
            </div>
            <div class="table-responsive font-12">
                <table class="table table-centered">
                    <thead class="thead-light">
                    <tr>
                        <th />
                        <th />
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Province</th>
                        <th>Hectrage</th>
                        <th />
                        <th />
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="midlandsRecord in midlandsRecords" :key="midlandsRecord.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ midlandsRecord.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ midlandsRecord.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ midlandsRecord.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{ midlandsRecord.seasonHectrage }}
                        </td>
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
            midlandsRecords: [],
            midlandsTotal  : {},
            auth: window.user,
        };
    },
    mounted() {
        //return harare province figures from DB
        window.axios.get("/getMidlandsStats").then((response) =>
            (this.midlandsRecords = response.data.body.midlandsRecords));

        //return midlands total hectrage
        window.axios.get('/midlandsTotal').then((response) =>
            (this.midlandsTotal  = response.data.body.midlandsTotal ))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>


