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
import Achievements from './components/Achievements';
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
            path: '/home',
            component: Home
        },
        {
            path: '/achievements',
            component: Achievements
        },
       
        {
            path: '/main',
            
        }
       
    ]
};
