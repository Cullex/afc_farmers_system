<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Bulawayo Hectrage</label>
                        <input type="text" v-model="bulawayoTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Bulawayo Province Figures</h6>
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
                    <tr v-for="bulawayoRecord in bulawayoRecords" :key="bulawayoRecord.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ bulawayoRecord.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ bulawayoRecord.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ bulawayoRecord.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{ bulawayoRecord.seasonHectrage }}
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
            bulawayoRecords: [],
            bulawayoTotal : {},
            auth: window.user,
        };
    },
    mounted() {
        //return bulawayo province figures from DB
        window.axios.get("/getBulawayoStats").then((response) =>
            (this.bulawayoRecords = response.data.body.bulawayoRecords));

        //return bulawayo total hectrage
        window.axios.get('/getBulawayoTotal').then((response) =>
            (this.bulawayoTotal = response.data.body.bulawayoTotal))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>

