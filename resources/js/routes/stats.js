import consolidatedStats from "../components/stats/consolidatedStats";
import consolidatedWinterStats from "../components/stats/consolidatedWinterStats";

const routes = [
    {
        path : '/stats/consolidatedStats',
        component: consolidatedStats
    },
    {
        path: '/stats/consolidatedWinterStats',
        component: consolidatedWinterStats
    }
];

export default routes;
