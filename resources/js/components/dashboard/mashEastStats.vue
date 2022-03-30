<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Mash East Hectrage</label>
                        <input type="text" v-model="mashEastTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Mash East Province Figures</h6>
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
                    <tr v-for="mashEastStat in mashEastStats" :key="mashEastStat.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ mashEastStat.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ mashEastStat.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ mashEastStat.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{ mashEastStat.seasonHectrage }}
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
            mashEastStats: [],
            mashEastTotal : {},
            auth: window.user,
        };
    },
    mounted() {
        //return mashEastStat province figures from DB
        window.axios.get("/mashEastStats").then((response) =>
            (this.mashEastStats = response.data.body.mashEastStats));

        //return mashEastStat total hectrage
        window.axios.get('/mashEastTotal').then((response) =>
            (this.mashEastTotal = response.data.body.mashEastTotal))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>

