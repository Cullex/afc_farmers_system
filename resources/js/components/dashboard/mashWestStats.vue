<template>
    <div class="col-lg-12">
        <div style="height: 560px; overflow-y: auto" class="card" >
            <div class="">
                <div style="float: right">
                    <a v-if="auth.isSuperAdmin" target="_blank" href="/downloadExcel" class="btn btn-warning">Download Excel</a>
                    <div class="form-group">
                        <label>Total Mash West Hectrage</label>
                        <input type="text" v-model="mashWestTotal"  class="form-control form-control-sm" disabled>
                    </div>
                </div>
                <h6 class="text-muted px-3 py-2 text-uppercase">Mash West Province Figures</h6>
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
                    <tr v-for="mashWestStat in mashWestStats" :key="mashWestStat.id">
                        <td />
                        <td class="text-primary"></td>
                        <td>
                            {{ mashWestStat.id }}
                        </td>
                        <td class="font-weight-bolder">
                            {{ mashWestStat.name }}
                        </td>
                        <td>
                  <span class="badge badge-light p-2">
                    {{ mashWestStat.province}}
                  </span>
                        </td>
                        <td class="font-weight-bolder">
                            {{ mashWestStat.seasonHectrage }}
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
            mashWestStats: [],
            mashWestTotal : {},
            auth: window.user,
        };
    },
    mounted() {
        //return mashWest province figures from DB
        window.axios.get("/mashWestStats").then((response) =>
            (this.mashWestStats = response.data.body.mashWestStats));

        //return mashWest total hectrage
        window.axios.get('/mashWestTotal').then((response) =>
            (this.mashWestTotal = response.data.body.mashWestTotal))
            .catch((errors) =>{
                this.errors = errors.response.data.errors
            });
    },
};
</script>

