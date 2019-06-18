import Screen1 from './components/Screen1'
import Screen2 from './components/Screen2'
import Screen3 from './components/Screen3'
import Screen4 from './components/Screen4'

export default [
    {
        name: 'default',
        path: '/',
        component: Screen1
    },
    {
        path: '/alcohol',
        component: Screen2
    },
    {
        path: '/soft',
        component: Screen3
    },
    {
        path: '/thank-you',
        component: Screen4
    }
]