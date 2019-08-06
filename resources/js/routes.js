import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';
import Home from './components/Home'; 
import About from './components/About'; 
import SiteStats from './components/SiteStats';
import Clients from './components/auth/Clients';
import CreateClients from './components/auth/CreateClients';
import UpdateClients from './components/auth/updateClients' 
let LoadersAndAnimations = () =>
    import(/* webpackChunkName: "loaders-and-animations.bundle" */ './components/LoadersAndAnimations');

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/Logo',
            component: Logo
        },

        {
            path: '/logo-symbol',
            component: LogoSymbol
        },

        {
            path: '/colors',
            component: Colors
        },

        {
            path: '/typography',
            component: Typography
        },

        {
            path: '/mascot',
            component: Mascot
        },

        {
            path: '/illustrations',
            component: Illustrations
        },

        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },

        {
            path: '/wallpapers',
            component: Wallpapers
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/site-stats',
            component: SiteStats
        },
        {
            path: '/update',
            component: UpdateClients
        },
        {
            path: '/CreateClients',
            component: CreateClients
        },
        {
            path: '/Clients',
            component: Clients
        },
        {
            path: '/',
            component: Home
        }

       
    ]
};
