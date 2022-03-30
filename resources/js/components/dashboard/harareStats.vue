<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Harare Hectrage</label>
                        <input type="text" v-model="harareTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Harare Province Figures</h6>
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
                    <tr v-for="harareRecord in harareRecords" :key="harareRecord.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ harareRecord.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ harareRecord.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ harareRecord.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{ harareRecord.seasonHectrage }}
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
            harareRecords: [],
            harareTotal : {},
            auth: window.user,
        };
    },
    mounted() {
        //return harare province figures from DB
        window.axios.get("/getHarareStats").then((response) =>
            (this.harareRecords = response.data.body.harareRecords));

        //return harare total hectrage
        window.axios.get('/harareTotal').then((response) =>
            (this.harareTotal = response.data.body.harareTotal))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>


