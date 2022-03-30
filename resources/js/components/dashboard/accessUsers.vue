<template>
    <page-index url="/accessUsers" prefix="users" name="Registered Users List">
        <template slot-scope="data" slot="filters">

        </template>
        <template slot="sort-fields">
            <option value="created_at">Created</option>
            <option value="updated_at">Updated</option>
        </template>
        <template slot="table-header">
            <th></th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Access Level</th>
            <th>Email</th>
            <th></th>
            <th class="text-center"></th>
        </template>
        <template slot="table-row" slot-scope="data">
            <td>
                <span class="text-primary">#{{ data.row.id }}</span>
            </td>
            <td>{{ data.row.name }}</td>
            <td>{{ data.row.last_name }}</td>
            <td>{{ data.row.accessLevel }}</td>
            <td>{{ data.row.email }}</td>
            <td>
                <router-link :to="`/dashboard/getUserLevel/${data.row.id}`" class="action-icon text-primary">
                    <i class="mdi mdi-eye mdi-24px"/>
                </router-link>
            </td>
        </template>
    </page-index>
</template>
<script>
import PageIndex from "../core/page-index";
export default {
    name: "accessUsers",
    components : {PageIndex},
    data (){
        return {
            user: window.user,
        }
    },
}
</script>
